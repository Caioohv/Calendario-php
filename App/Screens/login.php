<div class="login-box">
    <h1>CalendApp</h1>
    <form action="App/Controller/login.php" method="POST">
        <input type="text" name="userId" id="userId" placeholder="E-mail">
        <!-- <br> -->
        <input type="password" name="passwd" id="passwd" placeholder="Senha">
        <?php 
        if(isset($_GET['error'])){
            ?>
                <p class="error">Erro ao fazer login</p>
            <?
        }
        ?>
        <button type="submit">Entrar</button>
    </form>
    <div class="links">
        <a href="">Não possui uma conta?</a>    
        <a href="">Esqueci minha senha</a>
    </div>
</div><!-- login-box -->
