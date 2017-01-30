<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 13:36:29
         compiled from "views\biografie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79805800cb3f780035-07333010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c25c9e2fcce791128b72af07713486942e11c25' => 
    array (
      0 => 'views\\biografie.tpl',
      1 => 1477654587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79805800cb3f780035-07333010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800cb3f7d6a96_47196258',
  'variables' => 
  array (
    'biografieResult' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800cb3f7d6a96_47196258')) {function content_5800cb3f7d6a96_47196258($_smarty_tpl) {?><section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['biografieResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p><br>
    <?php } ?>
</section>

<?php }} ?>
