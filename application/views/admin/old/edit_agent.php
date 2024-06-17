
<style>
    
textarea.form-control {
    min-height: calc(25.5em + 0.75rem + 2px)!important;
}
</style>
       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Agent</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Agent</li>
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
		<form action="<?php echo base_url();?>Admin/updateAgent/<?=$agent->id ?>" method="post" enctype="multipart/form-data">
		    
		    
			<div class="row">
			
					<div class="col-xl-12 mx-auto">
						<div class="card">
						   <h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">Agent Edit Form</h6>
							   <div class="card-body">
							         <div class="row">	
									<div class="col-xl-6 mb-3">
									<label class="form-label">Agent Name :</label>
										<input type="text" name="agent_name"  value="<?=$agent->name; ?>" class="form-control" required>
									 </div>
									</div>
	                            <div class="row">
                                   <div class="col-xl-6 mb-3">
										<label class="form-label">Agent Email :</label>
										<input type="email" name="agent_email"  value="<?=$agent->email; ?>"  class="form-control" required >
									 </div>
                                </div>
                             	<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Set New Password:</label>
											<input type="hidden" name="old_pass" class="form-control" value="<?=$agent->password ?>" >
										<input type="password" name="new_pass" class="form-control">
							        </div>
                                </div>
                              <button class="btn btn-outline-success px-5 rounded-0" >Update</button>
                                </div>
							 </div>
                 </div>  
                  </div>  
				</form>
				<!--end row-->
	</main>


 
 
       <!--end page main-->


