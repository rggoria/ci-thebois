<br>
<div class="d-flex align-items-center justify-content-center min-vh-100">
	<!-- Card -->
	<div class="card border-gray w-50">
		<!-- Card Header -->
		<div class="card-header text-bg-gray p-4 text-center fs-2"> Login</div>
		<!-- Card body -->
        <?= form_open('Admin/login_validation');?>
            <div class="card-body">
                <!-- Card Form -->
                <div class="text-center">
                    <i class="fa-solid fa-user-circle fa-5x mt-3 mb-3"></i>
                    <h5 class="fs-5 mt-2">Welcome to The Bois</span></h5>
                    <?php if ($this->session->flashdata('new')): ?>
                        <div class="row d-flex justify-content-center mb-2">
                            <div class="col-lg-4">
                                <div class="bg-success p-3">
                                    <h3 class="text-white"> <?= $this->session->flashdata('new'); ?> </h3>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <hr>
                <div class="mb-3">
                    <label class="form-label">Username or Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="text" name="login" class="form-control" placeholder="Enter Username of Password">
                    </div>
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('login'); ?> </small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input id="psw" type="password" name="password" class="form-control" placeholder="Password">
                        <span class="input-group-text">
                            <i id="eye" class="fa-solid fa-eye-slash" style="cursor: pointer;"></i>
                        </span>
                    </div>
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('password'); ?> </small>
                </div>
                <button type="submit" class="btn btn-dark w-100 mb-3">Login</button>
            </div>
        <?= form_close();?>
	</div>
</div>
<br>

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