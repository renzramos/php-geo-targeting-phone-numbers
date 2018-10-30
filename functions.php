<?php
// require autoload
require_once('vendor/autoload.php');
require_once('includes/phone.php');

// geo ip
define('ENVIRONMENT ', 'production' );
$ip_adress = (ENVIRONMENT == 'development') ? DEFAULT_IP : $_SERVER['REMOTE_ADDR'];
$gi = geoip_open(dirname(__FILE__) . '/GeoIP.dat', GEOIP_STANDARD );
define('COUNTRY_NAME', geoip_country_name_by_addr($gi, $ip_adress));

$country_code = strtolower(geoip_country_code_by_addr($gi, $ip_adress));
define('COUNTRY_CODE_ORIGINAL', $country_code );

$eu_countries = array('il','eu','be','bg','cz','dk','de','ee','ie','el','es','fr','hr','it','cy','lv','lt','lu','hu','mt','nl','at','pl','pt','ro','si','sk','fi','se');
if (in_array($country_code,$eu_countries)){
    $country_code = 'eu';
}  
// define('COUNTRY_CODE', $country_code );
define('COUNTRY_CODE', $country_code );

// define('COUNTRY_CODE', strtolower(geoip_country_code_by_addr($gi, $ip_adress)) );
define('IP_ADDRESS', $ip_adress );
define('CURRENT_TIME', time() );
define('USER_AGENT', $_SERVER['HTTP_USER_AGENT'] );
?>