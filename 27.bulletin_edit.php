<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();    // 啟動 session

    if (!$_SESSION["id"]) { // 若尚未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, 
            "UPDATE bulletin SET 
                title='{$_POST['title']}',
                content='{$_POST['content']}',
                time='{$_POST['time']}',
                type={$_POST['type']} 
             WHERE bid='{$_POST['bid']}'")) {
                 
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        } else {
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>

