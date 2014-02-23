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
				<p><b>1) Кодировка ФИО:</b></p>
				{foreach from=$fio item=numb}
				{$numb}
				{/foreach}
				<hr>
				<p><b>2) Матрица Y:</b></p>
				<table border="1">					
					{foreach from=$y item=val}
						<tr>
							{foreach from=$val item=i}
								<td width="30">{$i}</td>
							{/foreach}
						</tr>
					{/foreach}
				</table>				
				
				<hr>
				<p><b>3) Матрица A:</b></p>
				<table border="1">					
					{foreach from=$a item=val}
						<tr>
							{foreach from=$val item=i}
								<td width="30">{$i}</td>
							{/foreach}
						</tr>
					{/foreach}
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
				{$allHtmlGrafs}
				<div class="cls"></div>
			</div>
		</div>
	</body>
</html>