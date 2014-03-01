<!DOCTYPE html>
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
						{foreach from=$menu item=list}
							{$list}
						{/foreach}
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
					{foreach from=$dom item=d}
						{foreach from=$d item=i}
							{$i},
						{/foreach}
						<br>
					{/foreach}
				</div>
				<div class="result-column">
					<h3>Число доминирования - {$min}  </h3>
				</div>
			</div>
		</div>
	</body>
</html>
