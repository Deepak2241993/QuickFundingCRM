
       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Agent List</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">View All Agent</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<a href="<?php echo base_url();?>Admin/add_agent"><button type="button" class="btn btn-primary">Add Agent</button></a>
						
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			
				<h6 class="mb-0 text-uppercase">Agent Data Import</h6>
				<hr/>
				<div class="card">
					<div class="card-body">


						<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th>Sr No.</th>
										<th>Agent Name</th>
										<th>Email</th>
										<!--<th>Mobile No</th>-->
									    <!--<th>Status</th>-->
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php $i=1; foreach($agentlist as $row){ ?>
									<tr>
									    <td> <?=$i ?></td>
									
										<td><?=$row->name ?></td>
										<td><?=$row->email ?></td>
									
										<!--<td></td>-->
									<td> <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <!--<a href="<?php echo base_url();?>Admin/viewdeatails/<?=$row->id;?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>-->
                               <a href="<?php echo base_url();?>Admin/editAgent/<?=$row->id;?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:void(0)" id="deletec" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" onclick="confirmdelete(<?=$row->id;?>);"><i class="bi bi-trash-fill"></i></a>
                             </div></td>
									</tr>
									<?php  $i++; } ?>
								</tbody>
								<tfoot>
									<tr>
									     <th>Sr No.</th>
										<th>Agent Name</th>
										<th>Email</th>
										<!--<th>Mobile No</th>-->
									    <!--<th>Status</th>-->
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
              window.location.href='<?php echo base_url();?>Admin/deleteAgent/'+id;
               
           }
    }
			</script>
       <!--end page main-->


     