
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
      
    <a href="<?php echo $base?>/novo"class="mt-3">Adicionar Novo Usuário</a>

    <div class="container">
    <div class="row justify-content-center mt-5">
    <table class="table  mt-5 table-hover table-sm shadow">
    <thead class="table-dark ">
    <tr class="bg-primary">
      <th >#</th>
      <th >Nome</th>
      <th >Email</th>
      <th >Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($data as $user): ?>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['nome'] ?></td>
        <td><?php echo $user['email'] ?></td>

        <td>
            <a href="<?=$base;?>/usuario/<?=$user['id'];?>/editar">[ EDITAR ]</a>
            <a href="<?=$base;?>/usuario/<?=$user['id'];?>/excluir" onclick= "return confirm('Tem certeza que deseja exluir')" >[ EXCLUIR ]</a>
        </td>

      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
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