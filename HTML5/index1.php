<!DOCTYPE html>
<html>
<head>
    <title>数据库显示</title>
</head>
<body>
<h1>10 most newest Android-related questions posted in the past week</h1>
<?php
    //引用conn.php文件
        require 'conn.php';
        //查询数据表中的数据
         $sql = mysql_query("select * from newest");
         $datarow = mysql_num_rows($sql); //长度
            
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $title = $sql_arr['title'];
                echo "<p>$title</p>";
                $url = "https://stackoverflow.com".$sql_arr['url'];
                echo "<a href=$url>$title</a><br />";
            }
    ?>

<h1>10 most votes Android-related questions posted in the past week</h1>
<?php
    //引用conn.php文件
        require 'conn.php';
        //查询数据表中的数据
         $sql = mysql_query("select * from votes");
         $datarow = mysql_num_rows($sql); //长度
            
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $title = $sql_arr['title'];
                $url = "https://stackoverflow.com".$sql_arr['url'];
                echo "<a href=$url>$title</a><br />";
            }
    ?>
</body>
</html>