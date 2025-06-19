
<main class="page-content">
   <!--breadcrumb-->
   <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Notice update</div>
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
    <form action="<?php echo base_url('Admin/updateNotice/' . $notice->id); ?>" method="post" enctype="multipart/form-data">
      <div class="row">
         <!-- First Column -->
         <div class="col-md-6 mt-4">
            <label for="regarding">Regarding:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="editor1" name="regarding" required value="<?=  $notice->regarding; ?>">
            <?=form_error('regarding','<div class="text-danger">','</div>')?>
         </div>
         
         <div class="col-md-12 mt-4">
            <label for="notice">Notice:</label>
            <textarea class="form-control" id="summernote" name="notice" rows="4"><?= $notice->notice; ?></textarea>
            
         </div>

         <div class="col-md-12 mt-4">
            <label for="added_by">Notice issued by :<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="added_by" name="added_by" required value="<?= $notice->added_by; ?>">
            <?=form_error('added_by','<div class="text-danger">','</div>')?>
         </div>
         <div class="row">
                <div class="col-xl-6 mb-3 mt-4">
                    <label class="form-label">Active Status<span class="text-danger">*</span>:</label>
                    <select class="form-control" name="status" id="userTypeSelect" required>
                        <option value="">Select User Type</option>
                        <option value="1" <?= ($notice->status == 1) ? 'selected' : '' ?>>Active</option>
                        <option value="0" <?= ($notice->status == 0) ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
            </div>
  
         <div class="col-md-4 mt-4 mb-4">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </form>
   
</div>
</main>
