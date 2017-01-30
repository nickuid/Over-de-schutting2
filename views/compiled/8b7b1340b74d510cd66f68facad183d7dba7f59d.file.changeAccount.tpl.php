<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 13:26:34
         compiled from "views\changeAccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7500588b3ab2bb7807-67315007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7b1340b74d510cd66f68facad183d7dba7f59d' => 
    array (
      0 => 'views\\changeAccount.tpl',
      1 => 1485519993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7500588b3ab2bb7807-67315007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b3ab2bb9602_46401404',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b3ab2bb9602_46401404')) {function content_588b3ab2bb9602_46401404($_smarty_tpl) {?><div id="content">
    
    <form action="./model/update_user.php" method="post">
        <table>
               <tr>
                    <td><input type="text" class="textField" placeholder="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['name'];?>
" required></td>
                </tr>
                <tr>
                    <td><input type="text" class="textField" placeholder="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['password'];?>
" required></td>
                </tr>
                <tr>
                    <td><input type="text" class="textField" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
" required></td>
                </tr>

               <tr>
                    <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
                </tr>
        </table>
    
</form>
</div>

<style>
#content
{
    margin-left: 200px;
}
</style>
<?php }} ?>
