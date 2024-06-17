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
   <?php if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
         }
         if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
         }
         ?>
   <div class="card-body"style="background-color: #fff;color: #000;padding: 15px;">
   <form action="<?php echo base_url();?>Admin/Leadupdate/<?=$leads->id; ?>" method="post" enctype="multipart/form-data">
      <div class="row">
         <!-- First Column -->
         <div class="col-md-6">
            <label for="name">Name:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" required value="<?=$leads->name; ?>">
         </div>
         <div class="col-md-6">
            <label for="number">Number:<span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="number" name="phone" required value="<?=$leads->phone; ?>">
         </div>
         <div class="col-md-6">
            <label for="email">Email:<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required value="<?=$leads->email; ?>">
         </div>
         <div class="col-md-6">
            <label for="state">State:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="state" name="state" required value="<?=$leads->state; ?>">
         </div>
         <div class="col-md-6">
            <label for="postcode">Postcode:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="postcode" name="zip_code" required value="<?=$leads->zip_code; ?>">
         </div>
         <div class="col-md-6">
            <label for="product">Product:<span class="text-danger">*</span></label>
            <select class="form-control" id="product" name="product" required>
               <option value="">-- Select Product --</option>
               <option value="Personal Loan" <?=($leads->product=='Personal Loan')?'selected':'null'?>>Personal Loan</option> 
               <option value="Car Loan" <?=($leads->product=='Car Loan')?'selected':'null'?>>Car Loan</option>
               <option value="Business Loan" <?=($leads->product=='Business Loan')?'selected':'null'?>>Business Loan</option>
            </select>
         </div>
         <!-- Second Column -->
         <div class="col-md-6">
            <label for="purpose">Purpose of Loan:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="purpose" name="purpose_of_loan" required value="<?=$leads->purpose_of_loan; ?>">
         </div>
         <div class="col-md-6">
            <label for="employment_status">Employment Status:<span class="text-danger">*</span></label>
            <select class="form-control" id="employment_status" name="employment_status" required>
               <option value="">-- Select Employment Status --</option>
               <option value="full_time"<?=($leads->employment_status=='full_time')?'selected':'null'?>>Full Time</option>
               <option value="part_time"<?=($leads->employment_status=='part_time')?'selected':'null'?>>Part Time</option>
               <option value="self_employed"<?=($leads->employment_status=='self_employed')?'selected':'null'?>>Self Employed</option>
            </select>
         </div>
         <div class="col-md-12">
            <label for="income">Income:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="income" name="income" required value="<?=$leads->income?>">
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Mortgage:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="mortgage" id="serverYes" value="Yes"<?=($leads->mortgage=='Yes')?'checked':'null'?>> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="mortgage" id="serverNo" value="No"<?=($leads->mortgage=='No')?'checked':'null'?>> No
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Other existing:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="other_existing" id="serverYes" value="Yes"<?=($leads->other_existing=='Yes')?'checked':'null'?>> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="other_existing" id="serverNo" value="No"<?=($leads->other_existing=='No')?'checked':'null'?>> No
         </div>
         <div  class="form-group col-md-12 mt-4 mb-4">
            <label for="income">Credit card:<span class="text-danger">*</span></label>
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="credit_card" id="serverYes" value="Yes" <?=($leads->credit_card=='Yes')?'checked':'null'?>> Yes
            <input style="box-sizing: border-box; border-radius: 1px;" class="form-check-input" type="radio" name="credit_card" id="serverNo" value="No" <?=($leads->credit_card=='No')?'checked':'null'?>> No
         </div>
         <div class="col-md-12">
            <label for="callback_time">Preferred Call Back Time:</label>
            <input type="time" class="form-control" id="callback_time" name="call_back_time" value="<?=$leads->call_back_time; ?>">
         </div>
         <div class="col-md-12">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="4"><?=$leads->comment; ?></textarea>
           
         </div>
         <div class="col-md-4 mt-4 mb-4">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </form></div>
</main>