<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 11:24:05
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38045881c32624d883-37306295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1484900286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38045881c32624d883-37306295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5881c3262a00f0_03525510',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881c3262a00f0_03525510')) {function content_5881c3262a00f0_03525510($_smarty_tpl) {?><form action="./model/update.php" method="post">
<table>
       <tr>
            <td><input type="text" class="textField" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['name'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="text" name="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['text'];?>
" required></td>
        </tr>
       
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
       
</table>
<a href="cms.php">Keer terug</a>
    
</form><?php }} ?>
