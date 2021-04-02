<?php
$t = time();
$dom = $_SERVER['HTTP_HOST'];
$dom = idn_to_utf8($dom);
echo '当前你访问哒地址:'. 'https://'.$dom.$_SERVER['PHP_SELF'];//'?'.$_SERVER['QUERY_STRING'];
echo ("<br>页面访问时间:" . date("Y-m-d G:i:s", $t) . "");
echo ("<br>Count_down ver 1.12 by dayi.<br>");
//echo "如果您有建议欢迎提出来嘻嘻嘻谢谢~<br>";
?>
<html>

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta charset="utf-8">
    <title>高考</title>
    <style>
        .container {
            width: 70%;
            float: right;
            margin: 15% -15% auto;
            background-color: #f0f0f035;
            padding: 6% -5%;
            border-radius: 1em
        }

        ul {
            padding-left: 10px;
        }

        ul li {
            font-size: 5em;
            line-height: 1.4
        }

        ul c_time {
            font-size: 7.5em;
            line-height: 2.4
        }

        a {
            color: #20a53a
        }

        h1 {
            font-size: 11em;
        }


        body {
            /*background:#ffffff url('https://static.runoob.com/images/mix/img_tree.png') no-repeat right;
            */
            margin-right: 200px;
            background: url(./files/img/points_lines.webp) no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            background-color: #CCCCCC;

        }

        /*1920分辨率适配*/
        @media only screen and (max-width: 1920px) {
            .container {
                width: 75%;
                float: right;
                margin: 2% -13% auto;
                background-color: #f0f0f035;
                padding: 0% 5%;
                border-radius: 1em
            }

            body {
                background-color: lightblue;
            }

            ul {
                padding-left: 2em;
            }

            ul li {
                font-size: 4.5em;
                line-height: 1.4
            }

            ul c_time {
                font-size: 7.5em;
                line-height: 1.7
            }

            a {
                color: #20a53a
            }

            h1 {
                font-size: 7em;
            }
        }
    </style>
    <!--
    <link rel="stylesheet" type="text/css" href="unfine.css">
    -->
</head>

<body>
    <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=86 height=86
        src="//music.163.com/outchain/player?type=2&id=491757187&auto=0&height=66"></iframe>
    <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=86 height=86
        src="//music.163.com/outchain/player?type=2&id=25436660&auto=0&height=66"></iframe>
    <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=86 height=86 src="//music.163.com/outchain/player?type=2&id=33035611&auto=0&height=66"></iframe>

    <div class="container">

        <h1>
            <div id="timer"></div>
        </h1>
        <h1></h1>
        <h3></h3>
        <ul>
            <li>
                <div id="tm2"></div>
            </li>
            <c_time>
                <div id="tm3"><strong>3-14 23:22</strong></div>
            </c_time>
        </ul>
    </div>



    <script>
        if (!window.name) {
            location.href += "?random=" + Date.now() + parseInt(Date.parse(new Date()) / 1000000);
            window.name = "reloaded";
        }

        function get_left_time(t_end_time) {
            curr_time = parseInt(Date.parse(new Date()) / 1000);
            curr_time_ms = new Date().getTime();
            curr_time_ms=curr_time_ms/1000;
            var t_left_time = parseInt(t_end_time - curr_time);
            var t_left_time_ms=t_end_time - curr_time_ms;
            var c_int_day = (t_left_time) / (60 * 60 * 24);
                c_int_day = parseInt(c_int_day);
            var c_int_hour = parseInt((t_left_time - c_int_day * 60 * 60 * 24) / (60 * 60));
            var c_int_min = parseInt((t_left_time - c_int_day * 60 * 60 * 24 - c_int_hour * 60 * 60) / (60));
            var c_int_sec = parseInt((t_left_time - c_int_day * 60 * 60 * 24 - c_int_hour * 60 * 60 - c_int_min * 60));
            //var c_int_msec= ((curr_time_ms-t_end_time)/(60*60*24)-Math.abs((curr_time_ms-t_end_time)/(60*60*24*1000)))*24*60*60;
            
            var c_flo_sec = (t_left_time_ms - c_int_day * 60 * 60 * 24 - c_int_hour * 60 * 60 - c_int_min * 60);
                c_flo_sec = ((((c_flo_sec- (c_int_sec-1))*10))%10).toFixed(0);
            
            
            
            msg = c_int_day + "天" + c_int_hour + "时" + c_int_min + "分" + c_int_sec + "秒";//c_flo_sec;
            return msg;
        }
        var end_time = 1623027600;
        var curr_time = parseInt(Date.parse(new Date()) / 1000);
        function count_down() {
            
            let curr_time2 = new Date().getTime();
            curr_time2 = curr_time2 / 1000;
            var left_time = parseInt(end_time - curr_time);
            var left_time2 = end_time - curr_time2;

            var left_day = left_time / (24 * 60 * 60);
            var c_int_day = (left_time) / (60 * 60 * 24);
            c_int_day = parseInt(c_int_day);
            var c_int_hour = parseInt((left_time - c_int_day * 60 * 60 * 24) / (60 * 60));
            var c_int_min = parseInt((left_time - c_int_day * 60 * 60 * 24 - c_int_hour * 60 * 60) / (60));
            var c_int_sec = parseInt((left_time - c_int_day * 60 * 60 * 24 - c_int_hour * 60 * 60 - c_int_min * 60));
            //var left_hour=

            //tmp = document.getElementById("timer");
            //tmp = msg1;
            var myDate = new Date();


            sub_time = ((left_time2) / (60 * 60 * 24) / 6).toFixed(8);
            week_time = ((left_time2) / (60 * 60 * 24) / 7).toFixed(8);

            msg1 = "高考: " + c_int_day + "天" + c_int_hour + "时" + c_int_min + "分" + c_int_sec + "秒";
            msg1 = msg1 + "";
            strnowtime = myDate.getMonth() + 1 + "-" + myDate.getDate() + " " + myDate.getHours() + ":" + myDate.getMinutes();
            //myDate.toLocaleString();
            
            var next_five_day=parseInt( c_int_day/5)*5;
            var five_day_left =c_int_day-next_five_day;
            var msg11 = next_five_day+"天: " + five_day_left + "天" + c_int_hour + "时" + c_int_min + "分" + c_int_sec + "秒";
            
            str_next_five_day = msg11+"<br>";
            
            sub_time =  str_next_five_day+
                        "二模(4.25):" + get_left_time(1619280000) + "<br>科: " + sub_time + "<br>" + "周: " + week_time + "";
            //<br>"+strnowtime;
            sub_time = sub_time;

            //更新
            document.all["timer"].innerHTML = msg1;
            document.all["tm2"].innerHTML = sub_time;
            document.all["tm3"].innerHTML = strnowtime;
        }
        count_down();
        timer = setInterval("count_down()", 100);
    </script>
    <!--
    <script type="text/javascript" color="0,0,255" opacity='0.9' zIndex="-1" count="30"
        src="./files/js/canvas-nest.js"></script>-->
    <!--<script src="" charset="utf-8"></script> -->
</body>

</html>
