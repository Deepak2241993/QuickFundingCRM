
<style>
    
textarea.form-control {
    min-height: calc(25.5em + 0.75rem + 2px)!important;
}
</style>
       <!--start content-->
       <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				   
					<div class="breadcrumb-title pe-3">Customer Form 	</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Elements</li>
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
		<form action="<?php echo base_url();?>Admin/customerloansubmit" method="post" enctype="multipart/form-data">
		    <?=form_error('loan_type','<div class="text-danger">','</div>')?>
		    	<div class="row" style="padding: 5px;">
										<div class="col-xl-6 mb-6">
											<label class="form-label">Loan Type <span class="text-danger">*</span></label>
											<select class="form-select mb-3" aria-label="Default select example" name="loan_type" onchange="loantype(this)" required>
													<option value="">Select Loan Type</option>
													<option value="Car Loan">Car Loan</option>
													<option value="Business Loan">Business Loan</option>
														<option value="Personal Loan">Personal Loan</option>
													</select>
													
									</div>
						</div>
						
			<div class="row" id="formsow" style="display:none;">
			
					<div class="col-xl-12 mx-auto">
						<div class="card">
						   <h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">APPLICANT DETAILS</h6>
							   <div class="card-body">
							       	<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Application No.:</label>
										<input type="text" name="application_no" class="form-control">
									 </div>

                                   <div class="col-xl-6 mb-3">
										<label class="form-label">Agent Name <span class="text-danger">*</span> :</label>
									 <select class="form-select mb-3" aria-label="Default select example" name="agent_name" style="margin: 8px;" required>
													<option value="">Select Agent</option>
													<?php $agentdata=$this->Customer->get_agent(); foreach($agentdata as $agent){ ?>
													<option value="<?=$agent->id ?>"><?=$agent->name ?></option>
												<?php } ?>
												
												
													</select>
									 </div>
                            </div>
                             	<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Finance Company Name:</label>
										<input type="text" name="f_company_name" class="form-control">
									 </div>

                                   
                            </div>
                                	<div class="row">
										<div class="col-xl-3 mb-3">
											<label class="form-label">Title:</label>
											<input type="text" name="title" class="form-control">
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">First Name:</label>
											<input type="text" name="first_name" class="form-control">
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">Middle Name:</label>
											<input type="text" name="mid_name" class="form-control">
										</div>
										<div class="col-xl-3 mb-3">
											<label class="form-label">Surname:</label>
											<input type="text" name="surname" class="form-control">
										</div>
                                	</div>
                            
                              
								<div class="col-xl-6 mb-6">
										<label class="form-label">Gender <span class="text-danger">*</span></label>
										<select class="form-select mb-3" name="gander" aria-label="Default select example" required>
									<option selected value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								   </select>
								</div>
								<label class="form-label">Current Residential Address Street Address</label>
								<div class="col-xl-6 mb-6">
										<label class="form-label">Street Address</label>
										
										<input type="textarea" name="street_address" class="form-control" row="4">
								</div>
								<br>
								<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Suburb:</label>
										<input type="text" name="subrub" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">State:</label>
										<input type="text" name="state" class="form-control">
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Postcode:</label>
										<input type="number" name="postcode" class="form-control">
									 </div>
								</div>

								<div class="col-xl-6 mb-6">
										<label class="form-label">Housing Status<span class="text-danger">*</span></label>
										<select class="form-select mb-3" name="housing_status" aria-label="Default select example" required>
									<option selected>Select Status</option>
									<option value="Own Outright">Own Outright</option>
									<option value="Renting">Renting</option>
									<option value="Mortgage">Mortgage</option>
									<option value="Living with Parents">Living with Parents</option>
									<option value="Other">Other</option>   
								</select>
								</div>
								<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Mobile:</label>
										<input type="number" name="mobile" class="form-control">
									 </div>
                                     <div class="col-xl-6 mb-3">
										<label class="form-label">Email:</label>
										<input type="email" name="email" class="form-control">
									 </div>
                                </div>

								<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Drivers Licence Number:</label>
										<input type="text" name="dl_number" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Expiry Date:</label>
										<input type="date" name="dl_exp_date" class="form-control">
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">State Issued<span class="text-danger">*</span>:</label>
										<select class="form-select mb-3" name="status_used" aria-label="Default select example" required>
									<option selected value="">Select Status</option>
									<option value="NSW">NSW</option>
									<option value="VIC">VIC</option>
									<option value="QLD">QLD</option>
									<option value="SA">SA</option>
									<option value="ACT">ACT</option> 
									<option value="WA">WA</option>  
									<option value="Tasmania">Tasmania</option>   
								   </select>
								</div>
							</div>

							<div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Passport Number:</label>
										<input type="text" name="passport_number" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Expiry Date:</label>
										<input type="date" name="pp_exp_date" class="form-control">
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Country:</label>
										<input type="text" name="country" class="form-control">
									 </div>
								</div>
								<div class="row">
									<div class="col-xl-6 mb-3">
										<label class="form-label">Date of Birth:</label>
										<input type="date" name="dob" class="form-control">
									 </div>
                                   </div>

								   <div class="row">
									<div class="col-xl-4 mb-3">
										<label class="form-label">Employment Type:</label>
										<input type="text" name="employment_type" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Salary / Business Income per annum:</label>
										<input type="number" name="salary_income" class="form-control">
									 </div>
									 <div class="col-xl-4 mb-3">
										<label class="form-label">Rental Income (if any):</label>
										<input type="number" name="rental_income" class="form-control">
									 </div>
                                </div>
								<div class="row">
								<div class="col-xl-6 mb-6">
									 <label class="form-label">Australian Residency Status <span class="text-danger">*</span></label>
									 <select class="form-select mb-3" name="au_residency_status" aria-label="Default select example" required>
											<option selected value="">Select Residency Status</option>
											<option value="Citizen">Citizen</option>
											<option value="Resident">Resident</option>
											<option value="Non Resident">Non Resident</option>
											 
									 </select>
									</div>
									<div class="col-xl-6 mb-6">
									 <label class="form-label">Marital Status <span class="text-danger">*</span></label>
									 <select class="form-select mb-3" name="marital_status" aria-label="Default select example" required>
											<option selected value="">Select Marital Status</option>
											<option value="Married">Married</option>
											<option value="Defacto">Defacto</option>
											<option value="Single">Single</option>
											<option value="Separated">Separated</option>
											<option value="Divorced">Divorced</option>  
											<option value="Widowed">Widowed</option>   
									 </select>
									</div>
								</div>


								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Kids(Age):</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Kid 1 Age:</label>
										<input type="number" name="kid_one_age" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Kid 2 Age:</label>
										<input type="number" name="kid_second_age" class="form-control">
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Bank Details:</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">BSB Number:</label>
										<input type="number" name="bsb_number" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Account Number:</label>
										<input type="number" name="account_number" class="form-control">
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">One Reference:</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Name:</label>
										<input type="text" name="reference_name" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Mobile No:</label>
										<input type="number" name="reference_number" class="form-control">
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
                            <td><input type="text" name="bank_balance_provoder" class="form-control"></td>
                            <td><input type="number" name="bank_balance_amount" class="form-control"></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Fully Paid up Property</td>
                            <td>Market Value of Property</td>
                            <td><input type="number" name="fully_paid_up_property_amount" class="form-control"></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td >Superannuation</td>
                            <td><input type="text" name="superannuation_provider" class="form-control"></td>
							<td><input type="number" name="superannuation_amount" class="form-control"></td>
							</tr>
							<tr>
                            <th scope="row">4</th>
                            <td>Shares</td>
                            <td><input type="text" name="shares_provider" class="form-control"></td>
                            <td><input type="number" name="shares_amount" class="form-control"></td>
                          </tr>
						  <tr>
                            <th scope="row">5</th>
                            <td>Car (type, model & year)</td>
                            <td><div class="row"><div class="col-xl-3 mb-3"><span>Make:</span><input type="text" name="car_make1" class="form-control"></div><div class="col-xl-3 mb-3"><span>Year:</span><input type="text" name="car_year1" class="form-control"></div></div></td>
                            <td><div class="row"><div class="col-xl-4 mb-3"><span>Approx. Value:</span><input type="text" name="approxvalue__car1" class="form-control"></div><div class="col-xl-4 mb-3"><span>Type <span class="text-danger">*</span>:</span>
                            <select class="form-select mb-3" name="car1_type" aria-label="Default select example" required>
                                <option value="4WD">4WD</option>
							<option value="Luxury Car">Luxury Car</option>
							<option value="Large">Large</option>
							<option value="Medium">Medium</option>
							<option value="Small">Small</option>
							<option value="Bike">Bike</option>
						</select></div><div class="col-xl-4 mb-3"><span>Car variant:</span>
                            <input type="text" name="car_variant_car1" value="" class="form-control"></div>
						</div></td>
                          </tr>
						  <tr>
                            <th scope="row">6</th>
                            <td>Car (type, model & year)</td>
                            <td><div class="row"><div class="col-xl-3 mb-3"><span>Make:</span><input type="text" name="car_make2" class="form-control"></div><div class="col-xl-3 mb-3"><span>Year:</span><input type="text" name="car_year2" class="form-control"></div></div></td>
                            <td><div class="row"><div class="col-xl-4 mb-3"><span>Approx. Value:</span><input type="text" name="approxvalue_car2" class="form-control"></div>
                            <div class="col-xl-4 mb-3"><span>Type <span class="text-danger">*</span>:</span>
                            <select class="form-select mb-3" aria-label="Default select example" name="car2_type" required>
                            <option value="4WD">4WD</option>
							<option value="Luxury Car">Luxury Car</option>
							<option value="Large">Large</option>
							<option value="Medium">Medium</option>
							<option value="Small">Small</option>
							<option value="Bike">Bike</option>
						</select></div><div class="col-xl-4 mb-3"><span>Car variant:</span>
                            <input type="text" name="car_variant_car2" value="" class="form-control"></div>
						</div></td>
                          </tr>
						  <tr>
                            <th scope="row">7</th>
                            <td>Boat/Caravan</td>
                            <td><input type="text" name="provider_boat_caravan" class="form-control"></td>
                            <td><input type="text" name="amount_boat_caravan" class="form-control"></td>
                          </tr>
						  <tr>
                            <th scope="row">8</th>
                            <td>Furniture & Household Effects</td>
                            <td><input type="text" name="provider_furniture" class="form-control"></td>
                            <td><input type="text" name="amount_furniture" class="form-control"></td>
                          </tr>
						  <tr>
                            <th scope="row">9</th>
                            <td>Any Other</td>
                            <td><input type="text" name="provider_anyother" class="form-control"></td>
                            <td><input type="text" name="amount_anyother" class="form-control"></td>
                          </tr>
                        </tbody>
                      </table>
						</div>
						</div>
						
						
					 <div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">LIABILITIES</h6>
							<div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Home Loans:</h6>
									<table class="table mb-0" id="HmyTable">
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
											<tr>
												<th scope="row">1</th>
												<td><input type="text" name="property_address[]" class="form-control"></td>
												<td><input type="text" name="market_value[]" class="form-control"></td>
												<td><input type="text" name="amt_outstanding[]" class="form-control"></td>
												<td><input type="text" name="lenders_name[]" class="form-control"></td>
												<td><input type="text" name="monthly_repayment[]" class="form-control"></td>
												<td><input type="text" name="lb_loan_type[]" class="form-control"></td>
												
											</tr>
										
												</tbody>
									</table>
										<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowhome">+ Add Row</a>	
						     </div>

							 <div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Other Liabilities:</h6>
									<table class="table mb-0" id="LmyTable">
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
											<tr>
												<th scope="row">1</th>
												<td><input type="text" name="ot_loan_type[]" class="form-control"></td>
												<td><input type="text" name="ot_amt_borrowed[]" class="form-control"></td>
												<td><input type="text" name="ot_amt_outstanding[]" class="form-control"></td>
												<td><input type="text" name="ot_lenders_name[]" class="form-control"></td>
												<td><input type="text" name="ot_monthly_repayment[]" class="form-control"></td>
												
												
											</tr>
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
									<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrow">+ Add Row</a>	
						     </div>

							 <div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Credit Card:</h6>
									<table class="table mb-0" id="CmyTable">
											<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Lender</th>
												<th scope="col">Limit</th>
												<th scope="col">Amt Outstanding</th>
											
												
											</tr>
											</thead>
											<tbody id="tbodyidcard">
											<tr>
												<th scope="row">1</th>
												<td><input type="text" name="card_lender[]" class="form-control"></td>
												<td><input type="text" name="card_limit[]" class="form-control"></td>
												<td><input type="text" name="card_amt_outstanding[]" class="form-control"></td>
											</tr>
										
											
												</tbody>
									</table>
										<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowcard">+ Add Row</a>	
						     </div>

						</div>

					  <div class="card">
						<h6 class="mb-0 text-uppercase" style="background-color: #1493ee;color: #fff;text-align: center;padding: 7px;">OTHER DETAILS</h6>
							<div class="card-body">
								 <h6 class="mb-0 text-uppercase" style="color:#1493ee;">Residential History for Last 3 Years:</h6>
									<table class="table mb-0" id="resTable">
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
											<tr >
												<th scope="row">1</th>
												<td><input type="text" name="other_address[]" class="form-control"></td>
												<td><input type="text" name="other_housingstatus[]" class="form-control"></td>
												<td><input type="date" name="other_date_moved_in[]" class="form-control"></td>
												<td><input type="date" name="other_date_moved_out[]" class="form-control"></td>
												
												
											</tr>
										
												</tbody>
											
									</table>
										<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowres">+ Add Row</a>	
						     </div>

							   <div class="card-body">
									<h6 class="mb-0 text-uppercase" style="color:#1493ee;">Employment History for Last 3 Years:</h6>
										<table class="table mb-0" id="EmyTable">
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
												<tr>
													<th scope="row">1</th>
													<td><input type="text" name="employer_name[]" class="form-control"></td>
													<td><input type="text" name="employer_phone[]" class="form-control"></td>
													<td><input type="text" name="occupation[]" class="form-control"></td>
													<td><input type="date" name="job_start_date[]" class="form-control"></td>
													<td><input type="date" name="job_end_date[]" class="form-control"></td>
													
													
												</tr>
											
													</tbody>
										</table>
											<a href="javascript:void(0);" style="font-size:16px;" class="add-row" id="addrowhis">+ Add Row</a>	
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
											
												
												<td><input type="text" name="rental_expenses" class="form-control"></td>
												<td><input type="text" name="insurance" class="form-control"></td>
												<td><input type="text" name="general_living_expenses" class="form-control"></td>
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
												<input class="form-input" name="r_loan_amount" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" type="text">
										 </div>
										 <div class="">
											<label class="form-check-label" for="flexRadioDefault1">How soon are funds needed? Within</label>
												<input class="form-input" name="found_need_within" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"   type="text">
												<label class="form-check-label" for="flexRadioDefault1">weeks</label>
											</div>
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Proposed Use of Funds</label>
												<input class="form-input" name="found_propused" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="text">
										 </div>

											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;"  type="checkbox" value="yes" name="terms_condition" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">I have reviewed, understood and consent to the Terms and Conditions</label>
												
											</div>
											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;"  type="checkbox" value="yes" name="privacy_statement" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">I have reviewed, understood and consent to the Privacy Statement</label>
												
											</div>
											<div class="form-check">
												<input class="form-check-input" style="box-sizing: border-box; border-radius: 1px;" type="checkbox" value="yes" name="provide_app_omission" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">I confirm that all information provided on this application is accurate and without omission.</label>
												
											</div>
											<div class="row">
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Sign (Or if completing online, type your full name) </label>
												<input class="form-input" name="signofcustomer" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="text" >
											</div>
											<div class="">
											<label class="form-check-label" for="flexRadioDefault1">Date</label>
												<input class="form-input" name="sign_date" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;"  type="date">
											</div>
											</div>
								
										</div>
								<div class="row" style="padding: 5px;">
										<div class="col-xl-6 mb-6">
											<label class="form-label">Purpose of Loan <span class="text-danger">*</span></label>
											<select class="form-select mb-3" id="loanpurpose" name="purpose_of_loan" aria-label="Default select example" onchange="CheckColors(this)" required>
													<option>Select Purpose of Loan</option>
													<option value="Debt Consolidation">Debt Consolidation</option>
													<option value="Holidays">Holidays</option>
													<option value="Pay Credit Card">Pay Credit Card</option>
													<option value="Pay Tax Debt">Pay Tax Debt</option>
													<option value="Renovation">Renovation</option>
													<option value="Vehicle Purchase">Vehicle Purchase</option>
													<option value="Home improvements">Home improvements</option>
													<option value="Home furnishing">Home furnishing</option>
													<option value="others">Others</option>
					
													
											</select>
											<input type="text" class="form-control" placeholder="Enter Purpose of Loan" id="color" style='display:none;'/>
									</div>
											<div class="col-xl-6 mb-6">
											<label class="form-label">Loan Tenure Required <span class="text-danger">*</span></label>
											<select class="form-select mb-3" name="loan_tenure_required" aria-label="Default select example" required>
													<option selected>Select Loan Tenure</option>
													<option value="1">1 Year</option>
													<option value="2">2 Year</option>
													<option value="3">3 Year</option>
													<option value="4">4 Year</option>
													<option value="5">5 Year</option>  
													<option value="6">6 Year</option> 
													<option value="7">7 Year</option>   
											</select>
											</div>
								 </div>
						
								<div>
									<table>
										<tbody>
										<tr>
											<td>Customer Agrees to lodge:</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="agree_toload" id="serverYes" value="yes"></td>
											<td>Yes</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="agree_toload" id="serverNo" value="no"></td>
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
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px; " class="form-check-input" type="radio" name="excellent_credit" id="" value="yes"></td>
											<td>Yes</td>
											<td style="padding-left: 20px;"><input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="excellent_credit" id="" value="no"></td>
											<td>No</td>

										</tr>
										</tbody>
									</table>
								</div>
								<h5 class="mb-0 " style="color: #1493ee;padding: 15px;"> Add Insurance and Asset Protection:<span id="chnageclick"><b id="plushminush" style="padding-left: 2%;font-size: 23px;cursor: pointer;" onclick="hideshowproytehsion(1);">+</b></span></h5>	
								
								<div id="hidedivprotection" style="display:none;">
								<div class="row">
								<div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Life Insurance? </label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input  type="number" class="form-control" name="lifeinsurance_amount_insured">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" class="form-control" name="lifeinsurance_provide_name">
									 </div>
                                </div>

								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Debt Protection Insurance?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="debt_protection_amount" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text"  name="debt_protection_provider_name" class="form-control">
									 </div>
                                </div>
								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Income Protection Insurance?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="income_protection_amount" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" name="income_protection_provider_name" class="form-control">
									 </div>
                                </div>
								<div class="row">
								    <div class="col-xl-4 mb-3">
										<label class="form-label" style="padding-top: 31px;padding-left: 100px;font-weight: bold;">Do you have Total Permanent Disability Protection?</label>
									
									 </div>
									<div class="col-xl-4 mb-3">
										<label class="form-label">Amount Insured</label>
										<input type="number" name="permanent_disability_protection_amount" class="form-control">
									 </div>
                                     <div class="col-xl-4 mb-3">
										<label class="form-label">Provider Name</label>
										<input type="text" name="permanent_disability_protection_provider_name" class="form-control">
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
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="cardit_legal_recorde" class="form-check-input" value="yes">
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="cardit_legal_recorde" class="form-check-input" value="no">
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;" name="cardit_legal_recorde1" type="text" class="form-control">
									 </div>
                                </div>

								<div class="row">
								<div class="col-xl-6 mb-3">
										<label class="form-label" style="padding-top: 20px;">Are you behind on any of your current credit commitments?</label>
									</div>
									<div class="col-xl-1 mb-3">
										<label class="form-label">Yes</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="commitments" class="form-check-input" value="yes">
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="commitments" class="form-check-input" value="no">
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;"  name="commitments1" type="text" class="form-control">
									 </div>
                                </div>
								<div class="row">
								<div class="col-xl-6 mb-3">
										<label class="form-label" style="padding-top: 20px;">Do you anticipate any income changes in the next 6-12 months?</label>
									</div>
									<div class="col-xl-1 mb-3">
										<label class="form-label">Yes</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="anticipate_income" class="form-check-input" value="yes">
									 </div>
                                     <div class="col-xl-1 mb-3">
										<label class="form-label">No</label>
										<input style="box-sizing: border-box; border-radius: 1px;" type="radio" name="anticipate_income" class="form-check-input" value="no">
									 </div>
									 <div class="col-xl-2 mb-3">
										<label class="form-label">Other</label>
										<input style="box-sizing: border-box; border-radius: 1px;" name="anticipate_income1" type="text" class="form-control">
									 </div>
                                </div>
                                
                            </div>
                                
                                
								<div class="col-xl-12 mb-3">
										<label class="form-label">Additional Notes:</label>
										<textarea class="form-control" name="additional_notes"></textarea>
									 </div>

									<div class="row">
								    	<div class="col-xl-6 mb-3">
										<label class="form-label">Signature: <span class="text-danger">*</span></label>
										<input  type="text" style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" name="signature" class="form-control" required>
									 </div>
                                     <div class="col-xl-6 mb-3">
										<label class="form-label">Date</label>
										<input type="date"  style="border:none;border-bottom: 1px solid #1890ff;padding: 5px 10px;outline: none;" name="signature_date" class="form-control" >
									  </div>
									</div>

								
								<div class="col-xl-12 mb-3">
                          <label class="form-label">Upload Documents</label>
                          <input class="form-control" type="file" name="upload[]" multiple>
                      
						</div>

					</div>
				
									</div>
									
					
									 <button class="btn btn-outline-success px-5 rounded-0" >Submit</button>
                 </div>       
				</form>
				<!--end row-->
	</main>


 
 
       <!--end page main-->


