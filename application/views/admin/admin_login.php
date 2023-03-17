<section>
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col col-xl-10">
				<div class="card" style="border-radius: 1rem;">
					<div class="row g-0">
						<div class="col-md-6 col-lg-5 d-none d-md-block">
							<img src="https://e0.pxfuel.com/wallpapers/632/437/desktop-wallpaper-gundam-android-2021-android-gundam-logo.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
						</div>
						<div class="col-md-6 col-lg-7 d-flex align-items-center">
							<div class="card-body p-4 p-lg-5 text-black">
                                <?= form_open('Admin/login_validation');?>
									<div class="d-flex align-items-center mb-3 pb-1">
										<span class="h1 fw-bold mb-0">Welcome, Admin</span>
									</div>
									<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please sign into your account</h5>
									<div class="form-outline mb-4">
                                        <label class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <input type="text" name="email" class="form-control form-control-lg" placeholder="Enter Username of Password">
                                        </div>
                                        <small class="text-danger fw-bold fst-italic"> <?= form_error('email'); ?> </small>
									</div>
									<div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input id="psw" type="password" name="password" class="form-control  form-control-lg" placeholder="Password">
                                            <span class="input-group-text">
                                                <i id="eye" class="fa-solid fa-eye-slash" style="cursor: pointer;"></i>
                                            </span>
                                        </div>
                                        <small class="text-danger fw-bold fst-italic"> <?= form_error('password'); ?> </small>
									</div>
									<div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block mb-1">Login</button>
									</div>
                                <?= form_close();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<?php if ($this->session->flashdata('admin_login_failed')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">    
                                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bdnjxekx.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('admin_login_failed'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif($this->session->flashdata('admin_login_disable')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">    
                                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bdnjxekx.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('admin_login_disable'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif($this->session->flashdata('admin_login_user')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">    
                                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bdnjxekx.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('admin_login_user'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    var myModal = document.getElementById('disableModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('disableModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>