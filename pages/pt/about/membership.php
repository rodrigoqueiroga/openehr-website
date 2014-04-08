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
						<li>Decisões Estratégicas para A Fundação openEHR.</li>
					</ul>
				</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2>Organizações Membro - Parcerias</h2>
			<p>A Fundação openEHR estabelece uma categoria de membros para Organizações conhecida como Parceria, que inclui 4 tipos. Tornar-se um Parceiro da Fundação envolve uma contribuição financeira, determinada com base no tipo da organização. Os tipos de membro Parceiros são os seguintes:</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Categoria</th>
				<th> Descrição</th>
				<th> Benefícios</th>
				<th> Financeiro<br/>Basis</th>
			</tr>
			<tr>
				<td> <b id="industrypartner">Parceiro da Área (Industry Partner)</b></td>
				<td> Desenvolverdores de Software e vendedores que usam openEHR</td>
				<td> 
					<ul>
						<li>Habilidade de eleger concomitantemente 2 membros do Corpo Diretivo;</li>
						<li>Direito a contribuir para o deenvolvimento do processo de Acreditação/Certificação;</li>
						<li>Direito a propor que sua solução seja testada nos critérios de certificação openEHR;</li>
						<li>Visibilidade no sítio openEHR e direito a inserir notícias no noticiário do ramo e em eventos;</li>
						<li>Participação no planejamento de eventos educacionais e conferencias;</li>
						<li>Subdomínio do Clinical Knowledge Manager (CKM) dentro dos domínios CKM national ou internacional;</li>
						<li>Direito a revisão e veto (> 2/3 maioria com quorum) em mudança nas especificações openEHR.</li>
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
