<?php /* Smarty version Smarty-3.1.16, created on 2014-02-25 20:17:03
         compiled from ".\templates\izomorf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7324530cc6a883cf03-66035783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d254af818f66e914ff56dc372c0af126bdeb4af' => 
    array (
      0 => '.\\templates\\izomorf.tpl',
      1 => 1393352219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7324530cc6a883cf03-66035783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530cc6a88981c8_36780199',
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
    'iz_grafs' => 0,
    'grafs' => 0,
    'url' => 0,
    'graf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530cc6a88981c8_36780199')) {function content_530cc6a88981c8_36780199($_smarty_tpl) {?><!DOCTYPE html>
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
				
				<!-- Pics izimorf grafs !-->
				<h1>Изоморфность</h1>
				<?php  $_smarty_tpl->tpl_vars['grafs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grafs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iz_grafs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grafs']->key => $_smarty_tpl->tpl_vars['grafs']->value) {
$_smarty_tpl->tpl_vars['grafs']->_loop = true;
?>
					<h3>Группа изоморфности</h3>
					<?php  $_smarty_tpl->tpl_vars['graf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['graf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grafs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['graf']->key => $_smarty_tpl->tpl_vars['graf']->value) {
$_smarty_tpl->tpl_vars['graf']->_loop = true;
?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
graf.php?graf=3&pg=<?php echo $_smarty_tpl->tpl_vars['graf']->value;?>
" />
					<?php } ?>
				<?php } ?>
				<!-- End Pics izimorf grafs !-->
			</div>
		</div>
	</body>
</html><?php }} ?>
