<?php
    //连接想要连接的数据库，localhost是本地服务器，root为数据库的账号，我的密码为0所以是空
    $con = mysql_connect("localhost","root","");

    if(!$con){
        die(mysql_error());
    }
    //连接数据库test
    mysql_select_db("test",$con);
?>