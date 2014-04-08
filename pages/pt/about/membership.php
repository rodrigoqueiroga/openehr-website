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
				<td> Receita bruta anual</td>
			</tr>
			<tr>
				<td> <b id="academicpartner">Parceiro Acadêmico (Academic Partner)</b></td>
				<td> Universidades e outras organizações educacionais</td>
				<td> 
					<ul>
						<li>Habilidade para eleger concomitantemente 1 membro do Corpo Diretivo;</li>
						<li>Participação no planejamento de eventos educacionais e conferencias;</li>
						<li>Subdomínio do Clinical Knowledge Manager (CKM) dentro dos domínios CKM national ou internacional.</li>
					</ul>
				</td>
				<td> TBD</td>
			</tr>
			<tr>
				<td> <b id="nationalpartner">Parceiro Nacional (National Partner)</b><br/>(um por país)</td>
				<td> Ministérios da Saúde ou outro corpo permanente, tipicamente patrocinando / lastreando Programas de e-Saúde (e-health) Nacionais</td>
				<td> 
					<ul>
						<li>Participação no planejamento de eventos educacionais e conferencias;</li>
						<li>Domínio Nacional do Clinical Knowledge Manager (CKM).</li>
					</ul>
				</td>
				<td> Multiplicadores no país com base no Banco Mundial (World Bank)</td>
			</tr>
			<tr>
				<td> <b>Parceiros Patrocinadores (Sponsoring Partner)</b></td>
				<td> Grandes companhias e organizações que desejam prover recursos para elever o perfil da Fundação openEHR e o seu próprio para benefício mútuo</td>
				<td> 
					<ul>
						<li>Visibilidade no sítio openEHR e conferências.</li>
					</ul>
				</td>
				<td> Negociado</td>
			</tr>
			</tbody>
			</table>
				
				
			<h2>Representantes openEHR</h2>
			<p>Representantes openEHR refere-se a individuos em função da capacidade dada pela Direção da Fundação openEHR para formalmente representar a Fundação openEHR em questões openEHR, e liderar atividades localizads em seus respectivos locais(ex. países, grupos de países ou grupos reunidos por meio da língua/cultura com uma ou mais jurisdições). Isto é parte da <a href="/pt/programs/localisation/governance">Estrutura de Governança do Programa de Localização (Localisation Programme governance structure)</a>. Os Representantes devem ser nominado pelo Comitê do Programa de Localização (Localisation Programme Committee - (LPC)) e aprovado pelo Corpo Diretivo.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/pt/_footer.php');?>
