<?php
$mytext = "google.com, pub-2724345277976400, DIRECT, f08c47fec0942fa0";
file_put_contents('app-ads.txt', $mytext);
header("Content-Type: text/plain");
header("Location: https://rtdigitaldesigns.github.io/app-ads.txt");
?>