<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="./styles/jqpagination.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./scripts/jquery.jqpagination.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<script>
		$('.pagination').jqPagination({
			paged: function(page) {
					// do something with the page variable
			}
		});
	</script>
	<title>Subaru - Russia</title>
</head>
  
<body>
	<section class="header" >
    <div class="header-title">
    	<a href="#"><img src="https://subaru.ru/img/logo.png"></a>
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
		
    <?php include './php/content.php'; ?>
		
	</section>
	
	<!-- Начало подвала -->
		<footer class="footer">
			<?php include './php/footer.php'; ?>

		</footer>
			<!-- Подвал -->
		<!-- <script src="./scripts/countdown-timer.js"></script> -->
		<script src="./scripts/cars-selection.js"></script>
		<script src="./scripts/scripts.js"></script>
</body>


  
</html>