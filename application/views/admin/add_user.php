<style>
	textarea.form-control {
		min-height: calc(25.5em + 0.75rem + 2px) !important;
	}
</style>
<!--start content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Add User</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">User</li>
				</ol>
			</nav>
		</div>
		<!-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div> -->
	</div>
	<!--end breadcrumb-->
	<form action="<?php echo base_url(); ?>Admin/saveUser" method="post" enctype="multipart/form-data">


		<div class="row">

			<div class="col-xl-12 mx-auto">
				<div class="card">
					<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">User Form</h6>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Name<span class="text-danger">*</span> :</label>
								<input type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Email<span class="text-danger">*</span> :</label>
								<input type="email" name="email" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Phone :</label>
								<input type="phone" name="phone" class="form-control">
							</div>
						</div>
						<?php if ($this->session->userdata('type') == 'Manager') { ?>
							<!-- Manager can only create Agent -->
							<div class="row">
								<div class="col-xl-6 mb-3">
									<label class="form-label">User Type<span class="text-danger">*</span> :</label>
									<input type="text" readonly name="type" value="Agent" class="form-control" required>
								</div>
							</div>

						<?php } else { ?>
							<!-- For Admin or other roles -->
							<div class="row">
								<div class="col-xl-6 mb-3">
									<label class="form-label">User Type<span class="text-danger">*</span> :</label>
									<select class="form-control" name="type" id="userTypeSelect" required>
										<option value="">Select User Type</option>
										<option value="Manager">Team Lead/Manager</option>
										<option value="Agent">Agent</option>
									</select>
								</div>
							</div>
							<input type="hidden" name="manager_id" value="<?= $_SESSION['id'] ?>" class="form-control" required>
							<!-- Select Manager section (Initially hidden) -->
							<div class="row" id="selectManagerSection" style="display: none;">
								<div class="col-xl-6 mb-3">
									<label class="form-label">Select Manager<span class="text-danger">*</span> :</label>
									<select class="form-control" name="manager_id">
										<option value="">Select Manager</option>
										<?php foreach ($managers as $manager) { ?>
											<option value="<?= $manager->id ?>"><?= $manager->name ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<!-- JavaScript to show/hide manager section -->
							<script>
								document.addEventListener("DOMContentLoaded", function() {
									const userTypeSelect = document.getElementById("userTypeSelect");
									const managerSection = document.getElementById("selectManagerSection");

									userTypeSelect.addEventListener("change", function() {
										if (this.value === "Agent") {
											managerSection.style.display = "flex"; // Or "block" if you prefer
										} else {
											managerSection.style.display = "none";
										}
									});
								});
							</script>
						<?php } ?>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">Password<span class="text-danger">*</span>:</label>
								<input type="password" name="password" class="form-control" required>

							</div>
						</div>
						<button class="btn btn-outline-success px-5 rounded-0">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end row-->
</main>




<!--end page main-->