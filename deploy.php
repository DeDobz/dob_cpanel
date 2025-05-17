<?php
$path = '/home/u1737187/testing_dob'; // ganti path ke folder Git kamu
$cmd = "cd $path && git pull origin development 2>&1"; // sesuaikan dengan nama branch
$output = shell_exec($cmd);
echo "<pre>$output</pre>";
?>
