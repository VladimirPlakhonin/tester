<?php

$head = file_get_contents('head.txt');
$footer = file_get_contents('footer.txt');
echo $head;

if($_GET['page']==''){
echo file_get_contents('home.txt');
}elseif($_GET['page']=='about'){
echo file_get_contents('about.txt');
}elseif($_GET['page']=='contact'){
echo file_get_contents('contact.txt');
}


echo $footer;
?>