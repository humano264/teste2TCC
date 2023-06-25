<?php

if(isset($_POST['submit']))
{
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //rint_r($_POST['senha']);
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo de volta!</h2>
                <p class="description description-primary">Para você se manter conectado</p>
                <p class="description description-primary">Faça login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                      
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu email para se registrar</p>
                <form class="form" action="login.php" method="POST">
                    <label class="label-input" for="nome">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" id="nome" placeholder="Name">
                    </label>
                    
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="email" id="email"placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="senha" id="senha" placeholder="Password">
                    </label>
                    
                    
                    <button input type="submit" name="submit" id="submit" class="btn btn-second">Inscreva-se</button>
                            




                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">Comece sua jornada conosco</p>
                <button id="signup" class="btn btn-primary">Inscreva-se</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">faça seu login no desenvolvedor</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                    
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Use sua conta de email:</p>
                <form class="form" action="testLogin.php" method="POST">
                
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="email" id="email"placeholder="Email">
                    </label>
                
                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="senha" id="senha" placeholder="Password">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">Faça login</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="../java/app.js"></script>
</body>
</html>