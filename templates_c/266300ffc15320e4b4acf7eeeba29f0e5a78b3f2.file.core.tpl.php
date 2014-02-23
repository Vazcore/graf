<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 01:33:18
         compiled from "./templates/core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631870327530933be566608-53966101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266300ffc15320e4b4acf7eeeba29f0e5a78b3f2' => 
    array (
      0 => './templates/core.tpl',
      1 => 1393111516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631870327530933be566608-53966101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fio' => 0,
    'numb' => 0,
    'y' => 0,
    'val' => 0,
    'i' => 0,
    'a' => 0,
    'allHtmlGrafs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530933be87b344_51137275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530933be87b344_51137275')) {function content_530933be87b344_51137275($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lab graf - Alexey Gabrusev</title>
		<link rel="stylesheet" type="text/css" href="templates/css/style.css">
	</head>
	<body>
		<div id="main">
			<h3>Лабораторная работа по ДМ</h3>
			<h4>st gr TSPIN-13p</h4>
			<h5>Gabrusev Alexey</h5>
			<h4>Габрусев Алексей Николаевич</h4>
			
			<p><a href="/graf">На Главную</a></p>
			
			<div id="core-place">
				<p><b>1) Кодировка ФИО:</b></p>
				<?php  $_smarty_tpl->tpl_vars['numb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numb']->key => $_smarty_tpl->tpl_vars['numb']->value) {
$_smarty_tpl->tpl_vars['numb']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['numb']->value;?>

				<?php } ?>
				<hr>
				<p><b>2) Матрица Y:</b></p>
				<table border="1">					
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['y']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						<tr>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<td width="30"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
							<?php } ?>
						</tr>
					<?php } ?>
				</table>				
				
				<hr>
				<p><b>3) Матрица A:</b></p>
				<table border="1">					
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						<tr>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<td width="30"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
							<?php } ?>
						</tr>
					<?php } ?>
				</table>	
				<!-- Полный графа !-->			
				<p><b>4)Полный исходный граф:</b></p>
				<p>
					<img src="graf.php?graf=1" />
				</p>
				<!-- Дополнение графа !-->			
				<p><b>4)Дополнение графа:</b></p>
				<p>
					<img src="graf.php?graf=2" />
				</p>
				
				<!-- "21" граф !-->
				<p><h3><u>5)Помеченные 5-ти графы:</u></h3></p>
				<?php echo $_smarty_tpl->tpl_vars['allHtmlGrafs']->value;?>

				<div class="cls"></div>
			</div>
		</div>
	</body>
</html><?php }} ?>
