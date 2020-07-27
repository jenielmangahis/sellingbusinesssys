<?php
// A wrapper for TheLorry API

namespace Tools;

class TheLorry
{
	const BOOKING_URL = 'https://api.thelorry.com/client/ranta/booking/create';
	const CONFIRM_BOOKING_URL = 'https://api.thelorry.com/client/ranta/booking/confirm';

	protected $api_key;	
	protected $url;
	protected $use_ssl = true;

	public function __construct()
	{
	
	}
	
	protected function curlRequest($url, $query_data)
	{
		$ch = curl_init( $url );
		$payload = json_encode( $query_data );		
		//curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );		
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );		

		$response = curl_exec($ch);

		curl_close($ch);		
		return json_decode($response, true);
	}

	public function createUpdateBooking($query_data)
	{
		return $this->curlRequest(self::BOOKING_URL, $query_data);
	}

	public function confirmBooking($query_data)
	{
		return $this->curlRequest(self::CONFIRM_BOOKING_URL, $query_data);
	}
}
?>