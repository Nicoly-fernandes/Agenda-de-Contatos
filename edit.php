  
    <?php

        include_once("templates/header.php");
        include_once("templates/footer.php");
        include_once("templates/backbtn.html");

    ?>

    <div class="container">

    <h1 id="main-title"> Editar Contato </h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

        <input type="hidden" name="type" Value="edit">

        <input type="hidden" name="id" Value="<?= $contact["id"] ?>">

        <div class="form-group">

            <label for="name">Nome do Contato:</label>

            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" Value="<?= $contact["name"] ?>" required>

        </div>

        <div class="form-group">

            <label for="phone">Telefone para Contato:</label>

            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o Telefone para contato" Value="<?= $contact["phone"] ?>" required>
        
        </div>

        <div class="form-group">

            <label for="observation">Observações:</label>

            <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite as observações do contato" rows="3"><?= $contact["observation"] ?></textarea>
        
        </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>

    </div>

