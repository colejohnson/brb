<?php
if (isset($_SERVER['PATH_INFO'])) {
    $path = trim($_SERVER['PATH_INFO'], '/');
} elseif (isset($_SERVER['ORIG_PATH_INFO'])) {
    $path = trim(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['ORIG_PATH_INFO']), '/');
} else { $path = ''; }


echo 'var path=" '.$path.' " ';

include('index.html')

?>
