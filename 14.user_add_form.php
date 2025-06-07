<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); // 關閉錯誤報告，避免顯示錯誤訊息
    session_start();    // 啟動 session 功能
    if (!$_SESSION["id"]) { // 如果沒有登入（session 中沒有 id）
        echo "請登入帳號"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後自動跳轉到登入頁面
    }
    else{               // 如果已登入，顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post> <!-- 表單送出到 15.user_add.php -->
                帳號：<input type=text name=id><br> <!-- 使用者輸入帳號 -->
                密碼：<input type=text name=pwd><p></p> <!-- 使用者輸入密碼 -->
                <input type=submit value=新增> <input type=reset value=清除> <!-- 送出與重設按鈕 -->
            </form>
        ";
    }
?>
    </body>
</html>
