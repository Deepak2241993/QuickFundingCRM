

       <!--start content-->
          <main class="page-content">
              
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
                
                
                
                
                
                
              <!--<div class="col">-->
              <!--  <div class="card overflow-hidden radius-10">-->
              <!--      <div class="card-body">-->
              <!--       <div class="d-flex align-items-stretch justify-content-between overflow-hidden">-->
              <!--        <div class="w-50">-->
              <!--          <p>Total Orders</p>-->
              <!--          <h4 class="">8,542</h4>-->
              <!--        </div>-->
              <!--        <div class="w-50">-->
              <!--           <p class="mb-3 float-end text-success">+ 16% <i class="bi bi-arrow-up"></i></p>-->
              <!--           <div id="chart1"></div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!-- </div>-->
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Total Customers</p>
                        <h4 class=""><?=$getcount?$getcount[0]->tot:0; ?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-danger"></p>
                         <div id="chart2"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p> Approved Customers</p>
                        <h4 class=""><?=$getcount?$getcount[0]->approved:0; ?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-success"></p>
                         <div id="chart3"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Not Approved Customers</p>
                        <h4 class=""><?=$getcount?$getcount[0]->notapproved:0; ?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-success"></p>
                         <div id="chart4"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
            </div><!--end row-->

            <!--<div class="row">-->
            <!--  <div class="col-12 col-lg-6 d-flex">-->
            <!--    <div class="card radius-10 w-100">-->
            <!--      <div class="card-body">-->
            <!--        <div class="d-flex align-items-center">-->
            <!--          <h6 class="mb-0">Revenue</h6>-->
            <!--          <div class="fs-5 ms-auto dropdown">-->
            <!--             <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
            <!--               <ul class="dropdown-menu">-->
            <!--                 <li><a class="dropdown-item" href="#">Action</a></li>-->
            <!--                 <li><a class="dropdown-item" href="#">Another action</a></li>-->
            <!--                 <li><hr class="dropdown-divider"></li>-->
            <!--                 <li><a class="dropdown-item" href="#">Something else here</a></li>-->
            <!--               </ul>-->
            <!--           </div>-->
            <!--         </div>-->
            <!--        <div id="chart5"></div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-12 col-lg-6 d-flex">-->
            <!--    <div class="card radius-10 w-100">-->
            <!--      <div class="card-body">-->
            <!--        <div class="d-flex align-items-center">-->
            <!--           <h6 class="mb-0">By Device</h6>-->
            <!--           <div class="fs-5 ms-auto dropdown">-->
            <!--              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
            <!--                <ul class="dropdown-menu">-->
            <!--                  <li><a class="dropdown-item" href="#">Action</a></li>-->
            <!--                  <li><a class="dropdown-item" href="#">Another action</a></li>-->
            <!--                  <li><hr class="dropdown-divider"></li>-->
            <!--                  <li><a class="dropdown-item" href="#">Something else here</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">-->
            <!--          <div class="col-lg-7 col-xl-7 col-xxl-8">-->
            <!--            <div class="by-device-container">-->
            <!--               <div class="piechart-legend">-->
            <!--                  <h2 class="mb-1">85%</h2>-->
            <!--                  <h6 class="mb-0">Total Visitors</h6>-->
            <!--               </div>-->
            <!--              <canvas id="chart6"></canvas>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="col-lg-5 col-xl-5 col-xxl-4">-->
            <!--            <div class="">-->
            <!--              <ul class="list-group list-group-flush">-->
            <!--                <li class="list-group-item d-flex align-items-center justify-content-between border-0">-->
            <!--                  <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>Tablet - </span> <span>22.5%</span>-->
            <!--                </li>-->
            <!--                <li class="list-group-item d-flex align-items-center justify-content-between border-0">-->
            <!--                  <i class="bi bi-phone-fill me-2 text-primary-2"></i> <span>Mobile - </span> <span>62.3%</span>-->
            <!--                </li>-->
            <!--                <li class="list-group-item d-flex align-items-center justify-content-between border-0">-->
            <!--                  <i class="bi bi-display-fill me-2 text-primary-3"></i> <span>Desktop - </span> <span>15.2%</span>-->
            <!--                </li>-->
            <!--              </ul>-->
            <!--             </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div><!--end row-->


         <!--   <div class="row">-->
         <!--     <div class="col-12 col-lg-6 col-xl-4 d-flex">-->
         <!--        <div class="card radius-10 w-100">-->
         <!--          <div class="card-body">-->
         <!--           <div class="d-flex align-items-center">-->
         <!--             <h6 class="mb-0">Traffic Source</h6>-->
         <!--             <div class="fs-5 ms-auto dropdown">-->
         <!--                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
         <!--                  <ul class="dropdown-menu">-->
         <!--                    <li><a class="dropdown-item" href="#">Action</a></li>-->
         <!--                    <li><a class="dropdown-item" href="#">Another action</a></li>-->
         <!--                    <li><hr class="dropdown-divider"></li>-->
         <!--                    <li><a class="dropdown-item" href="#">Something else here</a></li>-->
         <!--                  </ul>-->
         <!--              </div>-->
         <!--            </div>-->
         <!--            <div id="chart7" class=""></div>-->
         <!--            <div class="traffic-widget">-->
         <!--             <div class="progress-wrapper mb-3">-->
         <!--               <p class="mb-1">Social <span class="float-end">8,475</span></p>-->
         <!--               <div class="progress rounded-0" style="height: 8px;">-->
         <!--                 <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>-->
         <!--               </div>-->
         <!--             </div>-->
         <!--             <div class="progress-wrapper mb-3">-->
         <!--               <p class="mb-1">Direct <span class="float-end">7,989</span></p>-->
         <!--               <div class="progress rounded-0" style="height: 8px;">-->
         <!--                 <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"></div>-->
         <!--               </div>-->
         <!--             </div>-->
         <!--             <div class="progress-wrapper mb-0">-->
         <!--               <p class="mb-1">Search <span class="float-end">6,359</span></p>-->
         <!--               <div class="progress rounded-0" style="height: 8px;">-->
         <!--                 <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>-->
         <!--               </div>-->
         <!--             </div>-->
         <!--            </div>-->
         <!--          </div>-->
         <!--        </div>-->
         <!--     </div>-->
         <!--     <div class="col-12 col-lg-6 col-xl-4 d-flex">-->
         <!--       <div class="card radius-10 w-100">-->
         <!--         <div class="card-body">-->
         <!--           <div class="card radius-10 border shadow-none mb-3">-->
         <!--             <div class="card-body">-->
         <!--               <div class="d-flex align-items-center">-->
         <!--                 <div class="">-->
         <!--                   <p class="mb-1">Messages</p>-->
         <!--                   <h4 class="mb-0 text-primary">289</h4>-->
         <!--                 </div>-->
         <!--                 <div class="dropdown ms-auto">-->
         <!--                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>-->
         <!--                   </div>-->
         <!--                   <ul class="dropdown-menu">-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Action</a>-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Another action</a>-->
         <!--                     </li>-->
         <!--                     <li>-->
         <!--                       <hr class="dropdown-divider">-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>-->
         <!--                     </li>-->
         <!--                   </ul>-->
         <!--                 </div>-->
         <!--               </div>-->
         <!--               <div id="chart8"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--           <div class="card radius-10 border shadow-none mb-3">-->
         <!--             <div class="card-body">-->
         <!--               <div class="d-flex align-items-center">-->
         <!--                 <div class="">-->
         <!--                   <p class="mb-1">Total Posts</p>-->
         <!--                   <h4 class="mb-0 text-primary">489</h4>-->
         <!--                 </div>-->
         <!--                 <div class="dropdown ms-auto">-->
         <!--                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>-->
         <!--                   </div>-->
         <!--                   <ul class="dropdown-menu">-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Action</a>-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Another action</a>-->
         <!--                     </li>-->
         <!--                     <li>-->
         <!--                       <hr class="dropdown-divider">-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>-->
         <!--                     </li>-->
         <!--                   </ul>-->
         <!--                 </div>-->
         <!--               </div>-->
         <!--               <div id="chart9"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--           <div class="card radius-10 border shadow-none mb-0">-->
         <!--             <div class="card-body">-->
         <!--               <div class="d-flex align-items-center">-->
         <!--                 <div class="">-->
         <!--                   <p class="mb-1">New Tasks</p>-->
         <!--                   <h4 class="mb-0 text-primary">149</h4>-->
         <!--                 </div>-->
         <!--                 <div class="dropdown ms-auto">-->
         <!--                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>-->
         <!--                   </div>-->
         <!--                   <ul class="dropdown-menu">-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Action</a>-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Another action</a>-->
         <!--                     </li>-->
         <!--                     <li>-->
         <!--                       <hr class="dropdown-divider">-->
         <!--                     </li>-->
         <!--                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>-->
         <!--                     </li>-->
         <!--                   </ul>-->
         <!--                 </div>-->
         <!--               </div>-->
         <!--               <div id="chart10"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--         </div>-->
         <!--       </div>-->
         <!--    </div>-->
         <!--    <div class="col-12 col-lg-12 col-xl-4 d-flex">-->
         <!--     <div class="card radius-10 w-100">-->
         <!--       <div class="card-body">-->
         <!--         <div class="d-flex align-items-center">-->
         <!--           <h6 class="mb-0">Visitors</h6>-->
         <!--           <div class="fs-5 ms-auto dropdown">-->
         <!--              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
         <!--                <ul class="dropdown-menu">-->
         <!--                  <li><a class="dropdown-item" href="#">Action</a></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Another action</a></li>-->
         <!--                  <li><hr class="dropdown-divider"></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Something else here</a></li>-->
         <!--                </ul>-->
         <!--            </div>-->
         <!--          </div>-->
         <!--         <div id="chart11" class=""></div>-->
         <!--         <div class="d-flex align-items-center gap-5 justify-content-center mt-3 p-2 radius-10 border"> -->
         <!--           <div class="text-center">-->
         <!--             <h3 class="mb-2 text-primary">8,546</h3>-->
         <!--             <p class="mb-0">New  Visitors</p>-->
         <!--           </div>-->
         <!--           <div class="border-end sepration"></div>-->
         <!--           <div class="text-center">-->
         <!--            <h3 class="mb-2 text-primary-2">3,723</h3>-->
         <!--            <p class="mb-0">Old  Visitors</p>-->
         <!--          </div>-->
         <!--        </div>-->
         <!--       </div>-->
         <!--     </div>-->
         <!--  </div>-->
         <!--</div><!--end row-->

         <!--<div class="row">-->
         <!--   <div class="col-12 col-lg-12 col-xl-8 d-flex">-->
         <!--     <div class="card radius-10 w-100">-->
         <!--       <div class="card-body">-->
         <!--         <div class="d-flex align-items-center">-->
         <!--           <h6 class="mb-0">Recent Orders</h6>-->
         <!--           <div class="fs-5 ms-auto dropdown">-->
         <!--              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
         <!--                <ul class="dropdown-menu">-->
         <!--                  <li><a class="dropdown-item" href="#">Action</a></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Another action</a></li>-->
         <!--                  <li><hr class="dropdown-divider"></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Something else here</a></li>-->
         <!--                </ul>-->
         <!--            </div>-->
         <!--          </div>-->
         <!--          <div class="table-responsive mt-2">-->
         <!--           <table class="table align-middle mb-0">-->
         <!--             <thead class="table-light">-->
         <!--               <tr>-->
         <!--                 <th>#ID</th>-->
         <!--                 <th>Product</th>-->
         <!--                 <th>Quantity</th>-->
         <!--                 <th>Price</th>-->
         <!--                 <th>Date</th>-->
         <!--                 <th>Actions</th>-->
         <!--               </tr>-->
         <!--             </thead>-->
         <!--             <tbody>-->
         <!--               <tr>-->
         <!--                 <td>#89742</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/11.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Smart Mobile Phone</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>2</td>-->
         <!--                 <td>$214</td>-->
         <!--                 <td>Apr 8, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--               <tr>-->
         <!--                 <td>#68570</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/07.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Sports Time Watch</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>1</td>-->
         <!--                 <td>$185</td>-->
         <!--                 <td>Apr 9, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--               <tr>-->
         <!--                 <td>#38567</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/17.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Women Red Heals</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>3</td>-->
         <!--                 <td>$356</td>-->
         <!--                 <td>Apr 10, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--               <tr>-->
         <!--                 <td>#48572</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/04.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Yellow Winter Jacket</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>1</td>-->
         <!--                 <td>$149</td>-->
         <!--                 <td>Apr 11, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--               <tr>-->
         <!--                 <td>#96857</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/10.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Orange Micro Headphone</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>2</td>-->
         <!--                 <td>$199</td>-->
         <!--                 <td>Apr 15, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--               <tr>-->
         <!--                 <td>#96857</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3">-->
         <!--                     <div class="product-box border">-->
         <!--                        <img src="<?=base_url(); ?>assets/images/products/12.png" alt="">-->
         <!--                     </div>-->
         <!--                     <div class="product-info">-->
         <!--                       <h6 class="product-name mb-1">Pro Samsung Laptop</h6>-->
         <!--                     </div>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--                 <td>1</td>-->
         <!--                 <td>$699</td>-->
         <!--                 <td>Apr 18, 2021</td>-->
         <!--                 <td>-->
         <!--                   <div class="d-flex align-items-center gap-3 fs-6">-->
         <!--                     <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>-->
         <!--                     <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
         <!--                   </div>-->
         <!--                 </td>-->
         <!--               </tr>-->
         <!--             </tbody>-->
         <!--           </table>-->
         <!--         </div>-->
         <!--       </div>-->
         <!--     </div>-->
         <!--   </div>-->
         <!--   <div class="col-12 col-lg-12 col-xl-4 d-flex">-->
         <!--     <div class="card radius-10 w-100">-->
         <!--       <div class="card-body">-->
         <!--         <div class="d-flex align-items-center">-->
         <!--           <h6 class="mb-0">Sales By Country</h6>-->
         <!--           <div class="fs-5 ms-auto dropdown">-->
         <!--              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>-->
         <!--                <ul class="dropdown-menu">-->
         <!--                  <li><a class="dropdown-item" href="#">Action</a></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Another action</a></li>-->
         <!--                  <li><hr class="dropdown-divider"></li>-->
         <!--                  <li><a class="dropdown-item" href="#">Something else here</a></li>-->
         <!--                </ul>-->
         <!--            </div>-->
         <!--          </div>-->
         <!--          <div id="geographic-map" class="mt-2"></div>-->
         <!--          <div class="traffic-widget">-->
         <!--           <div class="progress-wrapper mb-3">-->
         <!--             <p class="mb-1">United States <span class="float-end">$2.5K</span></p>-->
         <!--             <div class="progress rounded-0" style="height: 6px;">-->
         <!--               <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--           <div class="progress-wrapper mb-3">-->
         <!--             <p class="mb-1">Russia <span class="float-end">$4.5K</span></p>-->
         <!--             <div class="progress rounded-0" style="height: 6px;">-->
         <!--               <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--           <div class="progress-wrapper mb-0">-->
         <!--             <p class="mb-1">Australia <span class="float-end">$8.5K</span></p>-->
         <!--             <div class="progress rounded-0" style="height: 6px;">-->
         <!--               <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>-->
         <!--             </div>-->
         <!--           </div>-->
         <!--          </div>-->
                     
         <!--       </div>-->
         <!--     </div>-->
         <!--   </div>-->
         <!--</div><!--end row-->



          </main>
       <!--end page main-->

     