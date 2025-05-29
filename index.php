<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<div id="innertext">
		<div class="lang en">
			<h1>Welcome</h1>
			<p>The Centre of Excellence in Biodiversity and Natural Resource Management (CoEB) has embarked on an effort to digitize and publish all of its natural history collection data and associated digital specimen images. The multilingual Rwanda Biodiversity Specimen Portal (French, Spanish, and English) utilizes open-source Symbiota software, which serves as both a biodiversity data management and publishing tool. The portal includes a variety of types of data, including specimen data, photographic images, field observations, species inventories, taxonomic data, and species distribution data.<br><br>
			Do you have or know of a specimen-based biodiversity dataset compiled from Rwanda that you would like to publish on the portal? If so, please contact us and we will gladly assist in getting you setup as a data contributor. Through a collaborative effort, this biodiversity data portal can become an information rich resource that will assist researchers, educators, and the general public in exploring the flora and fauna found within Rwanda.
			<h1>Murakaza neza</h1>
			<p>Ikigo cy'Indashyikirwa mu kwita k'urusobe rw'ibinyabuzima n'umutungo kamere cyatangije gahunda yo kubika no gutangaza mu buryo bw'ikoranabuhanga amateka n'amakuru n'amafoto y'ibice by'ibimera ari mu bubiko bwacyo. Ikigo gikoresha Ikoranabuhanga rifunguye rya Symbiota rikoreshwa mu kubika, gucunga no gutangaza amakuru n'amateka ku rusobe rw'ibinyabuzima mu ndimi zitandukanye (Icyongereza, Igifaransa, Ikinyarwanda n'Icyesipanyoro). Iryo koranabuhanga rigaragaza amakuru atandukanye arimo amafoto y'ibice by'ibimera bibitswe,  ibiranga aho ikimere cyabonywe, ibimera byabaruwe, amakuru y'umuryango mugari ibimera bibarizwamo, n' amazina y'ahantu ibimera biba.</p>
			</p>
		</div>
		<div class="lang es">
			<h1 class="headline">Bienvenidos</h1>
			<p>El Centro de Excelencia en Biodiversidad y Manejo de Recursos Naturales (CoEB) se ha embarcado en un esfuerzo para digitalizar y publicar todos sus datos de colección de historia natural y las imágenes de especímenes digitales asociadas. El portal trilingüe de especímenes de biodiversidad de Ruanda (francés, español e inglés) utiliza el software Symbiota de código abierto, que sirve como una herramienta de gestión y publicación de datos de biodiversidad. El portal incluye una variedad de tipos de datos, incluidos datos de especímenes, imágenes fotográficas, observaciones de campo, inventarios de especies, datos taxonómicos y datos de distribución de especies.</p>
		</div>
		<div class="lang fr">
			<h1 class="headline">Bienvenue</h1>
			<p>Le Centre d'excellence en biodiversité et gestion des ressources naturelles (CoEB) s'est lancé dans un effort de numérisation et de publication de toutes les données de sa collection d'histoire naturelle et des images de spécimens numériques associées. Le portail trilingue sur les spécimens de la biodiversité du Rwanda (français, espagnol et anglais) utilise le logiciel open source Symbiota, qui sert à la fois d'outil de gestion et de publication des données sur la biodiversité. Le portail comprend une variété de types de données, y compris des données sur les spécimens, des images photographiques, des observations sur le terrain, des inventaires d'espèces, des données taxonomiques et des données sur la répartition des espèces.</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
	<script type="text/javascript">
		setLanguageDiv();
	</script>
</body>
</html>
