

<?php
$finans = json_decode(file_get_contents("https://finans.truncgil.com/today.json"),true);
print_r($finans);
?>

