<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();    // 啟用 session

    if (!$_SESSION["id"]) { // 若尚未登入（session 中沒有 id）
        echo "please login first"; // 提示使用者需先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉登入頁面
    }
    else {
        // 已登入，顯示新增佈告的 HTML 表單
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php> <!-- 表單送出到 23.bulletin_add.php -->

                    標    題：<input type=text name=title><br> <!-- 佈告標題輸入欄位 -->

                    內    容：<br>
                    <textarea name=content rows=20 cols=20></textarea><br> <!-- 佈告內容輸入欄位 -->

                    佈告類型： <!-- 佈告分類，使用 radio 按鈕 -->
                        <input type=radio name=type value=1>系上公告 
                        <input type=radio name=type value=2>獲獎資訊
                        <input type=radio name=type value=3>徵才資訊<br>

                    發布時間：<input type=date name=time><p></p> <!-- 發佈日期選擇 -->

                    <input type=submit value=新增佈告> <!-- 送出表單 -->
                    <input type=reset value=清除> <!-- 重設表單 -->
                </form>
            </body>
        </html>
        ";
    }
?>

