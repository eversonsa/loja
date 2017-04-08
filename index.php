<?php require_once './cabecalho.php'; 
      require_once './logica-usuario.php';
?>
    
        <h1>Bem vindo</h1>
        
        <?php if(usuarioEstaLogado()) {?>
        <p class="text-success">Voce esta logado como <?= usuarioLogado() ?>!</p>
        <a href="logout.php">Deslogar</a>
            <?php } else {?>
        
            <h2>Login</h2>
            
            <form action="login.php" method="POST">                   
                <table class="table">
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="Email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Senha</td>
                        <td><input type="password" name="senha" placeholder="Senha" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-defaul">Logar</button></td>
                    </tr>

                </table>
            </form>
        <?php } ?>
<?php include './rodape.php'; ?>

