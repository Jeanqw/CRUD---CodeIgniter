<?php echo $this->extend('master');?>

<?= $this->section('content')?>

<link rel="stylesheet" href="<?= base_url('css/cadastro.css')?>">
<style>
  #item1{
    background-color: #51575d;
  }
</style>
    

        <div class="size">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastro de usuários</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo url_to('sendData')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" name="user_name" class="form-control" id="user" placeholder="Digite o usuário" value="<?php echo old('user_name')?>">
                    <span style="color:red"><?php echo session()->getFlashdata('errors')['user_name'] ?? '';?></span>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o email" value="<?php echo old('email')?>">
                    <span style="color:red"><?php echo session()->getFlashdata('errors')['email'] ?? '';?></span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite a senha" value="<?php echo old('password')?>">
                    <span style="color:red"><?php echo session()->getFlashdata('errors')['password'] ?? '';?></span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>

<?= $this->endSection() ?>