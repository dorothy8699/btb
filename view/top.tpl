<!DOCTYPE html>
<html lang="zh-CN">
	<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="keywords" content="">
     <meta name="description" content="">
     <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link href='https://fonts.googleapis.com/css?family=Changa+One' rel='stylesheet' type='text/css'>
     <link rel = "Shortcut Icon" href="fabicon.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/top.js"></script>
		<title>BTB</title>
	</head>
	<body style="margin:0;padding:0;">
        <table>
            <tr>
                <td>レート</td>
                <td>
                    <div id='rate_area'>{$rate}</div>
                </td>
            </tr>

            <tr>
                <td>最後の取引の価格</td>
                <td>
                    <div id='last_area'>{$last}</div>
                </td>
            </tr>

            <tr>
                <td>現在の買い注文の最高価格</td>
                <td>
                    <div id='bid_area'>{$bid}</div>
                </td>
            </tr>

            <tr>
                <td>現在の売り注文の最安価格</td>
                <td>
                    <div id='ask_area'>{$ask}</div>
                </td>
            </tr>

            <tr>
                <td>Buy Value</td>
                <td>
                    <div id='buy_value_area'></div>
                </td>
            </tr>

            <tr>
                <td>Sell Value</td>
                <td>
                    <div id='sell_value_area'></div>
                </td>
            </tr>


            <tr>
                <td>24時間での最高取引価格</td>
                <td>
                    <div id='high_area'>{$high}</div>
                </td>
            </tr>

            <tr>
                <td>24時間での最安取引価格</td>
                <td>
                    <div id='low_area'>{$low}</div>
                </td>
            </tr>

        </table>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div id='history_area'></div>
        <!--<table>
            <tr>
                <td>日本円の残高</td>
                <td>
                    <div id='jpy_area'>{$jpy}</div>
                </td>
            </tr>

            <tr>
                <td>ビットコインの残高</td>
                <td>
                    <div id='jpy_area'>{$btc}</div>
                </td>
            </tr>

            <tr>
                <td>未決済の買い注文に利用している日本円の合計</td>
                <td>
                    <div id='jpy_reserved_area'>{$jpy_reserved}</div>
                </td>
            </tr>

            <tr>
                <td>未決済の売り注文に利用しているビットコインの合計</td>
                <td>
                    <div id='btc_reserved_area'>{$btc_reserved}</div>
                </td>
            </tr>
        </table> -->   
	</body>
</html>



