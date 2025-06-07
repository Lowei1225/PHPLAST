<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();    // 啟用 session

    if (!$_SESSION["id"]) { // 檢查使用者是否已登入
        echo "請登入帳號"; // 尚未登入時的提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後導向登入頁面
    }
    else{   
        // 已登入，連接遠端 MySQL 資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 取得 GET 傳來的 id 並組成刪除 SQL 指令
        $sql = "delete from user where id='{$_GET["id"]}'";

        // 若 SQL 執行失敗，顯示錯誤訊息；成功則提示刪除成功
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤";
        } else {
            echo "使用者刪除成功";
        }

        // 無論成功與否，3 秒後跳轉回 user 管理頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>

