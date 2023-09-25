<?php
function get_header($version = '')
{
if(!empty($version)){
    $path_header = "include/header-{$version}.php";
}else{
    // echo '123';
    $path_header = "include/header.php";}
    if (file_exists($path_header))
        require $path_header;
    else {
        echo "không tồn tại đường dẫn";
    }
}
function get_footer()
{
    $path_footer = "include/footer.php";
    if (file_exists($path_footer))
        require $path_footer;
    else {
        echo "không tồn tại đường dẫn";
    }
}
function get_sidebar()
{
    $path_sidebar = "include/sidebar.php";
    if (file_exists($path_sidebar))
        require $path_sidebar;
    else {
        echo "không tồn tại đường dẫn";
    }
}
