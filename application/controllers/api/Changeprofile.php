<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Changeprofile extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
   public function index_post()
    {
       
         $input = $this->input->post();
         $id=$this->input->post('id');
         $update['name']=$this->input->post('name');
         $update['mobile_number']=$this->input->post('mobile_number');
         $update['email']=$this->input->post('email');
         $update['occupation']=$this->input->post('occupation');
         $update['university']=$this->input->post('university');
         $update['interest']=$this->input->post('interest');
         $update['linkedin']=$this->input->post('linkedin');
         $update['aboutme']=$this->input->post('aboutme');
          
        // $this->db->update('users', $input, array('id'=>$id));
         if(!empty($input['id']))
         {
            $this->db->where(array('id' => $id));
           $in = $this->db->update('users',$update);
           if($in){
                $this->response(['status'=>'1','message'=>" succssfulyy updated"], REST_Controller::HTTP_OK);
           }else{
                $this->response(['status'=>'0','message'=>"something  went wrong "], REST_Controller::HTTP_OK);
           }
            
           
         
         } else {
         }
       
        
    }
        
    }

    
    	
