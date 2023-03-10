<!-- Section: Banner -->
<section class="text-center">
    <div class="p-5 bg-dark">
        <h1 class="text-white">ADMIN: Edit Courier Module</h1>
    </div>
</section>
<section class="text-center p-5">
    <div class="card d-flex justify-content-center align-items-center">
        <img src="<?= base_url('resources/images/group.png') ?>" height="200" width="200">
        <div class="card-body">
            <h5 class="card-title fw-bold">Edit A Courier</h5>
            <!-- Form Input -->
            <?php echo form_open('Admin/edit_courier_validation/'.$user_data->user_id); ?>
                <div class="form-outline mb-4">
                    <div class="row">
                        <!-- Username Input -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" value="<?= $user_data->user_username; ?>" class="form-control" placeholder="Username" readonly>
                        </div>
                            <label class="form-label">Username</label>           
                        <!-- Firstname Input -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="<?= $user_data->user_firstname; ?>">
                            </div>
                            <?php if(form_error('firstname')):?>
                                <small class="text-danger fw-bold fst-italic"><?= form_error('firstname'); ?></small>
                                <?php else:?>
                                <label class="form-label">Firstname</label>
                            <?php endif;?> 
                        </div>
                        <!-- Lastname Input -->
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="<?= $user_data->user_lastname; ?>">
                            </div>
                            <?php if(form_error('lastname')):?>
                                <small class="text-danger fw-bold fst-italic"><?= form_error('lastname'); ?></small>
                            <?php else:?>
                                <label class="form-label">Lastname</label>
                            <?php endif;?> 
                        </div>
                    
                    </div>
                    <!-- Email input -->
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" value="<?= $user_data->user_email; ?>" class="form-control" placeholder="Email" readonly>
                    </div>
                    <label class="form-label">Email</label>

                    <!-- Password input -->
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $user_data->user_password; ?>">
                    </div>
                    <?php if(form_error('password')):?>
                        <small class="text-danger fw-bold fst-italic"><?= form_error('password'); ?></small>
                    <?php else:?>
                        <label class="form-label">Password</label>
                    <?php endif;?>
                </div>
                <!-- Back button -->
                <a href="<?= site_url('Admin') ?>" class="btn btn-danger btn-block mb-4 me-5" type="button">Go Back</a>
                <!-- Add button -->
                <button type="submit" class="btn btn-success btn-block mb-4">Update User</button>
            <?php form_close(); ?>
        </div>
    </div>
</section>

<!-- Modal -->
<?php if ($this->session->flashdata('user_edit')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('user_edit'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
    var myModal = document.getElementById('myModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('successModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>