<?php /* Smarty version Smarty-3.1.18, created on 2017-02-02 11:19:44
         compiled from "views\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32530588b2b0cd362d9-31045852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ccb82c7a708e92789e6ff89e7e8c6c4df5140d' => 
    array (
      0 => 'views\\sidebar.tpl',
      1 => 1486033919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32530588b2b0cd362d9-31045852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b2b0cd611a5_09641537',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b2b0cd611a5_09641537')) {function content_588b2b0cd611a5_09641537($_smarty_tpl) {?><div id="sidebar">
    <div id="navigation">
        <h3>Navigatie</h3>
    </div>
    <div class="button">
        <a href="cms.php?cms_action=show"><p>Profiel wijzigen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=edit"><p>Pagina wijzigen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=addEvent"><p>Evenement toevoegen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=checkUsers"><p>Bekijk gebruikers</p></a>
    </div>
    <div class="button">
        <a href="index.php?action=home"><p>Ga terug</p></a>
    </div>
</div>

<style>
    #sidebar{
    width: 200px;
    float: left;
    background-color: #e7e7e7;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    left: 0;
    top: 0;
    position: absolute;
}
    #navigation
    {
        background-color: #71beba;
        margin-top: 50px;
        height: 30px;
    }
    h3, p
    {
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 10px;
    }
    a
    {
        text-decoration: none;
        color: black;
    }
    .button
    {
        height: 30px;
        margin: 0;
        padding: 0;
        
    }
    .button:hover
    {
        background-color: darkgrey;
        font-size: 17px;

    }
    
</style><?php }} ?>
