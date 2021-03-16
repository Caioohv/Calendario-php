<div class="container fullsc">
    <div class="login-box">
        <h1>CalendApp</h1>
        <form action="App/Controller/login.php" method="POST">
            <input type="text" name="userId" id="login" placeholder="E-mail">
            <input type="password" name="passwd" id="login" placeholder="Senha">
            <?php 
            if(isset($_GET['error'])){
                ?>
                    <p class="error">Erro ao fazer login</p>
                <?
            }
            
            ?>
            <button type="submit">Entrar</button>
        </form>
        <a href="">Esqueci minha senha</a>
        <a href="">Não possui uma conta?</a>
    </div>
</div>