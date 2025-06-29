<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
   <div class="sidebar-header">
      <div>
         <img src="<?= base_url(); ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
   </div>
   <!--navigation-->
   <ul class="metismenu" id="menu">
      <li> <a href="<?= base_url(); ?>Admin/dashboard"><i class="bi bi-house-fill"></i>Dashboard</a>
            </li>
      <li class="menu-label">Clients</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-people-fill"></i></i>
            </div>
            <div class="menu-title">Customers</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/loanform"><i class="bi bi-circle"></i>Add Customer</a>
            </li>
            <li> <a href="<?= base_url(); ?>Admin/customerList"><i class="bi bi-circle"></i>Customers List</a>
            </li>
         </ul>
      </li>
      <?php if ($this->session->userdata('type') == 'Agent') { ?>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-info-circle-fill"></i></i>
            </div>
            <div class="menu-title">Notice Board</div>
         </a>
         <ul>
            <!-- <li> <a href="<?= base_url(); ?>Admin/addnotice"><i class="bi bi-circle"></i>Add Notice</a></li> -->
            <li> <a href="<?= base_url(); ?>Admin/noticelist"><i class="bi bi-circle"></i>View Notice</a></li>
         </ul>
      </li>
      <?php } ?>

      <?php if ($this->session->userdata('type') == 'SuperAdmin') { ?>
      <li class="menu-label">Super Admin</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-person-badge-fill"></i></i>
            </div>
            <div class="menu-title">Manage User</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/UserList"><i class="bi bi-circle"></i>User List</a></li>
            <li> <a href="<?= base_url(); ?>Admin/managerlist"><i class="bi bi-circle"></i>Manager List</a></li>
         </ul>
         
      </li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-info-circle-fill"></i></i>
            </div>
            <div class="menu-title">Notice Board</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/addnotice"><i class="bi bi-circle"></i>Add Notice</a></li>
            <li> <a href="<?= base_url(); ?>Admin/noticelist"><i class="bi bi-circle"></i>Old Notice</a></li>
         </ul>
      </li>
      <?php } ?>



      <!-- For Manager Dashboard -->
       <?php if ($this->session->userdata('type') == 'Manager') { ?>
      <li class="menu-label">Manager</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-person-badge-fill"></i></i>
            </div>
            <div class="menu-title">Manage User</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/UserList"><i class="bi bi-circle"></i>User List</a></li>
            <li> <a href="<?= base_url(); ?>Admin/ManagerTeam/<?=$this->session->userdata('id')?>"><i class="bi bi-circle"></i>My Team</a></li>
         </ul>
         
      </li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-info-circle-fill"></i></i>
            </div>
            <div class="menu-title">Notice Board</div>
         </a>
         <ul>
            <!-- <li> <a href="<?= base_url(); ?>Admin/addnotice"><i class="bi bi-circle"></i>Add Notice</a></li> -->
            <li> <a href="<?= base_url(); ?>Admin/noticelist"><i class="bi bi-circle"></i>View Notice</a></li>
         </ul>
      </li>
      <!-- Manager Dashboard -->
      <?php } ?>
      <?php if ($this->session->userdata('type') == 'SuperAdmin' || $this->session->userdata('type') == 'Manager' || $this->session->userdata('type') == 'Agent') { ?>
      <li class="menu-label">All Leads</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
            </div>
            <div class="menu-title">Lead Generation</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/LeadGeneration"><i class="bi bi-circle"></i>Add Lead</a></li>
            <li> <a href="<?= base_url(); ?>Admin/allLead"><i class="bi bi-circle"></i>All Lead</a></li>
         </ul>
      </li>
      <?php } ?>
      <?php if ($this->session->userdata('type') == 'SuperAdmin') { ?>
      <li>
      <li class="menu-label">All Agents</li>
      <a class="has" href="<?= base_url(); ?>Admin/agent_accoding_to_manager">
         <div class="parent-icon"><i class="bi bi-diagram-3-fill"></i>
         </div>
         <div class="menu-title">Agent according to Manager</div>
      </a>
      </li>
      <?php } ?>
      <li>
      <li class="menu-label">Settings</li>
      <a class="has" href="<?= base_url(); ?>Admin/logout">
         <div class="parent-icon"><i class="bi bi-box-arrow-right"></i></i>
         </div>
         <div class="menu-title">Logout</div>
      </a>
      </li>
   </ul>
   <!--end navigation-->
</aside>
<!--end sidebar -->