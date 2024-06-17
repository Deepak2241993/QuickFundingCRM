<?php



class Mymail

{

    

    function __construct()

    {

        $this->CI =& get_instance();

        $this->CI->load->library('email');



        $config = array(

            'protocol' => 'smtp',
            'smtp_host' => 'quickfundingcrm.com',
            'smtp_port' => '587',
            'smtp_user' => 'amin@quickfundingcrm.com',
            'smtp_pass' => 'admin@098',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        
       



        $this->CI->email->initialize($config);

        $this->CI->email->set_crlf("\r\n");

        $this->CI->email->from('amin@quickfundingcrm.com', 'Quickfundingcrm'); // Replace with a valid email address and name

    }





    public function send_mail($subject, $send_email, $body, $cc=false,$reply_to = false)

    {

        $this->CI->email->to($send_email);

        if($cc) {

            $this->CI->email->cc($cc);

        }  
         if ($reply_to) {
            $this->CI->email->reply_to($reply_to);
        }


        $this->CI->email->subject($subject);

        $this->CI->email->message($body);

        // Attempt to send the email
        // if ($this->CI->email->send()) {
        //     return true; // Email sent successfully
        // } else {
        //     // Print any errors for debugging (you can log these instead of printing in a production environment)
        //     echo $this->CI->email->print_debugger();
        //     return false; // Email failed to send
        // }
        

        return $this->CI->email->send(); // email send successfully

    }



}

?>