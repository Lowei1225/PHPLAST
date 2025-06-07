<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0); // 關閉錯誤顯示
    session_start();    // 啟動 session

    if (!$_SESSION["id"]) { // 如果尚未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉登入頁
    }
    else {   
        // 已登入，連線到資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 根據傳入的 id 從資料庫撈出對應使用者資料
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row = mysqli_fetch_array($result); // 取得該筆資料

        // 顯示表單，帳號為唯讀（顯示用），密碼可修改
        echo "
        <form method=post action=20.user_edit.php> <!-- 表單送出到 20.user_edit.php -->
            <input type=hidden name=id value={$row['id']}> <!-- 將帳號藏在 hidden 欄位中 -->
            帳號：{$row['id']}<br> <!-- 顯示帳號（不可編輯） -->
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> <!-- 可修改密碼 -->
            <input type=submit value=修改> <!-- 送出按鈕 -->
        </form>
        ";
    }
    ?>
    </body>
</html>

