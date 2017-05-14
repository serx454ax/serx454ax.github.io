<?php require_once("res/x5engine.php"); ?>
<?php imCheckAccess('4', ''); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Управление - Instagram 1</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="SerX" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.1.16 - www.websitex5.com" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://sposorstvoo.com/page-4.php" />
		<meta property="og:title" content="Управление" />
		<meta property="og:site_name" content="Instagram 1" />
		<meta name="viewport" content="width=1170" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-1-16" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/page-4.css?13-0-1-16-636303616840376046" media="screen" />
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
				<h1 class="imHidden">Управление - Instagram 1</h1>
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
					</li><li id="imMnMnNode4" class="imPage imMnMnCurrent">
						<a href="page-4.php">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Управление</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div class="imContentDataContainer">
					<h2 id="imPgTitle">Управление</h2>
					</div>
				<div id="imGroup_1" class="imVGroup">
				<div id="imPageRow_1" class="imPageRow">
				
				<div id="imPageRowContent_1" class="imContentDataContainer">
				<div id="imCell_1" class="" > <div id="imCellStyleGraphics_1"></div><div id="imCellStyle_1" ><!-- search-tag dynObj_4_01 start -->
				<div id="dynObj_4_01">
				<?php
					$dynObj = Configuration::getDynamicObject('dynObj_4_01');
					$pa = new ImPrivateArea();
					$user = $pa->who_is_logged();
					if ($user !== false && (in_array($user['uid'], array('14oc7em2')) || in_array_field($user['groups'], array()) || in_array($user['uid'], $imSettings['access']['admins']))) {
						if (isset($_POST['ObjectId']) && isset($_POST['PageId']) && $_POST['ObjectId'] == '1' && $_POST['PageId'] == '4') {
							$dynObj->setContent(imFilterInput($_POST['DefaultText']));
							$dynObj->saveToFile(pathCombine(array($imSettings['general']['public_folder'], '')));
							exit("<script>window.top.location.href='" . basename($_SERVER['PHP_SELF']) . "';</script>");
						}
				?>
					<div class="dynamic-object-text staticText"><?php echo $dynObj->getContent() ?></div>
					<div class="dynamic-object-text dynamicText" style="display: none;">
						<form action="<?php echo basename($_SERVER['PHP_SELF']) ?>" method="post">
							<textarea name="DefaultText" class="text-area" style="width: 98%;"><?php echo $dynObj->getContent() ?></textarea>
							<input type="hidden" name="ObjectType" value="ObjectDynamicText" />
							<input type="hidden" name="ObjectId" value="1" />
							<input type="hidden" name="PageId" value="4" />
							<div style="text-align: center;" class="wysiwyg-buttons">
								<input type="submit" value="Сохранить">
								<input type="button" value="Отмена" onclick="window.top.location.reload()">
							</div>
						</form>
						<script>
							x5engine.boot.push(function () { x5engine.cms.initialize('#dynObj_4_01', { autoGrow: true, css: ['style/style.css', 'pcss/page-4.css'], imageuploadurl: 'res/imageupload.php', availableFonts: ['Arial','Arial Black','Comic Sans MS','Courier New','Georgia','Impact','Lucida Console','Lucida Sans Unicode','Palatino Linotype','Tahoma','Times New Roman','Trebuchet MS','Verdana'], defaultFontSize: 11, defaultFontFamily: 'Tahoma'}); });
						</script>
					</div>
				<?php } else { echo $dynObj->getContent(); } ?>
				</div>
				<!-- search-tag dynObj_4_01 end -->
				</div></div><div id="imGroup_2" class="imEGroup"></div>
				</div>
				</div>
				
				</div>
				<div id="imFooPad"></div><div id="imBtMnContainer" class="imContentDataContainer"><div id="imBtMn"><a href="index.html">Главная</a> | <a href="page-4.php">Управление</a> | <a href="imsitemap.html">Главная Карта Сайта</a></div></div>
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
