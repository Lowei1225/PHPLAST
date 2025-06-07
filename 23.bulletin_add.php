<?php
    error_reporting(0); // 關閉錯誤訊息
    session_start();    // 啟動 session

    if (!$_SESSION["id"]) { // 尚未登入則導向登入頁
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 已登入，建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 SQL 字串
        $sql = "insert into bulletin(title, content, type, time) 
                values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 執行 SQL 語句
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤"; // 執行失敗時顯示
        } else {
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>

