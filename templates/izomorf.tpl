<!DOCTYPE html>
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
						{foreach from=$menu item=list}
							{$list}
						{/foreach}
					</ul>
				</div>
				<!-- End Fixed menu !-->
				
				<!-- Pics izimorf grafs !-->
				<h1>Изоморфность</h1>
				{foreach from=$iz_grafs item=grafs}
					<h3>Группа изоморфности</h3>
					{foreach from=$grafs item=graf}
						<img src="{$url}graf.php?graf=3&pg={$graf}" />
					{/foreach}
				{/foreach}
				<!-- End Pics izimorf grafs !-->
			</div>
		</div>
	</body>
</html>