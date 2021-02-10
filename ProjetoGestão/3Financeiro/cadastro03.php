Cadastro:::


<html lang="pt-br">
<head>
<meta charset="UTF-8"/> 
   <title>Cadastro do estabelecimento realizado com sucesso!</title>
</head>
<body>
    
<?php
   
   include $_SERVER['DOCUMENT_ROOT']."\ProjetoPagamento-3.0\-conectionBD\conexaoBD.php";
   
   $conn=conectar();
  
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
   $codigo = $_POST ["codigo_cad"];//atribuição do campo "nome" vindo do formulário para variavel
   $descricao = $_POST ["descricao_cad"];//atribuição do campo "email" vindo do formulário para variavel
   //$ddata=date("Y-m-d H:i:s");

      
   $query = "INSERT INTO `Financeiro` ( `Codigo`,`descricao`)
   VALUES ('$codigo','$descricao')";
  
   $financeiro=$conn->prepare($query);
   if($financeiro->execute()){
    
      echo('Cadastro realizado com Sucesso!!!') ;
      //echo($cadastrausuario->errorInfo());
   }else{
    
      echo('Não foi possivel cadastrar ');
      
   }
  
?>
<br/>    
<a href="index.html"><input name="voltar" type="submit" id="voltar" value="voltar" /> </a>
</body>
</html>

<?php 
// Bloco if que recupera as informações no formulário, etapa utilizada pelo Update
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM contatos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $nome = $rs->nome;
            $email = $rs->email;
            $celular = $rs->celular;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}
 
// Bloco if utilizado pela etapa Delete
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM contatos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "Registo foi excluído com êxito";
            $id = null;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}
 
                // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                try {
                    $stmt = $conexao->prepare("SELECT * FROM contatos");
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<tr>";
                            echo "<td>".$rs->nome."</td><td>".$rs->email."</td><td>".$rs->celular
                                       ."</td><td><center><a href=\"?act=upd&id=".$rs->id."\">[Alterar]</a>"
                                       ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                       ."<a href=\"?act=del&id=".$rs->id."\">[Excluir]</a></center></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Erro: Não foi possível recuperar os dados do banco de dados";
                    }
                } catch (PDOException $erro) {
                    echo "Erro: ".$erro->getMessage();
                }

?>
