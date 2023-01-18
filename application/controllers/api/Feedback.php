<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Feedback extends REST_Controller {
    
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
            $this->db->select('');
   
   // $this->db->join('bookpdf', 'ebook_coments.ebook_id = bookpdf.id','left');
    $this->db->where("ebook_coments.ebook_id",$id);
  // $this->db->order_by('bookpdf.id','DESC');
    //$this->db->group_by('bookpdf.id');
    $this->db->from('ebook_coments');
    $data= $this->db->get()->result();
        }else{
            $data = $this->db->get("ebook_coments")->result();
        }
     
     
      
        $this->response(['data'=>$data], REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
  function index_post(){
        
      
      $ebook_id=$this->input->post('ebook_id');
      $rating_point=$this->input->post('rating_point');
      $user_id=$this->input->post('user_id');
      $comments=$this->input->post('comments');
      
      
          $insertdata['user_id']=$user_id;
          $insertdata['ebook_id']=$ebook_id;
           $insertdata['rating_point']=$rating_point;
           $insertdata['comments']=$comments;
           $in=$this->db->insert('ebook_coments',$insertdata);
           if($in){
              $this->response(array('status'=>'1','message'=>' successfully added your Feedback'), REST_Controller::HTTP_OK); 
           }else{
               $this->response(array('status'=>'0','message'=>' something went wrong '), REST_Controller::HTTP_OK);
           }
           
          
          
       }
        
        
    
  
             
        
    public function login_post(){
        
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email', $email);
      
      $this->db->where('password',$password);
      $query = $this->db->get()->row(); 
       if(!empty($query)){
           $userdata=array(
              'user_id'=>$query->id,
              'user_name'=>$query->name,
              'user_email'=>$query->email,
              'user_mobile'=>$query->mobile_number,
              );
              $this->response(array('status'=>1,'message'=>'logi successfully','data'=>$userdata), REST_Controller::HTTP_OK);
              
          
      }else{
          
           $this->response(array('status'=>0,'message'=>'Envalid credential','data'=>[]), REST_Controller::HTTP_OK);
           
      }
        
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('users', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
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
    	
}