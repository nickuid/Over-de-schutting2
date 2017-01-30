<?php /* Smarty version Smarty-3.1.18, created on 2017-01-24 11:53:36
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914958807491cb6e92-99757068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1485254631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914958807491cb6e92-99757068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58807491cb8158_28452504',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58807491cb8158_28452504')) {function content_58807491cb8158_28452504($_smarty_tpl) {?><html>


<div class="container">


<h2>Login Here</h2>
<form action="?action=login_submit" method="post">
    <fieldset>
        <p>
            <label for="name">Username</label>
            <input type="text" id="name" name="name" value="" maxlength="20" />
        </p>
        <p>
            <label for="password">Password</label>
            <input type="text" id="password" name="password" value="" maxlength="20" />
        </p>
        <p>
          <input type="submit" value="→ Login" />
        </p>
    </fieldset>
</form>
</div>


</html><?php }} ?>
