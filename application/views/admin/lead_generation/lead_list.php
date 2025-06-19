<style>
	table.table {
		table-layout: auto;
		width: 100%;
		white-space: nowrap;
	}

	th,
	td {
		white-space: nowrap;
		padding: 8px 12px;
	}
	.wide-select {
    width: 150px !important;
}
</style>

<!--start content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">User List</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">View All User</li>
				</ol>
			</nav>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<a href="<?php echo base_url(); ?>Admin/LeadGeneration"><button type="button" class="btn btn-primary">Add Lead</button></a>

			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<h6 class="mb-0 text-uppercase">User Data Import</h6>
	<?php if ($this->session->flashdata('success')) {
		echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
	}
	if ($this->session->flashdata('error')) {
		echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
	}
	?>
	<hr />
	<div class="card">
		<div class="card-body">


			<div class="table-responsive">
				<table id="<?php if ($this->session->userdata('type') != 'Agent') {
								echo "example2";
							} ?>" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Sr No.</th>
							<th>Date</th>
							<th>Agent Name</th>
							<th>User Name</th>
							<th>Email</th>
							<th>User Phone</th>
							<th>Loan Purpose</th>
							<th style="width:50px;">Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;
						foreach ($leads as $row) { ?>
							<tr>
								<td> <?= $i ?></td>
								<td> <?= date('d-m-Y',strtotime($row->created_at)) ?></td>
								<td><?= $row->agent_name ?></td>
								<td><?= $row->name ?></td>

								<td><?= $row->email ?></td>
								<td><?= $row->phone ?></td>

								<td><?= $row->purpose_of_loan ?></td>
								<?php if (($this->session->userdata('type') == 'SuperAdmin' || $this->session->userdata('type') == 'Manager') && $row->status != 3) { ?>
									<td id="statustd_<?= $row->id; ?>">

										<select class="form-select mb-3 wide-select" <?php if ($row->status == 2) {
																				echo "style='background: #2d37afbf; color: #FFF;'";
																			} else if ($row->status == 3) {
																				echo "style='background: #009966; color: #FFF;'";
																			} else if ($row->status == 4) {
																				echo "style='background:#f9058ceb; color: #FFF;'";
																			} else {
																				echo "style='background: #990000bf; color: #FFF;'";
																			} ?> aria-label="Default select example" name="status" onchange="updatestatus(<?= $row->id ?>,this)">
											<option value="">Select Status</option>
											<option value="1" <?php if ($row->status == 1) { ?> selected <?php } ?>>Not Approved</option>
											<option value="2" <?php if ($row->status == 2) { ?> selected <?php } ?>>In progress</option>
											<option value="3" <?php if ($row->status == 3) { ?> selected <?php } ?>>Approved</option>
											<option value="4" <?php if ($row->status == 4) { ?> selected <?php } ?>>Setteled</option>
										</select>
									</td>
								<?php } else { ?>
									<td id="statustd_<?= $row->id; ?>">
										<select class="form-select mb-3 wide-select" <?php if ($row->status == 2) {
																				echo "style='background: #2d37afbf; color: #FFF;'";
																			} else if ($row->status == 3) {
																				echo "style='background: #009966; color: #FFF;'";
																			} else if ($row->status == 4) {
																				echo "style='background:#f9058ceb; color: #FFF;'";
																			} else {
																				echo "style='background: #990000bf; color: #FFF;'";
																			} ?> aria-label="Default select example" name="status">
											<option value="">No Action</option>
											<option value="1" <?php if ($row->status == 1) { ?> selected <?php } ?>>Not Approved</option>
											<option value="2" <?php if ($row->status == 2) { ?> selected <?php } ?>>In progress</option>
											<option value="3" <?php if ($row->status == 3) { ?> selected <?php } ?>>Approved</option>
											<option value="4" <?php if ($row->status == 4) { ?> selected <?php } ?>>Setteled</option>
										</select>
									</td>
								<?php } ?>

								<!--<td></td>-->
								<td>
									<div class="table-actions d-flex align-items-center gap-3 fs-6">
										<!--<a href="<?php echo base_url(); ?>Admin/viewdeatails/<?= $row->id; ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>-->
										<a href="<?php echo base_url(); ?>Admin/LeadEdit/<?= $row->id; ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
										<?php if ($this->session->userdata('type') == 'SuperAdmin') { ?>
											<a href="javascript:void(0)" id="deletec" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" onclick="confirmdelete(<?= $row->id; ?>);"><i class="bi bi-trash-fill"></i></a>
										<?php } ?>
									</div>
								</td>
							</tr>
						<?php $i++;
						} ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Sr No.</th>
							<th>Date</th>
							<th>Agent Name</th>
							<th>User Name</th>
							<th>Email</th>
							<th>User Phone</th>
							<th>Loan Purpose</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</main>

<script>
	function updatestatus(id, s) {
		var st = confirm("Are You sure change Status");
		var status = s.value;

		if (st) {
			$.ajax({
				url: '<?php echo base_url(); ?>Admin/leadstatus',
				type: 'POST',
				data: {
					id: id,
					status: status
				},
				error: function() {
					alert('Something is wrong');
				},
				success: function(data) {
					console.log(data);
					var parsedData = JSON.parse(data);
					if (parsedData.success) {
						window.location = "<?= base_url() ?>/Admin/allLead";
					} else {
						alert(data.error);
					}

				}
			});
		}
	}




	function filtertable() {
		var from = $('#datepicker_from').val();
		var to = $('#datepicker_to').val();
		if (from != '' && to != '') {
			$.ajax({
				url: '<?php echo base_url(); ?>Admin/filtertable',
				type: 'POST',
				data: {
					from: from,
					to: to
				},
				error: function() {
					alert('Something is wrong');
				},
				success: function(data) {
					$("#ajaxtable").html(data);

				}
			});

		}
	}


	function confirmdelete(id) {
		var st = confirm("Are You sure delete customer");
		if (st) {
			window.location.href = '<?php echo base_url(); ?>Admin/leaddelete/' + id;

		}
	}
</script>
<!--end page main-->