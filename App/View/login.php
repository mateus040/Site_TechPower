<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="shortcut icon" href="images/icone.ico" type="image/x-icon">
</head>
<body>

    <form method="POST">
        <div class="main-login">
            <div class="left-login">
                <img src="images/logo1.png" class="left-login-image">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" name="submit" class="btn-login">Login</button>
                    <a href="/cadastrar">Ainda não se cadastrou? <strong> Cadastre-se! </strong> </a>

                    <?php

                        if(isset($_POST['email']))
                        {
                            $email = addslashes($_POST['email']);
                            $senha = addslashes($_POST['senha']);

                            if(!empty($email) && !empty($senha))
                            {
                                $u->conectar("db_techpower","localhost:3307","root","etecjau");
                                if($u->msgErro == "")
                                {
                                    if($u->logar($email,$senha))
                                    {
                                        header("Location: /home");
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="msg-erro">
                                            Email e/ou senha estão incorretos! Tente novamente.
                                        </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <div class="msg-erro">
                                        <?php echo "Erro: ".$u->msgErro; ?>
                                    </div>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <div class="msg-erro">
                                    Preencha todos os campos!
                                </div>
                                <?php
                            }
                        }


                    ?>

                </div>
            </div>
        </div>
    </form>



</body>
</html>