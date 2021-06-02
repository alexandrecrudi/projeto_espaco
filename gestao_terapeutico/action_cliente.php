<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$cpf   = (isset($_POST['cpf'])) ? str_replace(array('.','-'), '', $_POST['cpf']): '';
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';
		$foto_atual		  = (isset($_POST['foto_atual'])) ? $_POST['foto_atual'] : '';
		$data_nascimento  = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
		$telefone  		  = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
		$celular   		  = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
		$endereco		  = (isset($_POST['endereco'])) ? $_POST['endereco'] : '';
		$indicado		  = (isset($_POST['indicado'])) ? $_POST['indicado'] : '';
		$status    		  = (isset($_POST['status'])) ? $_POST['status'] : '';
		$planeta  = (isset($_POST['planeta'])) ? $_POST['planeta'] : '';
		$aura  = (isset($_POST['aura'])) ? $_POST['aura'] : '';
		$biotipo  = (isset($_POST['biotipo'])) ? $_POST['biotipo'] : '';
		$padrao_energetico  = (isset($_POST['padrao_energetico'])) ? $_POST['padrao_energetico'] : '';
		$auto_gerado  = (isset($_POST['auto_gerado'])) ? $_POST['auto_gerado'] : '';
		$mn  = (isset($_POST['mn'])) ? $_POST['mn'] : '';
		$mgn  = (isset($_POST['mgn'])) ? $_POST['mgn'] : '';
		$i  = (isset($_POST['i'])) ? $_POST['i'] : '';
		$c  = (isset($_POST['c'])) ? $_POST['c'] : '';
		$encarnacao  = (isset($_POST['encarnacao'])) ? $_POST['encarnacao'] : '';
		$quanto_tempo  = (isset($_POST['quanto_tempo'])) ? $_POST['quanto_tempo'] : '';
		$area_fm  = (isset($_POST['area_fm'])) ? $_POST['area_fm'] : '';
		$area_ra  = (isset($_POST['area_ra'])) ? $_POST['area_ra'] : '';
		$area_rel  = (isset($_POST['area_rel'])) ? $_POST['area_rel'] : '';
		$area_saude  = (isset($_POST['area_saude'])) ? $_POST['area_saude'] : '';
		$area_prof  = (isset($_POST['area_prof'])) ? $_POST['area_prof'] : '';
		$rel_amiz  = (isset($_POST['rel_amiz'])) ? $_POST['rel_amiz'] : '';
		$amor  = (isset($_POST['amor'])) ? $_POST['amor'] : '';
		$profissional  = (isset($_POST['profissional'])) ? $_POST['profissional'] : '';
		$lazer  = (isset($_POST['lazer'])) ? $_POST['lazer'] : '';
		$saude  = (isset($_POST['saude'])) ? $_POST['saude'] : '';
		$financeiro  = (isset($_POST['financeiro'])) ? $_POST['financeiro'] : '';
		$espiritual  = (isset($_POST['espiritual'])) ? $_POST['espiritual'] : '';
		$prosperidade  = (isset($_POST['prosperidade'])) ? $_POST['prosperidade'] : '';
		$dep_quim  = (isset($_POST['dep_quim'])) ? $_POST['dep_quim'] : '';
		$cr  = (isset($_POST['cr'])) ? $_POST['cr'] : '';
		$dif_gravidez  = (isset($_POST['dif_gravidez'])) ? $_POST['dif_gravidez'] : '';
		$trat_psic  = (isset($_POST['trat_psic'])) ? $_POST['trat_psic'] : '';
		$depressao  = (isset($_POST['depressao'])) ? $_POST['depressao'] : '';
		$compreensao  = (isset($_POST['compreensao'])) ? $_POST['compreensao'] : '';
		$aceita_trat  = (isset($_POST['aceita_trat'])) ? $_POST['aceita_trat'] : '';
		$aparelho_corpo  = (isset($_POST['aparelho_corpo'])) ? $_POST['aparelho_corpo'] : '';
		$apometria  = (isset($_POST['apometria'])) ? $_POST['apometria'] : '';
		$tdrsp  = (isset($_POST['tdrsp'])) ? $_POST['tdrsp'] : '';
		$tle  = (isset($_POST['tle'])) ? $_POST['tle'] : '';
		$cura  = (isset($_POST['cura'])) ? $_POST['cura'] : '';
		$ciclo_da_vida  = (isset($_POST['ciclo_da_vida'])) ? $_POST['ciclo_da_vida'] : '';
		$tarot  = (isset($_POST['tarot'])) ? $_POST['tarot'] : '';
		$gfu  = (isset($_POST['gfu'])) ? $_POST['gfu'] : '';
		$graficos  = (isset($_POST['graficos'])) ? $_POST['graficos'] : '';
		$magneto_reiki  = (isset($_POST['magneto_reiki'])) ? $_POST['magneto_reiki'] : '';
		$hooponopono  = (isset($_POST['hooponopono'])) ? $_POST['hooponopono'] : '';
		$constelacao  = (isset($_POST['constelacao'])) ? $_POST['constelacao'] : '';
		$livros  = (isset($_POST['livros'])) ? $_POST['livros'] : '';
		$cd  = (isset($_POST['cd'])) ? $_POST['cd'] : '';
		$orgonite  = (isset($_POST['orgonite'])) ? $_POST['orgonite'] : '';
		$ima  = (isset($_POST['ima'])) ? $_POST['ima'] : '';
		$pai_ativo  = (isset($_POST['pai_ativo'])) ? $_POST['pai_ativo'] : '';
		$pai_idade  = (isset($_POST['pai_idade'])) ? $_POST['pai_idade'] : '';
		$pai_profissao  = (isset($_POST['pai_profissao'])) ? $_POST['pai_profissao'] : '';
		$pai_desenc  = (isset($_POST['pai_desenc'])) ? $_POST['pai_desenc'] : '';
		$pai_desenc_temp  = (isset($_POST['pai_desenc_temp'])) ? $_POST['pai_desenc_temp'] : '';
		$pai_desenc_motivo  = (isset($_POST['pai_desenc_motivo'])) ? $_POST['pai_desenc_motivo'] : '';
		$pai_sep  = (isset($_POST['pai_sep'])) ? $_POST['pai_sep'] : '';
		$pai_sep_temp  = (isset($_POST['pai_sep_temp'])) ? $_POST['pai_sep_temp'] : '';
		$pai_sep_obs  = (isset($_POST['pai_sep_obs'])) ? $_POST['pai_sep_obs'] : '';
		$pai_filho_rel  = (isset($_POST['pai_fiho_rel'])) ? $_POST['pai_filho_rel'] : '';
		$pai_filho_obs  = (isset($_POST['pai_filho_obs'])) ? $_POST['pai_filho_obs'] : '';
		$pai_avos  = (isset($_POST['pai_avos'])) ? $_POST['pai_avos'] : '';
		$mae_ativo  = (isset($_POST['mae_ativo'])) ? $_POST['mae_ativo'] : '';
		$mae_idade  = (isset($_POST['mae_idade'])) ? $_POST['mae_idade'] : '';
		$mae_profissao  = (isset($_POST['mae_profissao'])) ? $_POST['mae_profissao'] : '';
		$mae_desenc  = (isset($_POST['mae_desenc'])) ? $_POST['mae_desenc'] : '';
		$mae_desenc_temp  = (isset($_POST['mae_desenc_temp'])) ? $_POST['mae_desenc_temp'] : '';
		$mae_desenc_motivo  = (isset($_POST['mae_desenc_motivo'])) ? $_POST['mae_desenc_motivo'] : '';
		$mae_sep  = (isset($_POST['mae_sep'])) ? $_POST['mae_sep'] : '';
		$mae_sep_temp  = (isset($_POST['mae_sep_temp'])) ? $_POST['mae_sep_temp'] : '';
		$mae_sep_obs  = (isset($_POST['mae_sep_obs'])) ? $_POST['mae_sep_obs'] : '';
		$mae_filho_rel  = (isset($_POST['mae_filho_rel'])) ? $_POST['mae_filho_rel'] : '';
		$mae_filho_obs  = (isset($_POST['mae_filho_obs'])) ? $_POST['mae_filho_obs'] : '';
		$mae_aborto_tipo  = (isset($_POST['mae_aborto_tipo'])) ? $_POST['mae_aborto_tipo'] : '';
		$mae_avos  = (isset($_POST['mae_avos'])) ? $_POST['mae_avos'] : '';
		$irmaos_m  = (isset($_POST['irmaos_m'])) ? $_POST['irmaos_m'] : '';
		$irmaos_f  = (isset($_POST['irmaos_f'])) ? $_POST['irmaos_f'] : '';
		$irmaos_obs  = (isset($_POST['irmaos_obs'])) ? $_POST['irmaos_obs'] : '';
		$perdeu_filho  = (isset($_POST['perdeu_filho'])) ? $_POST['perdeu_filho'] : '';
		$perdeu_filho_tempo  = (isset($_POST['perdeu_filho_tempo'])) ? $_POST['perdeu_filho_tempo'] : '';
		$relacionamento  = (isset($_POST['relacionamento'])) ? $_POST['relacionamento'] : '';
		$relacionamento_tempo  = (isset($_POST['relacionamento_tempo'])) ? $_POST['relacionamento_tempo'] : '';
		$abuso  = (isset($_POST['abuso'])) ? $_POST['abuso'] : '';
		$abuso_idade  = (isset($_POST['abuso_idade'])) ? $_POST['abuso_idade'] : '';
		$profissao  = (isset($_POST['profissao'])) ? $_POST['profissao'] : '';
		$religiao  = (isset($_POST['religiao'])) ? $_POST['religiao'] : '';
		$casa_tipo  = (isset($_POST['casa_tipo'])) ? $_POST['casa_tipo'] : '';
		$casa_tipo_tempo  = (isset($_POST['casa_tipo_tempo'])) ? $_POST['casa_tipo_tempo'] : '';
		$obs_geral  = (isset($_POST['obs_geral'])) ? $_POST['obs_geral'] : '';

		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    endif;

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if ($nome == '' || strlen($nome) < 3):
				$mensagem .= '<li>Favor preencher o Nome.</li>';
		    endif;

			if ($cpf == ''):
			   $mensagem .= '<li>Favor preencher o CPF.</li>';
		    elseif(strlen($cpf) < 11):
				  $mensagem .= '<li>Formato do CPF inválido.</li>';
		    endif;

			if ($email == ''):
				$mensagem .= '<li>Favor preencher o E-mail.</li>';
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
				  $mensagem .= '<li>Formato do E-mail inválido.</li>';
			endif;

			if ($data_nascimento == ''): 		
				$mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
			else:
				$data = explode('/', $data_nascimento);
				if (!checkdate($data[1], $data[0], $data[2])):
					$mensagem .= '<li>Formato da Data de Nascimento inválido.</li>';
				endif;
			endif;

			if ($telefone == ''): 
				$mensagem .= '<li>Favor preencher o Telefone.</li>';
			elseif(strlen($telefone) < 10):
				  $mensagem .= '<li>Formato do Telefone inválido.</li>';
		    endif;

			if ($celular == ''):
				$mensagem .= '<li>Favor preencher o Celular.</li>';
			elseif(strlen($celular) < 11):
				  $mensagem .= '<li>Formato do Celular inválido.</li>';
			endif;
			
			if ($endereco == '' || strlen($endereco) < 3):
				$mensagem .= '<li>Favor preencher o Endereço.</li>';
			endif;

			if ($indicado == '' || strlen($indicado) < 3):
				$mensagem .= '<li>Favor preencher quem indicou.</li>';
			endif;				

			if ($status == ''):
			   $mensagem .= '<li>Favor preencher o Status.</li>';
			endif;

			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

			// Constrói a data no formato ANSI yyyy/mm/dd
			$data_temp = explode('/', $data_nascimento);
			$data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];
		endif;



		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$nome_foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0):  
				
				
				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
				

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			endif;

			$sql = 'INSERT INTO tab_clientes (nome, email, cpf, data_nascimento, telefone, celular, endereco, indicado, status, foto, planeta, aura, biotipo,padrao_energetico, auto_gerado, mn, mgn, i, c, encarnacao, quanto_tempo, area_fm, area_ra, area_rel, area_saude, area_prof, rel_amiz, amor, profissional, lazer, saude, financeiro, espiritual, prosperidade, dep_quim, cr, dif_gravidez, trat_psic	, depressao, compreensao, aceita_trat, aparelho_corpo, apometria, tdrsp, tle, cura, ciclo_da_vida, tarot, gfu, magneto_reiki, hooponopono, constelacao, livros, cd, orgonite, ima, pai_ativo, pai_idade, pai_profissao, pai_desenc, pai_desenc_temp, pai_desenc_motivo, pai_sep, pai_sep_temp, pai_sep_obs, pai_filho_rel, pai_filho_obs, pai_avos, mae_ativo, mae_idade, mae_profissao, mae_desenc, mae_desenc_temp, mae_desenc_motivo, mae_sep, mae_sep_temp, mae_sep_obs, mae_filho_rel, mae_filho_obs, mae_aborto_tipo, mae_avos, irmaos_m, irmaos_f, irmaos_obs, perdeu_filho, perdeu_filho_tempo, relacionamento, relacionamento_tempo, abuso, abuso_idade, profissao, religiao, casa_tipo, casa_tipo_tempo, obs_geral
) VALUES (:nome, :email, :cpf, :data_nascimento, :telefone, :celular, :endereco, :indicado, :status, :foto, :planeta, :aura, :biotipo, :padrao_energetico, :auto_gerado, :mn, :mgn, :i, :c, :encarnacao, :quanto_tempo, :area_fm, :area_ra, :area_rel, :area_saude, :area_prof, :rel_amiz, :amor, :profissional, :lazer, :saude, :financeiro, :espiritual, :prosperidade, :dep_quim, :cr, :dif_gravidez, :trat_psic, :depressao, :compreensao, :aceita_trat, :aparelho_corpo, :apometria, :tdrsp, :tle, :cura, :ciclo_da_vida, :tarot, :gfu, :magneto_reiki, :hooponopono, :constelacao, :livros, :cd, :orgonite, :ima, :pai_ativo, :pai_idade, :pai_profissao, :pai_desenc, :pai_desenc_temp, :pai_desenc_motivo, :pai_sep, :pai_sep_temp, :pai_sep_obs, :pai_filho_rel, :pai_filho_obs, :pai_avos, :mae_ativo, :mae_idade, :mae_profissao, :mae_desenc, :mae_desenc_temp, :mae_desenc_motivo, :mae_sep, :mae_sep_temp, :mae_sep_obs, :mae_filho_rel, :mae_filho_obs, :mae_aborto_tipo, :mae_avos, :irmaos_m, :irmaos_f, :irmaos_obs, :perdeu_filho, :perdeu_filho_tempo, :relacionamento, :relacionamento_tempo, :abuso, :abuso_idade, :profissao, :religiao, :casa_tipo, :casa_tipo_tempo, :obs_geral
)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':email', $email);
			$stm->bindValue(':cpf', $cpf);
			$stm->bindValue(':data_nascimento', $data_nascimento);
			$stm->bindValue(':telefone', $telefone);
			$stm->bindValue(':celular', $celular);
			$stm->bindValue(':endereco', $endereco);
			$stm->bindValue(':indicado', $indicado);			
			$stm->bindValue(':status', $status);
			$stm->bindValue(':foto', $nome_foto);
			$stm->bindValue(':planeta', $planeta);
			$stm->bindValue(':aura', $aura);
			$stm->bindValue(':biotipo', $biotipo);
			$stm->bindValue(':padrao_energetico', $padrao_energetico);
			$stm->bindValue(':auto_gerado', $auto_gerado);
			$stm->bindValue(':mn', $mn);
			$stm->bindValue(':mgn', $mgn);
			$stm->bindValue(':i', $i);
			$stm->bindValue(':c', $c);
			$stm->bindValue(':encarnacao', $encarnacao);
			$stm->bindValue(':quanto_tempo', $quanto_tempo);
			$stm->bindValue(':area_fm', $area_fm);
			$stm->bindValue(':area_ra', $area_ra);
			$stm->bindValue(':area_rel', $area_rel);
			$stm->bindValue(':area_saude', $area_saude);
			$stm->bindValue(':area_prof', $area_prof);
			$stm->bindValue(':rel_amiz', $rel_amiz);
			$stm->bindValue(':amor', $amor);
			$stm->bindValue(':profissional', $profissional);
			$stm->bindValue(':lazer', $lazer);
			$stm->bindValue(':saude', $saude);
			$stm->bindValue(':financeiro', $financeiro);
			$stm->bindValue(':espiritual', $espiritual);
			$stm->bindValue(':prosperidade', $prosperidade);
			$stm->bindValue(':dep_quim', $dep_quim);
			$stm->bindValue(':cr', $cr);
			$stm->bindValue(':dif_gravidez', $dif_gravidez);
			$stm->bindValue(':trat_psic', $trat_psic);
			$stm->bindValue(':depressao', $depressao);
			$stm->bindValue(':compreensao', $compreensao);
			$stm->bindValue(':aceita_trat', $aceita_trat);
			$stm->bindValue(':aparelho_corpo', $aparelho_corpo);
			$stm->bindValue(':apometria', $apometria);
			$stm->bindValue(':tdrsp', $tdrsp);
			$stm->bindValue(':tle', $tle);
			$stm->bindValue(':cura', $cura);
			$stm->bindValue(':ciclo_da_vida', $ciclo_da_vida);
			$stm->bindValue(':tarot', $tarot);
			$stm->bindValue(':gfu', $gfu);
			$stm->bindValue(':magneto_reiki', $magneto_reiki);
			$stm->bindValue(':hooponopono', $hooponopono);
			$stm->bindValue(':constelacao', $constelacao);
			$stm->bindValue(':livros', $livros);
			$stm->bindValue(':cd', $cd);
			$stm->bindValue(':orgonite', $orgonite);
			$stm->bindValue(':ima', $ima);
			$stm->bindValue(':pai_ativo', $pai_ativo);
			$stm->bindValue(':pai_idade', $pai_idade);
			$stm->bindValue(':pai_profissao', $pai_profissao);
			$stm->bindValue(':pai_desenc', $pai_desenc);
			$stm->bindValue(':pai_desenc_temp', $pai_desenc_temp);
			$stm->bindValue(':pai_desenc_motivo', $pai_desenc_motivo);
			$stm->bindValue(':pai_sep', $pai_sep);
			$stm->bindValue(':pai_sep_temp', $pai_sep_temp);
			$stm->bindValue(':pai_sep_obs', $pai_sep_obs);
			$stm->bindValue(':pai_filho_rel', $pai_filho_rel);
			$stm->bindValue(':pai_filho_obs', $pai_filho_obs);
			$stm->bindValue(':pai_avos', $pai_avos);
			$stm->bindValue(':mae_ativo', $mae_ativo);
			$stm->bindValue(':mae_idade', $mae_idade);
			$stm->bindValue(':mae_profissao', $mae_profissao);
			$stm->bindValue(':mae_desenc', $mae_desenc);
			$stm->bindValue(':mae_desenc_temp', $mae_desenc_temp);
			$stm->bindValue(':mae_desenc_motivo', $mae_desenc_motivo);
			$stm->bindValue(':mae_sep', $mae_sep);
			$stm->bindValue(':mae_sep_temp', $mae_sep_temp);
			$stm->bindValue(':mae_sep_obs', $mae_sep_obs);
			$stm->bindValue(':mae_filho_rel', $mae_filho_rel);
			$stm->bindValue(':mae_filho_obs', $mae_filho_obs);
			$stm->bindValue(':mae_aborto_tipo', $mae_aborto_tipo);
			$stm->bindValue(':mae_avos', $mae_avos);
			$stm->bindValue(':irmaos_m', $irmaos_m);
			$stm->bindValue(':irmaos_f', $irmaos_f);
			$stm->bindValue(':irmaos_obs', $irmaos_obs);
			$stm->bindValue(':perdeu_filho', $perdeu_filho);
			$stm->bindValue(':perdeu_filho_tempo', $perdeu_filho_tempo);
			$stm->bindValue(':relacionamento', $relacionamento);
			$stm->bindValue(':relacionamento_tempo', $relacionamento_tempo);
			$stm->bindValue(':abuso', $abuso);
			$stm->bindValue(':abuso_idade', $abuso_idade);
			$stm->bindValue(':profissao', $profissao);
			$stm->bindValue(':religiao', $religiao);
			$stm->bindValue(':casa_tipo', $casa_tipo);
			$stm->bindValue(':casa_tipo_tempo', $casa_tipo_tempo);
			$stm->bindValue(':obs_geral', $obs_geral);
		
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;


		// Verifica se foi solicitada a edição de dados
		if ($acao == 'editar'):

			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0): 

				// Verifica se a foto é diferente da padrão, se verdadeiro exclui a foto antiga da pasta
				if ($foto_atual <> 'padrao.jpg'):
					unlink("fotos/" . $foto_atual);
				endif;

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;
			else:

			 	$nome_foto = $foto_atual;

			endif;

			$sql = 'UPDATE tab_clientes SET nome=:nome, email=:email, cpf=:cpf, data_nascimento=:data_nascimento, telefone=:telefone, celular=:celular, endereco=:endereco, indicado=:indicado, status=:status, foto=:foto, planeta=:planeta, aura=:aura, biotipo=:biotipo, padrao_energetico=:padrao_energetico, auto_gerado=:auto_gerado, mn=:mn, mgn=:mgn, i=:i, c=:c, encarnacao=:encarnacao, quanto_tempo=:quanto_tempo, area_fm=:area_fm, area_ra=:area_ra, area_rel=:area_rel, area_saude=:area_saude, area_prof=:area_prof, rel_amiz=:rel_amiz, amor=:amor, profissional=:profissional, lazer=:lazer, saude=:saude, financeiro=:financeiro, espiritual=:espiritual, prosperidade=:prosperidade, dep_quim=:dep_quim, cr=:cr, dif_gravidez=:dif_gravidez, trat_psic=:trat_psic, depressao=:depressao, compreensao=:compreensao, aceita_trat=:aceita_trat, aparelho_corpo=:aparelho_corpo, apometria=:apometria, tdrsp=:tdrsp, tle=:tle, cura=:cura, ciclo_da_vida=:ciclo_da_vida, tarot=:tarot, gfu=:gfu, magneto_reiki=:magneto_reiki, hooponopono=:hooponopono, constelacao=:constelacao, livros=:livros, cd=:cd, orgonite=:orgonite, ima=:ima, pai_ativo=:pai_ativo, pai_idade=:pai_idade, pai_profissao=:pai_profissao, pai_desenc=:pai_desenc, pai_desenc_temp=:pai_desenc_temp, pai_desenc_motivo=:pai_desenc_motivo, pai_sep=:pai_sep, pai_sep_temp=:pai_sep_temp, pai_sep_obs=:pai_sep_obs, pai_filho_rel=:pai_filho_rel, pai_filho_obs=:pai_filho_obs, pai_avos=:pai_avos, mae_ativo=:mae_ativo, mae_idade=:mae_idade, mae_profissao=:mae_profissao, mae_desenc=:mae_desenc, mae_desenc_temp=:mae_desenc_temp, mae_desenc_motivo=:mae_desenc_motivo, mae_sep=:mae_sep, mae_sep_temp=:mae_sep_temp, mae_sep_obs=:mae_sep_obs, mae_filho_rel=:mae_filho_rel, mae_filho_obs=:mae_filho_obs, mae_aborto_tipo=:mae_aborto_tipo, mae_avos=:mae_avos, irmaos_m=:irmaos_m, irmaos_f=:irmaos_f, irmaos_obs=:irmaos_obs, perdeu_filho=:perdeu_filho, perdeu_filho_tempo=:perdeu_filho_tempo, relacionamento=:relacionamento, relacionamento_tempo=:relacionamento_tempo, abuso=:abuso, abuso_idade=:abuso_idade, profissao=:profissao, religiao=:religiao, casa_tipo=:casa_tipo, casa_tipo_tempo=:casa_tipo_tempo, obs_geral=:obs_geral';
			
			$sql .= 'WHERE id = :id';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':email', $email);
			$stm->bindValue(':cpf', $cpf);
			$stm->bindValue(':data_nascimento', $data_ansi);
			$stm->bindValue(':telefone', $telefone);
			$stm->bindValue(':celular', $celular);
			$stm->bindValue(':endereco', $endereco);
			$stm->bindValue(':indicado', $indicado);
			$stm->bindValue(':status', $status);
			$stm->bindValue(':planeta', $planeta);
			$stm->bindValue(':aura', $aura);
			$stm->bindValue(':biotipo', $biotipo);
			$stm->bindValue(':padrao_energetico', $padrao_energetico);
			$stm->bindValue(':auto_gerado', $auto_gerado);
			$stm->bindValue(':mn', $mn);
			$stm->bindValue(':mgn', $mgn);
			$stm->bindValue(':i', $i);
			$stm->bindValue(':c', $c);
			$stm->bindValue(':encarnacao', $encarnacao);
			$stm->bindValue(':quanto_tempo', $quanto_tempo);
			$stm->bindValue(':area_fm', $area_fm);
			$stm->bindValue(':area_ra', $area_ra);
			$stm->bindValue(':area_rel', $area_rel);
			$stm->bindValue(':area_saude', $area_saude);
			$stm->bindValue(':area_prof', $area_prof);
			$stm->bindValue(':rel_amiz', $rel_amiz);
			$stm->bindValue(':amor', $amor);
			$stm->bindValue(':profissional', $profissional);
			$stm->bindValue(':lazer', $lazer);
			$stm->bindValue(':saude', $saude);
			$stm->bindValue(':financeiro', $financeiro);
			$stm->bindValue(':espiritual', $espiritual);
			$stm->bindValue(':prosperidade', $prosperidade);
			$stm->bindValue(':dep_quim', $dep_quim);
			$stm->bindValue(':cr', $cr);
			$stm->bindValue(':dif_gravidez', $dif_gravidez);
			$stm->bindValue(':trat_psic', $trat_psic);
			$stm->bindValue(':depressao', $depressao);
			$stm->bindValue(':compreensao', $compreensao);
			$stm->bindValue(':aceita_trat', $aceita_trat);
			$stm->bindValue(':aparelho_corpo', $aparelho_corpo);
			$stm->bindValue(':apometria', $apometria);
			$stm->bindValue(':tdrsp', $tdrsp);
			$stm->bindValue(':tle', $tle);
			$stm->bindValue(':cura', $cura);
			$stm->bindValue(':ciclo_da_vida', $ciclo_da_vida);
			$stm->bindValue(':tarot', $tarot);
			$stm->bindValue(':gfu', $gfu);
			$stm->bindValue(':magneto_reiki', $magneto_reiki);
			$stm->bindValue(':hooponopono', $hooponopono);
			$stm->bindValue(':constelacao', $constelacao);
			$stm->bindValue(':livros', $livros);
			$stm->bindValue(':cd', $cd);
			$stm->bindValue(':orgonite', $orgonite);
			$stm->bindValue(':ima', $ima);
			$stm->bindValue(':pai_ativo', $pai_ativo);
			$stm->bindValue(':pai_idade', $pai_idade);
			$stm->bindValue(':pai_profissao', $pai_profissao);
			$stm->bindValue(':pai_desenc', $pai_desenc);
			$stm->bindValue(':pai_desenc_temp', $pai_desenc_temp);
			$stm->bindValue(':pai_desenc_motivo', $pai_desenc_motivo);
			$stm->bindValue(':pai_sep', $pai_sep);
			$stm->bindValue(':pai_sep_temp', $pai_sep_temp);
			$stm->bindValue(':pai_sep_obs', $pai_sep_obs);
			$stm->bindValue(':pai_filho_rel', $pai_filho_rel);
			$stm->bindValue(':pai_filho_obs', $pai_filho_obs);
			$stm->bindValue(':pai_avos', $pai_avos);
			$stm->bindValue(':mae_ativo', $mae_ativo);
			$stm->bindValue(':mae_idade', $mae_idade);
			$stm->bindValue(':mae_profissao', $mae_profissao);
			$stm->bindValue(':mae_desenc', $mae_desenc);
			$stm->bindValue(':mae_desenc_temp', $mae_desenc_temp);
			$stm->bindValue(':mae_desenc_motivo', $mae_desenc_motivo);
			$stm->bindValue(':mae_sep', $mae_sep);
			$stm->bindValue(':mae_sep_temp', $mae_sep_temp);
			$stm->bindValue(':mae_sep_obs', $mae_sep_obs);
			$stm->bindValue(':mae_filho_rel', $mae_filho_rel);
			$stm->bindValue(':mae_filho_obs', $mae_filho_obs);
			$stm->bindValue(':mae_aborto_tipo', $mae_aborto_tipo);
			$stm->bindValue(':mae_avos', $mae_avos);
			$stm->bindValue(':irmaos_m', $irmaos_m);
			$stm->bindValue(':irmaos_f', $irmaos_f);
			$stm->bindValue(':irmaos_obs', $irmaos_obs);
			$stm->bindValue(':perdeu_filho', $perdeu_filho);
			$stm->bindValue(':perdeu_filho_tempo', $perdeu_filho_tempo);
			$stm->bindValue(':relacionamento', $relacionamento);
			$stm->bindValue(':relacionamento_tempo', $relacionamento_tempo);
			$stm->bindValue(':abuso', $abuso);
			$stm->bindValue(':abuso_idade', $abuso_idade);
			$stm->bindValue(':profissao', $profissao);
			$stm->bindValue(':religiao', $religiao);
			$stm->bindValue(':casa_tipo', $casa_tipo);
			$stm->bindValue(':casa_tipo_tempo', $casa_tipo_tempo);
			$stm->bindValue(':obs_geral', $obs_geral);
			$stm->bindValue(':foto', $nome_foto);
			$stm->bindValue(':id', $id);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;


		// Verifica se foi solicitada a exclusão dos dados
		if ($acao == 'excluir'):

			// Captura o nome da foto para excluir da pasta
			$sql = "SELECT foto FROM tab_clientes WHERE id = :id AND foto <> 'padrao.jpg'";
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$stm->execute();
			$cliente = $stm->fetch(PDO::FETCH_OBJ);

			if (!empty($cliente) && file_exists('fotos/'.$cliente->foto)):
				unlink("fotos/" . $cliente->foto);
			endif;

			// Exclui o registro do banco de dados
			$sql = 'DELETE FROM tab_clientes WHERE id = :id';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		endif;
		?>

	</div>
</body>
</html>