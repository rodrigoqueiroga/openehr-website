﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Programas de Modelos Clínicos';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Introdução</h2>
			<p>O espaço Modelos de Informação em Saúde (Health Information Models) é para discussões sobre modelos formais de conteúdo do domínio saúde. No Framework openEHR há uma série de inovações que o tornam relativamente simples para especificar e compartilhar conteúdo clínico. Os fundamentos são modelos clínicos, consistidos de arquétipos e modelos (templates). Estes modelos necessitam de terminologia e, finalmente os modelos precisam suportar processos clínicos automatizados, oferecendo aos profissionais clínicos apoio à decisão e sugerindo opções de qualidade no cuidado sob a forma de linhas guia clínicas computadorizadas.</p>
			
			
			<h2>Modelos Clínicos</h2>
			<p>The openEHR community is now formally reviewing a set of archetypes for clinical use in an international setting. This is available via a web-based controlled <a href="http://www.openehr.org/wiki/display/healthmod/Clinical+Knowledge+Manager" target="_blank">authoring environment</a>. The evaluation is proceeding under the guidance of Dr Heather Leslie and the Archetype Editorial Group.</p>
			
			<h3>Background</h3>
			<p>Models of clinical information exist in every computer system that is used in health care. While doctors, nurses and other health professionals share many clinical concepts and can communicate very effectively about these concepts, computers have not had a standard means of representing clinical information. openEHR offers this capability and in doing so provides a platform for health care computing. If we do not have such a platform then the benefits of computing in health care will be very slow coming and require absolutely massive investment.</p>
			
			<h4>Archetypes</h4>
			<p>Archetypes are the fundamental shareable specifications of clinical information we need to provide quality health care, and have been formally accepted as a European standard in 2007 (CEN 13606 Part II) and now being considered by ISO. Each archetype represents a whole, discrete specification which is as inclusive as possible, always in terms of the openEHR reference model. The reference model itself guarantees that the key attributes for information in health records (such as who, when and where) are already taken care of and do not need to be addressed in each archetype. Further, the reference model has 5 different entry classes which provide the attributes and structures required for all the different sorts of information stored in a health record.</p>
			<p>openEHR archetypes offer great advantage over HL7 templates as complex data can be specified in a manner that is understandable to health professionals and IT staff. It is a very efficient way to manage the specification of information we want to share between health care systems.</p>
			
			<h4>Templates</h4>
			<p>Templates are a further means of building clinical models; these are composed of one or more archetypes and add further constraints required for the use of those archetypes in a particular setting. Thus, archetypes for blood pressure, weight and blood sugar may be used when recording an annual review of a diabetic person or in an antenatal visit by a pregnant woman. That is to say, templates will be created that are specific to 'diabetic review' and 'antenatal visit'.</p>
			
			
			<h2>Terminology</h2>
			<p>Terminology is as old as computers in health care. Initially used to minimise disk space, the use of terminologies has grown to classify health care offered and more recently, through use of SNOMED-CT (<a href="http://www.ihtsdo.org/" target="_blank">IHTSDO</a>) to support automated clinical process. Archetypes, and openEHR for that matter, are designed to work with terminology.</p>
			
			<h4>Archetypes and Terminolofy</h4>
			<p>Every term in an archetype can be 'bound' to a terminology to better understand the authors intent. Further, archetypes allow expression of subsets to determine which terms are appropriate values at a given data point. This is called a 'constraint definition' and is really a placeholder for a valueset that is offered to the user within the application.</p>
			
			<h4>Templates and Terminology</h4>
			<p>Terminologies used in Healthcare include <a href="http://www.who.int/classifications/icd/en/" target="_blank">ICD-10</a> (and its predecessor ICD-9), <a href="http://www.ihtsdo.org/snomed-ct/" target="_blank">SNOMED-CT</a>, <a href="http://loinc.org/" target="_blank">LOINC</a> and many others.</p>
			<p>Most terminologies use codes as identifiers or references to each individual term or concept. Codes and identifiers are generally to aid processing by computer rather than humans. They come at a price.</p>
			
			<h4>Codes, EHRs and Semantic Interoperability</h4>
			<p>One often hears that coded data are essential for semantic interoperability and decision support. Coding is the use of symbolic,  or alphanumeric identifiers to tag data items as referring to concepts or terms from an agreed vocabulary or ontology. Coding, may, in many circumstances have some value. But it also comes at a price. This <a href="http://www.openehr.org/wiki/display/healthmod/Codes%2C+EHRs+and+Semantic+Interoperability" target="_blank">article</a> looks at the balance sheet to tease out the issues facing those making recommendations for electronic health records and semantic interoperability.</p>
			
			
			<h2>Clinical Knowledge Governance</h2>
			<p>The openEHR <a href="documentation">Clinical Knowledge Manager (CKM)</a> (available <a href="http://www.openehr.org/ckm/" target="_blank">here</a>) is an online application that supports knowledge governance within and across the health enterprise. In practice, it is a system for collaborative development, management and publishing of a wide range of clinical knowledge resources including archetypes, templates and terminology subsets.</p>
			
			
			<h2>Clinical process including guidelines, workflow and pathways</h2>
			<p>The aim of all this work is to support the automated processing of health information to assist people and their health care providers in achieving the best possible health outcomes. A great deal of work and research has gone into establishing the means of providing this assistance. With openEHR, it is possible for the first time to express the process statements that depend on health information (such as take prednisolone 50mg daily if the peak flow measurement drops below 200 L/min on two consecutive mornings) in formal terms. This is because openEHR has a language for querying the record that allows statements to be made based on the archetypes that specify the information.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
