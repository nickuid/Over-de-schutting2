<?php /* Smarty version Smarty-3.1.18, created on 2017-01-20 10:06:06
         compiled from "views\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299775874bae459c401-65164435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a120b28bdce69bbcb9aab03d77011f941122be60' => 
    array (
      0 => 'views\\navigation.tpl',
      1 => 1484903162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299775874bae459c401-65164435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5874bae45c97c4_98544153',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874bae45c97c4_98544153')) {function content_5874bae45c97c4_98544153($_smarty_tpl) {?><div class="search-container">
    <div class="container">
        
        <form action="#" method="post" class="centerform">
            <input type="text" name="search" id="searchfield" placeholder="Keywords...">
            <input type="submit" id="postsearch" value="Zoeken">
        </form>

    </div>
</div>    
    <!-- Navigation -->
        <nav class="cbp-spmenu-push" id="nav">
            <div class="container">
                <div class="logo">
                    <a href="?action=home">Van <strong>klomp</strong> tot <strong>kunst</strong></a>
                </div>

                <div class="search" id="search"></div>

                <div class="languageswitch">
                    <div class="ned"></div>
                    <div class="eng"></div>
                </div>

                <div class="hamburger" id="showRightPush"></div>

                <ul>
                    <li><a href="?action=home" class="active">Home</a></li>
                    <li>
                      <a href="#" class="locations">Locations</a>

                      <div class="dropdown">
                        <div class="row"><a href="?action=edam">Edam</a></div>
                        <div class="row"><a href="?action=volendam">Volendam</a></div>
                        <div class="row"><a href="?action=warder">Warder</a></div>
                        <div class="row"><a href="?action=kwadijk">Kwadijk</a></div>
                        <div class="row"><a href="?action=oosthuizen">Oosthuizen</a></div>
                        <div class="row"><a href="?action=schardam">Schardam</a></div>
                        <div class="row"><a href="?action=beets">Beets</a></div>
                        <div class="row"><a href="?action=middelie">Middelie</a></div>
                        <div class="row"><a href="?action=hobrede">Hobrede</a></div>
                      </div>
                    </li>
                    <li><a href="?action=agenda" id="agenda">Agenda</a></li>
                    <li><a href="?action=contact">Contact</a></li>
                    <li><a href="?action=login">Login</a></li>
                    
                </ul>
            </div>
        </nav>
    <!-- End Navigation -->

    <!-- Mobile Navigation -->
       <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
           <h1>Menu</h1>
           <a href="?action=home">Home</a>
           <a href="?action=locations" id="locaties">Locaties <div class="arrow"></div></a>

          <!-- Mobile subnav -->
          <ul class="subnav">
            <li><a href="?action=edam">Edam</a></li>
            <li><a href="?action=volendam">Volendam</a></li>
            <li><a href="?action=warder">Warder</a></li>
            <li><a href="?action=kwadijk">Kwadijk</a></li>
            <li><a href="?action=oosthuizen">Oosthuizen</a></li>
            <li><a href="?action=schardam">Schardam</a></li>
            <li><a href="?action=beets">Beets</a></li>
            <li><a href="?action=middelie">Middelie</a></li>
            <li><a href="?action=hobrede">Hobrede</a></li>
          </ul>
           <!-- End Mobile subnav -->

           <a href="?action=agenda" id="agenda">Agenda</a>
           <a href="?action=contact">Contact</a>
           <a href="?action=login">Login</a>
           

           <form action="#" method="POST">
               <!-- <div class="search-btn"></div> -->
               <input type="text" placeholder="Zoeken...">
               <input type="submit" class="search-btn">
           </form>
        
           <div class="languages">
               <div class="ned"></div>
               <div class="eng"></div>
           </div>
       </div>
    <!-- End Mobile Navigation -->
<?php }} ?>
