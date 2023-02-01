<!DOCTYPE html>
<html lang ="pt-BR">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="php">
      
      <title>LA MANUTENÇÃO</title>
      <link rel=" stylesheet" type="text/css" href="css/oslastyle.css">
      
   </head>
   <body>
      <div class="topo">
         
          <hr>
         <h1>ORDEM DE SERVIÇO</h1>
         <img src="img/logo1.jpeg" alt = "right" width="60px" height="60px">
         <hr>
         <hr>
      </div>
      <div class="conteudo">
        <?php
			// Cria variaveis com os valores do formulário
				$nome = $_POST['nome'];
				$endereco = $_POST['endereco'];
				$data_orcamento = $_POST['data_orcamento'];
            $RG = $_POST['RG'];
				$servico = $_POST['servico'];
				$equipamento = $_POST['equipamento'];
				$Nchassi = $_POST['Nchassi'];
				$serie = $_POST['serie'];
            $modelo=$_POST['modelo'];
            $data_registro = $_POST['data_registro'];
            
            echo "<strong><h2> Cadastro do Solicitante:&nbsp</h2></strong><hr>";
            
            echo" <hr><strong>SOLICITANTE:</strong> $nome &nbsp | <strong>ENDEREÇO:</strong> $endereco | <strong> DOC:</strong> $RG | <strong>DATA DO CADASTRO:</strong> $data_registro <br><br>&nbsp<br><hr>" ;
             
            echo "<hr><strong><h2>Serviço Solicitado:</h2></strong><hr>";
            
            echo "<hr><strong>Serviço a ser Realizado: </strong> $servico | <strong>Número do Chassi:</strong> &nbsp<i> $Nchassi</i> | <strong>Equipamento:</strong> $equipamento &nbsp | <strong>Série:</strong> $serie | <strong>Modelo:</strong> $modelo<br><hr>";
            
   
            
            switch($servico){
            
            case 'Roçadeiras a Gasolina':
            
            echo"PREVISÃO SERÁ INFORMADA NO ATO DA RETIRADA";
            
            
            break;
            
            case 'Cortador de Grama a Gasolina ':
            
            break;	
            
            case 'Cortador de Grama Elétrico':
            echo " PREVISÃO SERÁ INFORMADA NO ATO DA RETIRADA ";
            
            break;
            
            case 'Motosserra':
            echo " PREVISÃO SERÁ INFORMADA NO ATO DA RETIRADA ";
            
            default:
            
            case 'Outros':
            echo "_______________________________________________________________________________________________- ";
            
            break;
            }
            ?>
         <h1>NORMAS DE PROCEDIMENTO.</h1>
         <h3>1 - AUTORIZAÇÃO: Autorizo que se necessário meu equipamento seja desmontado para análise de defeito de orçamento. Caso o conserto não seja autorizado o mesmo poderá não funcionar novamente ou da mesma forma que veio, devido ter sido desmontado para análise. OBS. Todos os produtos descartáveis que estiverem no aparelho/equipamento serão descartados sem aviso prévio para melhor higiene da oficina. Acessórios e condição do produto devem ser conferidos na retirada do aparelho, não nos responsabilizamos após a retirada do produto.</h3>
         <h3> 2 - ORÇAMENTO: O prazo de validade dos valores orçados é de 07 dias contados de apresentação ao cliente. O orçamento perderá automaticamente a sua validade na hipótese de o cliente retirar o produto do serviço autorizado.</h3>
         <h3>3 – GARANTIA: O serviço autorizado garante os serviços prestados, nas mesmas condições da prestação do serviço anterior. A garantia compreende a mão de obra e peças utilizadas pelo prazo de 90 dias, contados de entrega efetiva do produto. A garantia perde sua validade se houver violação do lacre colocado no produto por ocasião do conserto; utilização de rede elétrica impropria; sofra danos causados por acidentes ou agentes da natureza; manutenção inadequada por técnico não autorizado; uso inadequado do produto; combustível improprio; mistura de combustível.</h3>
         <h3> - AUTORIZAÇÃO APÓS 90 DIAS:  Dou total e plena autonomia a empresa a escapiar, desmontar, ou até mesmo descartar o produto descrito acima, caso não faça a retirada do mesmo dentro doe 90 dias após a execução do orçamento ou conclusão do serviço.</h3>
         <h3>ATENÇÃO: O bem deixado para conserto que não for retirado no prazo máximo de 15 dias a contar da data de aviso do aparelho/equipamento pronto, será cobrado uma taxa de 3,00 (Três Reais) por dia de armazenagem.</h3>
         <hr>
         <p><strong>Assinatura :</strong> __________________________________________<strong>&nbsp Data:</strong>_____/_____/_____. &nbsp<br><br><strong>Telefone para Contato:</strong>(     &nbsp&nbsp )_________-__________<br>
         <h5><span>ORÇAMENTOS NÃO APROVADOS SERÁ COBRADO TAXA DE R$ 25,00</span></h5>
         <?php
			echo"VIA DO CLIENTE<hr>";
            
            echo" <strong>Solicitante:</strong> $nome | <strong>ITEM A SER RETIRADO:</strong> $equipamento &nbsp |<strong>Data da Solicitação:</strong> $data_registro |
                	 	<strong>";         	 	
            
            			echo "<strong> SERVIÇO SOLICITADO:</strong> $servico |  IDENTIFICAÇÃO:</strong> <u> $Nchassi</u> <br>";
            
            				echo"<h5>Estou ciente de todos os termos de serviço e garantia</h5><br>";
            
            ?>		     

         <input type="button" value="IMPRIMIR ORÇAMENTO" onclick="window.print()"><br>
         <br>
         <a href="index.html"> << Voltar</a> 
      </div>
      <footer>
         <h5>Todos os direitos reservados a Raphael Feliciano</h5>
      </footer>
	  
	  <?php
			// Inclui o arquivo de conexão com o banco de dados
            include_once('conexao.php');
			
			// Cria conexao
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Chaca a conecao
			if ($conn->connect_error) {
			die("Falha na conexão: " . $conn->connect_error);
			}

			$sql = "INSERT INTO	cadastros (nome, endereco, data_orcamento, data_registro, RG, servico, equipamento, Nchassi, serie, modelo) VALUES ('$nome', '$endereco', '$data_orcamento', '$data_registro', '$RG', '$servico', '$equipamento', '$Nchassi', '$serie', '$modelo')";

			if ($conn->query($sql) === TRUE) {
				echo "<h1>Novo registro criado com sucesso!</h1>";
			} else {
			echo "Erro: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();	  
	  ?>

   </body>
</html>