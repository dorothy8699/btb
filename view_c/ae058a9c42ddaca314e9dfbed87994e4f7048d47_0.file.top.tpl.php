<?php
/* Smarty version 3.1.29, created on 2017-06-01 14:29:17
  from "/Applications/XAMPP/xamppfiles/htdocs/btb/view/top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5930089d5b31e8_13673321',
  'file_dependency' => 
  array (
    'ae058a9c42ddaca314e9dfbed87994e4f7048d47' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/btb/view/top.tpl',
      1 => 1496320154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5930089d5b31e8_13673321 ($_smarty_tpl) {
?>
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
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/top.js"><?php echo '</script'; ?>
>
		<title>BTB</title>
	</head>
	<body style="margin:0;padding:0;">
        <table>
            <tr>
                <td>レート</td>
                <td>
                    <div id='rate_area'><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>最後の取引の価格</td>
                <td>
                    <div id='last_area'><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>現在の買い注文の最高価格</td>
                <td>
                    <div id='bid_area'><?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>現在の売り注文の最安価格</td>
                <td>
                    <div id='ask_area'><?php echo $_smarty_tpl->tpl_vars['ask']->value;?>
</div>
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
                    <div id='high_area'><?php echo $_smarty_tpl->tpl_vars['high']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>24時間での最安取引価格</td>
                <td>
                    <div id='low_area'><?php echo $_smarty_tpl->tpl_vars['low']->value;?>
</div>
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
                    <div id='jpy_area'><?php echo $_smarty_tpl->tpl_vars['jpy']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>ビットコインの残高</td>
                <td>
                    <div id='jpy_area'><?php echo $_smarty_tpl->tpl_vars['btc']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>未決済の買い注文に利用している日本円の合計</td>
                <td>
                    <div id='jpy_reserved_area'><?php echo $_smarty_tpl->tpl_vars['jpy_reserved']->value;?>
</div>
                </td>
            </tr>

            <tr>
                <td>未決済の売り注文に利用しているビットコインの合計</td>
                <td>
                    <div id='btc_reserved_area'><?php echo $_smarty_tpl->tpl_vars['btc_reserved']->value;?>
</div>
                </td>
            </tr>
        </table> -->   
	</body>
</html>



<?php }
}
