<?php /* Smarty version Smarty-3.1.16, created on 2014-02-25 20:27:35
         compiled from ".\templates\independentM.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26277530ce04d949eb0-32384505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53570ad5002a5475f57dc5f36c274f1bd392eed5' => 
    array (
      0 => '.\\templates\\independentM.tpl',
      1 => 1393352854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26277530ce04d949eb0-32384505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ce04d9b84b2_52528567',
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ce04d9b84b2_52528567')) {function content_530ce04d9b84b2_52528567($_smarty_tpl) {?><!DOCTYPE html>
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
				
				
				<h1>Независмые множества</h1>
				<!-- Полный графа !-->			
				<p><b>1)Полный исходный граф:</b></p>
				<p>
					<img src="graf.php?graf=1" />
				</p>
				
			</div>
		</div>
	</body>
</html><?php }} ?>
