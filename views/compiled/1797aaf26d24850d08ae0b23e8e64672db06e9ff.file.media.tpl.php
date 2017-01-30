<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 11:06:57
         compiled from "views\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214055818965465a399-52639311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1797aaf26d24850d08ae0b23e8e64672db06e9ff' => 
    array (
      0 => 'views\\media.tpl',
      1 => 1478698700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214055818965465a399-52639311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581896546d3be8_65040365',
  'variables' => 
  array (
    'mediaResult' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581896546d3be8_65040365')) {function content_581896546d3be8_65040365($_smarty_tpl) {?>
   <div id="images">

    <h2>MEDIA</h2>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mediaResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['src'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['alt'];?>
 id="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['imgID'];?>
">
    <?php } ?> 
</div>


<?php }} ?>
