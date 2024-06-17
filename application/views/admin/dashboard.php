

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

               <?php if($this->session->userdata('type')=='SuperAdmin'){?>
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

               
            </div>



          </main>
       <!--end page main-->

     