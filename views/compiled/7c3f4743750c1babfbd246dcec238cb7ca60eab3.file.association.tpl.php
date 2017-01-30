<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 12:36:01
         compiled from "views\association.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18346588b20f1b12ec2-79367728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3f4743750c1babfbd246dcec238cb7ca60eab3' => 
    array (
      0 => 'views\\association.tpl',
      1 => 1485516950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18346588b20f1b12ec2-79367728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b20f1b769e3_54293114',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b20f1b769e3_54293114')) {function content_588b20f1b769e3_54293114($_smarty_tpl) {?><div id="content">
    <h1>Pagina wijzigen</h1>
    <p>Content:</p>
       <table>
           <tr>
               <td>name</td>
               <td>city</td>
           </tr>
        </table>
        <hr>
        <table>
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
           <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['city'];?>
</td>

           </tr>

        <?php } ?>
    </table>
    
</div>
<style>
#content
{
    margin-left: 200px;
}
</style>



<?php }} ?>
