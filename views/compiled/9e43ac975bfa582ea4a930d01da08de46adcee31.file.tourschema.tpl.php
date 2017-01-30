<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:33:40
         compiled from "views\tourschema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1450580f69b96a7d80-34681539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e43ac975bfa582ea4a930d01da08de46adcee31' => 
    array (
      0 => 'views\\tourschema.tpl',
      1 => 1478194376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1450580f69b96a7d80-34681539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580f69b97b6394_71713960',
  'variables' => 
  array (
    'schemaResult' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f69b97b6394_71713960')) {function content_580f69b97b6394_71713960($_smarty_tpl) {?><!--
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schemaResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Date'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Venue'];?>
</p>
    <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Country'];?>
</content><br>
    <?php } ?>
</section>

-->

<section>
   <h2>TOURSCHEMA</h2>
    <table>
  <tr>
    <td><strong>DATUM</strong></td>
    <td><strong>LOCATIE</strong></td>
    <td><strong>LAND</strong></td>
  </tr>
   <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schemaResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Date'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Venue'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Country'];?>
</td>
  </tr>
  <?php } ?>
</table>
<br><br><br>
</section><?php }} ?>
