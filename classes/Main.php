<?php
	error_reporting(0);

	class Clientes
	{
		
		public function buscar()
		{
			include 'includes/config.php';
			
			$cpfCliente  = $_GET['cpf'];
			switch($cpfCliente){
				case "":
					$sql = "SELECT * FROM tb_clientes ORDER BY idCliente ASC";
				break;
				default:
					$sql = "SELECT * FROM tb_clientes WHERE `cpfCliente` = '".$cpfCliente ."' ORDER BY idCliente ASC";
				break;
			}
			
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum cliente encontrado!");
			}
			
			return $resultados;
		}


		public function inserir()
		{
			include 'includes/config.php';
			$nmCliente = $_GET["nome"];
			$cpfCliente = $_GET["cpf"];
			$endereco = $_GET["endereco"];
			$sql = "INSERT INTO `tb_clientes`(`nmCliente`, `cpfCliente`, `enderecoCliente`) VALUES ('$nmCliente','$cpfCliente','$endereco')";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Inserido";

			
			return $resultados;
		}

		public function editar()
		{
			include 'includes/config.php';
			$idCliente = $_GET["id"];
			$nmCliente = $_GET["nome"];
			$cpfCliente = $_GET["cpf"];
			$endereco = $_GET["endereco"];
			$sql = "UPDATE `tb_clientes` SET `nmCliente`='$nmCliente',`cpfCliente`='$cpfCliente',`enderecoCliente`='$endereco' WHERE `idCliente` = '$idCliente'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Editado";

			
			return $resultados;
		}

		public function deletar()
		{
			include 'includes/config.php';
			$idCliente = $_GET["id"];
			$sql = "DELETE FROM `tb_clientes` WHERE `idCliente` = '$idCliente'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Deletado";

			return $resultados;
		}

	}

	class Veiculos
	{
		
		public function buscar()
		{
			include 'includes/config.php';
			
			$placa = $_GET['placa'];
			switch($placa){
				case "":
					$sql = "SELECT * FROM tb_veiculos ORDER BY idVeiculo ASC";
				break;
				default:
					$sql = "SELECT * FROM tb_veiculos WHERE `placa` = '".$placa."' ORDER BY idVeiculo ASC";
				break;
			}
			
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum veiculo encontrado!");
			}
			
			return $resultados;
		}


		public function inserir()
		{
			include 'includes/config.php';
			$placa = $_GET["placa"];
			$modelo = $_GET["modelo"];
			$ano = $_GET["ano"];
			$cor = $_GET["cor"];
			$preco = $_GET["preco"];
			$sql = "INSERT INTO `tb_veiculos`(`placa`, `modelo`, `ano`, `cor`, `precoDiario`) VALUES ('$placa','$modelo','$ano','$cor','$preco')";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Inserido";

			
			return $resultados;
		}

		public function editar()
		{
			include 'includes/config.php';
			$idVeiculo = $_GET["id"];
			$placa = $_GET["placa"];
			$modelo = $_GET["modelo"];
			$ano = $_GET["ano"];
			$cor = $_GET["cor"];
			$preco = $_GET["preco"];
			$aluguel = $_GET["aluguel"];
			$sql = "UPDATE `tb_veiculos` SET `placa`='$placa',`modelo`='$modelo',`ano`='$ano',`cor`='$cor',`precoDiario`='$preco',`statusAluguel`='$aluguel' WHERE `idVeiculo` = '$idVeiculo'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Editado";

			
			return $resultados;
		}
		

		public function deletar()
		{
			include 'includes/config.php';
			$idVeiculo = $_GET["id"];
			$sql = "DELETE FROM `tb_veiculos` WHERE `idVeiculo` = '$idVeiculo'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Deletado";

			return $resultados;
		}
		

	}

	class Locacao
	{
		
		public function buscar()
		{
			include 'includes/config.php';
			
			$codLocacao  = $_GET['cod'];
			switch($codLocacao){
				case "":
					$sql = "SELECT * FROM tb_locacao ORDER BY idLocacao ASC";
				break;
				default:
					$sql = "SELECT * FROM tb_locacao WHERE `codLocacao` = '".$codLocacao ."' ORDER BY idLocacao ASC";
				break;
			}
			
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum locacao encontrada!");
			}
			
			return $resultados;
		}


		public function inserir()
		{
			include 'includes/config.php';
			$codLocacao = $_GET["cod"];
			$cpfLocacao = $_GET["cpf"];
			$dtInicio = $_GET["dtInicio"];
			$dtTermino = $_GET["dtTermino"];
			$precoTotal = $_GET["preco"];
			$placaVeiculo = $_GET["placa"];
			$statusLocacao = $_GET["status"];
			$sql = "INSERT INTO `tb_locacao`(`codLocacao`, `cpfUsuario`, `dtInicio`, `dtTermino`, `precoTotal`, `placaVeiculo`, `statusLocacao`) VALUES ('$codLocacao','$cpfLocacao','$dtInicio','$dtTermino','$precoTotal','$placaVeiculo','$statusLocacao')";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Inserido";

			
			return $resultados;
		}

		public function editar()
		{
			include 'includes/config.php';
			$idLocacao  = $_GET['id'];
			$codLocacao = $_GET["cod"];
			$cpfLocacao = $_GET["cpf"];
			$dtInicio = $_GET["dtInicio"];
			$dtTermino = $_GET["dtTermino"];
			$precoTotal = $_GET["preco"];
			$placaVeiculo = $_GET["placa"];
			$statusLocacao = $_GET["status"];
			$sql = "UPDATE `tb_locacao` SET `codLocacao`='$codLocacao',`cpfUsuario`='$cpfLocacao',`dtInicio`='$dtInicio',`dtTermino`='$dtTermino',`precoTotal`='$precoTotal',`placaVeiculo`='$placaVeiculo',`statusLocacao`='$statusLocacao' WHERE `idLocacao` = '$idLocacao'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Editado";

			
			return $resultados;
		}

		public function deletar()
		{
			include 'includes/config.php';
			$idLocacao = $_GET["id"];
			$sql = "DELETE FROM `tb_locacao` WHERE `idLocacao` = '$idLocacao'";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = "Deletado";

			return $resultados;
		}

	}

?>
