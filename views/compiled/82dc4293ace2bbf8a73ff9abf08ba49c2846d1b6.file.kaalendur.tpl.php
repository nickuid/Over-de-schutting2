<?php /* Smarty version Smarty-3.1.18, created on 2017-02-03 10:21:07
         compiled from "views\kaalendur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204758945962acb393-01026338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82dc4293ace2bbf8a73ff9abf08ba49c2846d1b6' => 
    array (
      0 => 'views\\kaalendur.tpl',
      1 => 1486117264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204758945962acb393-01026338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58945962e09a60_74293744',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58945962e09a60_74293744')) {function content_58945962e09a60_74293744($_smarty_tpl) {?><<?php ?>?php include_once('/../model/functions.php'); ?<?php ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eventcalender</title>
<link type="text/css" rel="stylesheet" href="/../css/kaalendur.css"/>
<script src="jquery.min.js"></script>
</head>
<body>

<div id="calendar_div">
	<<?php ?>?php echo getCalender(); ?<?php ?>>
</div>

</body>
</html>
<?php }} ?>
