<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $nome_jogo =  $_POST['nome_jogo'];
    $genero_jogo =  $_POST['genero_jogo'];
    $preco_jogo =  $_POST['preco_jogo'];
    $pretende_comprar =  $_POST['pretende_comprar'];

    $sql = "INSERT INTO `crud`(`id`, `nome_jogo`, `genero_jogo`, `preco_jogo`, `pretende_comprar`) 
    VALUES (NULL,'$nome_jogo','$genero_jogo','$preco_jogo','$pretende_comprar')";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Novo dado criado com sucesso");
    }
    else {
        echo "Falhou " . mysqli_error($conn);
    }
}   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <title>Banco de Jogos Pendragon</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color: #b57bbd">
        Banco de Jogos Pendragon
    </nav>

    <div class="container"></div>
        <div class="text-center mb-4">
            <h3>Adicionar Novo Jogo</h3>
            <p.class="text-muted">Insira as informações abaixo para adicionar um novo jogo.</p>
        </div>

        <div class="container d-flex justifty-content-center">
            <form action="" method="post" style="width:50vw; min-width: 300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Nome do Jogo:</label>
                        <input type="text" class="form-control" name="nome_jogo"
                        placeholder="Mario Kart Wii">
                    </div>

                    <div class="col">
                        <label class="form-label">Gênero do Jogo:</label>
                        <input type="text" class="form-control" name="genero_jogo"
                        placeholder="Corrida">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço do Jogo(R$):</label>
                    <input type="text" class="form-control" name="preco_jogo"
                    placeholder="R$ 00,00">
                </div>

                <div class="form-group mb-3">
                    <label>Pretende Comprar o Jogo este mês?</label> &nbsp; <br>
                    <input type="radio" class="form-check-input" name="pretende_comprar" 
                    id="sim" value="sim">
                    <label for="sim" class="form-input-label">Sim</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="pretende_comprar" 
                    id="nao" value="nao">
                    <label for="nao" class="form-input-label">Não</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</body>
</html>