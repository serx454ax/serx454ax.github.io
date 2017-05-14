<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Поиск - Instagram 1</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="SerX" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.1.16 - www.websitex5.com" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://sposorstvoo.com/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="Instagram 1" />
		<meta name="viewport" content="width=1170" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-1-16" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-0-1-16-636303631193815579" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-1-16"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-1-16" data-files-version="13-0-1-16"></script>
		
		
		
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','Возможно, Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','[1]Обновите Ваш браузер[/1] или [2]продолжите процедуру [/2].','http://outdatedbrowser.com/'); };
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Поиск - Instagram 1</h1>
				<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_01_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_1" class="" > <div id="imHeader_imCellStyleGraphics_1"></div><div id="imHeader_imCellStyle_1" ><div id="imHeader_imObjectTitle_01"><div id ="imHeader_imObjectTitle_01_text">Эффективная реклама в instagram </div > </div></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Главная</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Результаты поиска</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
