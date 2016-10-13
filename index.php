<!DOCTYPE html>
<head>

	<?php
	function make_lang(){
		if ($_POST['En']) {
			$_SESSION['english']=true;
		}
		if ($_POST['Fr']) {
			$_SESSION['french']=true;
		}
	}
	function lang_path(){
		if (!isset($_SESSION['english'])) {
			$_SESSION['french']=true;
		}
		if (isset($_SESSION['english'])) {
			$lang="english";
		}
		if (isset($_SESSION['french'])) {
			$lang="french";
		}
		$path=dirname(__FILE__)."/langue/".$lang.".php";
		return $path;
	}
	make_lang();
	$langue_file=lang_path();
	include($langue_file);
	?>
	</head>
<body>
	<form action="#" method="post">
		<input type="submit" name="En" value="En"/>
		<input type="submit" name="Fr" value="Fr"/></form>
	<h1><?php echo $lang['main list']; ?></h1>
<ul>
<li><?php echo $lang['main']; ?></li>
<li><?php echo $lang['Address']; ?></li>
<li><?php echo $lang['contact']; ?></li>
<li><?php echo $lang['portal']; ?></li>
</ul>
</body>