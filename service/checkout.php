<?php
require_once('omise-php/lib/Omise.php');
//require_once dirname(__FILE__).'./omise-php/lib/Omise.php';
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_59iaxcc7zsr77n4nbkb');
define('OMISE_SECRET_KEY', 'skey_test_59iaxcc8idh2bqub4ia');
$x = $_POST["amount"];
$totalamount = $x*100;
//echo $totalamount.'=='.$_POST["omise_token"].$_POST["data"];
//echo $totalamount;
$charge = OmiseCharge::create(array(
  'amount' => $totalamount,
  'currency' => 'thb',
  'card' => $_POST["omise_token"]
));

if ($charge['status'] == 'successful') {
  echo 'Success';
} else {
  echo 'Fail';
}

print('<pre>');
print_r($charge);
print('</pre>');
?>