<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 12:04:43
         compiled from "views\userPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2495658773c517c4e92-49434036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f9a3e0a6258c85a2dfbeb3078a68f262d6ce43' => 
    array (
      0 => 'views\\userPanel.tpl',
      1 => 1485515082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2495658773c517c4e92-49434036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58773c517ed744_61653379',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58773c517ed744_61653379')) {function content_58773c517ed744_61653379($_smarty_tpl) {?><section id="user-panel">
    <div  class="user">
       <a href="cms.php?cms_action=show">
        <span class="tooltip" title="Account bekijken">
        </span>
        </a>

    </div>
    <div class="edit">
       <a href="cms.php?cms_action=edit">
        <span class="tooltip" title="Pagina bewerken"></span>
        </a>
    </div>
    <div class="calender">
       <a href="cms.php?cms_action=addEvent">
        <span class="tooltip" title="Evenement toevoegen"></span>
        </a>
    </div>
    <div class="log-out">
       <a href="?action=logout">
        <span class="tooltip" title="Uitloggen"></span>
        </a>
    </div>
</section><?php }} ?>
