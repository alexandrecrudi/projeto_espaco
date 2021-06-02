<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="shortcut icon" href="shortcut.png">
	<?php include 'css/estilo_inline.php';?>
</head>
<body>
	<div class="topo">
		<div class="containertopo">
			<div class="logo">
				<img src="logo.png">
			</div>
			<div class="menu">
				<ul>
					
					
					
					<li><a href="#">Sair</a></li>
					<li><a href="#">Financeiro</a></li>
					<li><a href="#">Terapias</a></li>
					<li><a href="index.php">Clientes</a></li>
				</ul>
			</div>
		</div>
	</div>
	 
	<div class='container'>
		<fieldset>
			
			<h1>Formulário - Cadastro de Cliente</h1>
			
			<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto">
			  	</div>

			    <div class="form-group">
			      <label for="status">Status</label>
			      <select class="form-control" name="status" id="status">
				    <option value="">Selecione o Status</option>
				    <option value="Ativo" selected>Ativo</option>
				    <option value="Inativo">Inativo</option>
				  </select>
				  <span class='msg-erro msg-status'></span>
			    </div>

			    <div class="form-group">
			      <label for="nome">Nome</label>
			      <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome">
			      <span class='msg-erro msg-nome'></span>
			    </div>

			    <div class="form-group">
			      <label for="email">E-mail</label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
			      <span class='msg-erro msg-email'></span>
			    </div>

			    <div class="form-group">
			      <label for="cpf">CPF</label>
			      <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" placeholder="Informe o CPF">
			      <span class='msg-erro msg-cpf'></span>
			    </div>
			    <div class="form-group">
			      <label for="data_nascimento">Data de Nascimento</label>
			      <input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" name="data_nascimento">
			      <span class='msg-erro msg-data'></span>
			    </div>
			    <div class="form-group">
			      <label for="telefone">Telefone</label>
			      <input type="telefone" class="form-control" id="telefone" maxlength="12" name="telefone" placeholder="Informe o Telefone">
			      <span class='msg-erro msg-telefone'></span>
			    </div>
			    <div class="form-group">
			      <label for="celular">Celular</label>
			      <input type="celular" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
			      <span class='msg-erro msg-celular'></span>
			    </div>
			    <div class="form-group">
			      <label for="endereco">Endereço</label>
			      <input type="endereco" class="form-control" id="endereco" maxlength="" name="endereco" placeholder="Informe o Endereço">
			      <span class='msg-erro msg-endereco'></span>
			    </div>
			    <div class="form-group">
			      <label for="indicado">Quem indicou?</label>
			      <input type="text" class="form-control" id="indicado" maxlength="" name="indicado" placeholder="Nome de quem indicou">
			      <span class='msg-erro msg-indicado'></span>
			    </div>				

			<legend><h1>Avaliação</h1></legend>			
				
				<div class="form-group  avaliacao">
				  <label for="planeta">Planeta</label>
				  <select class="form-control" name="planeta" id="planeta">
					<option value="">Selecione Opção</option>
					<option value="Evolução">4 / 5 - Em Evolução</option>
					<option value="Indigo">5 - Indigo</option>
					<option value="Cristal">6 - Cristal</option>
					<option value="Rubi">7 - Rubi</option>
					<option value="Diamante">8 - Diamante</option>
				  </select>
				  <span class='msg-erro msg-planeta'></span>
				</div>				

				<div class="form-group  avaliacao">
				  <label for="aura">Aura</label>
				  <select class="form-control" name="aura" id="aura">
					<option value="">Selecione Opção</option>
					<option value="Vermelha">Vermelha</option>
					<option value="Laranja">Laranja</option>
					<option value="Amarela">Amarela</option>
					<option value="Verde">Verde</option>
					<option value="Azul">Azul</option>
					<option value="Indigo">Índigo</option>
					<option value="Violeta">Violeta</option>
				  </select>
				  <span class='msg-erro msg-aura'></span>
				</div>	

				<div class="form-group  avaliacao">
				  <label for="biotipo">Biotipo</label>
				  <select class="form-control" name="biotipo" id="biotipo">
					<option value="">Selecione Opção</option>
					<option value="1">1 – SANGUÍNEO(CARDÍACO/PENSAMENTO)</option>
					<option value="2">2 – FLEUMÁTICO(RENAL/SENTIMENTO)</option>
					<option value="3">3 – MELANCÓLICO(PULMONAR/SENSAÇÃO)</option>
					<option value="4">4 – COLÉRICO (HEPÁTICO/INTUIÇÃO)</option>
				  </select>
				  <span class='msg-erro msg-biotipo'></span>
				</div>
				
				<div class="form-group  avaliacao">
				  <label for="padrao_energetico">Padrão Vibratório</label>
				  <select class="form-control" name="padrao_energetico" id="padrao_energetico">
					<option value="">Selecione Opção</option>
					<option value="1">1 – Obsessor</option>
					<option value="2">3 – Obsessor Próximo</option>
					<option value="3">5 – Emocional</option>
					<option value="4">7 – Equilíbrio</option>
				  </select>
				  <span class='msg-erro msg-padrao_energetico'></span>
				</div>				

				<div class="form-group  avaliacao">
				  <label for="auto_gerado">Auto Gerado</label>
				  <select class="form-control" name="auto_gerado" id="auto_gerado">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-auto_gerado'></span>
				</div>
				
				<div class="form-group  avaliacao">
				  <label for="mn">TMN</label>
				  <select class="form-control" name="mn" id="mn">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-mn'></span>
				</div>

				<div class="form-group  avaliacao">
				  <label for="mn">MG</label>
				  <select class="form-control" name="mgn" id="mgn">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-mgn'></span>
				</div>				

				<div class="form-group  avaliacao">
				  <label for="i">Geopatologia</label>
				  <select class="form-control" name="i" id="i">
					<option value="">Selecione Opção</option>
					<option value="0">0%</option>
					<option value="10">10%</option>
					<option value="10">20%</option>
					<option value="10">30%</option>
					<option value="10">40%</option>
					<option value="10" class="optionred">50%</option>
					<option value="10" class="optionred">60%</option>
					<option value="10" class="optionred">70%</option>
					<option value="10" class="optionred">80%</option>
					<option value="10" class="optionred">90%</option>
					<option value="10" class="optionred">100%</option>
				  </select>
				  <span class='msg-erro msg-i'></span>
				</div>					

				<div class="form-group avaliacao">
				  <label for="c">CL</label>
				  <select class="form-control" name="c" id="c">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Mental</option>
					<option value="sim">Emocional</option>
					<option value="sim">Emocional / Mental</option>
				  </select>
				  <span class='msg-erro msg-c'></span>
				</div>
				<div class="form-group  avaliacao">
				  <label for="encarnacao">Encarnação</label>
				  <select class="form-control" name="encarnacao" id="encarnacao">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-encarnacao'></span>
				</div>

			    <div class="form-group avaliacao">
			      <label for="quanto_tempo">A Quanto Tempo?</label>
			      <input type="text" class="form-control" id="quanto_tempo" maxlength="" name="quanto_tempo" placeholder="Informe a Quanto Tempo">
			      <span class='msg-erro msg-quanto_tempo'></span>
			    </div>
				
				<legend><h1>Área</h1></legend>

				<div class="form-group avaliacao">
				  <label for="area_ra">Relacionamento Íntimo</label>
				  <select class="form-control" name="area_ra" id="area_ra">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-area_ra'></span>
				</div>
				
				<div class="form-group avaliacao">
				  <label for="area_fm">Família</label>
				  <select class="form-control" name="area_fm" id="area_fm">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-area_fm'></span>
				</div>					

				<div class="form-group avaliacao">
				  <label for="area_rel">Financeiro</label>
				  <select class="form-control" name="area_rel" id="area_rel">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-area_rel'></span>
				</div>

				<div class="form-group avaliacao">
				  <label for="area_prof">Profissional</label>
				  <select class="form-control" name="area_prof" id="area_prof">
					<option value="">Selecione Opção</option>
					<option value="nao">Não</option>
					<option value="sim">Sim</option>
				  </select>
				  <span class='msg-erro msg-area_prof'></span>
				</div>	
				
				<legend><h1>Niveis (%)</h1></legend>
				
				<div class="form-group avaliacao">
			      <label for="rel_amiz">Relacionamento Íntimo</label>
			      <input type="text" class="form-control" id="rel_amiz" maxlength="" name="rel_amiz" placeholder="Informe Percentual">
			      <span class='msg-erro msg-rel_amiz'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="amor">Familia</label>
			      <input type="text" class="form-control" id="amor" maxlength="" name="amor" placeholder="Informe Percentual">
			      <span class='msg-erro msg-amor'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="profissional">Profissional</label>
			      <input type="text" class="form-control" id="profissional" maxlength="" name="profissional" placeholder="Informe Percentual">
			      <span class='msg-erro msg-profissional'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="lazer">Lazer</label>
			      <input type="text" class="form-control" id="lazer" maxlength="" name="lazer" placeholder="Informe Percentual">
			      <span class='msg-erro msg-lazer'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="saude">Saúde</label>
			      <input type="text" class="form-control" id="saude" maxlength="" name="saude" placeholder="Informe Percentual">
			      <span class='msg-erro msg-saude'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="financeiro">Financeiro</label>
			      <input type="text" class="form-control" id="financeiro" maxlength="" name="financeiro" placeholder="Informe Percentual">
			      <span class='msg-erro msg-financeiro'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="espiritual">Espiritual</label>
			      <input type="text" class="form-control" id="espiritual" maxlength="" name="espiritual" placeholder="Informe Percentual">
			      <span class='msg-erro msg-espiritual'></span>
			    </div>
				
				 <div class="form-group avaliacao">
			      <label for="prosperidade">Prosperidade</label>
			      <input type="text" class="form-control" id="prosperidade" maxlength="" name="prosperidade" placeholder="Informe Percentual">
			      <span class='msg-erro msg-prosperidade'></span>
				</div>
				
				<legend><h1></h1></legend>
				
				<div class="form-group  avaliacao">
				  <label for="dep_quim">Dependência Química</label>
				  <select class="form-control" name="dep_quim" id="dep_quim">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-dep_quim'></span>
				</div>
				
				<div class="form-group  avaliacao">
				  <label for="cr">CR</label>
				  <select class="form-control" name="cr" id="cr">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-cr'></span>
				</div>
				<div class="form-group  avaliacao">
				  <label for="dif_gravidez">Dif. Gravidez</label>
				  <select class="form-control" name="dif_gravidez" id="dif_gravidez">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-dif_gravidez'></span>
				</div>
				<div class="form-group  avaliacao">
				  <label for="trat_psic">Tratamento Psíquico</label>
				  <select class="form-control" name="trat_psic" id="trat_psic">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-trat_psic'></span>
				</div>				
				<div class="form-group  avaliacao">
				  <label for="depressao">Depressão</label>
				  <select class="form-control" name="depressao" id="depressao">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-depressao'></span>
				</div>
				<div class="form-group  avaliacao">
				  <label for="compreensao">Compreensão</label>
				  <select class="form-control" name="compreensao" id="compreensao">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-compreensao'></span>
				</div>
				
				<div class="form-group  avaliacao">
				  <label for="aceita_trat">Aceita Tratamento</label>
				  <select class="form-control" name="aceita_trat" id="aceita_trat">
					<option value="">Selecione Opção</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-aceita_trat'></span>
				</div>
				
				<div class="form-group  avaliacao">
				  <label for="aparelho_corpo">Algum aparelho fixo no corpo</label>
				  <select class="form-control" name="aparelho_corpo" id="aparelho_corpo">
					<option value="">Selecione Opção</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-aparelho_corpo'></span>
				</div>

				<legend><h1>Histórico Familiar</h1></legend>
				<!-- Dados Pai -->
				<h4>Histórico do Pai</h4>
				<div class="form-group  avaliacao">
				  <label for="pai_ativo">Pai</label>
				  <select class="form-control" name="pai_ativo" id="pai_ativo">
					<option value="">Selecione Opção</option>
					<option value="ativo">Ativo</option>
					<option value="desencarnado">Desencarnado</option>
				  </select>
				  <span class='msg-erro msg-pai_ativo'></span>
				</div>				
				
				<div class="form-group avaliacao">
			      <label for="pai_idade">Idade</label>
			      <input type="text" class="form-control" id="pai_idade" name="pai_idade" placeholder="Infome a idade">
			      <span class='msg-erro msg-pai_idade'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="pai_profissao">Profissao</label>
			      <input type="text" class="form-control" id="pai_profissao" name="pai_profissao" placeholder="Infome a profissão">
			      <span class='msg-erro msg-pai_profissao'></span>
			    </div>
				
				<div style="clear: both; margin-bottom: 10px"></div>

				
				<div class="form-group avaliacao">
			      <label for="pai_desenc_temp">Desencarne</label>
			      <input type="text" class="form-control" id="pai_desenc_temp" name="pai_desenc_temp" placeholder="Quanto Tempo">
			      <span class='msg-erro msg-paipai_desenc_temp_idade'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="pai_desenc_motivo">Motivo</label>
			      <input type="text" class="form-control" id="pai_desenc_motivo" name="pai_desenc_motivo" placeholder="Motivo do desencarne">
			      <span class='msg-erro msg-pai_desenc_motivo'></span>
			    </div>				

				<div style="clear: both; margin-bottom: 10px"></div>


				<div class="form-group  avaliacao">
				  <label for="pai_sep">Separado</label>
				  <select class="form-control" name="pai_sep" id="pai_sep">
					<option value="">Selecione Opção</option>
					<option value="sim">Sim</option>
					<option value="não">Não</option>
				  </select>
				  <span class='msg-erro msg-pai'></span>
				</div>

				<div class="form-group avaliacao">
			      <label for="pai_sep_temp">Quanto Tempo</label>
			      <input type="text" class="form-control" id="pai_sep_temp" name="pai_sep_temp" placeholder="Tempo separação">
			      <span class='msg-erro msg-pai_sep_temp'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="pai_sep_obs">Observação</label>
			      <input type="text" class="form-control" id="pai_sep_obs" name="pai_sep_obs" placeholder="Observação">
			      <span class='msg-erro msg-pai_sep_obs'></span>
			    </div>					
				
				<div class="form-group  avaliacao">
				  <label for="pai_filho_rel">Filhos de outros relacionamentos</label>
				  <select class="form-control" name="pai_filho_rel" id="pai_filho_rel">
					<option value="">Selecione Opção</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-aceita_trat'></span>
				</div>
				
				<div class="form-group avaliacao">
			      <label for="pai_avos">Avós Paternos</label>
			      <textarea class="form-control" id="pai_avos" name="pai_avos" placeholder="Observações"></textarea>
			      <span class='msg-erro msg-pai_avos'></span>
			    </div>

				<div style="clear: both; margin-bottom: 10px"></div>

				<!-- Dados Mãe -->
				<h4>Histórico da Mãe</h4>
				<div class="form-group  avaliacao">
				  <label for="mae_ativo">Mãe</label>
				  <select class="form-control" name="mae_ativo" id="mae_ativo">
					<option value="">Selecione Opção</option>
					<option value="ativo">Ativo</option>
					<option value="desencarnado">Desencarnada</option>
				  </select>
				  <span class='msg-erro msg-mae_ativo'></span>
				</div>				
				
				<div class="form-group avaliacao">
			      <label for="mae_idade">Idade</label>
			      <input type="text" class="form-control" id="mae_idade" name="mae_idade" placeholder="Infome a idade do pai">
			      <span class='msg-erro msg-mae_idade'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="mae_profissao">Profissao</label>
			      <input type="text" class="form-control" id="mae_profissao" name="mae_profissao" placeholder="Infome a profissão">
			      <span class='msg-erro msg-mae_profissao'></span>
			    </div>
				
				<div style="clear: both; margin-bottom: 10px"></div>

				
				<div class="form-group avaliacao">
			      <label for="mae_desenc_temp">Desencarne</label>
			      <input type="text" class="form-control" id="mae_desenc_temp" name="mae_desenc_temp" placeholder="Quanto Tempo">
			      <span class='msg-erro msg-mae_desenc_temp'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="mae_desenc_motivo">Motivo</label>
			      <input type="text" class="form-control" id="mae_desenc_motivo" name="mae_desenc_motivo" placeholder="Motivo do desencarne">
			      <span class='msg-erro msg-mae_desenc_motivo'></span>
			    </div>				

				<div style="clear: both; margin-bottom: 10px"></div>


				<div class="form-group  avaliacao">
				  <label for="mae_sep">Separada</label>
				  <select class="form-control" name="mae_sep" id="mae_sep">
					<option value="">Selecione Opção</option>
					<option value="sim">Sim</option>
					<option value="não">Não</option>
				  </select>
				  <span class='msg-erro msg-mae_sep'></span>
				</div>

				<div class="form-group avaliacao">
			      <label for="mae_sep_temp">Quanto Tempo</label>
			      <input type="text" class="form-control" id="mae_sep_temp" name="mae_sep_temp" placeholder="Tempo separação">
			      <span class='msg-erro msg-mae_sep_temp'></span>
			    </div>
				
				<div class="form-group avaliacao">
			      <label for="mae_sep_obs">Observação</label>
			      <input type="text" class="form-control" id="mae_sep_obs" name="mae_sep_obs" placeholder="Observação">
			      <span class='msg-erro msg-mae_sep_obs'></span>
			    </div>					
				
				<div class="form-group  avaliacao">
				  <label for="mae_filho_rel">Filhos de outros relacionamentos</label>
				  <select class="form-control" name="mae_filho_rel" id="mae_filho_rel">
					<option value="">Selecione Opção</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-aceita_trat'></span>
				</div>

				<div class="form-group avaliacao">
				  <label for="mae_aborto_tipo">Aborto</label>
				  <select class="form-control" name="mae_aborto_tipo" id="mae_aborto_tipo">
					<option value="">Selecione Opção</option>
					<option value="nenhum">Nenhum</option>
					<option value="espontaneo">Espontâneo</option>
					<option value="provocado">Provocado</option>
					<option value="espontaneo_provocado">Espontâneo e Provocado</option>
				  </select>
				  <span class='msg-erro msg-mae_aborto_tipo'></span>
				</div>
				</br>
				<div class="form-group avaliacao">
			      <label for="mae_avos">Avós Maternos</label>
			      <textarea class="form-control" id="mae_avos" name="mae_avos" placeholder="Observações">
				  </textarea>
			      <span class='msg-erro msg-mae_avos'></span>
			    </div>
				
				<div style="clear: both; margin-bottom: 10px"></div>
				
				<h4>Histórico Irmãos</h4>
				
				<div class="form-group avaliacao">
				  <label for="irmaos_m">Homens</label>
				  <select class="form-control" name="irmaos_m" id="irmaos_m">
					<option value="">Selecione Opção</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-irmaos_m'></span>
				</div>
				
				<div class="form-group avaliacao">
				  <label for="irmaos_f">Mulheres</label>
				  <select class="form-control" name="irmaos_f" id="irmaos_f">
					<option value="">Selecione Opção</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				  </select>
				  <span class='msg-erro msg-irmaos_f'></span>
				</div>
				
				<div style="clear: both"></div>
				
				 <div class="form-group">
			      <label for="irmaos_obs">Observações</label>
			      <textarea class="form-control" id="irmaos_obs" maxlength="" name="irmaos_obs" placeholder="Observações"></textarea>	
			      <span class='msg-erro msg-irmaos_obs'></span>
				</div>				
				
				<div style="clear: both; margin-bottom: 10px"></div>
				
				<h4>Histórico Cliente</h4>			
				

				<div class="form-group avaliacao">
				  <label for="relacionamento">Relacionamento</label>
				  <select class="form-control" name="relacionamento" id="relacionamento">
					<option value="">Selecione Opção</option>
					<option value="solteiro">Solteiro(a)</option>
					<option value="namoro">Namoro</option>
					<option value="estavel">União Estável</option>
					<option value="casado">Casado(a)</option>
					<option value="separado">Separado(a)</option>
					<option value="divorciado">Divorciado(a)</option>
					<option value="viuvo">Viúvo(a)</option>
				  </select>
				  <span class='msg-erro msg-relacionamento'></span>
				</div>
				
				 <div class="form-group avaliacao">
			      <label for="relacionamento_tempo">Quanto Tempo?</label>
			      <input type="text" class="form-control" id="relacionamento_tempo" maxlength="" name="relacionamento_tempo" placeholder="">
			      <span class='msg-erro msg-relacionamento_tempo'></span>
				</div>	

				<div class="form-group avaliacao">
				  <label for="perdeu_filho">Perdeu algum Filho?</label>
				  <select class="form-control" name="perdeu_filho" id="perdeu_filho">
					<option value="">Selecione Opção</option>
					<option value="sim">Sim</option>
					<option value="nao">Não</option>
				  </select>
				  <span class='msg-erro msg-perdeu_filho'></span>
				</div>

				 <div class="form-group avaliacao">
			      <label for="perdeu_filho_tempo">Quanto Tempo?</label>
			      <input type="text" class="form-control" id="perdeu_filho_tempo" maxlength="" name="perdeu_filho_tempo" placeholder="">
			      <span class='msg-erro msg-perdeu_filho_tempo'></span>
				</div>	

				<div class="form-group avaliacao">
				  <label for="abuso">Abuso</label>
				  <select class="form-control" name="abuso" id="abuso">
					<option value="">Selecione Opção</option>
					<option value="sim">Sim</option>
					<option value="nao">Não</option>
				  </select>
				  <span class='msg-erro msg-abuso'></span>
				</div>

				<div class="form-group avaliacao">
			      <label for="abuso_idade">Em que Idade</label>
			      <input type="text" class="form-control" id="abuso_idade" maxlength="" name="abuso_idade" placeholder="">
			      <span class='msg-erro msg-abuso_idade'></span>
				</div>
				
				<div class="form-group avaliacao">
				  <label for="mae_aborto_tipo">Aborto</label>
				  <select class="form-control" name="mae_aborto_tipo" id="mae_aborto_tipo">
					<option value="">Selecione Opção</option>
					<option value="nenhum">Nenhum</option>
					<option value="espontaneo">Espontâneo</option>
					<option value="provocado">Provocado</option>
					<option value="espontaneo_provocado">Espontâneo e Provocado</option>
				  </select>
				  <span class='msg-erro msg-mae_aborto_tipo'></span>
				</div>	

				<div class="form-group avaliacao">
			      <label for="profissao">Profissão</label>
			      <input type="text" class="form-control" id="profissao" maxlength="" name="profissao" placeholder="">
			      <span class='msg-erro msg-profissao'></span>
				</div>

				<div class="form-group avaliacao">
			      <label for="religiao">Religião</label>
			      <input type="text" class="form-control" id="religiao" maxlength="" name="religiao" placeholder="">
			      <span class='msg-erro msg-religiao'></span>
				</div>

				<div style="clear: both; margin-bottom: 10px"></div>

				<div class="form-group avaliacao">
				  <label for="casa_tipo">Tipo de Casa</label>
				  <select class="form-control" name="casa_tipo" id="casa_tipo">
					<option value="">Selecione Opção</option>
					<option value="Propria">Própria</option>
					<option value="Alugada">Alugada</option>
				  </select>
				  <span class='msg-erro msg-abuso'></span>
				</div>

				<div class="form-group avaliacao">
			      <label for="casa_tipo_tempo">Quanto tempo?</label>
			      <input type="text" class="form-control" id="casa_tipo_tempo" maxlength="" name="casa_tipo_tempo" placeholder="Observações casa">
			      <span class='msg-erro msg-obs_geral'></span>
				</div>
				
				<div style="clear: both; margin-bottom: 10px"></div>
				
				<div class="form-group">
			      <label for="obs_geral">Observações</label>
			      <textarea class="form-control" id="obs_geral" maxlength="" name="obs_geral" placeholder="Observações"></textarea>
			      <span class='msg-erro msg-obs_geral'></span>
				</div>				

				<legend><h1>Indicação de Tratamento</h1></legend>
				
				<!--
					Incluir em tratamentos: Gaivota, Elevador, Liberação (Lib.) bloqueios.
					Captação Psiquica, coaching
