<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	  function __construct() {
        parent::__construct();
          $this->load->helper('url');
        $this->load->helper('form');
         $this->load->model('Customer');
         $this->load->library('session');
         
    }
	 public function index(){
	    
		$this->load->view('admin/login');
        
	 }
	 public function logincheck(){
	      $this->load->model('Customer');
	     if($this->input->post('email')!='' && $this->input->post('password')!='' && $this->input->post('type')){
	     $email=$this->input->post('email');
	      $password=$this->input->post('password');
	      $type=$this->input->post('type');
	      $admindata=$this->Customer->checkLogin($email,$password,$type);
	      if(!empty($admindata)){
	          $sess=array('id'=>$admindata->id,
	          'name'=>$admindata->name,
	          'email' =>$admindata->email,
	          'type' =>$admindata->type,
	          'login' =>true
	          );
	          $this->session->set_userdata($sess);
	           redirect(base_url().'Admin/dashboard'); 
	      }else{
	         redirect(base_url().'Admin'); 
	      }
	     }else{
	         redirect(base_url().'Admin');
	     }
	}
	 public function logout(){
	  $this->session->sess_destroy();
	   redirect(base_url().'Admin'); 
	 }
	public function dashboard()
	{
	    if($this->session->userdata('login')){
	        $data['getcount']=$this->Customer->getcountall();
	       
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/dashboard',$data);
        $this->load->view('admin/layout/footer');
	    }else{
	          redirect(base_url().'Admin'); 
	    }
	}
    public function loanform()
	{
	   if($this->session->userdata('login')){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/loanform');
        $this->load->view('admin/layout/footer');
	       }else{
	          redirect(base_url().'Admin'); 
	    }
	}
	
	
	
	
	
	
	
	
	
    public function customerList()
	{
	      if($this->session->userdata('login')){
	      if($_POST){
	           $from='';
	           $to='';
	           $type='';
               $status=''; 
               $agent_name='';
	          if($this->input->post('to') && $this->input->post('from')){
	             $from=date('Y-m-d',strtotime($this->input->post('from')));  
                  $to=date('Y-m-d',strtotime($this->input->post('to'))); 
	          }
	          if($this->input->post('type')){
	              $type=$this->input->post('type');
	          }
	          if($this->input->post('status')){
	            $status=$this->input->post('status');
	          }
	            if($this->input->post('agent_name')){
	            $agent_name=$this->input->post('agent_name');
	          }
	   //     if($this->input->post('to') && $this->input->post('type') =='' && $this->input->post('status') ==''){
    // 	    $from=date('Y-m-d',strtotime($this->input->post('from')));  
    // 	    $to=date('Y-m-d',strtotime($this->input->post('to')));
    // 	    $type='';
    // 	     $status=''; 
	   //     }else if($this->input->post('to')!='' && $this->input->post('type') !='' && $this->input->post('status') !=''){
	   //        $from=date('Y-m-d',strtotime($this->input->post('from')));  
    // 	    $to=date('Y-m-d',strtotime($this->input->post('to')));
	   //      $type=$this->input->post('loantype');
	   //       $status=$this->input->post('status'); 
	   //     }else if($this->input->post('status')){
	   //      $status=$this->input->post('status'); 
	   //      $from='';  
    // 	     $to='';
	   //     $type='';
	   //     }else{
	   //         $from='';  
    // 	       $to='';
    // 	       $status=''; 
	   //        $type=$this->input->post('loantype');  
	   //     }
	   
	   $data['from']=$this->input->post('from');
	   $data['to']=$this->input->post('to');
	    $data['datalist']=$this->Customer->getbwfiletrdata($from,$to,$type,$status,$agent_name); 
	        $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
    		$this->load->view('admin/customerList',$data);
            $this->load->view('admin/layout/footer');
	    
	    }else{
	        //print_r($this->input->post('type'));die;
    	    $this->load->model('Customer');
    	    $data['datalist']=$this->Customer->getListloan();
    	   $data['from']='';
	        $data['to']='';
    	  // print_r($data['datalist']);die;
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
    		$this->load->view('admin/customerList',$data);
            $this->load->view('admin/layout/footer');
    	   
    	    }
	     }else{
	          redirect(base_url().'Admin'); 
	    }
	}
	
	public function customerloansubmit()
	{
	     $this->load->model('Customer');
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('loan_type','Loan Type','trim|required');
	    $this->form_validation->set_rules('agent_name','Agent Name','trim|required');
	    $this->form_validation->set_rules('gander','Gender','trim|required');
	    $this->form_validation->set_rules('status_used','Status of used','trim|required');
	    $this->form_validation->set_rules('marital_status','marital_status Type','trim|required');
	    $this->form_validation->set_rules('car1_type','Car Type','trim|required');
	    $this->form_validation->set_rules('car2_type','Car Type 2','trim|required');
	    $this->form_validation->set_rules('signature','signature','trim|required');

	    
	    if($this->form_validation->run() == TRUE)
			{
	    //customer info 
	    $customerinfo=array(
	         'loan_type'=>$this->input->post('loan_type'),
	         'application_no'=>$this->input->post('application_no'),
	         'agent_name' =>$this->input->post('agent_name'),
	         'f_company_name'=> $this->input->post('f_company_name'),
	         'title'=>$this->input->post('title'),
	         'first_name'=>$this->input->post('first_name'),
	         'mid_name'=>$this->input->post('mid_name'),
	         'surname'=>$this->input->post('surname'),
	         'gander'=>$this->input->post('gander'),
	         'street_address'=>$this->input->post('street_address'),
	         'subrub'=>$this->input->post('subrub'),
	         'state'=>$this->input->post('state'),
	         'postcode'=>$this->input->post('postcode'),
	         'housing_status'=>$this->input->post('housing_status'),
	         'mobile'=>$this->input->post('mobile'),
	         'email'=>$this->input->post('email'),
	         'dl_number'=>$this->input->post('dl_number'),
	         'dl_exp_date'=>$this->input->post('dl_exp_date'),
	         'status_used'=>$this->input->post('status_used'),
	         'passport_number'=>$this->input->post('passport_number'),
	         'pp_exp_date'=>$this->input->post('pp_exp_date'),
	         'country'=>$this->input->post('country'),
	         'dob'=>$this->input->post('dob'),
	         'employment_type'=>$this->input->post('employment_type'),
	         'salary_income'=>$this->input->post('salary_income'),
	         'rental_income'=>$this->input->post('rental_income'),
	         'au_residency_status'=>$this->input->post('au_residency_status'),
	         'marital_status'=>$this->input->post('marital_status'),
	         'kid_one_age'=>$this->input->post('kid_one_age'),
	         'kid_second_age'=>$this->input->post('kid_second_age'),
	         'bsb_number'=>$this->input->post('bsb_number'),
	         'account_number'=>$this->input->post('account_number'),
	         'reference_name'=>$this->input->post('reference_name'),
	         'reference_number'=>$this->input->post('reference_number'),
	         'create_at' =>date('Y-m-d H:i:s')
	       
	        
	        );
	        $insert_id=$this->Customer->insertCustomer($customerinfo);
	        
	         $images='';
	         if($_FILES['upload']['name'] != NULL ){
 
          $data = array();
    
          // Count total files
          $countfiles = count($_FILES['upload']['name']);
         
          // Looping all files
          for($i=0;$i<$countfiles;$i++){
     
            if(!empty($_FILES['upload']['name'][$i])){
     
     
     
              // Define new $_FILES array - $_FILES['file']
              $_FILES['file']['name'] = $_FILES['upload']['name'][$i];
              $_FILES['file']['type'] = $_FILES['upload']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['upload']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['upload']['error'][$i];
              $_FILES['file']['size'] = $_FILES['upload']['size'][$i];
    
              // Set preference
              $config['upload_path'] = 'assets/uploads/'; 
              $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
              //$config['max_size'] = '5000'; // max_size in kb
              $config['file_name'] = $_FILES['upload']['name'][$i];
     
              //Load upload library
              $this->load->library('upload',$config); 
              $this->upload->initialize($config);
     
              // File upload
              if(!$this->upload->do_upload('file')){
                // Get data about the file
                
             
                 }else{
                   $uploadData = $this->upload->data();
                 $filename = $uploadData['file_name'];
    
                // Initialize array
                $data['filenames'][] = $filename;  
                $documentloan=array(
	            'customer_id'=>$insert_id, 
	            'documents' => $filename
	            );
	             $this->db->insert('loan_document',$documentloan);
                 }
                    }
               
                  }
                   
	            
                  
              }
             
	        //Assets section
	        
	        
	        
	        
	        $assets=array(
	            'customer_id'=>$insert_id,
	            'bank_balance_provoder'=>$this->input->post('bank_balance_provoder'),
	            'bank_balance_amount'=>$this->input->post('bank_balance_amount'),
	            'fully_paid_up_property_amount'=>$this->input->post('fully_paid_up_property_amount'),
	            'superannuation_provider'=>$this->input->post('superannuation_provider'),
	            'superannuation_amount'=>$this->input->post('superannuation_amount'),
	            'shares_provider'=>$this->input->post('shares_provider'),
	            'shares_amount'=>$this->input->post('shares_amount'),
	            'car_make1'=>$this->input->post('car_make1'),
	            'car_year1'=>$this->input->post('car_year1'),
	            'approxvalue_car1'=>$this->input->post('approxvalue__car1'),
	            'car1_type'=>$this->input->post('car1_type'),
	             'car_variant_car1'=>$this->input->post('car_variant_car1'),
	             'car_make2'=>$this->input->post('car_make2'),
	            'car_year2'=>$this->input->post('car_year2'),
	            'approxvalue_car2'=>$this->input->post('approxvalue_car2'),
	            'car2_type'=>$this->input->post('car2_type'),
	             'car_variant_car2'=>$this->input->post('car_variant_car2'),
	            'provider_boat_caravan'=>$this->input->post('provider_boat_caravan'),
	            'amount_boat_caravan'=>$this->input->post('amount_boat_caravan'),
	            'provider_furniture'=>$this->input->post('provider_furniture'),
	            'amount_furniture'=>$this->input->post('amount_furniture'),
	            'provider_anyother'=>$this->input->post('provider_anyother'),
	            'amount_anyother'=>$this->input->post('amount_anyother'),
	            'documents' => ''
	            );
	            
	            $asset=$this->Customer->insertAssets($assets);
	            
	            //LIABILITIES 
	            
	            $liabilities = array(
	            'customer_id'=>$insert_id,
	            'property_address'=>implode(', ',$this->input->post('property_address')),
	            'market_value'=>implode(', ',$this->input->post('market_value')),
	            'amt_outstanding'=>implode(', ',$this->input->post('amt_outstanding')),
	            'lenders_name'=>implode(', ',$this->input->post('lenders_name')),
	            'monthly_repayment'=>implode(', ',$this->input->post('monthly_repayment')),
	            'lb_loan_type'=>implode(', ',$this->input->post('lb_loan_type')),
	            
	            'ot_loan_type'=>implode(', ',$this->input->post('ot_loan_type')),
	            'ot_amt_borrowed'=>implode(', ',$this->input->post('ot_amt_borrowed')),
	            'ot_amt_outstanding'=>implode(', ',$this->input->post('ot_amt_outstanding')),
	            'ot_lenders_name'=>implode(', ',$this->input->post('ot_lenders_name')),
	            'ot_monthly_repayment'=>implode(', ',$this->input->post('ot_monthly_repayment')),
	            
	             'card_lender'=>implode(', ',$this->input->post('card_lender')),
	            'card_limit'=>implode(', ',$this->input->post('card_limit')),
	            'card_amt_outstanding'=>implode(', ',$this->input->post('card_amt_outstanding')),
	            
	            'other_address'=>implode(', ',$this->input->post('other_address')),
	            'other_housingstatus'=>implode(', ',$this->input->post('other_housingstatus')),
	            'other_date_moved_in'=>implode(', ',$this->input->post('other_date_moved_in')),
	            'other_date_moved_out'=>implode(', ',$this->input->post('other_date_moved_out')),
	            
	            'employer_name'=>implode(', ',$this->input->post('employer_name')),
	            'employer_phone'=>implode(', ',$this->input->post('employer_phone')),
	            'occupation'=>implode(', ',$this->input->post('occupation')),
	            'job_start_date'=>implode(', ',$this->input->post('job_start_date')),
	            'job_end_date'=>implode(', ',$this->input->post('job_end_date')),
	            
	             'rental_expenses'=>$this->input->post('rental_expenses'),
	            'insurance'=>$this->input->post('insurance'),
	            'general_living_expenses'=>$this->input->post('general_living_expenses'),
	            
	            );
	            
	               $liablity=$this->Customer->insertLiabilities($liabilities);
	               
	            //LOAN DETAILS 
	            
	            
	           $loandetail=array(
	            'customer_id'=>$insert_id,
	            'r_loan_amount'=>$this->input->post('r_loan_amount'),
	            'found_need_within'=>$this->input->post('found_need_within'),
	            'found_propused'=>$this->input->post('found_propused'),
	            'terms_condition'=>$this->input->post('terms_condition'),
	            'privacy_statement'=>$this->input->post('privacy_statement'),
	            'signofcustomer'=>$this->input->post('signofcustomer'),
	            'sign_date'=>$this->input->post('sign_date'),
	            'provide_app_omission'=>$this->input->post('provide_app_omission'),
	            'purpose_of_loan'=>$this->input->post('purpose_of_loan'),
	            'loan_tenure_required'=>$this->input->post('loan_tenure_required'),
	            'agree_toload'=>$this->input->post('agree_toload'),
	            'excellent_credit'=>$this->input->post('excellent_credit'),
	             'lifeinsurance_amount_insured'=>$this->input->post('lifeinsurance_amount_insured'),
	            'lifeinsurance_provide_name'=>$this->input->post('lifeinsurance_provide_name'),
	            'debt_protection_amount'=>$this->input->post('debt_protection_amount'),
	            'debt_protection_provider_name'=>$this->input->post('debt_protection_provider_name'),
	            'income_protection_amount'=>$this->input->post('income_protection_amount'),
	            'income_protection_provider_name'=>$this->input->post('income_protection_provider_name'),
	            'permanent_disability_protection_amount'=>$this->input->post('permanent_disability_protection_amount'),
	            'permanent_disability_protection_provider_name'=>$this->input->post('permanent_disability_protection_provider_name'),
	            'cardit_legal_recorde'=>$this->input->post('cardit_legal_recorde'),
	            'commitments'=>$this->input->post('commitments'),
	            'anticipate_income'=>$this->input->post('anticipate_income'),
	            'cardit_legal_recorde1'=>$this->input->post('cardit_legal_recorde1'),
	            'commitments1'=>$this->input->post('commitments1'),
	            'anticipate_income1'=>$this->input->post('anticipate_income1'),
	            'additional_notes' =>$this->input->post('additional_notes'),
	            'signature'=>$this->input->post('signature'),
	            'signature_date'=>$this->input->post('signature_date'),
	            
	            );
	             $loand=$this->Customer->insertLoandetail($loandetail);
	            
	       redirect(base_url().'Admin/customerList');
			}
			else
			{
			   redirect(base_url().'Admin/loanform'); 
			}
	        
	}
	public function edit($id){
	    if($this->session->userdata('login')){
	    $data['editdata']=$this->Customer->edit_lone_customer($id);
	    $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/editloanform',$data);
        $this->load->view('admin/layout/footer');
	    }else{
	          redirect(base_url().'Admin'); 
	    }
	}
	public function customerloanUpdate($id){
	        $this->load->model('Customer');
	    $this->load->model('Customer');
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('loan_type','Loan Type','trim|required');
	    $this->form_validation->set_rules('agent_name','Agent Name','trim|required');
	    $this->form_validation->set_rules('gander','Gender','trim|required');
	    $this->form_validation->set_rules('status_used','Status of used','trim|required');
	    $this->form_validation->set_rules('marital_status','marital_status Type','trim|required');
	    $this->form_validation->set_rules('car1_type','Car Type','trim|required');
	    $this->form_validation->set_rules('car2_type','Car Type 2','trim|required');
	    $this->form_validation->set_rules('signature','signature','trim|required');

	    
	    if($this->form_validation->run() == TRUE)
			{
	        
	    //customer info 
	    $customerinfo=array(
	         'loan_type'=>$this->input->post('loan_type'),
	         'application_no'=>$this->input->post('application_no'),
	         'agent_name' =>$this->input->post('agent_name'),
	         'f_company_name'=> $this->input->post('f_company_name'),
	         'title'=>$this->input->post('title'),
	         'first_name'=>$this->input->post('first_name'),
	         'mid_name'=>$this->input->post('mid_name'),
	         'surname'=>$this->input->post('surname'),
	         'gander'=>$this->input->post('gander'),
	         'street_address'=>$this->input->post('street_address'),
	         'subrub'=>$this->input->post('subrub'),
	         'state'=>$this->input->post('state'),
	         'postcode'=>$this->input->post('postcode'),
	         'housing_status'=>$this->input->post('housing_status'),
	         'mobile'=>$this->input->post('mobile'),
	         'email'=>$this->input->post('email'),
	         'dl_number'=>$this->input->post('dl_number'),
	         'dl_exp_date'=>$this->input->post('dl_exp_date'),
	         'status_used'=>$this->input->post('status_used'),
	         'passport_number'=>$this->input->post('passport_number'),
	         'pp_exp_date'=>$this->input->post('pp_exp_date'),
	         'country'=>$this->input->post('country'),
	         'dob'=>$this->input->post('dob'),
	         'employment_type'=>$this->input->post('employment_type'),
	         'salary_income'=>$this->input->post('salary_income'),
	         'rental_income'=>$this->input->post('rental_income'),
	         'au_residency_status'=>$this->input->post('au_residency_status'),
	         'marital_status'=>$this->input->post('marital_status'),
	         'kid_one_age'=>$this->input->post('kid_one_age'),
	         'kid_second_age'=>$this->input->post('kid_second_age'),
	         'bsb_number'=>$this->input->post('bsb_number'),
	         'account_number'=>$this->input->post('account_number'),
	         'reference_name'=>$this->input->post('reference_name'),
	         'reference_number'=>$this->input->post('reference_number'),
	         'create_at' =>date('Y-m-d H:i:s')
	       
	        
	        );
	        $insert_id=$this->Customer->updateCustomer($customerinfo,$id);
	     // print_r($_FILES);die;
	       $images='';
	         if($_FILES['upload']['name'] != NULL){
 
          $data = array();
  
          // Count total files
          $countfiles = count($_FILES['upload']['name']);
         
          // Looping all files
          for($i=0;$i<$countfiles;$i++){
     
            if(!empty($_FILES['upload']['name'][$i])){
     
     
     
              // Define new $_FILES array - $_FILES['file']
              $_FILES['file']['name'] = $_FILES['upload']['name'][$i];
              $_FILES['file']['type'] = $_FILES['upload']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['upload']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['upload']['error'][$i];
              $_FILES['file']['size'] = $_FILES['upload']['size'][$i];
    
              // Set preference
              $config['upload_path'] = 'assets/uploads/'; 
              $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
              //$config['max_size'] = '5000'; // max_size in kb
              $config['file_name'] = $_FILES['upload']['name'][$i];
     
              //Load upload library
              $this->load->library('upload',$config); 
              $this->upload->initialize($config);
     
              // File upload
              if(!$this->upload->do_upload('file')){
                // Get data about the file
                
             
                 }else{
                   $uploadData = $this->upload->data();
                 $filename = $uploadData['file_name'];
    
                // Initialize array
               
                $data['filenames'][] = $filename;  
                $documentloan=array(
	            'customer_id'=>$id, 
	            'documents' => $filename
	            );
	             $this->db->insert('loan_document',$documentloan);
                 
                 }
                    }
               
                  }
                   
              }
	        $assets=array(
	           
	            'bank_balance_provoder'=>$this->input->post('bank_balance_provoder'),
	            'bank_balance_amount'=>$this->input->post('bank_balance_amount'),
	            'fully_paid_up_property_amount'=>$this->input->post('fully_paid_up_property_amount'),
	            'superannuation_provider'=>$this->input->post('superannuation_provider'),
	            'superannuation_amount'=>$this->input->post('superannuation_amount'),
	            'shares_provider'=>$this->input->post('shares_provider'),
	            'shares_amount'=>$this->input->post('shares_amount'),
	            'car_make1'=>$this->input->post('car_make1'),
	            'car_year1'=>$this->input->post('car_year1'),
	            'approxvalue_car1'=>$this->input->post('approxvalue__car1'),
	            'car1_type'=>$this->input->post('car1_type'),
	            'car_variant_car1'=>$this->input->post('car_variant_car1'),
	             'car_make2'=>$this->input->post('car_make2'),
	            'car_year2'=>$this->input->post('car_year2'),
	            'approxvalue_car2'=>$this->input->post('approxvalue_car2'),
	            'car2_type'=>$this->input->post('car2_type'),
	             'car_variant_car2'=>$this->input->post('car_variant_car2'),
	            'provider_boat_caravan'=>$this->input->post('provider_boat_caravan'),
	            'amount_boat_caravan'=>$this->input->post('amount_boat_caravan'),
	            'provider_furniture'=>$this->input->post('provider_furniture'),
	            'amount_furniture'=>$this->input->post('amount_furniture'),
	            'provider_anyother'=>$this->input->post('provider_anyother'),
	            'amount_anyother'=>$this->input->post('amount_anyother'),
	            'documents' =>''
	            );
	            
	            
	            
	            $asset=$this->Customer->updaateAssets($assets,$id);
	            
	            //LIABILITIES 
	            
	            $liabilities = array(
	           
	            'property_address'=>implode(',',$this->input->post('property_address')),
	            'market_value'=>implode(',',$this->input->post('market_value')),
	            'amt_outstanding'=>implode(',',$this->input->post('amt_outstanding')),
	            'lenders_name'=>implode(',',$this->input->post('lenders_name')),
	            'monthly_repayment'=>implode(',',$this->input->post('monthly_repayment')),
	            'lb_loan_type'=>implode(',',$this->input->post('lb_loan_type')),
	            
	            'ot_loan_type'=>implode(',',$this->input->post('ot_loan_type')),
	            'ot_amt_borrowed'=>implode(',',$this->input->post('ot_amt_borrowed')),
	            'ot_amt_outstanding'=>implode(',',$this->input->post('ot_amt_outstanding')),
	            'ot_lenders_name'=>implode(', ',$this->input->post('ot_lenders_name')),
	            'ot_monthly_repayment'=>implode(',',$this->input->post('ot_monthly_repayment')),
	            
	             'card_lender'=>implode(',',$this->input->post('card_lender')),
	            'card_limit'=>implode(', ',$this->input->post('card_limit')),
	            'card_amt_outstanding'=>implode(',',$this->input->post('card_amt_outstanding')),
	            
	            'other_address'=>implode(',',$this->input->post('other_address')),
	            'other_housingstatus'=>implode(',',$this->input->post('other_housingstatus')),
	            'other_date_moved_in'=>implode(',',$this->input->post('other_date_moved_in')),
	            'other_date_moved_out'=>implode(',',$this->input->post('other_date_moved_out')),
	            
	            'employer_name'=>implode(',',$this->input->post('employer_name')),
	            'employer_phone'=>implode(',',$this->input->post('employer_phone')),
	            'occupation'=>implode(',',$this->input->post('occupation')),
	            'job_start_date'=>implode(',',$this->input->post('job_start_date')),
	            'job_end_date'=>implode(',',$this->input->post('job_end_date')),
	            
	             'rental_expenses'=>$this->input->post('rental_expenses'),
	            'insurance'=>$this->input->post('insurance'),
	            'general_living_expenses'=>$this->input->post('general_living_expenses'),
	            
	            );
	            
	               $liablity=$this->Customer->updateLiabilities($liabilities,$id);
	               
	            //LOAN DETAILS 
	            
	            
	           $loandetail=array(
	          
	            'r_loan_amount'=>$this->input->post('r_loan_amount'),
	            'found_need_within'=>$this->input->post('found_need_within'),
	            'found_propused'=>$this->input->post('found_propused'),
	            'terms_condition'=>$this->input->post('terms_condition'),
	            'privacy_statement'=>$this->input->post('privacy_statement'),
	            'signofcustomer'=>$this->input->post('signofcustomer'),
	            'sign_date'=>$this->input->post('sign_date'),
	            'provide_app_omission'=>$this->input->post('provide_app_omission'),
	            'purpose_of_loan'=>$this->input->post('purpose_of_loan'),
	            'loan_tenure_required'=>$this->input->post('loan_tenure_required'),
	            'agree_toload'=>$this->input->post('agree_toload'),
	            'excellent_credit'=>$this->input->post('excellent_credit'),
	             'lifeinsurance_amount_insured'=>$this->input->post('lifeinsurance_amount_insured'),
	            'lifeinsurance_provide_name'=>$this->input->post('lifeinsurance_provide_name'),
	            'debt_protection_amount'=>$this->input->post('debt_protection_amount'),
	            'debt_protection_provider_name'=>$this->input->post('debt_protection_provider_name'),
	            'income_protection_amount'=>$this->input->post('income_protection_amount'),
	            'income_protection_provider_name'=>$this->input->post('income_protection_provider_name'),
	            'permanent_disability_protection_amount'=>$this->input->post('permanent_disability_protection_amount'),
	            'permanent_disability_protection_provider_name'=>$this->input->post('permanent_disability_protection_provider_name'),
	            'cardit_legal_recorde'=>$this->input->post('cardit_legal_recorde'),
	            'commitments'=>$this->input->post('commitments'),
	            'anticipate_income'=>$this->input->post('anticipate_income'),
	            'cardit_legal_recorde1'=>$this->input->post('cardit_legal_recorde1'),
	            'commitments1'=>$this->input->post('commitments1'),
	            'anticipate_income1'=>$this->input->post('anticipate_income1'),
	            'additional_notes' =>$this->input->post('additional_notes'),
	            'signature'=>$this->input->post('signature'),
	            'signature_date'=>$this->input->post('signature_date'),
	            
	            );
	             $loand=$this->Customer->updateLoandetail($loandetail,$id);
	            
	       redirect(base_url().'Admin/customerList'); 
			}
			else
			{
			   redirect(base_url().'Admin/viewdeatails/'.$id); 
			}
	} 
	public function delete($id){
	   $data= $this->Customer->deleteFormLone($id);
	   if($data){
	       redirect(base_url().'Admin/customerList');  
	   }
	}
	
	public function viewdeatails($id){
	    if($this->session->userdata('login')){
	    $data['editdata']=$this->Customer->edit_lone_customer($id);
	    $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/viewloandetail',$data);
        $this->load->view('admin/layout/footer');
	    }else{
	          redirect(base_url().'Admin'); 
	    }
        
	}
	public function updateStatus(){
	    $id=$this->input->post('id');
	    $status =$this->input->post('status');
	   $reyrn= $this->Customer->updateStatus($id,$status);
	   echo $reyrn;
	    
	}
	public function filtertable(){
	    $from=date('Y-m=d',strtotime($this->input->post('from')));  
	    $to=date('Y-m=d',strtotime($this->input->post('to')));
	    $data=$this->Customer->getbwfiletrdata($from,$to);
	    //print_r($data);die;
	    $output='';
	    $i=1;
	    if(!empty($data)){
	    foreach($data as $row){
	        $output.='<tr>
						<td>'.$i.'</td>
						<td>'.$row->application_no.'</td>
						<td>'.$row->loan_type.'</td>
						<td>'.$row->fullname .'</td>
						<td>'.$row->mobile .'</td>
						<td>'.date('d-m-Y',strtotime($row->create_at)).'</td>
						<td id="statustd_'.$row->id.'">';
					 if($row->status){ 
					 $output.='<span class="badge rounded-pill alert-success" style="font-size: 15px">Approved</span>';
					 }else{ 
					 $output.='<span class="badge rounded-pill alert-warning" onclick="updatestatus('.$row->id.')" style="cursor:pointer; font-size: 15px">Not Approved</span>';
					 } 
					 $output.='</td>
						<td> <div class="table-actions d-flex align-items-center gap-3 fs-6">
                         <a href="'.base_url().'Admin/viewdeatails/'.$row->id.'" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                         <a href="'.base_url().'Admin/edit/'.$row->id.'" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                         <a href="'.base_url().'Admin/delete/'.$row->id.'" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                         </div></td>
						</tr>';
						$i++;
	    }
	    echo $output;
	    }else{
	        echo '<p>Not data match</p>';
	    }
	}
	
	
	 private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }
    public function add_agent(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/add_agent');
        $this->load->view('admin/layout/footer');
    }
     public function agentList(){
         $data['agentlist']=$this->Customer->get_agent();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/agent_list',$data);
        $this->load->view('admin/layout/footer');
    }
	public function saveAgent(){
	    $agentArray=array('name'=>$this->input->post('agent_name'),
	                      'email'=>$this->input->post('agent_email'),
	                      'password'=>md5($this->input->post('a_password')),
	                      'type' =>'Agent');
	                   
	                   $data=$this->Customer->addAgent($agentArray);
	                   if($data){
	                       $this->session->set_flashdata('success','Agent Create successfully');
	                       redirect(base_url().'Admin/agentList');
	                   }else{
	                       $this->session->set_flashdata('error','Not created');
	                        redirect(base_url().'Admin/add_agent'); 
	                   }
	}
		public function deleteAgent($id){
    	   $data= $this->Customer->delete_agent($id);
    	   if($data){
    	       redirect(base_url().'Admin/agentList');  
    	   }
	}
	 public function editAgent($id){
         $data['agent']=$this->Customer->get_agent_by_id($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/edit_agent',$data);
        $this->load->view('admin/layout/footer');
    }
    
    	public function updateAgent($id){
    	    if($this->input->post('new_pass')){
    	       $password= md5($this->input->post('new_pass'));
    	    }else{
    	       $password= md5($this->input->post('old_pass')); 
    	    }
	    $agentArray=array('name'=>$this->input->post('agent_name'),
	                      'email'=>$this->input->post('agent_email'),
	                      'password'=>$password
	                      );
	                   
	                   $data=$this->Customer->updateAgent($agentArray,$id);
	                   if($data){
	                       $this->session->set_flashdata('success','Agent Update successfully');
	                       redirect(base_url().'Admin/agentList');
	                   }else{
	                       $this->session->set_flashdata('error','Not Update');
	                        redirect(base_url().'Admin/editAgent/'.$id); 
	                   }
	}
	
	public function deleteImage(){
	    $imgid=$this->input->post('id');
	  
	    $this->db->where('doc_id',$imgid);
	    $this->db->delete('loan_document');
	     echo 'ok';
	}
	
}


