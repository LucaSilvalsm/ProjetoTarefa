<?php




session_start();

include_once("conexao.php");
include_once("url.php");
// 3° parte

$data = $_POST;
$conn->query('USE tarefas');
// modificações do banco

if(!empty($data)){

    if($data["type"] === "create"){
        $nome = $data["nome"];
        $telefone = $data["telefone"];
        $nomeTarefa = $data["nomeTarefa"];
        $dataInicial = $data["dataInicial"];
        $dataFinal = $data["dataFinal"];
        $detalhe = $data["detalhe"];

        $query = "INSERT INTO tarefa(nome,telefone,nomeTarefa,dataInicial,dataFinal,detalhe) VALUES (:nome,:telefone,:nomeTarefa, :dataInicial, :dataFinal,:detalhe)";

        $stmt = $conn->prepare($query);        
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":nomeTarefa",$nomeTarefa);
        $stmt->bindParam(":dataInicial",$dataInicial);
        $stmt->bindParam(":dataFinal",$dataFinal);
        $stmt->bindParam(":detalhe",$detalhe);
        
        try{
          $stmt->execute();
          $_SESSION["msg"] = "Tarefa Criada com sucesso";
    
        }catch(PDOException $e){
            // erro na coxexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    


    } else if($data["type"] === "editar"){ // editando

        $nome = $data["nome"];
        $telefone = $data["telefone"];
        $nomeTarefa = $data["nomeTarefa"];
        $dataInicial = $data["dataInicial"];
        $dataFinal = $data["dataFinal"];
        $detalhe = $data["detalhe"];
        $id = $data["id"];

        $query = "UPDATE tarefa SET nome = :nome,telefone = :telefone, nomeTarefa = :nomeTarefa, dataInicial = :dataInicial, dataFinal = :dataFinal, detalhe = :detalhe WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":nomeTarefa",$nomeTarefa);
        $stmt->bindParam(":dataInicial",$dataInicial);
        $stmt->bindParam(":dataFinal",$dataFinal);
        $stmt->bindParam(":detalhe",$detalhe);
        $stmt->bindParam(":id",$id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Tarefa atualizada com sucesso";
      
          }catch(PDOException $e){
              // erro na coxexão
              $error = $e->getMessage();
              echo "Erro: $error";
          }
      




    } else if($data["type"] === "delete"){
        $id = $data["id"];

        $query = "DELETE FROM tarefa WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id",$id);
        
        try{
            $stmt->execute();
            $_SESSION["msg"] = "Tarefa apagada com sucesso";
      
          }catch(PDOException $e){
              // erro na coxexão
              $error = $e->getMessage();
              echo "Erro: $error";
          }
      

    
        


    }

    header("Location:" . $BASE_URL . "../index.php");


} else {

    
    // Selecionando o banco de dados
    

    // 2° parte voltando apenas 1 contato

    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }

    if(!empty($id)){
        $query = "SELECT * FROM tarefa WHERE id = :id" ;

        $stmt  = $conn->prepare($query);

        $stmt->bindParam(":id", $id); 

        $stmt ->execute();

        $tarefa = $stmt->fetch();







    } else{
        // 1 ° parte  fazendo o select all, pegando os dados  fazendo a leitura dos dados e amostrando todas as tarefas
        $tarefa = [];

        $query = "SELECT * FROM tarefa";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $tarefa = $stmt->fetchAll();




        }



    
}








$conn = null;










?>



