﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');
$PageName = 'Página principal';
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header_top.php');
?>
	<div id="MainArea" style="height:340px">

		<div id="WhatFrame">
			<img src="/gui/WhatFrame.png" alt="What is openEHR image" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="/es/what_is_openehr" alt="What is openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">¿Qué es <br/>openEHR?</h1>
				<p>openEHR is about enabling ICT to effectively support all aspects of healthcare.
				<br/><a href="/es/what_is_openehr" style="line-height:200%;">Aprender más</a></p>
			</div>
		</div>
		
		<div id="WhoFrame">
			<img src="/gui/WhoFrame.png" alt="Who is using openEHR image" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="/es/who_is_using_openehr" alt="Who is using openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">¿Quiénes utilizan <br/>openEHR?</h1>
				<p>Companies, governments, universities, research centres all around the world.
				<br/><a href="/es/who_is_using_openehr" style="line-height:200%;">Aprender más</a></p>
			</div>
		</div>

		<div id="AboutFrame">
			<img src="/gui/AboutFrame.png" alt="About openEHR Foundation image" usemap="#about"/>
			<map name="about">
			  <area shape="rect" coords="0,0,220,150" href="/es/about/foundation" alt="About openEHR Foundation" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">Sobre<br/>Fundación</h1>
				<p>openEHR Foundation is open for everybody to join and participate.
				<br/><a href="/es/about/foundation"  style="line-height:200%;">Aprender más</a></p>
			</div>
		</div>
			
		<div id="ProgramsFrame">
			<img src="/gui/ProgramsFrame.png" alt="The openEHR programs image" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="/es/openehr_programs" alt="openEHR Programs" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">openEHR<br/>Programas</h1>
				<p>4 openEHR Programas: Especificación, Modelos Clínicos, Software, Localización
				<br/><a href="/es/openehr_programs" style="line-height:200%;">Aprender más</a></p>
			</div> 
		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>