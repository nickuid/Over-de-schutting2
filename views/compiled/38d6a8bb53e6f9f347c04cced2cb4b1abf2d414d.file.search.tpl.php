<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 13:35:20
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21589581b1142a050d0-91596557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478176449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21589581b1142a050d0-91596557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b1142a38ee0_17200221',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b1142a38ee0_17200221')) {function content_581b1142a38ee0_17200221($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <script>
        function showResult(str) {
            if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","model/getuser.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<div id="search">
<h1 class="h1">Search</h1>
<form>
    <input id="search2" type="text" size="30" onkeyup="showResult(this.value)">
    <div id="livesearch"></div>
</form>
<br>
<div id="txtHint"><b>No results</b></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</div>
</body><?php }} ?>
