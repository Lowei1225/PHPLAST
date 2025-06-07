<?php

error_reporting(0); // 關閉錯誤顯示，避免錯誤訊息暴露給使用者
session_start(); // 啟動 session 機制

if (!$_SESSION["id"]) { // 如果 session 中沒有 id，表示尚未登入
    echo "請登入帳號"; // 顯示提示訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉回登入頁面
}
else{    
   // 連接 MySQL 資料庫（使用 db4free.net 遠端服務）
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 建立 SQL 指令，從表單接收帳號與密碼並插入資料表 user 中
   $sql = "insert into user(id, pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";

   // 若 SQL 執行失敗，顯示錯誤訊息
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     // 若新增成功，顯示成功訊息並在三秒後跳轉到 user 管理頁
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
