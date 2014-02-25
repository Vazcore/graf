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
				
				
				<h1>Независмые множества</h1>
				<!-- Полный графа !-->			
				<p><b>1)Полный исходный граф:</b></p>
				<p>
					<img src="graf.php?graf=1" />
				</p>
				
			</div>
		</div>
	</body>
</html>