<style>
	textarea.form-control {
		min-height: calc(25.5em + 0.75rem + 2px) !important;
	}
</style>
<!--start content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Edit User</div>
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
	<form action="<?php echo base_url(); ?>Admin/updateUser/<?= $user->id ?>" method="post" enctype="multipart/form-data">


		<div class="row">

			<div class="col-xl-12 mx-auto">
				<div class="card">
					<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">User Edit Form</h6>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label"> User Name<span class="text-danger">*</span> :</label>
								<input type="text" name="name" value="<?= $user->name; ?>" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Email<span class="text-danger">*</span> :</label>
								<input type="email" name="email" value="<?= $user->email; ?>" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Phone :</label>
								<input type="phone" name="phone" class="form-control" value="<?= $user->phone; ?>">
							</div>
						</div>
						<?php if ($this->session->userdata('type') == 'Manager') { ?>
							<div class="row">
								<div class="col-xl-6 mb-3">
									<label class="form-label">User Type<span class="text-danger">*</span>:</label>
									<input type="text" readonly name="type" value="Agent" class="form-control" required>
								</div>
							</div>

						<?php } else { ?>
							<div class="row">
								<div class="col-xl-6 mb-3">
									<label class="form-label">User Type<span class="text-danger">*</span>:</label>
									<select class="form-control" name="type" id="userTypeSelect" required>
										<option value="">Select User Type</option>
										<option value="Manager" <?= ($user->type == 'Manager') ? 'selected' : '' ?>>Team Lead/Manager</option>
										<option value="Agent" <?= ($user->type == 'Agent') ? 'selected' : '' ?>>Agent</option>
									</select>
								</div>
							</div>

							<!-- Manager selection (conditionally shown if Agent is selected) -->
							<div class="row" id="selectManagerSection" style="<?= ($user->type == 'Agent') ? '' : 'display:none;' ?>">
								<div class="col-xl-6 mb-3">
									<label class="form-label">Select Manager:</label>
									<select class="form-control" name="manager_id">
										<option value="">Select Manager</option>
										<?php foreach ($managers as $manager) { ?>
											<option value="<?= $manager->id ?>" <?= ($user->manager_id == $manager->id) ? 'selected' : '' ?>><?= $manager->name ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<!-- JavaScript to dynamically show/hide manager section -->
							<script>
								document.addEventListener("DOMContentLoaded", function() {
									const userTypeSelect = document.getElementById("userTypeSelect");
									const managerSection = document.getElementById("selectManagerSection");

									userTypeSelect.addEventListener("change", function() {
										if (this.value === "Agent") {
											managerSection.style.display = "flex"; // or "block"
										} else {
											managerSection.style.display = "none";
										}
									});
								});
							</script>
						<?php } ?>

						<div class="row">
							<div class="col-xl-6 mb-3">
								<label class="form-label">Set New Password<span class="text-danger">*</span>:</label>
								<input type="hidden" name="old_pass" class="form-control" value="<?= $user->password ?>">
								<input type="password" name="new_pass" class="form-control">
								<input type="hidden" name="manager_id" value="<?= $_SESSION['id'] ?>" class="form-control" required>
							</div>
						</div>
						<div class="row">
								<div class="col-xl-6 mb-3">
									<label class="form-label">Active Status<span class="text-danger">*</span>:</label>
									<select class="form-control" name="status" id="userTypeSelect" required>
										<option value="">Select User Type</option>
										<option value="1" <?= ($user->status == 1) ? 'selected' : '' ?>>Active</option>
										<option value="0" <?= ($user->status == 0) ? 'selected' : '' ?>>Inactive</option>
									</select>
								</div>
							</div>
						<button class="btn btn-outline-success px-5 rounded-0">Update</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end row-->
</main>




<!--end page main-->