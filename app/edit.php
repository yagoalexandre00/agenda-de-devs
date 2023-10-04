<?php 
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editando contato</h1>
    <form id="create-form" method="post" action="<?= $BASE_URL ?>config/process.php">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id']?>">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $contact['name']?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact['phone']?>" required>
        </div>
        <div class="form-group">    
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" rows="3"><?= $contact['observations']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>