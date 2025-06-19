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
    
    
        public function leadstatus($id,$status){
       $this->db->where('id',$id);
      $result= $this->db->update('leads',['status'=>$status]); 
      if($result)
      {
        // $this->db->where('id',$id);
        // $data = $this->db->get('leads');
        // return $data->result();
        
        $this->db->select('leads.*,admin.id as agent_name,admin.*'); // Select columns from both tables
        $this->db->from('leads');
        $this->db->join('admin', 'leads.agent_id = admin.id', 'inner'); // Inner join based on admin_id and id
        $this->db->where('leads.id', $id); // Additional condition if needed
        $data = $this->db->get()->result(); // Get the result
        return $data;
      }

    }
    
    
    
    
 public function getcountall(){
        $result['agent'] = $this->db->where('type', 'Agent')->where('manager_id',$this->session->userdata('id'))->count_all_results('admin');
        $result['allagent'] = $this->db->where('type', 'Agent')->count_all_results('admin');
        $result['manager'] = $this->db->where('type', 'Manager')->count_all_results('admin');
        $result['agent_lead'] = $this->db->where('agent_id', $this->session->userdata('id'))->count_all_results('leads');
        $result['manager_lead'] = $this->db->where('manager_id', $this->session->userdata('id'))->count_all_results('leads');
        $result['total_leads'] = $this->db->count_all_results('leads');
     $result['loan'] = $this->db->select("COUNT(*)as tot, 
      COUNT(case when customerLoan.status='3' then 1 end) as approved,
      COUNT(case when customerLoan.status='1' then 1 end) as notapproved 
      from customerLoan")->get()->result();
      return $result;
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
    
    //  Not Use full
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
    // not use full 
 
 public function addUser($data){
         $this->db->insert('admin',$data);
        return $this->db->insert_id();
    }
 
 
 
  public function get_user(){

        if($_SESSION['type']=='Manager')
        {
        $this->db->where('type =','Agent');
        $this->db->where('manager_id =',$this->session->userdata('id'));
        return  $this->db->get('admin')->result();
        }

        if($_SESSION['type']=='SuperAdmin')
        {
        $this->db->where('type !=','SuperAdmin');
        return  $this->db->get('admin')->result();
        }
     
    }
    public function delete_user($id){
        $this->db->where('id',$id);
      return  $this->db->delete('admin');
    }
    public function get_user_by_id($id){
         $this->db->where('id',$id);
      return  $this->db->get('admin')->row();
    }
    public function updateUser($data,$id){
          $this->db->where('id',$id);
          return $this->db->update('admin',$data);
    }

 
 
 
 
 
 
 
 
    
//  For lead generation code 
    function lead_list(){
        if($_SESSION['type']=='Manager')
        {
            $this->db->select('leads.*');
            $this->db->select('a.name as agent_name');
            $this->db->from('leads');
            $this->db->join('admin as a','a.id = leads.agent_id','left');
            $this->db->where('leads.manager_id',$this->session->userdata('id'));
             $this->db->order_by("leads.id", "desc");
             return  $query = $this->db->get()->result();
            
        }

        if($_SESSION['type']=='SuperAdmin')
        {
            $this->db->select('leads.*');
            $this->db->select('a.name as agent_name');
            $this->db->from('leads');
            $this->db->join('admin as a','a.id = leads.agent_id','left');
             $this->db->order_by("leads.id", "desc");
             return  $query = $this->db->get()->result();

        }  

        if($_SESSION['type']=='Agent')
        {
            $this->db->select('leads.*');
            $this->db->select('a.name as agent_name');
            $this->db->from('leads');
            $this->db->join('admin as a','a.id = leads.agent_id','left');
              $this->db->where('leads.agent_id',$this->session->userdata('id'));
             $this->db->order_by("leads.id", "desc");
             return  $query = $this->db->get()->result();

        }  
    }


public function manager_list() {
    if (isset($_SESSION['type']) && $_SESSION['type'] == 'SuperAdmin') {
        $this->db->select('admin.*');
        $this->db->from('admin');
        $this->db->where('type', 'Manager'); // Corrected: '=' is already implied in CI's `where()`
        $this->db->order_by('admin.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    return []; // Always return a default value to avoid null issues
}

public function ViewManagerTeam($id) {
    if (isset($_SESSION['type']) && ($_SESSION['type'] == 'SuperAdmin' || $_SESSION['type'] == 'Manager')) {
        $this->db->select('admin.*, COUNT(leads.id) as lead_count');
        $this->db->from('admin');
        $this->db->join('leads', 'leads.agent_id = admin.id AND leads.manager_id = ' . $this->db->escape($id), 'left');
        $this->db->where('admin.type', 'Agent');
        $this->db->where('admin.manager_id', $id);
        $this->db->group_by('admin.id');
        $this->db->order_by('admin.id', 'desc');

        $query = $this->db->get();
        return $query->result();
    }

    return [];
}




 


    function leadStore($data){
        $this->db->insert('leads',$data);
        return $this->db->insert_id();
    }

    public function updatelead($lead,$id){
        $this->db->where('id',$id);
        return $this->db->update('leads',$lead);
  }

  public function delete_lead($id){
    $this->db->where('id',$id);
  return  $this->db->delete('leads');
}
// For Noice List
    public function get_notice(){
        $this->db->select('*');
        $this->db->from('notice');
        $this->db->order_by('id','DESC');
        return $this->db->get()->result();
    }
// For Notice Store
   function noticeStore($data){
        $this->db->insert('notice',$data);
        return $this->db->insert_id();
    }
  //  For Edit page view of notice
    public function get_notice_by_id($id){
         $this->db->where('id',$id);
      return  $this->db->get('notice')->row();
    }
// For notice Edit
  public function updatenotice($lead,$id){
        $this->db->where('id',$id);
        return $this->db->update('notice',$lead);
  }
//   For notice Delete
  public function delete_notice($id){
    $this->db->where('id',$id);
  return  $this->db->delete('notice');
}

public function get_lead_by_id($id){
    $this->db->where('id',$id);
 return  $this->db->get('leads')->row();
}
//     for lead generation code 
   
   public function getManager(){
         $this->db->where('type','Manager');
         return  $this->db->get('admin')->result();
    } 
    
    
      public function get_clientdetails($id){

        if($_SESSION['type']=='Manager' || $_SESSION['type']=='SuperAdmin')
        {
        $this->db->where('id =',$id);
        return  $this->db->get('customerLoan')->result();
        }
     
    }
    

// Count total leads
public function get_total_leads()
{
    return (int) $this->db->count_all('leads');
}

// Fetch paginated leads with agent name
public function get_paginated_leads($limit, $start)
{
    $limit = (int) $limit;
    $start = (int) $start;

    return $this->db
        ->select('leads.*, admin.name as agent_name')
        ->from('leads')
        ->join('admin', 'admin.id = leads.agent_id', 'left')
        ->order_by('leads.id', 'DESC')
        ->limit($limit, $start)
        ->get()
        ->result();
}




  
    
    
}    