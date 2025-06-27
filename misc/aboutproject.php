<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/misc/aboutproject.' . $LANG_TAG . '.php'))
include_once($SERVER_ROOT . '/content/lang/misc/aboutproject.en.php');
else include_once($SERVER_ROOT . '/content/lang/misc/aboutproject.' . $LANG_TAG . '.php');
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
	<head>
		<title><?= $LANG['ABOUT_PROJECT'] ?></title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?= $LANG['HOME']; ?></a>
			<b><?= $LANG['ABOUT_PROJECT']; ?></b>
		</div>
		<!-- This is inner text! -->
		<div role="main" id="innertext">
			<h1 class="page-heading"><?= $LANG['ABOUT_PROJECT']; ?></h1>

		<p>The University of Rwanda is embarking on an effort to digitize and publish all of its natural history speccimen collections data and associated digital images. This important biodiversity data is mostly inaccessible to the global community of scientists as a result of not having representation in other major online biodiversity portals like the US based Integrated Digitized Biocollections (iDigBio) and Global Biodiversity Information Facility (GBIF).<br><br>Dr. Beth Kaplin, Director of the Center of Excellence in Biodiversity and Natural Resource Management is leading the team of Rwandan scientists to help Rwanda achieve this important mission. In 2021, a 3 year summer biodiversity field school was launched through funding from the Volkswagen Foundation. This program has brought together scientists from more than 10 countries to train emerging biodiversity conservationists in specimen collecting techniques and biodiversity data management. Biodiversity data for amphibians, birds, mammals, fish, ants, plants and fungi which have been recently collected in the field school program are now being published in the Rwanda Biodiversity Specimen Portal. The Rwanda Biodiversity Specimen Portal is planned to be the largest contributor of digital biodiversity records for Rwanda and the east African region. </p> 
		<img src="/images/layout/summerfieldSchool2022.jpg" alt="CoEB 2022" width="75%"><br>2022 Summer Field School participants for biodiversity specimen collecting and capacity building.<br><br>
			<h2><b>Curatorial Staff of the Natural History Museum</b></h2><p>
		Amphibians -	Mapendo	Mindje, majulesdor@gmail.com <br>
        Ants -	    Simon	Muhayimana, simonmuhayimana@gmail.com <br>
        Birds -	    Jean de Dieu Nsenganeza, jnsenganeza@gmail.com <br>
        Fish -	    Theodore Nshimiyumuremyi, tnshimiyumuremyi@gmail.com<br>
        Fungi -   Emmanuel Munyaneza, munyaneza4@gmail.com <br>
        Invertebrates (Aquatic) - Leonce Ngirinshuti, lngirinshuti@gmail.com<br>
        Insects -	    Thacien	Hagenimana, hagenathacien4@gmail.com <br>
        Mammals -	    Methode Majyambere, methode.majyambere@gmail.com<br>
        Molluscs -    Prosper Umuntunundi, umupros@gmail.com <br>
        Plants -      Michael B. Thomas, herbariumNHR@gmail.com<br>
        Reptiles -    Mapendo Mindje, majulesdor@gmail.com <br>
       
        </p><br>
        
		<h2>Notes on Specimen Records and Images</h2>
		<p>Specimens are used for scientific research and because of skilled preparation and careful use they may last for hundreds of years. Some collections have specimens that were
		collected over 100 years ago that are no longer occur within the area. By making these specimens available on the web as images, their availability and value improves without
		an increase in inadvertent damage caused by use. Note that if you are considering making specimens, remember collecting normally requires permission of the landowner and,
		in the case of rare and endangered plants, additional permits may be required. It is best to coordinate such efforts with a regional institution that manages a publically
		accessible collection.
		</p>
	
		<p><b>Disclaimer:</b> This data portal may contain specimens and historical records that are culturally sensitive. The collections include specimens dating back over 200 years
		collected from all around the world. Some records may also include offensive language. These records do not reflect the portal community's current viewpoint but rather the
		social attitudes and circumstances of the time period when specimens were collected or cataloged.
		</p>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>		
