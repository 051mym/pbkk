<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("part/head.php") ?>
</head>

<body>
<div id="preloader"></div>

  <?php $this->load->view("part/header.php") ?>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Tugas 2</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Membuat CRUD dan Template bootstrap dengan CI</p>
          <div style="text-align: center;">
            <button type="button" class="btn btn-bg btn-primary" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</button>
            <hr>
             <!-- Modal add-->
             <div class="modal fade" id="add_user" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="text-align:left;">
                      <form action="<?php echo site_url('tugas2/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                          </div>
                          <div class="col-sm-2 col-form-label"></div>
                          <div class="col-sm-10 col-form-label" style="color:red;">
                              <?php echo form_error('email') ?>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="name">
                          </div>
                          <div class="col-sm-2 col-form-label"></div>
                          <div class="col-sm-10 col-form-label" style="color:red;">
                              <?php echo form_error('name') ?>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="checkbox" class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="checkbox" name="status">
                              <label class="form-check-label" for="gridCheck1" >
                                Active
                              </label>
                            </div>
                          </div>
                        </div>
                        </div>
                      
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Save</button> -->
                      <input class="btn btn-primary" type="submit" name="btn" value="Save" />
                    </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
         </div>
      </div>

      <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                <th> ID</th>
                <th> Email</th>
                <th> Name</th>
                <th> Status</th>
                <th> Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                <th><?php echo $user->id ?></th>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->name ?></td>
                <td><?php echo ($user->status) ? "Active" : "Not Active" ?></td>
                <td>
                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit_<?php echo $user->id ?>"><i class="fa fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_<?php echo $user->id ?>"><i class="fa fa-trash"></i> Delete</button>
                </td>
                </tr>
               <!-- Modal edit-->
              <div class="modal fade" id="edit_<?php echo $user->id ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" style="text-align:center;" id="staticBackdropLabel">Edit <?php echo $user->name ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo site_url('tugas2/edit/'.$user->id) ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" value="<?php echo $user->email ?>" name="email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="<?php echo $user->name ?>" name="name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="checkbox" class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="checkbox" name="status" <?php echo ($user->status) ? "checked" : "" ?> >
                              <label class="form-check-label" for="gridCheck1">
                                Active
                              </label>
                            </div>
                          </div>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <input type="hidden" id="id" name="id" value="<?php echo $user->id ?>">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input class="btn btn-primary" type="submit" name="btn" value="Save" />
                    </div>
                    </form>
                  </div>
                </div>
              </div>
               <!-- Modal delete-->
              <div class="modal fade" id="delete_<?php echo $user->id ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" style="text-align:center;" id="staticBackdropLabel">Delete <?php echo $user->name ?> ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p><strong>Data yang telah dihapus tidak dapat dikembalikan !!! </strong> </p>
                    </div>
                    <div class="modal-footer">
                      <form action="<?php echo site_url('tugas2/delete/'.$user->id) ?>" method="post" enctype="multipart/form-data">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input class="btn btn-danger" type="submit" name="btn" value="Delete" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
  </section>



 


  <?php $this->load->view("part/footer.php") ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/morphext/morphext.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/stickyjs/sticky.js"></script>
  <script src="<?php echo base_url(); ?>lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url(); ?>js/custom.js"></script>

  <!-- <script src="contactform/contactform.js"></script> -->


</body>

</html>
