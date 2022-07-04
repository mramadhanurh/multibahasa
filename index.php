<?php
session_start();

include_once 'seting.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>website multibahasa </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="assets/css/biru.min.css" rel="stylesheet">
		
		<style type="text/css">
			body {
				padding-top: 20px;
				padding-bottom: 40px;
			}
			/* Custom container */
			.container-narrow {
				margin: 0 auto;
				max-width: 800px;
			}
			.container-narrow > hr {
				margin: 30px 0;
			}
			/* Main marketing message and sign up button */
			.jumbotron {
				margin: 60px 0;
				text-align: center;
			}
			.jumbotron h1 {
				font-size: 72px;
				line-height: 1;
			}
			.jumbotron .btn {
				font-size: 21px;
				padding: 14px 24px;
			}
			/* Supporting marketing content */
			.marketing {
				margin: 60px 0;
			}
			.marketing p + h4 {
				margin-top: 28px;
			}
			label.error {
				color: red;
			}
</style>

	</head>
	<body>
		<div class="container-narrow">
			<div class="masthead">
				
				<ul class="nav nav-pills pull-right">
						
					<a href='index.php?lang=id'><img src='assets/image/id.png'></a>
					<a href='index.php?lang=jp'><img src='assets/image/jp.png'></a>
						<a href='index.php?lang=ar'><img src='assets/image/arab.png'></a>
					
					
				</ul>
				<h2 class="muted">Website - MultiBahasa </h2>
			</div>
			<hr>
		<ul class='nav nav-pills'>
				<li><a href='index.php?pg=dbz'><? echo $lang['TITLE_DBZ']?></a></li>
					<li><a href='index.php?pg=bleach'><? echo $lang['TITLE_BLEACH']?></a></li>
					<li><a href='index.php?pg=naruto'><? echo $lang['TITLE_NARUTO']?></a></li>
			</ul>
			<div>
			<?php
			/* default */
			$content = '';
				
			if (!isset($_GET['pg'])) {
				$content = 'DBZ';
				$title = $lang['TITLE_DBZ'];
				$isi = $lang['CONTENT_DBZ'];
			} else {
				$content = strtoupper($_GET['pg']);
				$titleheader = "TITLE_" . $content;
				$isicontent= "CONTENT_" . $content;
			
				$title = $lang[$titleheader];
				$isi = $lang[$isicontent];

			}
			?>
			
			<h1><?php echo $title ?></h1>
			
			<p style='text-align: justify'>
				<img src="assets/image/<?php echo $content?>.jpg" align="left" style="margin: 10px">
				<?php echo $isi ?></p>
			<div class='clearfix'></div>	
			
			</div>
			
			
			<hr>
			
			<div class="footer">
				<p style="text-align: center">
					&copy; mramadhanurh 2022
				</p>
			</div>
		</div>
		
	</body>
</html>
