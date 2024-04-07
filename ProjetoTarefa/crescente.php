<?php
include_once("template/header.php");
include_once("config/function.php");



// Ordena as tarefas com base na diferença calculada
usort($tarefa, function($a, $b) {
    return $a['diferenca'] - $b['diferenca']; // Ordena em ordem crescente
});

?>
   
<div class="container">
<?php include_once("template/backbtn.php");?>

    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif ?>
    <h1 id="main-title"> Minha Agenda de Tarefa</h1>
    <?php if(count($tarefa) > 0): ?>
        <table class="table" id="tarefa-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nome Da Tarefa</th>
                    <th scope="col">Data Inicial</th>
                    <th scope="col">Data Final</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Prazo de Entrega</th>
                    <th scope="col">Organizar
                    <a href="<?= $BASE_URL?>/crescente.php"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>
                    <a href="<?=$BASE_URL?>/decrescente.php"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                    </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tarefa as $tarefa): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $tarefa["id"] ?></td>
                        <td scope="row"><?= $tarefa["nome"] ?></td>
                        <td scope="row"><?= $tarefa["nomeTarefa"] ?></td>
                        <td scope="row"><?= $tarefa["dataInicial"] ?></td>
                        <td scope="row"><?= $tarefa["dataFinal"] ?></td>
                        <td scope="row"><?= $tarefa["telefone"] ?></td>
                        <td scope="row"><?= $tarefa["diferenca"] ?> Dias</td>
                        <td scope="row"></td>
                        <td class="action">
                            <a href="<?= $BASE_URL?>/show.php?id=<?= $tarefa["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $BASE_URL?>/editar.php?id=<?= $tarefa["id"] ?>"><i class="fas fa-edit edit-icon"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL?>/config/processo.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há tarefas na sua lista. <a href="<?= $BASE_URL ?>/create.php">Clique aqui para adicionar</a></p>
    <?php endif; ?>
</div>

<?php include_once("template/footer.php"); ?>
