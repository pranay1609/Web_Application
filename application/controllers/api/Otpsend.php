<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Otpsend extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("users", ['id' => $id])->row_array();
             $this->db->select('*,likeandbookmarks.id as id');
   
    $this->db->join('bookpdf', 'likeandbookmarks.ebook_id = bookpdf.id');
    $this->db->where("likeandbookmarks.user_id",$id);
    $this->db->where("likeandbookmarks.addtype",2);
    $this->db->order_by('bookpdf.id','DESC');
    $this->db->group_by('bookpdf.topic_id');
    $this->db->from('likeandbookmarks');
    $bookmarks= $this->db->get()->result();
     
    $likes= $data['my_books']=$this->db->where('created_by',$id)->order_by('id','DESC')->get('bookpdf')->result();
    
        }else{
            $data =  [
                "data"=>"invalid data not found",
                ];
        }
     
        $this->response(
            array(
                'data'=>$data,
                "bookmarks"=>$bookmarks,
                "likes"=>$likes,
                ), REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
         $this->load->library('form_validation');
     
            
            $this->form_validation->set_rules('email', ' Email', 'trim|required|valid_email|is_unique[users.email]');
         
              
             if ($this->form_validation->run() == true) {
                 $otp=rand(1000,9999);
                 
                  $message=" Your OTP for reste Password is $otp Don't share to anyone";
                  $this->sendotp($this->input->post('email'),$message);
            
                $this->response(array('status'=>'1','error'=>"$otp"), REST_Controller::HTTP_OK);
                
             }else{
                  $this->response(array('status'=>'0','error'=>strip_tags(validation_errors())), REST_Controller::HTTP_OK);
             }
        
     
        
    } 
    
      function sendotp($mail_id ,$message){
             $message = $message;
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.googlemail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = "projectgraduateresearch@gmail.com";
            $config['smtp_pass'] = "Graduate@2022";
            $config['mailtype'] = "html";
            
            $this->email->set_mailtype("html");
            $ci = &get_instance();
            $ci->load->library('email', $config);
            $ci->email->set_newline("\r\n");
            $ci->email->from("projectgraduateresearch");
            $ci->email->to($mail_id);
            $ci->email->subject("Otp for new Registration");
            $ci->email->message($message);
            $ci->email->send();  
             $this->email->print_debugger();
        }
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function update_post($id="")
    {
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
         $input = $this->input->post();
        // $this->db->update('users', $input, array('id'=>$id));
        $in=$this->db->where('id',$id)->update('users',$input);
        if($in){
            $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
        }
     
        
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('users', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    function updateprofile_post(){
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
     $this->resizeImage($data['file_name']);
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