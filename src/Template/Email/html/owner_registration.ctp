<div style="background-color:#f7f7f7;color:#565a5c;min-height:100%;width:100% !important;padding:25px;padding:20px;font-size:15px;font-family:'Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif;">
	<div style="margin:0 auto;background-color:#ffffff;display:block;max-width:600px;padding:0;">
		<img src="http://nixstage.com/ranta/webroot/images/logo.png" style="width:200px;">
		<hr />
		<Br />
		<div style="margin-bottom:91px;margin-left:15px;">
			<p>Hi <b><?php echo $owner['firstname']; ?></b>,</p> 
			<p>Below are your login details</p>
			<table border="0">
				<tr>
					<td>Username</td>
					<td>: <?php echo $owner['username']; ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <?php echo $owner['password']; ?></td>
				</tr>	
			</table>
			<br />
			<p>Thank you and have a great day!</p>
		</div>
		<footer style="margin-top:10px;background-color:#2E2E2E;margin-top:10px;padding:6px;">
		    <div class="container-fluid" style="display:block;margin:0 auto;max-width:100%;">
		        <ul class="list-inline list-unstyled" style="list-style:outside none none;margin-left:-5px;padding-left:0;">		          
		            <?php $home_url = $this->Url->build("/",'true'); $login_url = $this->Url->build("/login",'true');  ?>
		            <li style="display:inline-block;padding-left:5px;padding-right:5px;"><a href="<?php echo $home_url; ?>" style="color:#ffffff;font-size:13px;font-family:sans-serif;line-height:1.42857;">Ranta</a></li>		          
		            <li style="display:inline-block;padding-left:5px;padding-right:5px;"><a href="<?php echo $login_url; ?>" style="color:#ffffff;font-size:13px;font-family:sans-serif;line-height:1.42857;">Login</a></li>		          
		        </ul>        
		    </div>
		</footer>
	</div>
</div>