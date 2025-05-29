<?php
include_once('../config/symbini.php');
include_once ($SERVER_ROOT.'/classes/UtilityFunctions.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = UtilityFunctions::getDomain();
?>
<html>

<head>
	<title><?php echo $DEFAULT_TITLE; ?> Data Usage Guidelines</title>
	<?php

	include_once($SERVER_ROOT . '/includes/head.php');
	?>
</head>

<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath">
		<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a> &gt;&gt;
		<b>About</b>
	</div>
	<!-- This is inner text! -->
	<div id="innertext">
		<h2>Species Conservation</h2>
		<p>The University of Rwanda is embarking on an effort to initiate several plant species recovery projects inlight of greater understanding of the loss of plant biodivesity in Rwanda. Dr. Beth Kaplin, Director of the Center of Excellence in Biodiversity and Natural Resource Management is leading the team of scientists to help Rwanda achieve this important mission. 
		<br><br>
		The first project will involve the repatriation and recovery of the extinct Miniature Rwandan Water lily <a href="https://www.iucnredlist.org/species/185459/103564869">(<i>Nymphaea thermarum</i></a>) the world's smallest water lily yet described. 
		
		<b><a href="https://www.newtimes.co.rw/article/4550/news/rwanda/researchers-want-to-restore-rwandas-unique-water-lily">Learn more...</a></b>
		</p> 
		<img src="/images/layout/fieldbotany.jpg" alt="CoEB 2022" width="75%"<br>
		<h2>Notes on this species</h2>
		<p><a href="https://www.iucnredlist.org/species/185459/103564869">IUCN Redlist: Nymphaea thermarum</a><br>
		<a href="https://www.kew.org/plants/nympaea-thermarum">Kew Gardens Plant Profile</a><br>
		<a href="https://en.wikipedia.org/wiki/Nymphaea_thermarum">Wikipedia</a>
		<br>
			<a href="https://news.harvard.edu/gazette/story/2018/03/in-harvard-studies-of-plant-tug-of-war-mom-wins/">Harvard Gazette</a>

		
		<h2>References</h2>
		Fischer, E., Ntore, S., Nshutiyayesu, S., Luke, W.R.Q., Kayombo, C., Kalema, J., Kabuye, C. & Beentje, H.J. 2019. Nymphaea thermarum. The IUCN Red List of Threatened Species 2019: e.T185459A103564869. https://dx.doi.org/10.2305/IUCN.UK.2019-3.RLTS.T185459A103564869.en. Accessed on 24 February 2023.<br><br>
		Fischer E, Magdalena-Rodriguez C. 2010. Nymphaea thermarum (Nymphaeaceae). Curtis Botanical Magazine 27: 318–327.<br><br>

	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>

</html>