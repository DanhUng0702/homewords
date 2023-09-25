<?php 
#mảng dữ liệu user
/*tt user 
*họ và tên =>> username 
*mật khẩu =>> password
*email = > email
*id=> id
*/
$listUsers = array(
    1 => array(
        "id" => 1,
        "fullName" => "Ung Nho Danh",
        "username" => "UngnhoDanh",
        "password" => md5("danhung123")
    ),
    2 => array(
        "id" => 2,
        "fullName" => "Ung Nho Danh2",
        "username" => "UngnhoDanh2",
        "password" => md5("danhung1232")
    ),
    3 => array(
        "id" => 3,
        "fullName" => "Ung Nho Danh3",
        "username" => "UngnhoDanh",
        "password" => md5("danhung1233")
    ),
);
// echo $listUsers;
?>