<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();    // 啟用 session

    if (!$_SESSION["id"]) { // 檢查是否登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉登入頁
    }
    else {
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 更新語句，將指定 id 的密碼欄位更新為 POST 傳來的密碼
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")) {
            echo "修改錯誤"; // 若 SQL 執行失敗，顯示錯誤
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        } else {
            echo "修改成功，三秒鐘後回到網頁"; // 成功提示
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }
?>

