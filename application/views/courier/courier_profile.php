<section style="background-color: #eee;">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-13">
				<div class="card mb-4">
					<div class="card-body text-center">
						<img src="https://www.seekpng.com/png/detail/41-410093_circled-user-icon-user-profile-icon-png.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
						<h5 class="my-3"><?= $this->session->userdata('login_username'); ?></h5>
						<h3 class="my-3 text-muted"><?= $this->session->userdata('login_email'); ?></h3>
						<p class="text-muted mb-1">Courier</p>
						<p class="text-muted mb-4">Gundam Corp.</p>
					</div>
				</div>
			</div>
			<h1>Personal Information</h1>
			<div class="col-lg-12">
				<?php echo form_open('Courier/update_courier_validation'); ?>
					<div class="card mb-4">
						<div class="card-body">
							<div class="row">
								<div class="input-group">
									<span class="input-group-text col-sm-2"><p class="mb-0">Firstname:</p></i></span>
									<input type="text" name="firstname" class="form-control" placeholder="Enter firstname..." value="<?= $this->session->userdata('login_firstname'); ?>">
								</div>
								<?php if(form_error('firstname')):?>
									<small class="text-danger fw-bold fst-italic"><?= form_error('firstname'); ?></small>
								<?php endif;?>
							</div>

							<hr>

							<div class="row">
								<div class="input-group">
									<span class="input-group-text col-sm-2"><p class="mb-0">Lastname:</p></i></span>
									<input type="text" name="lastname" class="form-control" placeholder="Enter lastname..." value="<?= $this->session->userdata('login_lastname'); ?>">
								</div>
								<?php if(form_error('lastname')):?>
									<small class="text-danger fw-bold fst-italic"><?= form_error('lastname'); ?></small>
								<?php endif;?>
							</div>

							<hr>

							<div class="row">
								<div class="input-group">
									<span class="input-group-text col-sm-2"><p class="mb-0">Contact:</p></i></span>
									<input type="text" name="contact" class="form-control" placeholder="Enter Contact Number..." value="<?= $this->session->userdata('login_contact'); ?>">
								</div>
								<?php if(form_error('contact')):?>
									<small class="text-danger fw-bold fst-italic"><?= form_error('contact'); ?></small>
								<?php endif;?>
							</div>

							<hr>

							<div class="row">
								<div class="input-group">
									<span class="input-group-text col-sm-2"><p class="mb-0">Address:</p></i></span>
									<input type="text" name="address" class="form-control" placeholder="Enter Address..." value="<?= $this->session->userdata('login_address'); ?>">
								</div>
								<?php if(form_error('address')):?>
									<small class="text-danger fw-bold fst-italic"><?= form_error('address'); ?></small>
								<?php endif;?>
							</div>

							<hr>

							<div class="row">
								<div class="input-group">
									<span class="input-group-text col-sm-2"><p class="mb-0">Password:</p></i></span>
									<input type="text" name="password" class="form-control" placeholder="Enter Password..." value="<?= $this->session->userdata('login_password'); ?>">
								</div>
								<?php if(form_error('address')):?>
									<small class="text-danger fw-bold fst-italic"><?= form_error('address'); ?></small>
								<?php endif;?>
							</div>
							
							<div class="d-flex justify-content-center mt-3">
								<button type="submit" class="btn btn-primary">Update Profile Picture</button>
							</div>

						</div>
					</div>
				<?php form_close(); ?>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<?php if ($this->session->flashdata('courier_update')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('courier_update'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
    var myModal = document.getElementById('successModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('successModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>