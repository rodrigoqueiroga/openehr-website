﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Miembros';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The details of membership to the Localisation Programme is explained in the <a href="governance">Governance section</a>, but basicaly these are:</p>
			<p><em>1) Qualified Members:</em> these are the people who will do the actual work with substantial understanding of openEHR, experience and skill set. Current members are:</p>
			<ul>
				<li>Shinji Kobayashi (Japan / Ehime University)</li>
				<li>Eizen Kimura (Japan / Ehime University)</li>
				<li>Erik Sundvall (Sweden / Link&ouml;ping University)</li>
				<li>Rong Chen (Sweden / Cambio Systems)</li>
				<li>Pablo Pazos (Uruguay / Independent ICT)</li>
				<li>Jussara R&ouml;tzsch (Brazil / Independent Consultant and Ministry of Health)</li>
				<li>Nuno Miguel Monteiro (Portugal / Critical Software)</li>
				<li>Ricardo Correia (Portugal / University of Porto)</li>
				<li>Sergio Carmona (Chile / Obstetrics &amp; Gynecology MD)</li>
				<li>Ian McNicoll (UK / Ocean Informatics)</li>
				<li>Thomas Beale (UK / Ocean Informatics )</li>
				<li>Sebastian Garde (Germany / Ocean Informatics)</li>
				<li>Shahla Fozonkhah (Australia / Ocean Informatics)</li>
				<li>Sam Heard (Australia / Ocean Informatics)</li>
				<li>Alastair Kenworthy (New Zealand / Ministry of Health)</li>
				<li>Chris Paton (New Zealand / University of Auckland)</li>
				<li>David Hay (New Zealand / Orion Health &amp; HL7 NZ)</li>
				<li>Jim Warren (New Zealand / University of Auckland)</li>
				<li>Koray Atalag (New Zealand / University of Auckland)</li>
				<li>Rowena Cullen (New Zealand / Victoria University of Wellington)</li>
			</ul>
			<p><em>2) Local Members:</em> these are enthusiastic individuals in a particular locale who have an interest in and potential to contribute to openEHR. They will be under each country in the Countries page.</p>
			<p><em>3) Programme Committe:</em> qualified and elected members with decision making responsibility ( between 5 and 9 individuals)</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>