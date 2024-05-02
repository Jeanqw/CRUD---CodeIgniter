<?php echo $this->extend('master');?>

<?= $this->section('content')?>
<link rel="stylesheet" href="<?= base_url('css/cadastro.css')?>">
<style>
  #item2{
    background-color: #51575d;
  }
</style>

            <div class="size-users">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Usuário</th>
                      <th>Email</th>
                    </tr>
                  </thead>

                  <?php foreach ($select as $user): ?>
                    <tbody>
                        <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->user_name; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td style="width: 8%;" class="col-2">
                            <a href="/delete/<?php echo $user->id;?>"><i class="far fa-trash-alt "></i></a>
                            <a data-toggle="modal" data-target="#modal-default-<?php echo $user->id; ?>"><i class="fas fa-pencil-alt mr-1 col-1"></i></a>
                        </td>
                        </tr>
                    </tbody>

                    <div class="modal fade" id="modal-default-<?php echo $user->id; ?>">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Atualização de usuários</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('update/'.$user->id)?>" method="post">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="user">Usuário</label>
                                    <input type="text" value="<?php echo $user->user_name; ?>" name="user_name" class="form-control" id="user" placeholder="Digite o usuário">
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de email</label>
                                    <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" id="exampleInputEmail1" placeholder="Digite o email">
                                </div>
                                </div>
                                 <!-- /.card-body -->

                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                    
                    </div>
                 
                    </div>

                    <?php endforeach; ?>
                 
                </table>
  
            </div>
         
<script src="<?= base_url('theme/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>


<?= $this->endSection() ?>