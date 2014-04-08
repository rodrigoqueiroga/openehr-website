<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Associados';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Podem participar da Fundação diretamente Membros Individuais e Parceiros (Organizações Membro), com participação indireta via filiação nacional, como ilustrado abaixo.</p>
			<p style="text-align:center;"><img src="/files/about/MembershipStructure.png" alt="openEHR Foundation membership categories" title="openEHR Foundation membership categories" style="border: solid 1px #CCCCCC;"></p>	
		
			
			<h2 id="individualmembership">Adesão individual</h2>
			<p>A Adesão individual ao openEHR é gratuita. Existem várias categorias de adesão, baseadas na experiência e responsabilidade. A transição de um nível de envolvimento para o próximo ocorre com base no mérito, de maneira similar ao conceito de 'meritocracia' do Apache Software Foundation.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Categoria </th>
				<th> Como obter</th>
				<th> Direitos e Responsabilidades</th>
			</tr>
			<tr>
				<td> <b>Membro</b></td>
				<td> Assinatura à(s) Lista(s) de Discussão openEHR.</td>
				<td> 
					<ul>
						<li>Podem participar em todas as reuniões, grupos de trabalho online.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Contribuição<br/>Member</b>	</td>
				<td> Cumprindo os critérios de qualificação, eleitos pelo Comitê do Programa.</td>
				<td> 
					<ul>
						<li>Pode ser um membro dos grupos e comitês de projeto do Programa;</li>
						<li>Pode votar em reuniões.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Qualificado<br/>Member</b></td>
				<td> Eleito pelo Comitê do Programa como relevante.</td>
				<td> 
					<ul>
						<li>Direito a assumir papel formal em grupos de Projetos e Programas;</li>
						<li>Direito a realizar alterações em entregáveis (deliverables);</li>
						<li>Direito a inserir novidades nas notícias da comunidade, versões e eventos;</li>
						<li>Direito a eleger 2 Membros do Corpo Diretivo openEHR.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Membro<br/>do Corpo<br/>Diretivo<br/></b>(2 posições)</td>
				<td> Nominado e eleito por Membros Qualificados.</td>
				<td> 
					<ul>
						<li>Strategic decision-making for the openEHR Foundation.</li>
					</ul>
				</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2>Organisational Membership - Partners</h2>
			<p>The openEHR Foundation will establish an Organisational membership category known as Partners, which includes four types. Becoming a Foundation Partner involves the organisation making a financial contribution, determined in a way that depends on the type of organisation. The Partner member types are as follows:</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category</th>
				<th> Description</th>
				<th> Benefits</th>
				<th> Financial<br/>Basis</th>
			</tr>
			<tr>
				<td> <b id="industrypartner">Industry Partner</b></td>
				<td> Software developers and vendors using openEHR</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 2 Management Board members;</li>
						<li>Right to contribute to development of accreditation/certification process;</li>
						<li>Right to propose their solutions being tested against openEHR certification criteria;</li>
						<li>Visibility on openEHR website and right to post to the industry news and events;</li>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain;</li>
						<li>Right of review and veto (> 2/3 majority with quorum) openEHR specification changes.</li>
					</ul>
				</td>
				<td> Annual gross revenue</td>
			</tr>
			<tr>
				<td> <b id="academicpartner">Academic Partner</b></td>
				<td> Universities and other educational organisations</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 1 Management Board member;</li>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain.</li>
					</ul>
				</td>
				<td> TBD</td>
			</tr>
			<tr>
				<td> <b id="nationalpartner">National Partner</b><br/>(one per country)</td>
				<td> Ministries of Health or other permanent bodies, typically sponsoring / funding national e-health Programs</td>
				<td> 
					<ul>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) national domain.</li>
					</ul>
				</td>
				<td> Based on World Bank country multipliers</td>
			</tr>
			<tr>
				<td> <b>Sponsoring Partner</b></td>
				<td> Large companies or organisations who want to provide resources to raise the profile of openEHR and their own organisation for mutual benefit</td>
				<td> 
					<ul>
						<li>Visibility on opneEHR website and conferences.</li>
					</ul>
				</td>
				<td> Negotiated</td>
			</tr>
			</tbody>
			</table>
				
				
			<h2>openEHR Representatives</h2>
			<p>openEHR Representatives refer to individuals given the capacity by the openEHR Foundation Board to formally represent the openEHR Foundation on openEHR matters, and lead localisation activities in respective locales (e.g. countries, group of countries or language/culture bound groups with one or more jurisdictions). This is part of the <a href="/pt/programs/localisation/governance">Localisation Programme governance structure</a>. The Representatives need to be nominated by the Localisation Programme Committee (LPC) and approved by the Board.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/pt/_footer.php');?>
