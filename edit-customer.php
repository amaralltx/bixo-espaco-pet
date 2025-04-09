<?php
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bixo Espaço Pet - CRUD</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/edit.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="edit-container">
        <a href="index.php" class="return-arrow">voltar</a>
        <form method="POST" action="actions.php" class="edit-form">
            <div class="left-edit-form">
                <h2>Editar Cliente</h2>
                <div class="input-group">
                    <label for="nome">Nome do Cliente</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" />
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" />
                </div>
            </div>
            <div class="right-edit-form">
                <div class="input-group">
                    <label for="nome_pet">Nome do Pet</label>
                    <input type="text" name="nome_pet" id="nome_pet" />
                </div>
                <div class="input-group">
                    <label for="especie">Espécie</label>
                    <select id="especie" name="especie">
                        <option value="">--</option>
                        <option value="Cachorro">Cachorro</option>
                        <option value="Gato">Gato</option>
                        <option value="Pássaro">Pássaro</option>
                        <option value="Roedor">Roedor</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="raca">Raça</label>
                    <input type="text" name="raca" id="raca" />
                </div>
                <button type="submit" name="update_user" value="<?php echo $_GET['id']; ?>">Salvar</button>
            </div>
        </form>
    </div>

    <?php include 'components/footer.php'; ?>

</body>

</html>