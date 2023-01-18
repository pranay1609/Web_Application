<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class UserProfile extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
   

    function index_post(){
         if(!empty($_FILES['image']['name'])) {
    $res        = array();
    $name       = 'image';
    $imagePath 	= './profile_image';
    $temp       = explode(".",$_FILES['image']['name']);
    $extension 	= end($temp);
    $filenew 	= str_replace(
                    $_FILES['image']['name'],
                    $name,
                    $_FILES['image']['name']) . 
                    '_' . time() . '' . "." . $extension;  		
    $config['file_name']   = $filenew;
    $config['upload_path'] = $imagePath;
    $this->upload->initialize($config);
    $this->upload->set_allowed_types('*');
    $this->upload->set_filename($config['upload_path'],$filenew);
    if(!$this->upload->do_upload('image')) {
      $data = array('msg' => $this->upload->display_errors());
    } else {
      $data = $this->upload->data();	
      if(!empty($data['file_name'])){
        $res['image_url'] = $data['file_name']; 
    $indata['profile_imge']=$data['file_name']; 
    
      }
      
      if (!empty($res)) {
           $input = $this->input->post();
     
             	$in=$this->db->where('id',$this->input->post('user_id'))->update('users',$indata);	
		           $this->response(array(
            "status" => 1,
            "data" => $input,
            "msg" => "upload successfully",
            "base_url" => base_url(),
            "count" => "0",
            
          ), REST_Controller::HTTP_OK);

      }else{
          $this->response(array(
            "status" => 0,
            "data" => array(),
            "msg" => "not found",
            "base_url" => base_url(),
            "count" => "0"
          ), REST_Controller::HTTP_OK);
	
      }
    }
  }
    }
    	
}