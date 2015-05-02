<?php
$r = null;

foreach(glob('../images/bg/*'.'*') as $filename){
    $r .= basename($filename) . ",";
}


$r = substr($r, 0, strlen($r) -1);
echo $r;