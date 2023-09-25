<?php 
require "include/header.php"
?>
<?php 
$card = !empty($_GET['card'])?$_GET['card']:'header';
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
$path = "modules/{$card}/{$mod}/{$act}.php";
// echo $path;
if(file_exists($path)){
    require $path;
}else(
    require 'include/404.php'
);
// echo '123';
?>
<?php 
require "include/footer.php"
?>