<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 22:56:45
         compiled from ".\templates\klika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3684530e1aff784139-93459946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2003e9af2017e8265235399cb3e4649c96b03a07' => 
    array (
      0 => '.\\templates\\klika.tpl',
      1 => 1393621004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3684530e1aff784139-93459946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530e1aff7e5f70_46648259',
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
    'smezhnye_list' => 0,
    'smezh_item' => 0,
    'smezhnye_max' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e1aff7e5f70_46648259')) {function content_530e1aff7e5f70_46648259($_smarty_tpl) {?><!DOCTYPE html>
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
				<h2>Список клик:</h2>
				<?php  $_smarty_tpl->tpl_vars['smezh_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['smezh_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['smezhnye_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['smezh_item']->key => $_smarty_tpl->tpl_vars['smezh_item']->value) {
$_smarty_tpl->tpl_vars['smezh_item']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['smezh_item']->value!=null) {?>					
					<?php echo $_smarty_tpl->tpl_vars['smezh_item']->value;?>
;<br>
				<?php }?>					
				<?php } ?>
				</div>
				<div class="result-column">
					<h3>Кликовое число - <?php echo $_smarty_tpl->tpl_vars['smezhnye_max']->value;?>
 </h3>
				</div>
			</div>
		</div>
	</body>
</html><?php }} ?>
