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
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/style_login.css">
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

                        <h1>CADASTRAR</h1>
                        <div class="textfield">
                            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                        </div>
                        <div class="textfield">
                            <input type="number" name="telefone" placeholder="Telefone" maxlength="30">
                        </div>
                        <div class="textfield">
                            <input type="email" name="email" placeholder="Email" maxlength="40">
                        </div>
                        <div class="textfield">
                            <input type="password" name="senha" placeholder="Senha" maxlength="15">
                        </div>
                        <div class="textfield">
                            <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
                        </div>
                        
                        <button type="submit" name="submit" class="btn-login">Cadastrar</button>

                        <?php

                            // Verificar se clicou no botão
                            if(isset($_POST['nome']))
                            {
                                $nome = addslashes($_POST['nome']);
                                $telefone = addslashes($_POST['telefone']);
                                $email = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);
                                $confirmarSenha = addslashes($_POST['confSenha']);

                                // Verificar se está preenchido
                                if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha))
                                {
                                    $u->conectar("db_techpower","localhost:3307","root","etecjau");

                                    if($u->msgErro == "") // Está tudo ok
                                    {
                                        if($senha == $confirmarSenha)
                                        {
                                            if($u->cadastrar($nome,$telefone,$email,$senha))
                                            {
                                                header("Location: /login");
                                            }   
                                            else
                                            {
                                                ?>

                                                <div class="msg-erro">
                                                    Email já cadastrado!
                                                </div>
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="msg-erro">
                                                Senha e confirmar senha não correspondem!
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