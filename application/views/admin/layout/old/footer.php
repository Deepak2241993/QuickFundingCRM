  <!--start overlay-->
  <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
       <!-- <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>-->
       <!-- <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">-->
       <!--   <div class="offcanvas-header border-bottom">-->
       <!--     <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>-->
       <!--     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>-->
       <!--   </div>-->
       <!--   <div class="offcanvas-body">-->
       <!--     <h6 class="mb-0">Theme Variation</h6>-->
       <!--     <hr>-->
       <!--     <div class="form-check form-check-inline">-->
       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>-->
       <!--       <label class="form-check-label" for="LightTheme">Light</label>-->
       <!--     </div>-->
       <!--     <div class="form-check form-check-inline">-->
       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">-->
       <!--       <label class="form-check-label" for="DarkTheme">Dark</label>-->
       <!--     </div>-->
       <!--     <div class="form-check form-check-inline">-->
       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">-->
       <!--       <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>-->
       <!--     </div>-->
       <!--     <hr>-->
       <!--     <div class="form-check form-check-inline">-->
       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">-->
       <!--       <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>-->
       <!--     </div>-->
       <!--     <hr/>-->
       <!--     <h6 class="mb-0">Header Colors</h6>-->
       <!--     <hr/>-->
       <!--     <div class="header-colors-indigators">-->
       <!--       <div class="row row-cols-auto g-3">-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor1" id="headercolor1"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor2" id="headercolor2"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor3" id="headercolor3"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor4" id="headercolor4"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor5" id="headercolor5"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor6" id="headercolor6"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor7" id="headercolor7"></div>-->
       <!--         </div>-->
       <!--         <div class="col">-->
       <!--           <div class="indigator headercolor8" id="headercolor8"></div>-->
       <!--         </div>-->
       <!--       </div>-->
       <!--     </div>-->
       <!--   </div>-->
       <!-- </div>-->
       <!--</div>-->
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="<?=base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?=base_url();?>assets/js/pace.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="<?=base_url();?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?=base_url();?>assets/js/table-datatable.js"></script>
  <!--app-->
  <script src="<?=base_url();?>assets/js/app.js"></script>
  <script src="<?=base_url();?>assets/js/index.js"></script>

<script type="text/javascript">
function CheckColors(val){
    
 var element=document.getElementById('color');
 if(val.value=='others'){
   element.style.display='block';
   $('#color').attr("name","purpose_of_loan");
   $('#loanpurpose').removeAttr("name");
 }else{  
   element.style.display='none';
   $('#loanpurpose').attr("name","purpose_of_loan");
   $('#color').removeAttr("name");
}
}

</script>

  <script>

     
        $(document).ready(function () {
           var lineNo = $('#LmyTable >tbody >tr').length+1;
            
            $("#addrow").click(function () {
             
                 markup = "<tr><th scope='row'>"+lineNo+"</th><td><input type='text' name='ot_loan_type[]' class='form-control'></td><td><input type='text' name='ot_amt_borrowed[]' class='form-control'></td><td><input type='text' name='ot_amt_outstanding[]' class='form-control'></td><td><input type='text' name='ot_lenders_name[]' class='form-control'></td><td><input type='text' name='ot_monthly_repayment[]' class='form-control'></td></tr>";
                
                $("#tbodyid").append(markup);
                lineNo++;
               
            });
        }); 

 </script>
  <script>

     
        $(document).ready(function () {
            var linehome = $('#HmyTable >tbody >tr').length+1;
            $("#addrowhome").click(function () {
                
             
                 markup = "<tr><th scope='row'>"+linehome+"</th><td><input type='text'  name='property_address[]' class='form-control'></td><td><input type='text' name='market_value[]' class='form-control'></td><td><input type='text' name='amt_outstanding[]' class='form-control'></td><td><input name='lenders_name[]' type='text' class='form-control'></td><td><input type='text' name='monthly_repayment[]' class='form-control'></td><td><input type='text' name='lb_loan_type[]' class='form-control'></td></tr>";
                
                $("#tbodyidhome").append(markup);
                linehome++;
               
            });
        }); 

 </script>
 <script>

   
        $(document).ready(function () {
            var linecard = $('#CmyTable >tbody >tr').length+1;
            
            $("#addrowcard").click(function () {
             
                 markup = "<tr><th scope='row'>"+linecard+"</th><td><input type='text' name='card_lender[]' class='form-control'></td><td><input type='text' name='card_limit[]' class='form-control'></td><td><input type='text' name='card_amt_outstanding[]' class='form-control'></td></tr>";
                
                $("#tbodyidcard").append(markup);
                linecard++;
               
            });
        }); 

 </script>

<script>

     
        $(document).ready(function () {
             var lineres = $('#resTable >tbody >tr').length+1;
            
            $("#addrowres").click(function () {
             
                 markup = "<tr><th scope='row'>"+lineres+"</th><td><input type='text' name='other_address[]' class='form-control'></td><td><input type='text' name='other_housingstatus[]' class='form-control'></td><td><input type='text' name='other_date_moved_in[]' class='form-control'></td><td><input type='text' name='other_date_moved_out[]' class='form-control'></td></tr>";
                
                $("#tboadyres").append(markup);
                lineres++;
               
            });
        }); 

 </script>
 <script>

     
        $(document).ready(function () { EmyTable
         var linehis = $('#EmyTable >tbody >tr').length+1;
            $("#addrowhis").click(function () {
             
                 markup = "<tr><th scope='row'>"+linehis+"</th><td><input type='text' name='employer_name[]' class='form-control'></td><td><input type='number' name='employer_phone[]' class='form-control'></td><td><input type='text' name='occupation[]' class='form-control'></td><td><input type='date' name='ob_start_date[]' class='form-control'></td><td><input type='date' name='job_end_date[]' class='form-control'></td></tr>";
                
                $("#tboadyhis").append(markup);
                linehis++;
               
            });
        }); 

 </script>
 <script>
function loantype(a){
    var loantype=a.value;
    if(loantype){
        $('#formsow').show();
    }else{
         $('#formsow').hide();
    }
}


function hideshowproytehsion(plush){
    if(plush==1){
        $('#chnageclick').html('<b id="plushminush" style="padding-left: 2%;font-size: 23px;cursor: pointer;" onclick="hideshowproytehsion(2);">-</b>');
         $('#hidedivprotection').show();
    }else{
        $('#chnageclick').html('<b id="plushminush" style="padding-left: 2%;font-size: 23px;cursor: pointer;" onclick="hideshowproytehsion(1);">+</b>');
         $('#hidedivprotection').hide();
    }
   
}
 </script>

</body>

</html>