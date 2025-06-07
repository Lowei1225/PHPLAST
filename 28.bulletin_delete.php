<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) { // 未登入，跳轉登入頁
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'";
        
        // 執行刪除
        if (!mysqli_query($conn, $sql)) {
            echo "佈告刪除錯誤";
        } else {
            echo "佈告刪除成功";
        }

        // 刪除完成後3秒跳轉回列表
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>

