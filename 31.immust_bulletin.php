<html>
    <head>
        <title>明新科技大學資訊管理系</title> <!-- 頁面標題 -->
        <meta charset="utf-8"> <!-- 設定編碼為UTF-8 -->
        <!-- 載入Flexslider的CSS -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 載入jQuery -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 載入Flexslider的JS -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
        <script>
            // 頁面載入後啟動Flexslider輪播，動畫為滑動，方向為從右至左(rtl)
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    rtl: true
                });
            });
        </script>
        <style>
            /* 全域樣式，移除預設margin，文字置中，文字顏色為灰色 */
            *{
                margin:0;
                color:gray;
                text-align:center;
            }
            /* 頂部區塊背景色 */
            .top{
                background-color: white;
            }
            /* 頂部容器，使用Flex排版，左右兩邊置中對齊 */
            .top .container{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding:10px;
            }
            /* logo字體大小及粗細 */
            .top .logo{
                font-size: 35px;
                font-weight: bold;
            }
            /* logo圖片大小，垂直置中 */
            .top .logo img{
                width: 100px;
                vertical-align: middle;
            }
            /* 頂部導覽文字大小及粗細 */
            .top .top-nav{
                font-size: 25px;
                font-weight: bold;       
            }
            /* 頂部連結無底線 */
            .top .top-nav a{
                text-decoration: none;
            }
            /* 導覽列背景色及置中 */
            .nav {
                background-color:#333;
                display: flex;
                justify-content: center;
            }
            /* 導覽列的ul取消預設樣式 */
            .nav ul {
                list-style-type: none;  
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                background-color: #333; 
            }
            /* 導覽列li靠左排列 */
            .nav li {
                float: left; 
            }
            /* 導覽列連結樣式：白字、置中、padding */
            .nav li a {    
                display: block;  
                color: white;  
                text-align: center;  
                padding: 14px 16px;  
                text-decoration: none;  
            }
            /* 滑鼠懸停導覽連結時變色 */
            .nav li a:hover {
                background-color: #111; 
            }
            /* 下拉選單：滑鼠移到dropdown顯示子選單 */
            .dropdown:hover .dropdown-content {
                display: block;   /* block排版上下 */
            }
            /* 滑鼠hover下拉選單父層背景色 */
            li.dropdown:hover{
                background-color: #333;  
            }
            /* 下拉選單內容樣式 */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #333;
                min-width: 160px;
                z-index: 1;
            }
            /* 下拉選單連結樣式 */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            /* 輪播區背景為黑色 */
            .slider{
                background-color: black;
            }
            /* banner背景漸層色及內距 */
            .banner{
                background-image: linear-gradient(#ABDCFF,#0396FF);
                padding:30px;
            }
            /* banner標題內距 */
            .banner h1{
                padding: 20px;
            }
            /* 師資介紹區塊設定置中並排 */
            .faculty {
                display: block;
                justify-content: center;
                background-color:white;
                padding:40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            .faculty .container {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .faculty .teacher{
                display:block;
                text-decoration: none;
            }
            .faculty .teacher img{
                height: 200px;
                width: 200px;
            }
            /* 老師名字背景半透明黑色，文字白色置中 */
            .faculty .teacher h3{
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;           
            }
            /* 聯絡資訊區 */
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;                
            }
            .contact h2{
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            .contact .infos{
                display:flex;
                margin-top: 30px; 
                justify-content: center;
            }
            /* 聯絡資訊左側區塊置左文字 */
            .contact .infos .left{
                display:block;
                text-align: left;
                margin-right: 30px;
            }
            /* 左側標題字體及間距 */
            .contact .infos .left b{
                display:block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: Gray;
                font-size: 18px;
                line-height: 18px;
            }
            /* 左側細節文字 */
            .contact .infos .left span{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            /* 聯絡資訊右側地圖框高度 */
            .contact .infos .right{
                height: 200px;               
            }
            /* 地圖iframe全寬高並有邊框 */
            .contact .infos .right iframe{
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39,40,34,0.50);
            }
            /* 頁尾背景色置中 */
            .footer{
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30);
                padding: 30px 0;
            }
            /* 登入視窗，預設隱藏，置中且有透明白色背景 */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* 固定位置 */
                z-index: 1; /* 疊加在最上層 */
                right: 50;
                top: 50;
                width: 20%; /* 寬度20% */
                height: 20%; /* 高度20% */
                overflow: auto; /* 超出可滾動 */
                background-color: rgba(255,255,255,0.9); /* 白色半透明背景 */
                padding-top: 50px;
            }
            /* 佈告欄背景色及間距 */
            .bulletin{
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153);
                padding: 30px 0;
            }
            /* 佈告欄標題內距 */
            .bulletin h1{
                padding:10px;
            }
            /* 佈告欄表格設定，無間距，字體，字型大小，邊框 */
            .bulletin table{
                border-collapse:collapse;
                font-family: 微軟正黑體;
                font-size:16px; 
                border:1px solid #000;
            }
            /* 表格表頭底色及文字顏色 */
            .bulletin table th{
                background-color: #abdcff;
                color: #ffffff;
            }
            /* 表格儲存格底色及文字顏色 */
            .bulletin table td{
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    </head>
    <body>
        <!-- 頂部區塊 -->
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!-- 登入按鈕，點擊顯示登入視窗 -->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入視窗 -->
                  <div id="login" class="modal">
                    <!-- 關閉按鈕，點擊隱藏登入視窗 -->
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                </div>
              </div>
        </div>
        <!-- 導覽列 -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <!-- 下拉選單 -->
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <!-- 輪播區 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!-- 佈告欄區 -->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                // 連接MySQL資料庫
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                // 查詢佈告資料表
                $result=mysqli_query($conn, "select * from bulletin");
                // 表格標題列
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                // 讀取每筆資料並列出
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    // 判斷類別並顯示對應文字
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!-- 系所簡介區塊 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- 師資介紹 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <!-- 聯絡資訊 -->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <!-- Google地圖iframe嵌入 -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <!-- 頁尾 -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>