f				-->
				
				<div class="form-group avaliacao2">
			      
			      <input type="checkbox" class="" id="apometria" maxlength="" name="apometria" placeholder="Informe Percentual">
				  <label for="apometria">Apometria</label>
			      <span class='msg-erro msg-apometria'></span>
			    </div>

				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="tdrsp" maxlength="" name="tdrsp" placeholder="Informe Percentual">
				  <label for="tdrsp">TDRSP</label>
			      <span class='msg-erro msg-tdrsp'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      
			      <input type="checkbox" class="" id="tle" maxlength="" name="tle" placeholder="Informe Percentual">
				  <label for="tle">TLE</label>
			      <span class='msg-erro msg-tle'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="cura" maxlength="" name="cura" placeholder="Informe Percentual">
				  <label for="cura">Cura</label>
			      <span class='msg-erro msg-cura'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="ciclo_da_vida" maxlength="" name="ciclo_da_vida" placeholder="Informe Percentual">
				  <label for="ciclo_da_vida">Ciclo da Vida</label>
			      <span class='msg-erro msg-ciclo_da_vida'></span>
			    </div>
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="tarot" maxlength="" name="tarot" placeholder="Informe Percentual">
				  <label for="tarot">Tarot</label>
			      <span class='msg-erro msg-tarot'></span>
			    </div>				
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="gfu" maxlength="" name="gfu" placeholder="Informe Percentual">
				  <label for="gfu">GFU</label>
			      <span class='msg-erro msg-gfu'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="graficos" maxlength="" name="graficos" placeholder="Informe Percentual">
				  <label for="graficos">Gráficos</label>
			      <span class='msg-erro msg-graficos'></span>
			    </div>	
				<div class="form-group avaliacao2">
				<input type="checkbox" class="" id="magneto_reiki" maxlength="" name="magneto_reiki" placeholder="Informe Percentual">
				<label for="magneto_reiki">Magneto + Reiki</label>
			      <span class='msg-erro msg-magneto_reiki'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="hooponopono" maxlength="" name="hooponopono" placeholder="Informe Percentual">
				  <label for="hooponopono">Ho'oponopono</label>
			      <span class='msg-erro msg-hooponopono'></span>
			    </div>	
				<div class="form-group avaliacao2">
			      <input type="checkbox" class="" id="constelacao" maxlength="" name="constelacao" placeholder="Informe Percentual">
				  <label for="constelacao">Constelação</label>
			      <span class='msg-erro msg-constelacao'></span>
			    </div>	
					
				<legend><h1>Indicações de Conhecimento e Transformação</h1></legend>
				
			    <div class="form-group">
			      <label for="livros">Livros / Filmes</label>
			      <input type="text" class="form-control" id="livros" name="livros" placeholder="Infome Livros">
			      <span class='msg-erro msg-livros'></span>
			    </div>

			    <div class="form-group">
			      <label for="cd">Orações</label>
			      <input type="text" class="form-control" id="cd" name="cd" placeholder="Infome Cds">
			      <span class='msg-erro msg-cd'></span>
			    </div>

			    <div class="form-group">
			      <label for="orgonite">Orgonite</label>
			      <input type="text" class="form-control" id="orgonite" name="orgonite" placeholder="Infome Orgonite e uso">
			      <span class='msg-erro msg-orgonite'></span>
			    </div>		

			    <div class="form-group">
			      <label for="ima">Imã</label>
			      <input type="text" class="form-control" id="ima" name="ima" placeholder="Infome Imã e uso">
			      <span class='msg-erro msg-ima'></span>
			    </div>
				
				<div style="clear: both; margin-bottom: 10px"></div>
				
				
				<!-- enviar formulário-->
				
			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'>
			      Gravar
			    </button>
			    <a href='index.php' class="btn btn-danger">Cancelar</a>
			</form>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>