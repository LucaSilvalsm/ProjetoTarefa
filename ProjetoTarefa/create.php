<?php

include_once("template/header.php");




?>
   
<div class="container">
<?php include_once("template/backbtn.php");?>
    <h1 id="main-title">Criando Tarefa</h1>
    <form id="create-form" action="<?=$BASE_URL ?>/config/processo.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="nome">Nome da Pessoa</label>
            <input type="text" class="form-control" id="name" name="nome" placeholder="Nome e Sobre Nome" required>
        <div class="form-group">
            <label for="telefone">Telefone de Contato</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digete o Telefone" required>
        </div>  
         <div class="form-group">
            <label for="nomeTarefa">Nome da Tarefa</label>
            <input type="text" class="form-control" id="nomeTarefa" name="nomeTarefa" placeholder="O nome da tarefa" required>
        </div>    
         <div class="form-group">
            <label for="dataInicial">Digite a data Inicial da Tarefa</label>
            <input type="date" class="form-control" id="dataInicial" name="dataInicial" required>
        </div>    
         <div class="form-group">
         <label for="dataFinal">Digite a data Final da Tarefa</label>
            <input type="date" class="form-control" id="dataFinal" name="dataFinal" required>
        </div>  
        <div class="form-group">
            <label for="detalhe">Detalhe da Tarefa</label>
            <textarea type="text" class="form-control" id="detalhe" name="detalhe" placeholder="Digite o detalha da tarefa" rows="4" >
            </textarea>    
        </div>    
            
            
           
           

        </div>
        <button type="submit" class="btn btn-primary" >Cadastrar</button>
    </form>
</div>




<?php


include_once("template/footer.php");


?>