<?php /* Smarty version Smarty-3.1.18, created on 2017-01-20 08:58:10
         compiled from "views\cms_insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216605881c2c5675ac2-40438935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e649b769ce7e32f41f030485984bb4f8513583c6' => 
    array (
      0 => 'views\\cms_insert.tpl',
      1 => 1484899090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216605881c2c5675ac2-40438935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5881c2c569faf4_71530499',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881c2c569faf4_71530499')) {function content_5881c2c569faf4_71530499($_smarty_tpl) {?><form action="./model/insert_item.php" method="get">
    <table>
        <tr>
            <td><input type="text" class="textField" placeholder="name" name="name" value="" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="text" name="text" value="" required></td>
        </tr>
        
            <td><input type="submit" id="submit" name="submit" value="Registreer"></td>
        </tr>
        
    </table>
    <a href="cms.php">Keer terug</a>
    
</form><?php }} ?>
