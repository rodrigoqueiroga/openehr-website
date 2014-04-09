<?php
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
			<p>A comunidade  openEHR está revisando formalmente um conjunto de arquétipos para uso clínico em um cenário internacional. Esta revisão está disponível via <a href="http://www.openehr.org/wiki/display/healthmod/Clinical+Knowledge+Manager" target="_blank">ambiente de autoração</a> controlado baseado em Web. A avaliação está em curso sob a supervisão da Dra. Heather Leslie e do Grupo Editorial de Arquétipos.</p>
			
			<h3>Pano de Fundo (Background)</h3>
			<p>Modelos de informações clínicas existem em todos os sistemas computacionais utilizados em cuidados em saúde. Enquanto médicos, enfermeiras e outros profissionais de saúde compartilham diversos conceitos clínicos e podem comunicar de forma efetiva sobre estes conceitos, os computadores não tiveram um padrão de significado para representar informações clínicas. openEHR oferece esta capacidade e ao fazer isso, provê uma plataforma para o processamento de cuidados em saúde. Se não tivermos esta plataforma, então os benefícios do processamento de dados em cuidados em saúde serão muito vagarosos e necessitarão de altíssimo volume de investimento.</p>
			
			<h4>Arquétipos</h4>
			<p>Arquétipos são especificações fundamentais de informações clínicas compartilháveis necessárias ao provimento de cuidado de qualidade em saúde, e tem sido formalmente aceitos como padrão Europeu em 2007 (CEN 13606 Part II) e agora são considerados pela ISO. Cada arquétipo representa uma especificação completa, discreta e o mais inclusiva possível, sempre em termos do modelo de referência openEHR. O modelo de referência em si garante que os atributos chave para registros de informação em saúde (como quem, quando e onde) são cuidados e não precisam ser tratados para cada arquétipo. Posteriormente, o modelo de referência teve 5 diferente classes de entrada que proviam atributos e estruturas necessárias a toda e qualquer informação armazenada em um registro de saúde.</p>
			<p>Arquétipos openEHR oferecem uma grande vantagem em relação aos modelos (templates) HL7 uma vez que dados complexos podem ser especificados de forma que seja compreensível pelos profissionais de saúde e equipe de TI. É uma forma muito eficiente de gerenciar as especificações de informações que desejamos compartilha entre os sistemas de saúde.</p>
			
			<h4>Modelos (Templates)</h4>
			<p>Modelos (Templates) são um significado mais avançado na construção do modelos clínicos; estes são compostos de um ou mais arquétipos onde acrescentamos restrições necessárias ao uso destes arquétipos em um cenário particular. Assim, arquétipos para pressão sanguínea, peso, glicose podem ser usadas para registrar o acompanhamento anual de uma pessoal diabética ou em uma consulta de pré-natal de uma mulher grávida. Isto é, os modelos serão criados  de forma específica para ‘acompanhamento de diabetes’ e ‘consulta pré-natal’.</p>
			
			
			<h2>Terminologia</h2>
			<p>Terminologia é tão antiga quanto os computadores em saúde. Inicialmente usada para minimizar espaço em disco, o uso de terminologias cresceu a ponto de classificar o cuidado em saúde ofertado e, mais recentemente, por meio do SNOME-CT (<a href="http://www.ihtsdo.org/" target="_blank">IHTSDO</a>) para apoiar processos clínicos automatizados. Arquétipos, e o openEHR nesta questão, são planejados para trabalhar com terminologia.</p>
			
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
