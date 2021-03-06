<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<title>Технологии</title>
</head>
  
<body>
	<section class="header" >
    <div class="header-title">
    <a href="index.html"><img src="https://subaru.ru/img/logo.png"></a>
      
      
    </div>
    <?php include './php/navigation-menu.php'; ?>  
		</section>
		
	<section class="top clearfix">
    <div class="menu">
      <a href="#">XV</a>
      <a href="#">Legacy</a>
      <a href="#">Outback</a>
      <a href="#">WRX & WRX STI</a>
      <a href="#">Forester</a>
		</div>
		
    <div class="content">
			<form action="php/script-with-text.php" method="post">
				<textarea name="text" cols="40" rows="3"></textarea>
				<button class="send-text">Сохранить</button>
				<script>
					let button = document.getElementsByClassName('send-text')[0];
					button.addEventListener('click', e => e.preventDefault();)	
				</script>
			</form>
    </div>
		
	</section>
	<!-- Начало подвала -->
		<footer class="footer">
				<div class="footer_tel">
					<div class="mainFooterTel__title">Горячая линия Subaru</div>
					<div class="mainFooterTel__phone">8 (800) 555 00 20</div>
					<div class="mainFooterTel__title1">Звонок беcплатный</div>
				</div>
		
		<div class="footer_social"> 
			<a class="icon1" href="http://www.facebook.com/pages/Subaru-Russia/337954556244953?bookmark_t=page"></a>
			<a class="icon2" href="https://www.youtube.com/c/RussiaSubaru"></a>
			<a class="icon3" href="https://twitter.com/subaru_usa" ></a>
	
		</div>
		<div class="footer_apps">
			<a class="icon5" href="https://itunes.apple.com/ru/app/subaru/id1107647522?mt=8"></a>
			<a class="icon6" href ="https://play.google.com/store/apps/details?id=ru.subaru.android"></a>
		</div>
		</div>
		
		<div class="footer_copyright">Данный сайт носит информационно-справочный характер и ни при каких условиях не является публичной 
		офертой. 
		<br>Copyright © ООО Субару Мотор 2019. Все права защищены.
		</div>

			</footer>
			<!-- Подвал -->
</body>
  
</html>