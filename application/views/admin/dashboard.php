

       <!--start content-->
          <main class="page-content"> 
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">

            <?php if($this->session->userdata('type')=='Manager'){?>
              <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Total Agent</p>
                        <h4 class=""><?=$getcount['agent']?$getcount['agent']:0; ?></h4>
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
                        <p>Total Leads of Team</p>
                        <h4 class=""><?=$getcount['manager_lead']?$getcount['manager_lead']:0; ?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-danger"></p>
                         <div id="chart2"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>

              <?php } ?>


              <?php if($this->session->userdata('type')=='Agent'){?>
              <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Total Leads</p>
                        <h4 class=""><?=$getcount['agent_lead']?$getcount['agent_lead']:0; ?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-danger"></p>
                         <div id="chart2"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <?php } ?>
            </div>
               <?php if($this->session->userdata('type')=='SuperAdmin'){?>
            <div class="row">
               
                <div class="col-12 col-lg-6 d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0">Today Leads</h6>
                        <div class="fs-5 ms-auto dropdown">
                            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                        <div class="col-lg-7 col-xl-7 col-xxl-8">
                          <div class="by-device-container"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <div class="piechart-legend">
                                <h2 class="mb-1">85%</h2>
                                <h6 class="mb-0">In Progress</h6>
                            </div>
                            <canvas id="chart6" width="272" height="260" style="display: block; width: 272px; height: 260px;" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                        <div class="col-lg-5 col-xl-5 col-xxl-4">
                          <div class="">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>Approved - </span> <span>22.5%</span>
                              </li>
                              <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                <i class="bi bi-phone-fill me-2 text-primary-2"></i> <span>In Progress - </span> <span>62.3%</span>
                              </li>
                              <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                <i class="bi bi-display-fill me-2 text-primary-3"></i> <span>Not Approved - </span> <span>15.2%</span>
                              </li>
                            
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0">Recent Orders</h6>
                        <div class="fs-5 ms-auto dropdown">
                          <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                      </div>
                      <div class="table-responsive mt-2">
                        <table class="table align-middle mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>#ID</th>
                              <th>Product</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Date</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>#89742</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/11.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                  </div>
                                </div>
                              </td>
                              <td>2</td>
                              <td>$214</td>
                              <td>Apr 8, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>#68570</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/07.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Sports Time Watch</h6>
                                  </div>
                                </div>
                              </td>
                              <td>1</td>
                              <td>$185</td>
                              <td>Apr 9, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>#38567</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/17.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Women Red Heals</h6>
                                  </div>
                                </div>
                              </td>
                              <td>3</td>
                              <td>$356</td>
                              <td>Apr 10, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>#48572</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/04.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                  </div>
                                </div>
                              </td>
                              <td>1</td>
                              <td>$149</td>
                              <td>Apr 11, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>#96857</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/10.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                                  </div>
                                </div>
                              </td>
                              <td>2</td>
                              <td>$199</td>
                              <td>Apr 15, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>#96857</td>
                              <td>
                                <div class="d-flex align-items-center gap-3">
                                  <div class="product-box border">
                                    <img src="assets/images/products/12.png" alt="">
                                  </div>
                                  <div class="product-info">
                                    <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                                  </div>
                                </div>
                              </td>
                              <td>1</td>
                              <td>$699</td>
                              <td>Apr 18, 2021</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

                <div class="col-12 col-lg-12 col-xl-10 d-flex">
                  <div class="w-100">
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card radius-10">
                          <div class="card-body" style="position: relative;">
                            <div class="d-flex align-items-center">
                              <h6 class="mb-0">Visitors</h6>
                              <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="d-sm-flex align-items-center gap-3 mt-3">
                              <div class="mb-2 mb-sm-0">
                                <h4 class="mb-0">254,852</h4>
                                <p class="mb-0">New / Returning</p>
                              </div>
                              <div class="d-none d-sm-block border-end sepration-2"></div>
                              <div class="align-self-end mb-2 mb-sm-0">
                                <p class="mb-0">45,762 / 2,491</p>
                              </div>
                              <div class="align-self-end ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                  <p class="mb-0 font-13">
                                    <i class="bi bi-square-fill ms-1 text-primary"></i> New Visitors
                                  </p>
                                  <p class="mb-0 font-13">
                                    <i class="bi bi-square-fill ms-1 text-primary-3"></i> Returning Visitors
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div id="chart12" style="min-height: 275px;"><div id="apexchartsp22hf8ak" class="apexcharts-canvas apexchartsp22hf8ak apexcharts-theme-light" style="width: 655px; height: 260px;"><svg id="SvgjsSvg2524" width="655" height="260" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2526" class="apexcharts-inner apexcharts-graphical" transform="translate(53.484375, 30)"><defs id="SvgjsDefs2525"><linearGradient id="SvgjsLinearGradient2530" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2531" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2532" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2533" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskp22hf8ak"><rect id="SvgjsRect2535" width="597.015625" height="193.848" x="-2.75" y="-0.75" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskp22hf8ak"><rect id="SvgjsRect2536" width="595.515625" height="196.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2534" width="11.09091796875" height="192.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2530)" class="apexcharts-xcrosshairs" y2="192.348" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2567" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2568" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2570" font-family="Helvetica, Arial, sans-serif" x="24.646484375" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2571">Jan</tspan><title>Jan</title></text><text id="SvgjsText2573" font-family="Helvetica, Arial, sans-serif" x="73.939453125" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2574">Feb</tspan><title>Feb</title></text><text id="SvgjsText2576" font-family="Helvetica, Arial, sans-serif" x="123.232421875" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2577">Mar</tspan><title>Mar</title></text><text id="SvgjsText2579" font-family="Helvetica, Arial, sans-serif" x="172.525390625" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2580">Apr</tspan><title>Apr</title></text><text id="SvgjsText2582" font-family="Helvetica, Arial, sans-serif" x="221.818359375" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2583">May</tspan><title>May</title></text><text id="SvgjsText2585" font-family="Helvetica, Arial, sans-serif" x="271.111328125" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2586">Jun</tspan><title>Jun</title></text><text id="SvgjsText2588" font-family="Helvetica, Arial, sans-serif" x="320.404296875" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2589">Jul</tspan><title>Jul</title></text><text id="SvgjsText2591" font-family="Helvetica, Arial, sans-serif" x="369.697265625" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2592">Aug</tspan><title>Aug</title></text><text id="SvgjsText2594" font-family="Helvetica, Arial, sans-serif" x="418.990234375" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2595">Sep</tspan><title>Sep</title></text><text id="SvgjsText2597" font-family="Helvetica, Arial, sans-serif" x="468.283203125" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2598">Oct</tspan><title>Oct</title></text><text id="SvgjsText2600" font-family="Helvetica, Arial, sans-serif" x="517.576171875" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2601">Nov</tspan><title>Nov</title></text><text id="SvgjsText2603" font-family="Helvetica, Arial, sans-serif" x="566.869140625" y="221.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2604">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine2605" x1="0" y1="193.348" x2="591.515625" y2="193.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2620" class="apexcharts-grid"><g id="SvgjsG2621" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2636" x1="0" y1="0" x2="591.515625" y2="0" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2637" x1="0" y1="38.4696" x2="591.515625" y2="38.4696" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2638" x1="0" y1="76.9392" x2="591.515625" y2="76.9392" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2639" x1="0" y1="115.4088" x2="591.515625" y2="115.4088" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2640" x1="0" y1="153.8784" x2="591.515625" y2="153.8784" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2641" x1="0" y1="192.348" x2="591.515625" y2="192.348" stroke="rgba(66, 59, 116, 0.15)" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2622" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2623" x1="0" y1="193.348" x2="0" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2624" x1="49.29296875" y1="193.348" x2="49.29296875" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2625" x1="98.5859375" y1="193.348" x2="98.5859375" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2626" x1="147.87890625" y1="193.348" x2="147.87890625" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2627" x1="197.171875" y1="193.348" x2="197.171875" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2628" x1="246.46484375" y1="193.348" x2="246.46484375" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2629" x1="295.7578125" y1="193.348" x2="295.7578125" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2630" x1="345.05078125" y1="193.348" x2="345.05078125" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2631" x1="394.34375" y1="193.348" x2="394.34375" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2632" x1="443.63671875" y1="193.348" x2="443.63671875" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2633" x1="492.9296875" y1="193.348" x2="492.9296875" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2634" x1="542.22265625" y1="193.348" x2="542.22265625" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2635" x1="591.515625" y1="193.348" x2="591.515625" y2="199.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2643" x1="0" y1="192.348" x2="591.515625" y2="192.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2642" x1="0" y1="1" x2="0" y2="192.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2538" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2539" class="apexcharts-series" rel="1" seriesName="ReturningxVisitors" data:realIndex="0"><path id="SvgjsPath2541" d="M 13.55556640625 192.348L 13.55556640625 128.97240949218752Q 18.351025390625 124.92695050781252 23.146484375 128.97240949218752L 23.146484375 128.97240949218752L 23.146484375 192.348L 23.146484375 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 13.55556640625 192.348L 13.55556640625 128.97240949218752Q 18.351025390625 124.92695050781252 23.146484375 128.97240949218752L 23.146484375 128.97240949218752L 23.146484375 192.348L 23.146484375 192.348z" pathFrom="M 13.55556640625 192.348L 13.55556640625 192.348L 23.146484375 192.348L 23.146484375 192.348L 23.146484375 192.348L 13.55556640625 192.348" cy="126.94968000000001" cx="62.09853515625" j="0" val="340" barHeight="65.39832" barWidth="11.09091796875"></path><path id="SvgjsPath2542" d="M 62.84853515625 192.348L 62.84853515625 140.8979854921875Q 67.643994140625 136.8525265078125 72.439453125 140.8979854921875L 72.439453125 140.8979854921875L 72.439453125 192.348L 72.439453125 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 62.84853515625 192.348L 62.84853515625 140.8979854921875Q 67.643994140625 136.8525265078125 72.439453125 140.8979854921875L 72.439453125 140.8979854921875L 72.439453125 192.348L 72.439453125 192.348z" pathFrom="M 62.84853515625 192.348L 62.84853515625 192.348L 72.439453125 192.348L 72.439453125 192.348L 72.439453125 192.348L 62.84853515625 192.348" cy="138.875256" cx="111.39150390625" j="1" val="278" barHeight="53.472744000000006" barWidth="11.09091796875"></path><path id="SvgjsPath2543" d="M 112.14150390625 192.348L 112.14150390625 29.5284934921875Q 116.936962890625 25.4830345078125 121.732421875 29.5284934921875L 121.732421875 29.5284934921875L 121.732421875 192.348L 121.732421875 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 112.14150390625 192.348L 112.14150390625 29.5284934921875Q 116.936962890625 25.4830345078125 121.732421875 29.5284934921875L 121.732421875 29.5284934921875L 121.732421875 192.348L 121.732421875 192.348z" pathFrom="M 112.14150390625 192.348L 112.14150390625 192.348L 121.732421875 192.348L 121.732421875 192.348L 121.732421875 192.348L 112.14150390625 192.348" cy="27.505764" cx="160.68447265625" j="2" val="857" barHeight="164.842236" barWidth="11.09091796875"></path><path id="SvgjsPath2544" d="M 161.43447265625 192.348L 161.43447265625 114.7386574921875Q 166.22993164062498 110.6931985078125 171.025390625 114.7386574921875L 171.025390625 114.7386574921875L 171.025390625 192.348L 171.025390625 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 161.43447265625 192.348L 161.43447265625 114.7386574921875Q 166.22993164062498 110.6931985078125 171.025390625 114.7386574921875L 171.025390625 114.7386574921875L 171.025390625 192.348L 171.025390625 192.348z" pathFrom="M 161.43447265625 192.348L 161.43447265625 192.348L 171.025390625 192.348L 171.025390625 192.348L 171.025390625 192.348L 161.43447265625 192.348" cy="112.715928" cx="209.97744140625" j="3" val="414" barHeight="79.63207200000001" barWidth="11.09091796875"></path><path id="SvgjsPath2545" d="M 210.72744140625 192.348L 210.72744140625 87.6175894921875Q 215.52290039062498 83.5721305078125 220.318359375 87.6175894921875L 220.318359375 87.6175894921875L 220.318359375 192.348L 220.318359375 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 210.72744140625 192.348L 210.72744140625 87.6175894921875Q 215.52290039062498 83.5721305078125 220.318359375 87.6175894921875L 220.318359375 87.6175894921875L 220.318359375 192.348L 220.318359375 192.348z" pathFrom="M 210.72744140625 192.348L 210.72744140625 192.348L 220.318359375 192.348L 220.318359375 192.348L 220.318359375 192.348L 210.72744140625 192.348" cy="85.59486000000001" cx="259.27041015625" j="4" val="555" barHeight="106.75314" barWidth="11.09091796875"></path><path id="SvgjsPath2546" d="M 260.02041015625 192.348L 260.02041015625 85.3094134921875Q 264.815869140625 81.2639545078125 269.611328125 85.3094134921875L 269.611328125 85.3094134921875L 269.611328125 192.348L 269.611328125 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 260.02041015625 192.348L 260.02041015625 85.3094134921875Q 264.815869140625 81.2639545078125 269.611328125 85.3094134921875L 269.611328125 85.3094134921875L 269.611328125 192.348L 269.611328125 192.348z" pathFrom="M 260.02041015625 192.348L 260.02041015625 192.348L 269.611328125 192.348L 269.611328125 192.348L 269.611328125 192.348L 260.02041015625 192.348" cy="83.28668400000001" cx="308.56337890625" j="5" val="567" barHeight="109.061316" barWidth="11.09091796875"></path><path id="SvgjsPath2547" d="M 309.31337890625 192.348L 309.31337890625 21.0651814921875Q 314.108837890625 17.0197225078125 318.904296875 21.0651814921875L 318.904296875 21.0651814921875L 318.904296875 192.348L 318.904296875 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 309.31337890625 192.348L 309.31337890625 21.0651814921875Q 314.108837890625 17.0197225078125 318.904296875 21.0651814921875L 318.904296875 21.0651814921875L 318.904296875 192.348L 318.904296875 192.348z" pathFrom="M 309.31337890625 192.348L 309.31337890625 192.348L 318.904296875 192.348L 318.904296875 192.348L 318.904296875 192.348L 309.31337890625 192.348" cy="19.042451999999997" cx="357.85634765625" j="6" val="901" barHeight="173.30554800000002" barWidth="11.09091796875"></path><path id="SvgjsPath2548" d="M 358.60634765625 192.348L 358.60634765625 87.6175894921875Q 363.401806640625 83.5721305078125 368.197265625 87.6175894921875L 368.197265625 87.6175894921875L 368.197265625 192.348L 368.197265625 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 358.60634765625 192.348L 358.60634765625 87.6175894921875Q 363.401806640625 83.5721305078125 368.197265625 87.6175894921875L 368.197265625 87.6175894921875L 368.197265625 192.348L 368.197265625 192.348z" pathFrom="M 358.60634765625 192.348L 358.60634765625 192.348L 368.197265625 192.348L 368.197265625 192.348L 368.197265625 192.348L 358.60634765625 192.348" cy="85.59486000000001" cx="407.14931640625" j="7" val="555" barHeight="106.75314" barWidth="11.09091796875"></path><path id="SvgjsPath2549" d="M 407.89931640625 192.348L 407.89931640625 144.9372934921875Q 412.694775390625 140.89183450781252 417.490234375 144.9372934921875L 417.490234375 144.9372934921875L 417.490234375 192.348L 417.490234375 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 407.89931640625 192.348L 407.89931640625 144.9372934921875Q 412.694775390625 140.89183450781252 417.490234375 144.9372934921875L 417.490234375 144.9372934921875L 417.490234375 192.348L 417.490234375 192.348z" pathFrom="M 407.89931640625 192.348L 407.89931640625 192.348L 417.490234375 192.348L 417.490234375 192.348L 417.490234375 192.348L 407.89931640625 192.348" cy="142.914564" cx="456.44228515625" j="8" val="257" barHeight="49.433436" barWidth="11.09091796875"></path><path id="SvgjsPath2550" d="M 457.19228515625 192.348L 457.19228515625 86.6558494921875Q 461.987744140625 82.6103905078125 466.783203125 86.6558494921875L 466.783203125 86.6558494921875L 466.783203125 192.348L 466.783203125 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 457.19228515625 192.348L 457.19228515625 86.6558494921875Q 461.987744140625 82.6103905078125 466.783203125 86.6558494921875L 466.783203125 86.6558494921875L 466.783203125 192.348L 466.783203125 192.348z" pathFrom="M 457.19228515625 192.348L 457.19228515625 192.348L 466.783203125 192.348L 466.783203125 192.348L 466.783203125 192.348L 457.19228515625 192.348" cy="84.63312" cx="505.73525390625" j="9" val="560" barHeight="107.71488000000001" barWidth="11.09091796875"></path><path id="SvgjsPath2551" d="M 506.48525390625 192.348L 506.48525390625 65.30522149218748Q 511.280712890625 61.25976250781248 516.076171875 65.30522149218748L 516.076171875 65.30522149218748L 516.076171875 192.348L 516.076171875 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 506.48525390625 192.348L 506.48525390625 65.30522149218748Q 511.280712890625 61.25976250781248 516.076171875 65.30522149218748L 516.076171875 65.30522149218748L 516.076171875 192.348L 516.076171875 192.348z" pathFrom="M 506.48525390625 192.348L 506.48525390625 192.348L 516.076171875 192.348L 516.076171875 192.348L 516.076171875 192.348L 506.48525390625 192.348" cy="63.28249199999999" cx="555.02822265625" j="10" val="671" barHeight="129.06550800000002" barWidth="11.09091796875"></path><path id="SvgjsPath2552" d="M 555.77822265625 192.348L 555.77822265625 114.7386574921875Q 560.5736816406251 110.6931985078125 565.369140625 114.7386574921875L 565.369140625 114.7386574921875L 565.369140625 192.348L 565.369140625 192.348z" fill="rgba(52,97,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 555.77822265625 192.348L 555.77822265625 114.7386574921875Q 560.5736816406251 110.6931985078125 565.369140625 114.7386574921875L 565.369140625 114.7386574921875L 565.369140625 192.348L 565.369140625 192.348z" pathFrom="M 555.77822265625 192.348L 555.77822265625 192.348L 565.369140625 192.348L 565.369140625 192.348L 565.369140625 192.348L 555.77822265625 192.348" cy="112.715928" cx="604.32119140625" j="11" val="414" barHeight="79.63207200000001" barWidth="11.09091796875"></path></g><g id="SvgjsG2553" class="apexcharts-series" rel="2" seriesName="OldxVisitors" data:realIndex="1"><path id="SvgjsPath2555" d="M 24.646484375 192.348L 24.646484375 148.2072094921875Q 29.441943359375 144.1617505078125 34.23740234375 148.2072094921875L 34.23740234375 148.2072094921875L 34.23740234375 192.348L 34.23740234375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 24.646484375 192.348L 24.646484375 148.2072094921875Q 29.441943359375 144.1617505078125 34.23740234375 148.2072094921875L 34.23740234375 148.2072094921875L 34.23740234375 192.348L 34.23740234375 192.348z" pathFrom="M 24.646484375 192.348L 24.646484375 192.348L 34.23740234375 192.348L 34.23740234375 192.348L 34.23740234375 192.348L 24.646484375 192.348" cy="146.18448" cx="73.189453125" j="0" val="240" barHeight="46.163520000000005" barWidth="11.09091796875"></path><path id="SvgjsPath2556" d="M 73.939453125 192.348L 73.939453125 67.42104949218749Q 78.734912109375 63.37559050781249 83.53037109375 67.42104949218749L 83.53037109375 67.42104949218749L 83.53037109375 192.348L 83.53037109375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 73.939453125 192.348L 73.939453125 67.42104949218749Q 78.734912109375 63.37559050781249 83.53037109375 67.42104949218749L 83.53037109375 67.42104949218749L 83.53037109375 192.348L 83.53037109375 192.348z" pathFrom="M 73.939453125 192.348L 73.939453125 192.348L 83.53037109375 192.348L 83.53037109375 192.348L 83.53037109375 192.348L 73.939453125 192.348" cy="65.39832" cx="122.482421875" j="1" val="660" barHeight="126.94968000000001" barWidth="11.09091796875"></path><path id="SvgjsPath2557" d="M 123.232421875 192.348L 123.232421875 161.47922149218752Q 128.027880859375 157.43376250781253 132.82333984375 161.47922149218752L 132.82333984375 161.47922149218752L 132.82333984375 192.348L 132.82333984375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 123.232421875 192.348L 123.232421875 161.47922149218752Q 128.027880859375 157.43376250781253 132.82333984375 161.47922149218752L 132.82333984375 161.47922149218752L 132.82333984375 192.348L 132.82333984375 192.348z" pathFrom="M 123.232421875 192.348L 123.232421875 192.348L 132.82333984375 192.348L 132.82333984375 192.348L 132.82333984375 192.348L 123.232421875 192.348" cy="159.45649200000003" cx="171.775390625" j="2" val="171" barHeight="32.891508" barWidth="11.09091796875"></path><path id="SvgjsPath2558" d="M 172.525390625 192.348L 172.525390625 144.9372934921875Q 177.320849609375 140.89183450781252 182.11630859375 144.9372934921875L 182.11630859375 144.9372934921875L 182.11630859375 192.348L 182.11630859375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 172.525390625 192.348L 172.525390625 144.9372934921875Q 177.320849609375 140.89183450781252 182.11630859375 144.9372934921875L 182.11630859375 144.9372934921875L 182.11630859375 192.348L 182.11630859375 192.348z" pathFrom="M 172.525390625 192.348L 172.525390625 192.348L 182.11630859375 192.348L 182.11630859375 192.348L 182.11630859375 192.348L 172.525390625 192.348" cy="142.914564" cx="221.068359375" j="3" val="257" barHeight="49.433436" barWidth="11.09091796875"></path><path id="SvgjsPath2559" d="M 221.818359375 192.348L 221.818359375 163.5950494921875Q 226.613818359375 159.54959050781252 231.40927734375 163.5950494921875L 231.40927734375 163.5950494921875L 231.40927734375 192.348L 231.40927734375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 221.818359375 192.348L 221.818359375 163.5950494921875Q 226.613818359375 159.54959050781252 231.40927734375 163.5950494921875L 231.40927734375 163.5950494921875L 231.40927734375 192.348L 231.40927734375 192.348z" pathFrom="M 221.818359375 192.348L 221.818359375 192.348L 231.40927734375 192.348L 231.40927734375 192.348L 231.40927734375 192.348L 221.818359375 192.348" cy="161.57232000000002" cx="270.361328125" j="4" val="160" barHeight="30.77568" barWidth="11.09091796875"></path><path id="SvgjsPath2560" d="M 271.111328125 192.348L 271.111328125 65.30522149218748Q 275.906787109375 61.25976250781248 280.70224609375 65.30522149218748L 280.70224609375 65.30522149218748L 280.70224609375 192.348L 280.70224609375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 271.111328125 192.348L 271.111328125 65.30522149218748Q 275.906787109375 61.25976250781248 280.70224609375 65.30522149218748L 280.70224609375 65.30522149218748L 280.70224609375 192.348L 280.70224609375 192.348z" pathFrom="M 271.111328125 192.348L 271.111328125 192.348L 280.70224609375 192.348L 280.70224609375 192.348L 280.70224609375 192.348L 271.111328125 192.348" cy="63.28249199999999" cx="319.654296875" j="5" val="671" barHeight="129.06550800000002" barWidth="11.09091796875"></path><path id="SvgjsPath2561" d="M 320.404296875 192.348L 320.404296875 128.97240949218752Q 325.199755859375 124.92695050781252 329.99521484375 128.97240949218752L 329.99521484375 128.97240949218752L 329.99521484375 192.348L 329.99521484375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 320.404296875 192.348L 320.404296875 128.97240949218752Q 325.199755859375 124.92695050781252 329.99521484375 128.97240949218752L 329.99521484375 128.97240949218752L 329.99521484375 192.348L 329.99521484375 192.348z" pathFrom="M 320.404296875 192.348L 320.404296875 192.348L 329.99521484375 192.348L 329.99521484375 192.348L 329.99521484375 192.348L 320.404296875 192.348" cy="126.94968000000001" cx="368.947265625" j="6" val="340" barHeight="65.39832" barWidth="11.09091796875"></path><path id="SvgjsPath2562" d="M 369.697265625 192.348L 369.697265625 80.1160174921875Q 374.492724609375 76.07055850781249 379.28818359375 80.1160174921875L 379.28818359375 80.1160174921875L 379.28818359375 192.348L 379.28818359375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 369.697265625 192.348L 369.697265625 80.1160174921875Q 374.492724609375 76.07055850781249 379.28818359375 80.1160174921875L 379.28818359375 80.1160174921875L 379.28818359375 192.348L 379.28818359375 192.348z" pathFrom="M 369.697265625 192.348L 369.697265625 192.348L 379.28818359375 192.348L 379.28818359375 192.348L 379.28818359375 192.348L 369.697265625 192.348" cy="78.093288" cx="418.240234375" j="7" val="594" barHeight="114.25471200000001" barWidth="11.09091796875"></path><path id="SvgjsPath2563" d="M 418.990234375 192.348L 418.990234375 87.6175894921875Q 423.785693359375 83.5721305078125 428.58115234375 87.6175894921875L 428.58115234375 87.6175894921875L 428.58115234375 192.348L 428.58115234375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 418.990234375 192.348L 418.990234375 87.6175894921875Q 423.785693359375 83.5721305078125 428.58115234375 87.6175894921875L 428.58115234375 87.6175894921875L 428.58115234375 192.348L 428.58115234375 192.348z" pathFrom="M 418.990234375 192.348L 418.990234375 192.348L 428.58115234375 192.348L 428.58115234375 192.348L 428.58115234375 192.348L 418.990234375 192.348" cy="85.59486000000001" cx="467.533203125" j="8" val="555" barHeight="106.75314" barWidth="11.09091796875"></path><path id="SvgjsPath2564" d="M 468.283203125 192.348L 468.283203125 72.8067934921875Q 473.078662109375 68.76133450781249 477.87412109375 72.8067934921875L 477.87412109375 72.8067934921875L 477.87412109375 192.348L 477.87412109375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 468.283203125 192.348L 468.283203125 72.8067934921875Q 473.078662109375 68.76133450781249 477.87412109375 72.8067934921875L 477.87412109375 72.8067934921875L 477.87412109375 192.348L 477.87412109375 192.348z" pathFrom="M 468.283203125 192.348L 468.283203125 192.348L 477.87412109375 192.348L 477.87412109375 192.348L 477.87412109375 192.348L 468.283203125 192.348" cy="70.784064" cx="516.826171875" j="9" val="632" barHeight="121.56393600000001" barWidth="11.09091796875"></path><path id="SvgjsPath2565" d="M 517.576171875 192.348L 517.576171875 21.0651814921875Q 522.371630859375 17.0197225078125 527.16708984375 21.0651814921875L 527.16708984375 21.0651814921875L 527.16708984375 192.348L 527.16708984375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 517.576171875 192.348L 517.576171875 21.0651814921875Q 522.371630859375 17.0197225078125 527.16708984375 21.0651814921875L 527.16708984375 21.0651814921875L 527.16708984375 192.348L 527.16708984375 192.348z" pathFrom="M 517.576171875 192.348L 517.576171875 192.348L 527.16708984375 192.348L 527.16708984375 192.348L 527.16708984375 192.348L 517.576171875 192.348" cy="19.042451999999997" cx="566.119140625" j="10" val="901" barHeight="173.30554800000002" barWidth="11.09091796875"></path><path id="SvgjsPath2566" d="M 566.869140625 192.348L 566.869140625 87.6175894921875Q 571.664599609375 83.5721305078125 576.46005859375 87.6175894921875L 576.46005859375 87.6175894921875L 576.46005859375 192.348L 576.46005859375 192.348z" fill="rgba(193,207,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="square" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp22hf8ak)" pathTo="M 566.869140625 192.348L 566.869140625 87.6175894921875Q 571.664599609375 83.5721305078125 576.46005859375 87.6175894921875L 576.46005859375 87.6175894921875L 576.46005859375 192.348L 576.46005859375 192.348z" pathFrom="M 566.869140625 192.348L 566.869140625 192.348L 576.46005859375 192.348L 576.46005859375 192.348L 576.46005859375 192.348L 566.869140625 192.348" cy="85.59486000000001" cx="615.412109375" j="11" val="555" barHeight="106.75314" barWidth="11.09091796875"></path><g id="SvgjsG2554" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG2540" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2644" x1="0" y1="0" x2="591.515625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2645" x1="0" y1="0" x2="591.515625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2646" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2647" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2648" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2606" class="apexcharts-yaxis" rel="0" transform="translate(23.484375, 0)"><g id="SvgjsG2607" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2608" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2609">1000</tspan></text><text id="SvgjsText2610" font-family="Helvetica, Arial, sans-serif" x="20" y="69.9696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2611">800</tspan></text><text id="SvgjsText2612" font-family="Helvetica, Arial, sans-serif" x="20" y="108.4392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2613">600</tspan></text><text id="SvgjsText2614" font-family="Helvetica, Arial, sans-serif" x="20" y="146.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2615">400</tspan></text><text id="SvgjsText2616" font-family="Helvetica, Arial, sans-serif" x="20" y="185.3784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2617">200</tspan></text><text id="SvgjsText2618" font-family="Helvetica, Arial, sans-serif" x="20" y="223.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2619">0</tspan></text></g></g><g id="SvgjsG2527" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 97, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(193, 207, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 688px; height: 404px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body" style="position: relative;">
                            <div id="chart13" style="min-height: 218.7px;"><div id="apexchartsilgkqno" class="apexcharts-canvas apexchartsilgkqno apexcharts-theme-light" style="width: 181px; height: 218.7px;"><svg id="SvgjsSvg2649" width="181" height="218.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2651" class="apexcharts-inner apexcharts-graphical" transform="translate(-16.5, 0)"><defs id="SvgjsDefs2650"><clipPath id="gridRectMaskilgkqno"><rect id="SvgjsRect2653" width="222" height="240" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskilgkqno"><rect id="SvgjsRect2654" width="220" height="242" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2660" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2661" stop-opacity="1" stop-color="rgba(238,238,238,1)" offset="0"></stop><stop id="SvgjsStop2662" stop-opacity="1" stop-color="rgba(52,97,255,1)" offset="1"></stop><stop id="SvgjsStop2663" stop-opacity="1" stop-color="rgba(52,97,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2671" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2672" stop-opacity="1" stop-color="rgba(52,97,255,1)" offset="0"></stop><stop id="SvgjsStop2673" stop-opacity="1" stop-color="rgba(52,97,255,1)" offset="1"></stop><stop id="SvgjsStop2674" stop-opacity="1" stop-color="rgba(52,97,255,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2656" class="apexcharts-radialbar"><g id="SvgjsG2657"><g id="SvgjsG2658" class="apexcharts-tracks"><g id="SvgjsG2659" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113" fill="none" fill-opacity="1" stroke="rgba(238,238,238,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.657512195121951" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113"></path></g></g><g id="SvgjsG2665"><g id="SvgjsG2670" class="apexcharts-series apexcharts-radial-series" seriesName="ServerxLoad" rel="1" data:realIndex="0"><path id="SvgjsPath2675" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 81.90012317509743 188.32716122630458" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2671)" stroke-opacity="1" stroke-linecap="round" stroke-width="9.93658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 81.90012317509743 188.32716122630458"></path></g><circle id="SvgjsCircle2666" r="81.13221951219514" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2667" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2668" font-family="Helvetica, Arial, sans-serif" x="108" y="88" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Server Load</text><text id="SvgjsText2669" font-family="Helvetica, Arial, sans-serif" x="108" y="134" text-anchor="middle" dominant-baseline="auto" font-size="35px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">55%</text></g></g></g></g><line id="SvgjsLine2676" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2677" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2652" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 214px; height: 252px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body" style="position: relative;">
                            <div id="chart14" style="min-height: 218.7px;"><div id="apexcharts6423k4yx" class="apexcharts-canvas apexcharts6423k4yx apexcharts-theme-light" style="width: 181px; height: 218.7px;"><svg id="SvgjsSvg2678" width="181" height="218.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2680" class="apexcharts-inner apexcharts-graphical" transform="translate(-16.5, 0)"><defs id="SvgjsDefs2679"><clipPath id="gridRectMask6423k4yx"><rect id="SvgjsRect2682" width="222" height="240" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask6423k4yx"><rect id="SvgjsRect2683" width="220" height="242" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2689" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2690" stop-opacity="1" stop-color="rgba(238,238,238,1)" offset="0"></stop><stop id="SvgjsStop2691" stop-opacity="1" stop-color="rgba(18,191,36,1)" offset="1"></stop><stop id="SvgjsStop2692" stop-opacity="1" stop-color="rgba(18,191,36,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2700" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2701" stop-opacity="1" stop-color="rgba(18,191,36,1)" offset="0"></stop><stop id="SvgjsStop2702" stop-opacity="1" stop-color="rgba(18,191,36,1)" offset="1"></stop><stop id="SvgjsStop2703" stop-opacity="1" stop-color="rgba(18,191,36,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2685" class="apexcharts-radialbar"><g id="SvgjsG2686"><g id="SvgjsG2687" class="apexcharts-tracks"><g id="SvgjsG2688" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113" fill="none" fill-opacity="1" stroke="rgba(238,238,238,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.657512195121951" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113"></path></g></g><g id="SvgjsG2694"><g id="SvgjsG2699" class="apexcharts-series apexcharts-radial-series" seriesName="Bandwidth" rel="1" data:realIndex="0"><path id="SvgjsPath2704" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 43.299138973738806 162.29046862398823" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2700)" stroke-opacity="1" stroke-linecap="round" stroke-width="9.93658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="230" data:value="64" index="0" j="0" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 43.299138973738806 162.29046862398823"></path></g><circle id="SvgjsCircle2695" r="81.13221951219514" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2696" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2697" font-family="Helvetica, Arial, sans-serif" x="108" y="88" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Bandwidth</text><text id="SvgjsText2698" font-family="Helvetica, Arial, sans-serif" x="108" y="134" text-anchor="middle" dominant-baseline="auto" font-size="35px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">64%</text></g></g></g></g><line id="SvgjsLine2705" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2706" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2681" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 214px; height: 252px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body" style="position: relative;">
                            <div id="chart15" style="min-height: 218.7px;"><div id="apexcharts4hfyq9s5k" class="apexcharts-canvas apexcharts4hfyq9s5k apexcharts-theme-light" style="width: 181px; height: 218.7px;"><svg id="SvgjsSvg2707" width="181" height="218.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2709" class="apexcharts-inner apexcharts-graphical" transform="translate(-16.5, 0)"><defs id="SvgjsDefs2708"><clipPath id="gridRectMask4hfyq9s5k"><rect id="SvgjsRect2711" width="222" height="240" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask4hfyq9s5k"><rect id="SvgjsRect2712" width="220" height="242" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2718" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2719" stop-opacity="1" stop-color="rgba(238,238,238,1)" offset="0"></stop><stop id="SvgjsStop2720" stop-opacity="1" stop-color="rgba(231,46,122,1)" offset="1"></stop><stop id="SvgjsStop2721" stop-opacity="1" stop-color="rgba(231,46,122,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2729" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2730" stop-opacity="1" stop-color="rgba(231,46,122,1)" offset="0"></stop><stop id="SvgjsStop2731" stop-opacity="1" stop-color="rgba(231,46,122,1)" offset="1"></stop><stop id="SvgjsStop2732" stop-opacity="1" stop-color="rgba(231,46,122,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2714" class="apexcharts-radialbar"><g id="SvgjsG2715"><g id="SvgjsG2716" class="apexcharts-tracks"><g id="SvgjsG2717" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113" fill="none" fill-opacity="1" stroke="rgba(238,238,238,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="6.657512195121951" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 107.98525877893645 23.539025676658113"></path></g></g><g id="SvgjsG2723"><g id="SvgjsG2728" class="apexcharts-series apexcharts-radial-series" seriesName="Disksapce" rel="1" data:realIndex="0"><path id="SvgjsPath2733" d="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 25.090810400953274 91.88408609537959" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2729)" stroke-opacity="1" stroke-linecap="round" stroke-width="9.93658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="281" data:value="78" index="0" j="0" data:pathOrig="M 108 23.539024390243895 A 84.4609756097561 84.4609756097561 0 1 1 25.090810400953274 91.88408609537959"></path></g><circle id="SvgjsCircle2724" r="81.13221951219514" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2725" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2726" font-family="Helvetica, Arial, sans-serif" x="108" y="88" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Disksapce</text><text id="SvgjsText2727" font-family="Helvetica, Arial, sans-serif" x="108" y="134" text-anchor="middle" dominant-baseline="auto" font-size="35px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">78%</text></g></g></g></g><line id="SvgjsLine2734" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2735" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2710" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 214px; height: 252px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                    </div><!--end row-->
                    </div>
                </div>
              
                </div>
            </div>
          
              <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Total Manager</p>
                        <h4 class=""><?=$getcount['manager']?$getcount['manager']:0; ?></h4>
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
                        <p>Total Agent</p>
                        <h4 class=""><?=$getcount['allagent']?$getcount['allagent']:0; ?></h4>
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
                        <p>Total Leads</p>
                        <h4 class=""><?=$getcount['total_leads']?$getcount['total_leads']:0; ?></h4>
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
                        <p>Total Customers</p>
                        <h4 class=""><?=$getcount['loan']?$getcount['loan'][0]->tot:0; ?></h4>
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
                        <h4 class=""><?=$getcount['loan']?$getcount['loan'][0]->approved:0; ?></h4>
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
                          <h4 class=""><?=$getcount['loan']?$getcount['loan'][0]->notapproved:0; ?></h4>
                        </div>
                        <div class="w-50">
                          <p class="mb-3 float-end text-success"></p>
                          <div id="chart4"></div>
                        </div>
                    </div>
                  </div>
                </div>
               </div>

                <?php } ?>

               
            
              



          </main>
       <!--end page main-->

     