<div class="form-box">
    <h1>CalendApp</h1>
    <form action="App/Controller/register.php" method="POST">
        
        <input type="text" name="name" id="name" placeholder="Nome">
        <input type="text" name="userId" id="userId" placeholder="E-mail">
        
        <!-- <br> -->
        <input type="password" name="passwd" id="passwd" placeholder="Senha">
        <input type="password" name="passwd2" id="passwd2" placeholder="Verifique sua Senha">
        
        <?php 
        if(isset($_GET['error'])){
            if($_GET['error'] == "match"){
                ?>
                    <p class="error" id="error">Senhas não coincidem</p>
                <?php
            }else if($_GET['error'] == "emptyField"){
                ?>
                    <p class="error" id="error">Preencha todos os Campos</p>
                <?php
            }else{
                ?>
                    <p class="error" id="error">Erro ao cadastrar</p>
                <?
            }
            }
        ?>
        <button type="submit" onclick="validatePassword()">Cadastrar</button>
    </form>
    <div class="links">
        <a href="">Não possui uma conta?</a>    
        <a href="">Esqueci minha senha</a>
    </div>
    <script src="App/Controller/register.js"></script>
</div><!-- form-box -->