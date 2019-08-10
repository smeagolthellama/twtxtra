<?php //timeline.php
require("functions.php");
$files=parse_ini_file("configs.ini");
if(!$files){
	echo "<div class=problem>no accounts registered. <a href=quickstart.php>quickstart</a>?</div>";
}else{
	foreach($files as $ignore=>$file){
		$conf=parse_ini_file($file,true);
		if(!$conf){
			echo "<div class=problem>'$file'' doesn't exist. please fix this.</div>";
		}else{
			echo "<div class=username>".$conf["twtxt"]["nick"]."</div>";
		}
	}
}
?>
