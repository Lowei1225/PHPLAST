<?php
    error_reporting(0); // 關閉錯誤顯示
    session_start();    // 啟動 session

    if (!$_SESSION["id"]) { // 尚未登入則跳轉登入頁
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 取得指定 bid 的佈告資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin WHERE bid={$_GET['bid']}");
        $row = mysqli_fetch_array($result);

        // 根據 type 欄位決定哪一個 radio 要被選中
        $checked1 = $row['type'] == 1 ? "checked" : "";
        $checked2 = $row['type'] == 2 ? "checked" : "";
        $checked3 = $row['type'] == 3 ? "checked" : "";

        // 顯示 HTML 表單並填入資料庫中的值
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：
                        <input type=radio name=type value=1 {$checked1}>系上公告 
                        <input type=radio name=type value=2 {$checked2}>獲獎資訊
                        <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>

