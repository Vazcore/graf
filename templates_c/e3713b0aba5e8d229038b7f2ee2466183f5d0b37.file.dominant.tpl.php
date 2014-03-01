<?php /* Smarty version Smarty-3.1.16, created on 2014-03-02 01:23:51
         compiled from ".\templates\dominant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798953125f196d6097-25026770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3713b0aba5e8d229038b7f2ee2466183f5d0b37' => 
    array (
      0 => '.\\templates\\dominant.tpl',
      1 => 1393716226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798953125f196d6097-25026770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53125f19802230_15607006',
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
    'dom' => 0,
    'd' => 0,
    'i' => 0,
    'min' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53125f19802230_15607006')) {function content_53125f19802230_15607006($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lab graf - Alexey Gabrusev</title>
		<link rel="stylesheet" type="text/css" href="templates/css/style.css">
		<script type="text/javascript" src="templates/js/jquery.js"></script>
		<script type="text/javascript" src="templates/js/indep.js"></script>
	</head>
	<body>
		<div id="main">
			<h3>Лабораторная работа по ДМ</h3>
			<h4>st gr TSPIN-13p</h4>
			<h5>Gabrusev Alexey</h5>
			<h4>Габрусев Алексей Николаевич</h4>
			
			<p><a href="/graf">На Главную</a></p>
			
			<div id="core-place">
				<!-- Fixed menu !-->
				<div class="menu">					
					<ul>
						<h4>Навигация</h4>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

						<?php } ?>
					</ul>
				</div>
				<!-- End Fixed menu !-->
				
				
				<h1>Клика</h1>
				<!-- Полный графа !-->			
				<p><b>1)Полный исходный граф:</b></p>
				<p>
					<img src="graf.php?graf=1" />
				</p>
				<div class="result-column">
				<h3>Список наименьших доминирующих множеств:</h3>
					<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,
						<?php } ?>
						<br>
					<?php } ?>
				</div>
				<div class="result-column">
					<h3>Число доминирования - <?php echo $_smarty_tpl->tpl_vars['min']->value;?>
  </h3>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>
