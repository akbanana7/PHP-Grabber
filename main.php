<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
mail("ake05@tsatstudent.org.uk","Found Info PHPRAT V0.01",$browser)
?>