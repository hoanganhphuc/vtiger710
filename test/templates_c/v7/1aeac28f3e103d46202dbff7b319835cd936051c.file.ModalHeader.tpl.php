<?php /* Smarty version Smarty-3.1.7, created on 2019-03-21 09:23:09
         compiled from "/Users/anhphuc/Projects/vtiger710.local/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4451796115c9357fd9b9785-54616717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aeac28f3e103d46202dbff7b319835cd936051c' => 
    array (
      0 => '/Users/anhphuc/Projects/vtiger710.local/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4451796115c9357fd9b9785-54616717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c9357fd9bc21',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9357fd9bc21')) {function content_5c9357fd9bc21($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4></div></div>    <?php }} ?>