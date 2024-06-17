<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url();?>assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="<?=base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="<?=base_url();?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="<?=base_url();?>assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="<?=base_url();?>assets/css/dark-theme.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/light-theme.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/semi-dark.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/header-colors.css" rel="stylesheet" />

  <title>Quick Funding Adminpanel</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <h3>Hello <?=$this->session->userdata('name')?> </h3>
            <!-- <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form> -->


            
            <div class="top-navbar-right ms-auto">
             <ul class="navbar-nav align-items-center">
               
             <li class="nav-item dropdown dropdown-large">
               <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                 <div class="notifications">
                 <span class="bi bi-person"></span>
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-end p-0">
                 <div class="p-2 border-bottom m-2">
                     <h5 class="h5 mb-0">Hi <?=$this->session->userdata('name')?></h5>
                 </div>
                 <div class="header-notifications-list p-2">
                     <a class="dropdown-item" href="<?=base_url();?>Admin/editUser/<?=$this->session->userdata('id')?>">
                       <div class="d-flex align-items-center">
                          <div class="notification-box bg-light-primary text-primary"><i class="bi bi-gear-wide"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">Account Setting
                          </div>
                       </div>
                     </a>
                          
                </div>
                <div class="p-2">
                  <div><hr class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url();?>Admin/logout">
                      <div class="text-center">Logout</div>
                    </a>
                </div>
               </div>
             </li>
             </ul>
             </div>
        </nav>
      </header>
       <!--end top header-->