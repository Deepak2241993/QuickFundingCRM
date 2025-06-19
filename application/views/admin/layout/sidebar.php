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
      <li>
         <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/dashboard"><i class="bi bi-circle"></i>Dashboard</a>
            </li>
            <!-- <li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
               </li> -->
         </ul>
      </li>
      <li class="menu-label">Clients</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
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
      <?php if ($this->session->userdata('type') == 'SuperAdmin' || $this->session->userdata('type') == 'Manager') { ?>
      <li class="menu-label">Super Admin</li>
      <li>
         <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
            </div>
            <div class="menu-title">Manage User</div>
         </a>
         <ul>
            <li> <a href="<?= base_url(); ?>Admin/UserList"><i class="bi bi-circle"></i>User List</a></li>
            <li> <a href="<?= base_url(); ?>Admin/managerlist"><i class="bi bi-circle"></i>Manager List</a></li>
         </ul>
      </li>
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
         <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
         </div>
         <div class="menu-title">Agent according to Manager</div>
      </a>
      </li>
      <?php } ?>
      <li>
      <li class="menu-label">Settings</li>
      <a class="has" href="<?= base_url(); ?>Admin/logout">
         <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
         </div>
         <div class="menu-title">Logout</div>
      </a>
      </li>
   </ul>
   <!--end navigation-->
</aside>
<!--end sidebar -->