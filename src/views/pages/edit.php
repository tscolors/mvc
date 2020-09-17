
<?php echo $render('header');?>

<header>
    <div class="container">
        <div class="logo">
            <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
        <div class="head-side">
            <div class="head-side-left">
                <div class="search-area">
                    <form method="GET">
                        <input type="search" placeholder="Pesquisar" name="s" />
                    </form>
                </div>
            </div>
            <div class="head-side-right">
                <a href="" class="user-area">
                    <div class="user-area-text">TIAGO</div>
                    <div class="user-area-icon">
                        <img src="<?=$base;?>/assets/images/avatar.png" />
                    </div>
                </a>
                <a href="" class="user-logout">
                    <img src="assets/images/power_white.png" />
                </a>
            </div>
        </div>
    </div>
</header>
<section class="container main">
  <div class="row text-justify mt-5 p-5">
      <div class="col-12  p-5 shadow">
      <h1 class="text-center mt-3 text-muted shadow-sm">Editar Usuário</h1>

      <form method="POST" action="<?php echo $base;?>/usuario/<?php echo $user['id'];?>/editar">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="<?php echo $user['nome'];?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $user['email'];?>" >
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
      </div>
  </div>
 

    </section>
</section>
<div class="modal">
    <div class="modal-inner">
        <a rel="modal:close">&times;</a>
        <div class="modal-content"></div>
    </div>
</div>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/vanillaModal.js"></script>
<?php echo $render('footer');?>