<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Hostings helper
 */
class NavigationSelectorHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function __construct(View $view, $config = [])
    {
        parent::__construct($view, $config);
    }

    /*
     * Selected Main Navigation
     *
     * @param string|null $selected Navigation.
     * @return array of selected navagation with selected
     * 
     */
    public function selectedMainNavigation($selected) {
        $navigation = array(
            "dashboard" => "",
            "pages" => "",
            "groups"  => "",
            "users"   => "",  
            "slides" => "",          
            "system_settings" => "",
            "business" => "",
            "my_profile" => "",
            "my_favorite" => "",
            "my_saved_search" => "",
            "my_properties" => "",
            "my_package" => "",
            "my_submission" => "",
            "my_business" => ""

        );
        $navigation[$selected] = "active";

        return $navigation;
    }
}
