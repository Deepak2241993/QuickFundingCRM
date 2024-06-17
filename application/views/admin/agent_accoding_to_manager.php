
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
								<li class="breadcrumb-item active" aria-current="page">View All Manager/Agent</li>
							</ol>
							</nav>
						</nav>
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
				<hr/>
				<div class="card">
					<div class="card-body">


						<div class="table-responsive">
						<table id="<?php if($this->session->userdata('type')!='Agent'){echo "example2";} ?>" class="table table-striped table-bordered"> 
								<thead>
									<tr>
									    <th>Sr No.</th>
									     <?php 
								        foreach($user as $row){ ?>
										<th><?=ucfirst($row->name)?> (Manager)</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
								    <?php
								    foreach($user as $key=>$row){ 
								    
								        $this->db->where('manager_id',$row->id);
										$this->db->where('type','Agent');
                                        $result=$this->db->get('admin')->result();
                                        
                                             $i=1;
                                        foreach($result as $key=>$row){ 
								    ?>
								    
									<tr>
									    <td> <?=$i ?> Agent</td>
										<td><?php
										
                                        
                                        echo $row->name;
                                        $i++;
                                        
                                        }?>
										
										
										</td>
									</tr>
									
									<?php   } ?>
								</tbody>
		
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
                       url: '<?php echo base_url();?>Admin/leadstatus', 
                       type: 'POST',
                       data: {id:id, status:status},
                       error: function() {
                          alert('Something is wrong');
                       },
                       success: function(data) {
                          console.log(data);
                          var parsedData = JSON.parse(data);
                          if(parsedData.success) 
                          {
                              window.location="<?=base_url()?>/Admin/customerList";
                          }
                          else
                          {
                              alert(data.error);
                          }
                          
                       }
                    });
			     }
			    }
			
			
			
			
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
              window.location.href='<?php echo base_url();?>Admin/leaddelete/'+id;
               
           }
    }
			</script>
       <!--end page main-->


     