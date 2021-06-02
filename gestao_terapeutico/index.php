<?php
require 'conexao.php';

// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';

// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nome, email, celular, status, data_nascimento, indicado, foto FROM tab_clientes';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nome, email, celular, status, data_nascimento, indicado, foto FROM tab_clientes WHERE nome LIKE :nome OR email LIKE :email';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nome', $termo.'%');
	$stm->bindValue(':email', $termo.'%');
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Listagem de Clientes</title>
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

			<!-- Cabeçalho da Listagem -->
			<legend><h1>Listagem de Clientes</h1></legend>

			<!-- Formulário de Pesquisa -->
			<form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
				<label class="col-md-2 control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Nome">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='index.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<!-- Link para página de cadastro -->
			<a href='cadastro.php' class="btn btn-success pull-right">Cadastrar Cliente</a>
			<div class='clearfix'></div>

			<?php if(!empty($clientes)):?>

				<!-- Tabela de Clientes -->
				<table class="table table-striped">
					<tr class='active'>
						<th>Foto</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Celular</th>
						<th>Data Nasc</th>
						<th>Indicação</th>
						<th>Status</th>
						<th>Ação</th>
					</tr>
					<?php foreach($clientes as $cliente):
							if(!empty($cliente)):

								// Formata a data no formato nacional
								$array_data     = explode('-', $cliente->data_nascimento);
								$data_formatada = $array_data[2] . '/' . $array_data[1] . '/' . $array_data[0];

							endif;
					?>
					
						<tr>
							<td><img src='fotos/<?=$cliente->foto?>' height='40' width='40'></td>
							<td><?=$cliente->nome?></td>
							<td><?=$cliente->email?></td>
							<td><?=$cliente->celular?></td>
							<td><?=$data_formatada?></td>
							<td><?=$cliente->indicado?></td>
							<td><?=$cliente->status?></td>
							<td>
								<a href='sessao.php?id=<?=$cliente->id?>' class="btn btn-primary">Sessões</a>
								<a href='editar.php?id=<?=$cliente->id?>' class="btn btn-primary">Editar</a>
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$cliente->id?>">Excluir</a>
							</td>
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem clientes cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>