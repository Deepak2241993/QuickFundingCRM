<main class="page-content">
   <!--breadcrumb-->
   <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Lead</div>
      <div class="ps-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
               <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Lead Generation</li>
            </ol>
         </nav>
      </div>
      
   </div>
   <?php
         if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
         }
         if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
         }
         ?>
   <div class="card-body"style="background-color: #fff;color: #000;padding: 15px;">
   <form action="<?php echo base_url();?>Admin/LeadStore" method="post" enctype="multipart/form-data">
      <div class="row">
         <!-- First Column -->
         <div class="col-md-6">
            <label for="name">Name:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" required>
            <?=form_error('Name','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="number">Number:<span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="number" name="phone" required>
            <?=form_error('phone','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="email">Email:<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
            <?=form_error('email','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="state">State:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="state" name="state" required>
            <?=form_error('state','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="postcode">Postcode:<span class="text-danger">*</span></label>
            <input type="text" maxlength="6" class="form-control" id="postcode" name="zip_code" required>
            <?=form_error('zip_code','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="product">Product:<span class="text-danger">*</span></label>
            <select class="form-control" id="product" name="product" required>
               <option value="">-- Select Product --</option>
               <option value="Personal Loan">Personal Loan</option>
               <option value="Car Loan">Car Loan</option>
               <option value="Business Loan">Business Loan</option>
            </select>
            <?=form_error('product','<div class="text-danger">','</div>')?>
         </div>
         <!-- Second Column -->
         <div class="col-md-6">
            <label for="purpose">Purpose of Loan:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="purpose" name="purpose_of_loan" required>
            <?=form_error('purpose_of_loan','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-6">
            <label for="employment_status">Employment Status:<span class="text-danger">*</span></label>
            <select class="form-control" id="employment_status" name="employment_status" required>
               <option value="">-- Select Employment Status --</option>
               <option value="full_time">Full Time</option>
               <option value="part_time">Part Time</option>
               <option value="self_employed">Self Employed</option>
            </select>
            <?=form_error('employment_status','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-12">
            <label for="income">Income:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="income" name="income" required>
            <?=form_error('income','<div class="text-danger">','</div>')?>
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Mortgage:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="mortgage" id="serverYes" value="Yes"> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="mortgage" id="serverNo" value="No"> No
            <?=form_error('mortgage','<div class="text-danger">','</div>')?>
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Other existing:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="other_existing" id="serverYes" value="Yes"> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="other_existing" id="serverNo" value="No"> No
            <?=form_error('other_existing','<div class="text-danger">','</div>')?>
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Credit card:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="credit_card" id="serverYes" value="Yes"> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="credit_card" id="serverNo" value="No"> No
            <?=form_error('credit_card','<div class="text-danger">','</div>')?>
         </div>
         <div class="col-md-12">
            <label for="callback_time">Preferred Call Back Time:</label>
            <input type="time" class="form-control" id="callback_time" name="call_back_time">
         </div>
         <div class="col-md-12">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
            <?php if($this->session->userdata('type')=='Agent')
            {?>
            <input type="hidden" class="form-control" id="callback_time" name="manager_id" value="<?=$this->session->userdata('manager_id')?>">
            <input type="hidden" class="form-control" id="callback_time" name="agent_id" value="<?=$this->session->userdata('id')?>">
            <?php } ?>
            <?php if($this->session->userdata('type')=='Manager' ||$this->session->userdata('type')=='SuperAdmin')
            {?>
            <input type="hidden" class="form-control" id="callback_time" name="agent_id" value="<?=$this->session->userdata('id')?>">
            <input type="hidden" class="form-control" id="callback_time" name="manager_id" value="<?=$this->session->userdata('id')?>">
            <?php } ?>
         </div>
  
         <div class="col-md-4 mt-4 mb-4">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </form></div>
</main>