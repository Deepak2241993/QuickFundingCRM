<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model {

            public function __construct()
        {
            parent::__construct();
            $this->load->database();  
        } 
        
        public function checkLogin($email,$password,$type){
            $this->db->where(array('email'=>$email,'password'=>md5($password),'type'=> $type));
           return $this->db->get('admin')->row();
        }
    public function insertCustomer($data)
    {
        $this->db->insert('customerLoan',$data);
        return $this->db->insert_id();
    }
    public function insertAssets($data)
    {
        $this->db->insert('loan_assets',$data);
        return $this->db->insert_id();
    }
    public function insertLiabilities($data)
    {
        $this->db->insert('loan_liabilities',$data);
        return $this->db->insert_id();
    }
    public function insertLoandetail($data)
    {
        $this->db->insert('loan_detail',$data);
        return $this->db->insert_id();
    }
    public function getListloan(){
        
        $this->db->select('id,status,application_no,CONCAT(title," ",first_name," " ,mid_name," ", surname) as fullname,agent_name,loan_type,mobile,email,street_address,create_at');
        $this->db->from('customerLoan');
         if($this->session->userdata('type') =="Agent"){
          $this->db->where('agent_name', $this->session->userdata('id'));
       }
        $this->db->order_by('id','DESC');
       return $this->db->get()->result();
    }
    public function edit_lone_customer($id){
       $this->db->select('*');
      $this->db->from('customerLoan');
      $this->db->join('loan_assets','loan_assets.customer_id=customerLoan.id','left');
      $this->db->join('loan_liabilities','loan_liabilities.customer_id=customerLoan.id','left');
      $this->db->join('loan_detail','loan_detail.customer_id=customerLoan.id','left');
      $this->db->join('loan_document','loan_document.customer_id=customerLoan.id','left');
      $this->db->where('id',$id);
     return $this->db->get()->row();
      
    }
    
    public function updateCustomer($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('customerLoan',$data);
        
    }
    public function updaateAssets($data,$id)
    {
        $this->db->where('customer_id',$id);
        $this->db->update('loan_assets',$data);
        
    }
    public function updateLiabilities($data,$id)
    {
          $this->db->where('customer_id',$id);
        $this->db->update('loan_liabilities',$data);
     
    }
    public function updateLoandetail($data,$id)
    {  $this->db->where('customer_id',$id);
        $this->db->update('loan_detail',$data);
       
    }
    public function deleteFormLone($id){
        $this->db->where('id',$id);
        $this->db->delete('customerLoan');
        
       $this->db->where('customer_id',$id); 
        $this->db->delete('loan_detail');
        
        $this->db->where('customer_id',$id);
        $this->db->delete('loan_assets');
        
         $this->db->where('customer_id',$id);
         return $this->db->delete('loan_liabilities');
        
    }
    public function updateStatus($id,$status){
       $this->db->where('id',$id);
       return $this->db->update('customerLoan',['status'=>$status]); 
    }
    public function getcountall(){
     return  $this->db->select("COUNT(*)as tot, 
      COUNT(case when customerLoan.status='3' then 1 end) as approved,
      COUNT(case when customerLoan.status='1' then 1 end) as notapproved 
      from customerLoan")->get()->result();
    }
    public function getbwfiletrdata($form,$to,$type,$status,$agent){
      //  print_r($type);die;
         $this->db->select('id,status,application_no,CONCAT(title," ",first_name," " ,mid_name," ", surname) as fullname,loan_type,agent_name,mobile,email,street_address,create_at');
        $this->db->from('customerLoan');
        if($to !='' && $form !=''){
            
        $this->db->where('create_at >=', $form);
        $this->db->where('create_at <=', $to);
        }if($type!=''){
           $this->db->where('loan_type', $type);
            
        }if($status !=''){
             $this->db->where('status', $status);
        }
        if($agent !=''){
             $this->db->where('agent_name', $agent);
        }
        if($this->session->userdata('type') =="Agent"){
          $this->db->where('agent_name', $this->session->userdata('id'));
       }
        return $this->db->get()->result();
    }
    public function addAgent($data){
         $this->db->insert('admin',$data);
        return $this->db->insert_id();
    }
    public function get_agent(){
        $this->db->where('type','Agent');
      return  $this->db->get('admin')->result();
    }
    public function delete_agent($id){
        $this->db->where('id',$id);
      return  $this->db->delete('admin');
    }
    public function get_agent_by_id($id){
         $this->db->where('id',$id);
      return  $this->db->get('admin')->row();
    }
    public function updateAgent($data,$id){
          $this->db->where('id',$id);
          return $this->db->update('admin',$data);
    }
}    