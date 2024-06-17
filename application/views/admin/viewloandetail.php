<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
 
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}


</style>
<!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Customer View</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
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

		    
		    	<div class="row" style="padding: 5px;">
										<div class="col-xl-6 mb-6">
											<label class="form-label">Loan Type</label>
											<select class="form-select mb-3" aria-label="Default select example" name="loan_type" onchange="loantype(this)" disabled="true">
												
													<option value="Car Loan" <?php if($editdata->loan_type=='Car Loan'){ echo 'selected';} ?>>Car Loan</option>
													<option value="Business Loan" <?php if($editdata->loan_type=='Business Loan'){ echo 'selected';} ?>>Business Loan</option>
														<option value="Personal Loan" <?php if($editdata->loan_type=='Personal Loan'){ echo 'selected';} ?>>Personal Loan</option>
													</select>
									</div>
						</div>
			<div class="row" id="formsow" >
			
					<div class="col-xl-12 mx-auto">
						<div class="card">
						   <h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">APPLICANT DETAILS</h6>
							   <div class="card-body">
							       	<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Application No.:</label>
										<input type="text" name="application_no" value="<?=$editdata->application_no ?>" class="form-control" readonly>
									 </div>
                             <div class="col-xl-6 mb-3">
										<label class="form-label">Agent Name</label>
										<?php $agentname=$this->Customer->get_agent_by_id($editdata->agent_name); ?>
											
										<input type="text" name="agent_name" value="<?=$agentname->name ?>" class="form-control" readonly>
									 </div>
									  </div>
									  	<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Finance Company Name:</label>
										<input type="text" name="f_company_name" value="<?=$editdata->f_company_name ?>" class="form-control" readonly>
									 </div>
                                	<div class="row">
										<div class="col-xl-3 mb-3">
											<label class="form-label">Title:</label>
											<input type="text" name="title" value="<?=$editdata->title ?>" class="form-control" readonly>
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">First Name:</label>
											<input type="text" name="first_name" value="<?=$editdata->first_name ?>" class="form-control" readonly>
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">Middle Name:</label>
											<input type="text" name="mid_name" value="<?=$editdata->mid_name ?>" class="form-control" readonly>
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">Surname:</label>
											<input type="text" name="surname" value="<?=$editdata->surname ?>" class="form-control" readonly>
										</div>
                                	</div>
                            
                              
								<div class="col-xl-6 mb-6">
										<label class="form-label">Gender</label>
										<select class="form-select mb-3" name="gander" aria-label="Default select example" disabled="true">
								
									<option value="Male" <?php if($editdata->gander=='Male'){ echo 'selected';} ?>>Male</option>
									<option value="Female" <?php if($editdata->gander=='Female'){ echo 'selected';} ?>>Female</option>
									<option value="Other" <?php if($editdata->gander=='Other'){ echo 'selected';} ?>>Other</option>
								   </select>
								</div>
								<label class="form-label">Current Residential Address Street Address</label>
								<div class="col-xl-6 mb-6">
										<label class="form-label">Street Address</label>
										
										<textarea name="street_address" value="<?=$editdata->street_address ?>" class="form-control" row="4" readonly><?=$editdata->street_address ?></textarea>
								</div>
								<br>
								<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Suburb:</label>
										<input type="text" name="subrub" value="<?=$editdata->subrub ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">State:</label>
										<input type="text" name="state" value="<?=$editdata->state ?>" class="form-control" readonly>
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Postcode:</label>
										<input type="number" name="postcode" value="<?=$editdata->postcode ?>" class="form-control" readonly>
									 </div>
								</div>

								<div class="col-xl-6 mb-6">
										<label class="form-label">Housing Status</label>
										<select class="form-select mb-3" name="housing_status" aria-label="Default select example" disabled="true">
									<option value="">Select Status</option>
									<option value="Own Outright" <?php if($editdata->housing_status=='Own Outright'){ echo 'selected';} ?>>Own Outright</option>
									<option value="Renting" <?php if($editdata->housing_status=='Renting'){ echo 'selected';} ?>>Renting</option>
									<option value="Mortgage" <?php if($editdata->housing_status=='Mortgage'){ echo 'selected';} ?>>Mortgage</option>
									<option value="Living with Parents" <?php if($editdata->housing_status=='Living with Parents'){ echo 'selected';} ?>>Living with Parents</option>
									<option value="Other" <?php if($editdata->housing_status=='Other'){ echo 'selected';} ?>>Other</option>   
								</select>
								</div>
								<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Mobile:</label>
										<input type="number" name="mobile" value="<?=$editdata->mobile ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-6 mb-3">
										<label class="form-label">Email:</label>
										<input type="email" name="email" value="<?=$editdata->email ?>" class="form-control" readonly>
									 </div>
                                </div>

								<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Drivers Licence Number:</label>
										<input type="text" name="dl_number" value="<?=$editdata->dl_number ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Expiry Date:</label>
										<input type="date" name="dl_exp_date" value="<?=$editdata->dl_exp_date ?>" class="form-control" readonly>
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">State Issued:</label>
										<select class="form-select mb-3" name="status_used" aria-label="Default select example" disabled="true">
									<option value="">Select Status</option>
									<option value="NSW" <?php if($editdata->status_used=='NSW'){ echo 'selected';} ?>>NSW</option>
									<option value="VIC" <?php if($editdata->status_used=='VIC'){ echo 'selected';} ?>>VIC</option>
									<option value="QLD" <?php if($editdata->status_used=='QLD'){ echo 'selected';} ?>>QLD</option>
									<option value="SA" <?php if($editdata->status_used=='SA'){ echo 'selected';} ?>>SA</option>
									<option value="ACT" <?php if($editdata->status_used=='ACT'){ echo 'selected';} ?>>ACT</option> 
									<option value="WA" <?php if($editdata->status_used=='WA'){ echo 'selected';} ?>>WA</option>
									<option value="Tasmania" <?php if($editdata->status_used=='Tasmania'){ echo 'selected';} ?>>Tasmania</option>  
								   </select>
								</div>
							</div>

							<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Passport Number:</label>
										<input type="text" name="passport_number" value="<?=$editdata->passport_number ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Expiry Date:</label>
										<input type="date" name="pp_exp_date" value="<?=$editdata->pp_exp_date ?>" class="form-control" readonly>
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Country:</label>
										<input type="text" name="country" value="<?=$editdata->country ?>" class="form-control" readonly>
									 </div>
								</div>
								<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Date of Birth:</label>
										<input type="date" name="dob" value="<?=$editdata->dob ?>" class="form-control" readonly>
									 </div>
                                   </div>

								   <div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Employment Type:</label>
										<input type="text" name="employment_type" value="<?=$editdata->employment_type ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Salary / Business Income per annum:</label>
										<input type="number" name="salary_income" value="<?=$editdata->salary_income ?>" class="form-control" readonly>
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Rental Income (if any):</label>
										<input type="number" name="rental_income" value="<?=$editdata->rental_income ?>" class="form-control" readonly>
									 </div>
                                </div>
								<div class="row">
								<div class="col-xl-6 mb-6">
									 <label class="form-label">Australian Residency Status</label>
									 <select class="form-select mb-3" name="au_residency_status" aria-label="Default select example" disabled="true">
											<option value="">Select Residency Status</option>
											<option value="Citizen" <?php if($editdata->au_residency_status=='Citizen'){ echo 'selected';} ?>>Citizen</option>
											<option value="Resident" <?php if($editdata->au_residency_status=='Resident'){ echo 'selected';} ?>>Resident</option>
											<option value="Non Resident" <?php if($editdata->au_residency_status=='Non Resident'){ echo 'selected';} ?>>Non Resident</option>
											 
									 </select>
									</div>
									<div class="col-xl-6 mb-6">
									 <label class="form-label">Marital Status</label>
									 <select class="form-select mb-3" name="marital_status" aria-label="Default select example" disabled="true">
											<option value="">Select Marital Status</option>
											<option value="Married" <?php if($editdata->marital_status=='Married'){ echo 'selected';} ?>>Married</option>
											<option value="Defacto" <?php if($editdata->marital_status=='Defacto'){ echo 'selected';} ?>>Defacto</option>
											<option value="Single" <?php if($editdata->marital_status=='Single'){ echo 'selected';} ?>>Single</option>
											<option value="Separated" <?php if($editdata->marital_status=='Separated'){ echo 'selected';} ?>>Separated</option>
											<option value="Divorced" <?php if($editdata->marital_status=='Divorced'){ echo 'selected';} ?>>Divorced</option>  
											<option value="Widowed" <?php if($editdata->marital_status=='Widowed'){ echo 'selected';} ?>>Widowed</option>   
									 </select>
									</div>
								</div>


								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Kids(Age):</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Kid 1 Age:</label>
										<input type="number" name="kid_one_age" value="<?=$editdata->kid_one_age ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Kid 2 Age:</label>
										<input type="number" name="kid_second_age" value="<?=$editdata->kid_second_age ?>" class="form-control" readonly>
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Bank Details:</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">BSB Number:</label>
										<input type="number" name="bsb_number" value="<?=$editdata->bsb_number ?>"  class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Account Number:</label>
										<input type="number" name="account_number" value="<?=$editdata->account_number ?>" class="form-control" readonly>
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">One Reference:</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Name:</label>
										<input type="text" name="reference_name" value="<?=$editdata->reference_name ?>" class="form-control" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Mobile No:</label>
										<input type="number" name="reference_number" value="<?=$editdata->reference_number ?>" class="form-control" readonly>
									 </div>
                                </div>

								</div>
                            </div>
                        </div>
                   
						
						<div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">ASSETS</h6>
							<div class="card-body">
							<table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Description</th>
                            <th scope="col">Provider Name</th>
                            <th scope="col">Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Bank Balance</td>
                            <td><input type="text" name="bank_balance_provoder" value="<?=$editdata->bank_balance_provoder ?>" class="form-control" readonly></td>
                            <td><input type="number" name="bank_balance_amount" value="<?=$editdata->bank_balance_amount ?>" class="form-control" readonly></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Fully Paid up Property</td>
                            <td>Market Value of Property</td>
                            <td><input type="number" name="fully_paid_up_property_amount" value="<?=$editdata->fully_paid_up_property_amount ?>" class="form-control" readonly></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td >Superannuation</td>
                            <td><input type="text" name="superannuation_provider" value="<?=$editdata->superannuation_provider ?>" class="form-control" readonly></td>
							<td><input type="number" name="superannuation_amount" value="<?=$editdata->superannuation_amount ?>" class="form-control" readonly></td>
							</tr>
							<tr>
                            <th scope="row">4</th>
                            <td>Shares</td>
                            <td><input type="text" name="shares_provider" value="<?=$editdata->shares_provider ?>" class="form-control" readonly></td>
                            <td><input type="number" name="shares_amount" value="<?=$editdata->shares_amount ?>" class="form-control" readonly></td>
                          </tr>
						  <tr>
                            <th scope="row">5</th>
                            <td>Car (type, model & year)</td>
                            <td><div class="row"><div class="col-xl-3 mb-3"><span>Make:</span><input type="text" name="car_make1" value="<?=$editdata->car_make1 ?>" class="form-control" readonly></div><div class="col-xl-3 mb-3"><span>Year:</span><input type="text" name="car_year1" value="<?=$editdata->car_year1 ?>" class="form-control" readonly></div></div></td>
                            <td><div class="row"><div class="col-xl-4 mb-3"><span>Approx. Value:</span><input type="text" name="approxvalue__car1" value="<?=$editdata->approxvalue_car1 ?>" class="form-control" readonly></div><div class="col-xl-4 mb-3"><span>Type:</span>
                            <select class="form-select mb-3" name="car1_type" aria-label="Default select example" disabled="true">
                                <option value="4WD" <?php if($editdata->car1_type=='4WD'){ echo 'selected';} ?>>4WD</option>
							<option value="Luxury Car" <?php if($editdata->car1_type=='Luxury Car'){ echo 'selected';} ?>>Luxury Car</option>
							<option value="Large" <?php if($editdata->car1_type=='Large'){ echo 'selected';} ?>>Large</option>
							<option value="Medium" <?php if($editdata->car1_type=='Medium'){ echo 'selected';} ?>>Medium</option>
							<option value="Small" <?php if($editdata->car1_type=='Small'){ echo 'selected';} ?>>Small</option>
							<option value="Bike" <?php if($editdata->car1_type=='Bike'){ echo 'selected';} ?>>Bike</option>
						</select></div><div class="col-xl-4 mb-3"><span>Car variant:</span>
                            <input type="text" name="car_variant_car1" value="<?=$editdata->car_variant_car1 ?>" class="form-control" readonly></div>
						</div></div></td>
                          </tr>
						  <tr>
                            <th scope="row">6</th>
                            <td>Car (type, model & year)</td>
                            <td><div class="row"><div class="col-xl-3 mb-3"><span>Make:</span><input type="text" name="car_make2"  value="<?=$editdata->car_make2 ?>" class="form-control" readonly></div><div class="col-xl-3 mb-3"><span>Year:</span><input type="text"  value="<?=$editdata->car_year2 ?>" name="car_year2" class="form-control" readonly></div></div></td>
                            <td><div class="row"><div class="col-xl-4 mb-3"><span>Approx. Value:</span><input type="text" name="approxvalue_car2" value="<?=$editdata->approxvalue_car2 ?>" class="form-control" readonly></div><div class="col-xl-4 mb-3"><span>Type:</span>
                            <select class="form-select mb-3" aria-label="Default select example" name="car2_type" disabled="true">
                               <option value="4WD" <?php if($editdata->car2_type=='4WD'){ echo 'selected';} ?>>4WD</option>
							<option value="Luxury Car" <?php if($editdata->car2_type=='Luxury Car'){ echo 'selected';} ?>>Luxury Car</option>
							<option value="Large" <?php if($editdata->car2_type=='Large'){ echo 'selected';} ?>>Large</option>
							<option value="Medium" <?php if($editdata->car2_type=='Medium'){ echo 'selected';} ?>>Medium</option>
							<option value="Small" <?php if($editdata->car2_type=='Small'){ echo 'selected';} ?>>Small</option>
							<option value="Bike" <?php if($editdata->car2_type=='Bike'){ echo 'selected';} ?>>Bike</option
						</select></div><div class="col-xl-4 mb-3"><span>Car variant:</span>
                            <input type="text" name="car_variant_car2" value="<?=$editdata->car_variant_car2 ?>" class="form-control" readonly></div>
						</div></div></td>
                          </tr>
						  <tr>
                            <th scope="row">7</th>
                            <td>Boat/Caravan</td>
                            <td><input type="text" name="provider_boat_caravan" value="<?=$editdata->provider_boat_caravan ?>" class="form-control" readonly></td>
                            <td><input type="text" name="amount_boat_caravan" value="<?=$editdata->amount_boat_caravan ?>" class="form-control" readonly></td>
                          </tr>
						  <tr>
                            <th scope="row">8</th>
                            <td>Furniture & Household Effects</td>
                            <td><input type="text" name="provider_furniture" value="<?=$editdata->provider_furniture ?>" class="form-control" readonly></td>
                            <td><input type="text" name="amount_furniture" value="<?=$editdata->amount_furniture ?>" class="form-control" readonly></td>
                          </tr>
						  <tr>
                            <th scope="row">9</th>
                            <td>Any Other</td>
                            <td><input type="text" name="provider_anyother" value="<?=$editdata->provider_anyother ?>" class="form-control" readonly></td>
                            <td><input type="text" name="amount_anyother" value="<?=$editdata->amount_anyother ?>" class="form-control" readonly></td>
                          </tr>
                        </tbody>
                      </table>
						</div>
						</div>
						
						
					 <div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">LIABILITIES</h6>
							<div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Home Loans:</h6>
									<table class="table mb-0">
											<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Property Address</br>(Street Address/Suburb/State/Post Code)</th>
												<th scope="col">Market Value</th>
												<th scope="col">Amt Outstanding</th>
												<th scope="col">Lenders Name</th>
												<th scope="col">Monthly Repayment</th>
												<th scope="col">Loan Type</th>
											</tr>
											</thead>
											<tbody  id="tbodyidhome">
											    <?php $s=0; foreach(explode("," ,$editdata->property_address) as $array){
											    $property_address=explode("," ,$editdata->property_address);
											    $market_value =explode("," ,$editdata->market_value);
											    $amt_outstanding =explode("," ,$editdata->amt_outstanding);
											    $lenders_name =explode("," ,$editdata->lenders_name);
											    $monthly_repayment =explode("," ,$editdata->monthly_repayment);
											    $lb_loan_type =explode("," ,$editdata->lb_loan_type);
											    ?>
											<tr>
												<th scope="row"><?=$s+1;?></th>
												<td><input type="text" name="property_address[]" value="<?php if(empty($property_address[$s])){ echo ''; }else{ echo $property_address[$s] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="market_value[]" value="<?php if(empty($market_value[$s])){ echo ''; }else{ echo $market_value[$s] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="amt_outstanding[]" value="<?php if(empty($amt_outstanding[$s])){ echo ''; }else{ echo $amt_outstanding[$s] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="lenders_name[]" value="<?php if(empty($lenders_name[$s])){ echo ''; }else{ echo $lenders_name[$s] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="monthly_repayment[]" value="<?php if(empty($monthly_repayment[$s])){ echo ''; }else{ echo $monthly_repayment[$s] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="lb_loan_type[]" value="<?php if(empty($lb_loan_type[$s])){ echo ''; }else{ echo $lb_loan_type[$s] ;}?>" class="form-control" readonly></td>
												
											</tr>
											<?php $s++; } ?>
										
												</tbody>
									</table>
										<!--<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowhome">+ Add Row</a>	-->
						     </div>

							 <div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Other Liabilities:</h6>
									<table class="table mb-0">
											<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Loan Type</th>
												<th scope="col">Amt Borrowed</th>
												<th scope="col">Amt Outstanding</th>
												<th scope="col">Lenders Name</th>
												<th scope="col">Monthly Repayment</th>
												
											</tr>
											</thead>
											<tbody id="tbodyid">
										<?php $l=0; foreach(explode("," ,$editdata->ot_loan_type) as $array){ 
										$ot_loan_type=explode("," ,$editdata->ot_loan_type);
										$ot_amt_borrowed=explode("," ,$editdata->ot_amt_borrowed);
										$ot_amt_outstanding=explode("," ,$editdata->ot_amt_outstanding);
										$ot_lenders_name=explode("," ,$editdata->ot_lenders_name);
										$ot_monthly_repayment=explode("," ,$editdata->ot_monthly_repayment);
										
										?>
											<tr>
												<th scope="row"><?=$l+1;?></th>
												<td><input type="text" name="ot_loan_type[]" value="<?php if(empty($ot_loan_type[$l])){ echo ''; }else{ echo $ot_loan_type[$l] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="ot_amt_borrowed[]" value="<?php if(empty($ot_amt_borrowed[$l])){ echo ''; }else{ echo $ot_amt_borrowed[$l] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="ot_amt_outstanding[]" value="<?php if(empty($ot_amt_outstanding[$l])){ echo ''; }else{ echo $ot_amt_outstanding[$l] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="ot_lenders_name[]" value="<?php if(empty($ot_lenders_name[$l])){ echo ''; }else{ echo $ot_lenders_name[$l] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="ot_monthly_repayment[]" value="<?php if(empty($ot_monthly_repayment[$l])){ echo ''; }else{ echo $ot_monthly_repayment[$l] ;}?>" class="form-control" readonly></td>
												
												
											</tr>
											<?php $l++; } ?>
											<!--<tr>-->
											<!--	<th scope="row">2</th>-->
											<!--	<td><input type="text" class="form-control"></td>-->
											<!--	<td><input type="text" class="form-control"></td>-->
											<!--	<td><input type="text" class="form-control"></td>-->
											<!--	<td><input type="text" class="form-control"></td>-->
											<!--	<td><input type="text" class="form-control"></td>-->
												
											<!--</tr>-->
												</tbody>
												
									</table>
									<!--<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrow">+ Add Row</a>	-->
						     </div>

							 <div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Credit Card:</h6>
									<table class="table mb-0">
											<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Lender</th>
												<th scope="col">Limit</th>
												<th scope="col">Amt Outstanding</th>
											
												
											</tr>
											</thead>
											<tbody id="tbodyidcard">
									<?php $i=0; foreach(explode("," ,$editdata->card_lender) as $array){ 
										$card_lender=explode("," ,$editdata->card_lender);
										$card_limit=explode("," ,$editdata->card_limit);
										$card_amt_outstanding=explode("," ,$editdata->card_amt_outstanding);
										?>
											<tr>
												<th scope="row"><?=$i+1;?></th>
												<td><input type="text" name="card_lender[]" value="<?php if(empty($card_lender[$i])){ echo ''; }else{ echo $card_lender[$i] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="card_limit[]" value="<?php if(empty($card_limit[$i])){ echo ''; }else{ echo $card_limit[$i] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="card_amt_outstanding[]" value="<?php if(empty($card_amt_outstanding[$i])){ echo ''; }else{ echo $card_amt_outstanding[$i] ;}?>" class="form-control" readonly></td>
											</tr>
											<?php $i++; } ?>
										</tbody>
									</table>
										<!--<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowcard">+ Add Row</a>	-->
						     </div>

						</div>

					  <div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">OTHER DETAILS</h6>
							<div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Residential History for Last 3 Years:</h6>
									<table class="table mb-0">
											<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Address <br>(Street Address/Suburb/State/Post Code)</th>
												<th scope="col">Housing Status</th>
												<th scope="col">Date Moved In</th>
												<th scope="col">Date Moved Out</th>
												
											</tr>
											</thead>
											<tbody id="tboadyres">
											    	<?php $k=0; foreach(explode("," ,$editdata->other_address) as $array){ 
										$other_addressr=explode("," ,$editdata->other_address);
										$other_housingstatus=explode("," ,$editdata->other_housingstatus);
										$other_date_moved_in=explode("," ,$editdata->other_date_moved_in);
										$other_date_moved_out=explode("," ,$editdata->other_date_moved_out);
										?>
											<tr >
												<th scope="row"><?=$k+1;?></th>
												<td><input type="text" name="other_address[]" value="<?php if(empty($other_addressr[$k])){ echo ''; }else{ echo $other_addressr[$k] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="other_housingstatus[]" value="<?php if(empty($other_housingstatus[$k])){ echo ''; }else{ echo $other_housingstatus[$k] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="other_date_moved_in[]" value="<?php if(empty($other_date_moved_in[$k])){ echo ''; }else{ echo $other_date_moved_in[$k] ;}?>" class="form-control" readonly></td>
												<td><input type="text" name="other_date_moved_out[]" value="<?php if(empty($other_date_moved_out[$k])){ echo ''; }else{ echo $other_date_moved_out[$k] ;}?>" class="form-control" readonly></td>
												
												
											</tr>
											<?php $k++; } ?>
												</tbody>
											
									</table>
										<!--<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowres">+ Add Row</a>	-->
						     </div>

							   <div class="card-body">
									<h6 class="mb-0 text-uppercase" style="color:#1493ee;">Employment History for Last 3 Years:</h6>
										<table class="table mb-0">
												<thead>
									
												<tr>
													<th scope="col">No.</th>
													<th scope="col">Employer Name</th>
													<th scope="col">Employer Phone No.</th>
													<th scope="col">Occupation</th>
													<th scope="col">Start Date</th>
													<th scope="col">Finish Date</th>
												</tr>
												</thead>
												<tbody id="tboadyhis">
												<?php  $j=0; foreach(explode("," ,$editdata->employer_phone) as $array){ 
										$employer_name = explode("," ,$editdata->employer_name);
										$employer_phone=explode("," ,$editdata->employer_phone);
										$occupation=explode("," ,$editdata->occupation);
										$job_start_date=explode("," ,$editdata->job_start_date);
											$job_end_date=explode("," ,$editdata->job_end_date);
										?>
												<tr>
													<th scope="row"><?=$j+1;?></th>
													<td><input type="text" name="employer_name[]" value="<?php if(empty($employer_name[$j])){ echo ''; }else{ echo $employer_name[$j] ;}?>" class="form-control" readonly></td>
													<td><input type="text" name="employer_phone[]" value="<?php if(empty($employer_phone[$j])){ echo ''; }else{ echo $employer_phone[$j] ;}?>" class="form-control" readonly></td>
													<td><input type="text" name="occupation[]" value="<?php if(empty($occupation[$j])){ echo ''; }else{ echo $occupation[$j] ;}?>" class="form-control" readonly></td>
													<td><input type="date" name="job_start_date[]" value="<?php if(empty($job_start_date[$j])){ echo ''; }else{ echo $job_start_date[$j] ;}?>" class="form-control" readonly></td>
													<td><input type="date" name="job_end_date[]" value="<?php if(empty($job_end_date[$j])){ echo ''; }else{ echo $job_end_date[$j] ;}?>" class="form-control" readonly></td>
													
													
												</tr>
												<?php $j++; } ?>
													</tbody>
										</table>
											<!--<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowhis">+ Add Row</a>	-->
						        </div>

							 <div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Monthly Living Expenses:</h6>
									<table class="table mb-0">
											<thead>
											<tr>
												
												<th scope="col">Rental Expenses</th>
												<th scope="col">Insurance</th>
												<th scope="col">General Living Expenses</th>
											
												
											</tr>
											</thead>
											<tbody>
											
												
												<td><input type="text" name="rental_expenses" value="<?=$editdata->rental_expenses ?>" class="form-control" readonly></td>
												<td><input type="text" name="insurance" value="<?=$editdata->insurance ?>" class="form-control" readonly></td>
												<td><input type="text" name="general_living_expenses" value="<?=$editdata->general_living_expenses ?>" class="form-control" readonly></td>
											</tr>
											
												</tbody>
									</table>
						     </div>

						</div>


					  <div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">LOAN DETAILS</h6>
					    <div class="card-body">
							<div style="background-color: #f5f5f5;padding: 10px;">
										<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Requested Loan Amount $</label>
												<input class="form-input" name="r_loan_amount" value="<?=$editdata->r_loan_amount ?>" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" type="text" disabled>
										 </div>
										 <div class="">
											<label class="form-check-label" for="flexRadioDefault1">How soon are funds needed? Within</label>
												<input class="form-input" name="found_need_within" value="<?=$editdata->found_need_within ?>" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"   type="text" disabled>
												<label class="form-check-label" for="flexRadioDefault1">weeks</label>
											</div>
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Proposed Use of Funds</label>
												<input class="form-input" name="found_propused" value="<?=$editdata->found_propused ?>" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="text" readonly>
										 </div>

											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;"  type="checkbox" value="yes" <?php if($editdata->terms_condition=="yes"){ echo 'checked';} ?>  name="terms_condition" id="flexRadioDefault1" disabled>
												<label class="form-check-label" for="flexRadioDefault1">I have reviewed, understood and consent to the Terms and Conditions</label>
												
											</div>
											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;"  type="checkbox" value="yes" <?php if($editdata->privacy_statement=="yes"){ echo 'checked';} ?> name="privacy_statement" id="flexRadioDefault1" disabled>
												<label class="form-check-label" for="flexRadioDefault1">I have reviewed, understood and consent to the Privacy Statement</label>
												
											</div>
											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;" type="checkbox" value="yes" name="provide_app_omission" id="flexRadioDefault1" <?php if($editdata->provide_app_omission=="yes"){ echo 'checked';} ?> disabled>
												<label class="form-check-label" for="flexRadioDefault1">I confirm that all information provided on this application is accurate and without omission.</label>
												
											</div>
											<div class="row">
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Sign (Or if completing online, type your full name) </label>
												<input class="form-input" name="signofcustomer" value="<?=$editdata->signofcustomer ?>" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="text"  readonly>
											</div>
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Date</label>
												<input class="form-input" name="sign_date" value="<?=$editdata->sign_date ?>" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="date" readonly>
											</div>
											</div>
								
										</div>
								<div class="row" style="padding: 5px;">
										<div class="col-xl-6 mb-6">
											<label class="form-label">Purpose of Loan</label>
											<select class="form-select mb-3" name="purpose_of_loan" aria-label="Default select example" required disabled="true" <?php if($editdata->purpose_of_loan !='Debt Consolidation' && $editdata->purpose_of_loan !='Holidays' && $editdata->purpose_of_loan !='Pay Credit Card' && $editdata->purpose_of_loan !='Renovation' && $editdata->purpose_of_loan !='Vehicle Purchase' && $editdata->purpose_of_loan !='Home improvements'  && $editdata->purpose_of_loan !='Home furnishing' && $editdata->purpose_of_loan !=''){ echo "style='display:none;'";} ?>>
													<option value="">Select Purpose of Loan</option>
													<option value="Debt Consolidation" <?php if($editdata->purpose_of_loan=="Debt Consolidation"){ echo 'selected';} ?>>Debt Consolidation</option>
													<option value="Holidays" <?php if($editdata->purpose_of_loan=="Holidays"){ echo 'selected';} ?>>Holidays</option>
													<option value="Pay Credit Card" <?php if($editdata->purpose_of_loan=="Pay Credit Card"){ echo 'selected';} ?>>Pay Credit Card</option>
													<option value="Pay Tax Debt" <?php if($editdata->purpose_of_loan=="Pay Tax Debt"){ echo 'selected';} ?>>Pay Tax Debt</option>
													<option value="Renovation" <?php if($editdata->purpose_of_loan=="Renovation"){ echo 'selected';} ?>>Renovation</option>
													<option value="Vehicle Purchase" <?php if($editdata->purpose_of_loan=="Vehicle Purchase"){ echo 'selected';} ?>>Vehicle Purchase</option>
													<option value="Home improvements" <?php if($editdata->purpose_of_loan=="Home improvements"){ echo 'selected';} ?>>Home improvements</option>
													<option value="Home furnishing" <?php if($editdata->purpose_of_loan=="Home furnishing"){ echo 'selected';} ?>>Home furnishing</option>
												</select>
											<input type="text" class="form-control" placeholder="Enter Purpose of Loan" value="<?=$editdata->purpose_of_loan ?>" <?php if($editdata->purpose_of_loan !='Debt Consolidation' && $editdata->purpose_of_loan !='Holidays' && $editdata->purpose_of_loan !='Pay Credit Card' && $editdata->purpose_of_loan !='Renovation' && $editdata->purpose_of_loan !='Vehicle Purchase' && $editdata->purpose_of_loan !='Home improvements' && $editdata->purpose_of_loan !='Home furnishing' && $editdata->purpose_of_loan !=''){ echo "style='display: block;'";}else{ echo "style='display: none;'";} ?> readonly/>
									</div>
											<div class="col-xl-6 mb-6">
											<label class="form-label">Loan Tenure Required</label>
											<select class="form-select mb-3" name="loan_tenure_required" aria-label="Default select example" required disabled="true">
													<option value="">Select Loan Tenure</option>
													<option value="1" <?php if($editdata->loan_tenure_required=="1"){ echo 'selected';} ?>>1 Year</option>
													<option value="2" <?php if($editdata->loan_tenure_required=="2"){ echo 'selected';} ?>>2 Year</option>
													<option value="3" <?php if($editdata->loan_tenure_required=="3"){ echo 'selected';} ?>>3 Year</option>
													<option value="4" <?php if($editdata->loan_tenure_required=="4"){ echo 'selected';} ?>>4 Year</option>
													<option value="5" <?php if($editdata->loan_tenure_required=="5"){ echo 'selected';} ?>>5 Year</option>  
													<option value="6" <?php if($editdata->loan_tenure_required=="6"){ echo 'selected';} ?>>6 Year</option> 
													<option value="7" <?php if($editdata->loan_tenure_required=="7"){ echo 'selected';} ?>>7 Year</option>   
											</select>
											</div>
								 </div>
						
								<div>
									<table>
										<tbody>
										<tr>
											<td>Customer Agrees to lodge:</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="agree_toload" <?php if($editdata->agree_toload=="yes"){ echo 'checked';} ?> id="serverYes" value="yes" disabled></td>
											<td>Yes</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="agree_toload" <?php if($editdata->agree_toload=="no"){ echo 'checked';} ?> id="serverNo" value="no" disabled></td>
											<td>No</td>

										</tr>
										</tbody>
									</table>
								</div>
								<div>
									<table>
										<tbody>
										<tr>
											<td>Do you have an excellent Credit Rating:</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px; " class="form-check-input" type="radio" name="excellent_credit" <?php if($editdata->excellent_credit=="yes"){ echo 'checked';} ?> id="" value="yes" disabled></td>
											<td>Yes</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="excellent_credit" <?php if($editdata->excellent_credit=="no"){ echo 'checked';} ?> id="" value="no" disabled></td>
											<td>No</td>

										</tr>
										</tbody>
									</table>
								</div>
								<h5 class="mb-0 " style="color: #1493ee;padding: 15px;"> View Insurance and Asset Protection:<span id="chnageclick"><b id="plushminush" style="padding-left: 2%;font-size: 23px;cursor: pointer;" onclick="hideshowproytehsion(1);">+</b></span></h5>	
								
								<div id="hidedivprotection" style="display:none;">
								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Life Insurance? </label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input  type="number" class="form-control" value="<?=$editdata->lifeinsurance_amount_insured ?>" name="lifeinsurance_amount_insured" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" class="form-control" name="lifeinsurance_provide_name" value="<?=$editdata->lifeinsurance_provide_name ?>" readonly>
									 </div>
                                </div>

								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Debt Protection Insurance?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="debt_protection_amount" class="form-control" value="<?=$editdata->debt_protection_amount ?>" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text"  name="debt_protection_provider_name" class="form-control" value="<?=$editdata->debt_protection_provider_name ?>" readonly>
									 </div>
                                </div>
								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Income Protection Insurance?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="income_protection_amount" class="form-control" value="<?=$editdata->income_protection_amount ?>" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" name="income_protection_provider_name" class="form-control" value="<?=$editdata->income_protection_provider_name ?>" readonly>
									 </div>
                                </div>
								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Total Permanent Disability Protection?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="permanent_disability_protection_amount" class="form-control" value="<?=$editdata->permanent_disability_protection_amount ?>" readonly>
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" name="permanent_disability_protection_provider_name" class="form-control" value="<?=$editdata->permanent_disability_protection_provider_name ?>" readonly>
									 </div>
                                </div>
								<br>


								<h6 class="mb-0 " style="color: #1493ee;padding: 7px;">Credit History / Risk Profile:</h6>	
								<div class="row">
								<div class="col-xl-6 mb-3">
										<label class="form-label" style="padding-top: 20px;">Credit default or legal proceedings recorded against any applicant?</label>
									</div>
									<div class="col-xl-1 mb-3">
										<label class="form-label">Yes</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="cardit_legal_recorde" class="form-check-input" <?php if($editdata->cardit_legal_recorde=="yes"){ echo 'checked';} ?> value="yes" disabled>
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="cardit_legal_recorde" class="form-check-input" <?php if($editdata->cardit_legal_recorde=="no"){ echo 'checked';} ?> value="no" disabled>
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;" name="cardit_legal_recorde1" type="text" value="<?=$editdata->cardit_legal_recorde1 ?>" class="form-control" readonly>
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-6 mb-3">
										<label class="form-label" style="padding-top: 20px;">Are you behind on any of your current credit commitments?</label>
									</div>
									<div class="col-xl-1 mb-3">
										<label class="form-label">Yes</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="commitments" class="form-check-input" <?php if($editdata->commitments=="yes"){ echo 'checked';} ?> value="yes" disabled>
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="commitments" class="form-check-input" <?php if($editdata->commitments=="no"){ echo 'checked';} ?> value="no" disabled>
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;"  name="commitments1" type="text" class="form-control" value="<?=$editdata->commitments1 ?>" readonly>
									 </div>
                                </div>
								<div class="row">
								<div class="col-xl-6 mb-3">
										<label class="form-label" style="padding-top: 20px;">Do you anticipate any income changes in the next 6-12 months?</label>
									</div>
									<div class="col-xl-1 mb-3">
										<label class="form-label">Yes</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="anticipate_income" class="form-check-input" <?php if($editdata->anticipate_income=="yes"){ echo 'checked';} ?> value="yes" disabled>
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="anticipate_income" class="form-check-input" <?php if($editdata->anticipate_income=="no"){ echo 'checked';} ?> value="no" disabled>
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;" name="anticipate_income1" type="text" value="<?=$editdata->anticipate_income1 ;?>" class="form-control" readonly>
									 </div>
                                </div>
                            </div>
                                
								<div class="col-xl-12 mb-3">
										<label class="form-label">Additional Notes:</label>
										<textarea class="form-control" name="additional_notes" readonly><?=$editdata->additional_notes?></textarea>
									 </div>

									<div class="row">
								    	<div class="col-xl-6 mb-3">
										<label class="form-label">Signature:</label>
										<input  type="text" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" name="signature" value="<?=$editdata->signature ?>" class="form-control" required  readonly>
									 </div>
                                     <div class="col-xl-6 mb-3">
										<label class="form-label">Date</label>
										<input type="date"  style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" name="signature_date" value="<?=$editdata->signature_date ?>" class="form-control"  readonly>
									  </div>
									</div>
                                
                            
 
   	<h6 class="mb-0 " style="color: #1493ee;padding: 7px;">Uploaded Document:</h6>	
   	 <div class="row">
   	     	<?php $doc=$this->db->select('*')->from('loan_document')->where('customer_id',$editdata->id)->get()->result(); ?>
    <?php foreach($doc as $notes){ 
        $path=base_url().'assets/uploads/'.$notes->documents ;
    $extension = pathinfo($path, PATHINFO_EXTENSION);
if($extension !="pdf"){ 
    ?>
       
  <div class="column" id="#imgbr_<?=$notes->doc_id ?>">
      <a href="<?=base_url();?>assets/uploads/<?=$notes->documents ?>" target="_blank" download>
    <img src="<?=base_url();?>assets/uploads/<?=$notes->documents ?>" alt="Snow" style="width:100%; border-radius: 8px;">
    <span class=""><?=$notes->documents ?></span><a href="javascript:void(0);" class="badge badge-danger" style="color: red;background: burlywood;font-size: 17px;" onclick="deleteImage('<?php echo $notes->doc_id; ?>')">X</a>
    </a>
  </div>
  <?php }else{

  ?>
    <div class="column" id="#imgbr_<?=$notes->doc_id ?>">
    <a href="<?=base_url();?>assets/uploads/<?=$notes->documents ?>" target="_blank" download>
    <img src="<?=base_url();?>assets/uploads/pdf_file.png" alt="Snow" style="width:100%; border-radius: 8px;" >
    
    <span><?=$notes->documents ?></span><a href="javascript:void(0);" class="badge badge-danger" style="color: red;background: burlywood;font-size: 17px;" onclick="deleteImage('<?php echo $notes->doc_id; ?>')">X</a>
     </a> 
  </div>
  	<?php } } ?>
</div>

				<script>
                function deleteImage(id){
                   
                    var result = confirm("Are you sure to delete?");
                    if(result){
                        $.post( "<?php echo base_url('Admin/deleteImage'); ?>", {id:id}, function(resp) {
                            if(resp == 'ok'){
                                $('#imgbr_'+id).remove();
                                  $('#imgbr_'+id).html('');
                                alert('The image has been removed from the gallery');
                            }else{
                                alert('Some problem occurred, please try again.');
                            }
                        });
                    }
                }
          </script>
            
       

                                
									</div>

					</div>
				
									</div>
									
					
								
                 </div>       
			
				<!--end row-->
	</main>



 

       <!--end page main-->


