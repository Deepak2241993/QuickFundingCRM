
       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Customers</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Customers For Loan</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<a href="<?php echo base_url();?>Admin/loanform"><button type="button" class="btn btn-primary">Add Customer</button></a>
						
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			
				<h6 class="mb-0 text-uppercase">Loan Data Import</h6>
					<?php if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
         }
         if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
         }
         ?>
				<hr/>
				<div class="card">
					<div class="card-body">

	<div class="search-heading row">
     <div class="col-lg-2">
                    <form action="<?php echo base_url();?>Admin/customerList" method="post">   
                 <span id="date-label-from" class="date-label">From: 
                </span><input class="form-control date" name="from" type="date" 
                id="datepicker_from" style="margin: 8px;" value="<?=$from?$from:'' ?>"/>
                  </div>
                         <div class="col-lg-2">
                                <span id="date-label-to" class="date-label">To:</span><input class="form-control date" type="date" name="to" id="datepicker_to" style="margin: 8px;" value="<?=$to?$to:'' ?>" /></div>
                            <div class="col-lg-2">
                                  <span id="date-label-to" class="date-label">Loan Type:</span><select class="form-select mb-3" aria-label="Default select example" name="type" style="margin: 8px;">
													<option value="">Select Loan Type</option>
													<option value="Car Loan">Car Loan</option>
													<option value="Business Loan">Business Loan</option>
														<option value="Personal Loan">Personal Loan</option>
													</select></div>
													
													<div class="col-lg-2">
                                    <span id="date-label-to" class="date-label">Status</span><select class="form-select mb-3" aria-label="Default select example" name="status" style="margin: 8px;">
													<option value="">Select Status</option>
													<option value="1">Not Approved</option>
													<option value="2">In progress</option>
													<option value="3">Approved</option>
												
												
													</select></div> 
													<div class="col-lg-2">
                                    <span id="date-label-to" class="date-label">Agent</span><select class="form-select mb-3" aria-label="Default select example" name="agent_name" style="margin: 8px;">
													<option value="">Select Agent</option>
													<?php $agentdata=$this->Customer->get_agent(); foreach($agentdata as $agent){ ?>
													<option value="<?=$agent->id ?>"><?=$agent->name ?></option>
												<?php } ?>
												
												
													</select></div>
                               <div class="col-lg-2">
                                        <button class="btn btn-primary clear-date-filter" style="margin-top: 28px;" >Filter</button> </div>
                                </form>
    </div>
						<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th>Sr No.</th>
										<th>Application No</th>
										<th>Agent Name</th>
										<th>Loan Type</th>
										<th>Customer Name</th>
									
										<th>Mobile No</th>
									
										<th>Date</th>
											<th>Status</th>
											<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php $i=1; foreach($datalist as $row){ ?>
									<tr>
									    <td> <?=$i ?></td>
										<td><a href="<?php echo base_url();?>Admin/viewdeatails/<?=$row->id;?>"><?=$row->application_no ?></a></td>
										<?php $agentname=$this->Customer->get_agent_by_id($row->agent_name); ?>
											<td><?=(!empty($agentname->name))?$agentname->name:'null' ?></td>
										<td><?=$row->loan_type ?></td>
										
										<td><?=$row->fullname ?></td>
									
										<td><?=$row->mobile ?></td>
										
										<td><?=date('d-m-Y',strtotime($row->create_at)) ?></td>
										<td id="statustd_<?=$row->id;?>">
										    <select class="form-select mb-3" <?php if($row->status==2){ echo "style='background: #2d37afbf; color: #FFF;'";}else if($row->status==3){ echo "style='background: #009966; color: #FFF;'";}else{ echo "style='background: #990000bf; color: #FFF;'";} ?> aria-label="Default select example" name="status" onchange="updatestatus(<?=$row->id ?>,this)">
													<option value="">Select Status</option>
													<option value="1"  <?php if($row->status==1){ ?> selected <?php } ?> >Not Approved</option>
													<option value="2"  <?php if($row->status==2){ ?> selected <?php } ?> >In progress</option>
													<option value="3" <?php if($row->status==3){ ?> selected <?php } ?> >Approved</option>
												</select>
										   </td>
										<td> <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="<?php echo base_url();?>Admin/viewdeatails/<?=$row->id;?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               <a href="<?php echo base_url();?>Admin/edit/<?=$row->id;?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:void(0)" id="deletec" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" onclick="confirmdelete(<?=$row->id;?>);"><i class="bi bi-trash-fill"></i></a>
                               <a href="<?php echo base_url();?>Admin/mail_send/<?=$row->id;?>" id="email_send" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"><i class="bi bi-envelope-fill"></i></a>
                             </div></td>
									</tr>
									<?php  $i++; } ?>
								</tbody>
								<tfoot>
									<tr>
									     <th>Sr No.</th>
										<th>Application No</th>
											<th>Agent Name</th>
										<th>Loan Type</th>
										<th>Customer Name</th>
									
										<th>Mobile No</th>
									
										<th>Date</th>
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
			    function updatestatus(id,s){
			      var st= confirm("Are You sure change Status");
			      var status = s.value;
			   
			     if(st){
			          $.ajax({
                       url: '<?php echo base_url();?>Admin/updateStatus',
                       type: 'POST',
                       data: {id:id, status:status},
                       error: function() {
                          alert('Something is wrong');
                       },
                       success: function(data) {
                          
                       }
                    });
			     }
			    }
			</script>
			<script>
			    function filtertable(){
			        var from=$('#datepicker_from').val();
			        var to=$('#datepicker_to').val();
			        if(from !='' && to != ''){
			            $.ajax({
                       url: '<?php echo base_url();?>Admin/filtertable',
                       type: 'POST',
                       data: {from:from,to:to},
                       error: function() {
                          alert('Something is wrong');
                       },
                       success: function(data) {
                            $("#ajaxtable").html(data);
                           
                       }
                    }); 
			            
			        }
			    }
			    

    function confirmdelete(id){
           var st= confirm("Are You sure delete customer");
           if(st){
              window.location.href='<?php echo base_url();?>Admin/delete/'+id;
               
           }
    }
			</script>
       <!--end page main-->


     