
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
								<li class="breadcrumb-item active" aria-current="page">Agent According To Manager</li>
							</ol>
							</nav>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
			
				<!-- <h6 class="mb-0 text-uppercase">User Data Import</h6> -->
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
										<th>Mobile No</th>
										<th>Total Lead</th>
									    <th>Status</th>
									</tr>
								</thead>
								<tbody>
                                   


								    <?php $i=1; foreach($teams as $row){ ?>
									<tr>
									    <td> <?=$i ?></td>
									
										<td><?=$row->name ?></td>
										<td><?=$row->email ?></td>
										<td><?=$row->phone ?></td>
										<td><?=$row->lead_count ?></td>
										<td><?=$row->status ==1 ? 'Active' : 'Inactive' ?></td>
									
										<!--<td></td>-->
									
									</tr>
									<?php  $i++; } ?>
								</tbody>
								<tfoot>
									<tr>
									     <th>Sr No.</th>
										<th>Agent Name</th>
										<th>Email</th>
										<th>Mobile No</th>
										<th>Total Lead</th>
									    <th>Status</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</main>
			
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
			    

  
			</script>
       <!--end page main-->


     