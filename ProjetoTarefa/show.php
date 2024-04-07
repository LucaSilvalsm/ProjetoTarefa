<?php
    
    include_once("template/header.php");
    $dataInicial = new DateTime($tarefa['dataInicial']);
$dataFinal = new DateTime($tarefa['dataFinal']);
$diferenca = $dataInicial->diff($dataFinal)->format('%a'); // Calcula a diferença em dias
$tarefa['diferenca'] = $diferenca; // Adiciona a diferença ao array $tarefa

  

?>


<div class="container" id="view-tarefa-container">
    <?php include_once("template/backbtn.php");?>
    <h1 id="main-title"><?= $tarefa["nome"] ?> </h1>
    <p class="bold">Nome da Tarefa</p>
    <p><?=$tarefa["nomeTarefa"] ?> </p>
    <p class="bold">Data Inicial</p>
    <p><?=$tarefa["dataInicial"] ?> </p>
    <p class="bold">Data de Entrega</p>
    <p><?=$tarefa["dataFinal"] ?> </p>
    <p class="bold">Telefone</p>
    <p><?=$tarefa["telefone"] ?> </p>
    <p class="bold">Prazo de Entrega</p>
    <p><?=$tarefa["diferenca"] ?>  Dias</p>

</div>


<?php
    include_once("template/footer.php")

?>