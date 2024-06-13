<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Pizzaria - Pizza Station</title>
</head>

<body>

    <?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "pizzastation";
    
    $conn = new mysqli($serverName, $userName, $password, $dbname);
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $telefone = $_POST["tefefone"];
        $endereco = $_POST["endereço"];
        
        $sql = "INSERT INTO clientes (nome, telefone, endereco)  VALUES ('$nome', '$telefone', '$endereco')";

        if ($conn->query($sql) === TRUE) {
            echo "Pedido Registrado!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $sabor = $_POST["sabor"];
        $tamanho = $_POST["tamanho"];
        
        $sql2 = "INSERT INTO pedidos (sabor, tamanho)  VALUES ('$sabor', '$tamanho')";

        if ($conn->query($sql2) === TRUE) {
            echo "Pedido Registrado!";
        } else {
            echo "Erro: " . $sql2 . "<br>" . $conn->error;
        }
    }
    
    $conn->close();

    ?>

    <header>
        <div class="header">
            <img src="https://cdn.pixabay.com/photo/2021/10/05/12/01/pizza-6682514_640.png" alt="" class="logo">

            <h1>Pizza Station</h1>
        </div>
    </header>

    <div class="h2">
        <h2>Salgadas</h2>
        <h2>Doces</h2>
    </div>

    <div class="sabor">

        <ol class="pizza1">
            <li>Calabresa</li class="salgada">
            <li>Portuguesa</li class="salgada">
            <li>Mussarela</li class="salgada">

        </ol>

        <ol class="pizza2">
            <li>Romeu e Julieta</li class="doce">
            <li>Brigadeiro</li class="doce">
            <li>Paçoca</li class="doce">
        </ol>
    </div>

    <div class="container">

        <div class="imagens">

            <input type="radio" name="radio" id="imagem1" checked>
            <input type="radio" name="radio" id="imagem2">
            <input type="radio" name="radio" id="imagem3">
            <input type="radio" name="radio" id="imagem4">
            <input type="radio" name="radio" id="imagem5">
            <input type="radio" name="radio" id="imagem6">

            <div class="imagem img1">
                <img src="https://cdn.pixabay.com/photo/2016/04/21/22/50/pizza-1344720_640.jpg" alt="">
            </div>

            <div class="imagem img2">
                <img src="https://cdn.pixabay.com/photo/2014/07/08/12/34/pizza-386717_640.jpg" alt="">
            </div>

            <div class="imagem img3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfafELn0ZOj5HG7-qfvLz7Yz_Tu8i0K1nZeA&s"
                    alt="">
            </div>

            <div class="imagem img4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY3BXAdUdQT4YSSSui9T-l0VmckV21Z4RLvA&s"
                    alt="">
            </div>

            <div class="imagem img5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNxmWvLasHMkLEMd1GeJ68gyaEfzJdHH9tGg&s"
                    alt="">
            </div>

            <div class="imagem img6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGa3LeF19iXimkO4meUKlVyQAM8ztBOe9hqw&s"
                    alt="">
            </div>

            <div class="navegacao">
                <label for="imagem1" class="bar"></label>
                <label for="imagem2" class="bar"></label>
                <label for="imagem3" class="bar"></label>
                <label for="imagem4" class="bar"></label>
                <label for="imagem5" class="bar"></label>
                <label for="imagem6" class="bar"></label>
            </div>

        </div>

</div>

<h2 class="cla">Seu Pedido:</h2>

        <form class="gu">
                <label for="nome">Nome:</label><br>
                <input type="text" id="" name="nome"><br><br>

                <label for="endereco">Endereço:</label><br>
                <input type="text" id="" name="endereco"><br><br>

                <label for="telefone">Telefone:</label><br>
                <input type="text" id="" name="telefone"><br><br>
                 
                <label for="sabor">Sabor:</label><br>
                <input type="text" id="" name="sabor"><br><br>

                 <label for="tamanho">Tamanho:</label><br>
                 <input type="text" id="" name="tamanho"><br><br>
 
                <input type="submit" value="Cadastrar" class="submit">
            </form>

        <footer>
            Proprietário: Gabriela Libio e Iuri Macedo &reg;&copy;
        </footer>

</body>

</html>