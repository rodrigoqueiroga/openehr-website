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
			
			<h4>Arquétipos e Terminologia</h4>
			<p>Cada termo em um arquétipo pode ser unificado a uma terminologia para melhor compreensão da intenção do autor. Além disso, os arquétipos permitem a expressão de subconjuntos para determinar os mais apropriado conjuntos de termos de valores em um  ponto de dados específico. Isto é conhecido como ‘definição de restrição’ e  é um espaço reservado  para um conjunto de valores que é oferecido ao usuário dentro da aplicação.</p>
			
			<h4>Modelos (Templates) and Terminologia</h4>
			<p>Terminologias usadas no Cuidado à Saúde incluem <a href="http://www.who.int/classifications/icd/en/" target="_blank">ICD-10</a> (e seus  predecessores ICD-9), <a href="http://www.ihtsdo.org/snomed-ct/" target="_blank">SNOMED-CT</a>, <a href="http://loinc.org/" target="_blank">LOINC</a> e muitos outro.</p>
			<p>A maioria das terminologias utiliza codigos como identificadores ou referências para cada termo ou conceito individual. Códigos e identificadores são geralmente para auxiliar o processamento por computador em lugar de pessoas.</p>
			
			<h4>Códigos, Registros Eletrônicos em Saúde (EHRs) e Interoperabilidade Semântica</h4>
			<p>Houve-se com frequência que dados codificados são essenciais para a interoperabilidade semântica e suporte a decisão. Codificação é o uso de símbolos, ou identificadores alfanuméricos para assinalar itens de dado como referência a conceitos ou termos oriundos de um vocabulário ou ontologia de consenso. Codificação, pode, em várias circunstâncias ter o mesmo valor. Mas isto acontece por um preço. Este <a href="http://www.openehr.org/wiki/display/healthmod/Codes%2C+EHRs+and+Semantic+Interoperability" target="_blank">artigo</a> faz um balanço e provoca as questões a serem enfrentadas por aqueles que fazem recomendações para Registros Eletrônicos em Saúde e a Interoperabilidade Semântica.</p>
			
			
			<h2>Governança do Conhecimento Clínico (Clinical Knowledge Governance)</h2>
			<p>O <a href="documentation">Clinical Knowledge Manager (CKM)</a> (available <a href="http://www.openehr.org/ckm/" target="_blank">here</a>) openEHR é uma aplicação on line que suporta a governance do conhecimento dentro e através da corporação de Saúde. Na prática, é um sistema para desenvolvimento colaborativo, gerenciamento e publicação de um extenso conjunto de recursos de conhecimentos clínicos incluindo arquétipos, modelos (templates) e subconjuntos de terminologia.</p>
			
			
			<h2>Processo clínico incluindo orientações, fluxo de trabalho e os caminhos</h2>
			<p>O objetivo de todo este trabalho é apoiar o processamento automatizado de informações em saúde para assistir pessoas e seus provedores de cuidados de saúde em obter os melhores resultados de saúde possíveis. Um grande esforço de trabalho e pesquisa foi despendido no estabelecimento de maneiras de prover esta assistência. Com o openEHR, é possível pela primeira vez expressar declarações de processos dependentes de informações em saúde (como tomar prednisolona 50mg por dia, se a medida de pico de fluxo cai abaixo de 200 L / min em duas manhãs consecutives) usando termos formais. Isto é em virtude do openEHR possuir uma linguagem de recuperação de registros que permite a construção de sentenças com base em arquétipos que especificam a informação.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
