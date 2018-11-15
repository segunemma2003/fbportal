<?php
 $target= '/home/blunorth/ighubfacebook3/storage';
$shortcut = '/home/fbportal.ighub.com.ng/storage/app/public';
if(symlink($target,$shortcut)){
    echo 'it is linked';
}else{
    echo 'an error occured';
}
// ln -sfn /AnotherAppName/storage/app/public/ /AnotherAppName/storage

?>