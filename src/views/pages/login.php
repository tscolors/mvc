<?php echo $render('header');?>
<link rel="stylesheet" href="<?=$base;?>/assets/css/login.css">
<body>
    

    <header>
        <div class="container">
            <a href=""><img src="assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST">
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema" />

            <a href="">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
    </body>
