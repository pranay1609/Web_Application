<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Bookmarks extends REST_Controller {
    
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
            $this->db->select('*,likeandbookmarks.id as id');
   
    $this->db->join('bookpdf', 'likeandbookmarks.ebook_id = bookpdf.id');
    $this->db->where("likeandbookmarks.user_id",$id);
    $this->db->where("likeandbookmarks.addtype",2);
    $this->db->order_by('bookpdf.id','DESC');
    $this->db->group_by('bookpdf.topic_id');
    $this->db->from('likeandbookmarks');
    $data= $this->db->get()->result();
        }else{
            $data = $this->db->get("likeandbookmarks")->result();
        }
     
     
      
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
  function index_post(){
        
      
      $ebook_id=$this->input->post('ebook_id');
      $type_id=$this->input->post('type_id');
      $user_id=$this->input->post('user_id');
      
      
        if($type_id==1){
            $type="Like";
        }else{ 
        $type='Bookmarks';} 
        
        $insertdata['user_id']=$user_id;
        $insertdata['ebook_id']=$ebook_id;
        $insertdata['addtype']=$type_id;
       $return= $this->is_exist($ebook_id,$type_id,$user_id);
       if($return==11)
       
       {
         $in=$this->db->insert('likeandbookmarks',$insertdata);
          $this->response(array('status'=>'1','message'=>' successfully added in bookmark'), REST_Controller::HTTP_OK);
       }else{
           $this->response(array('status'=>'1','message'=>' successfully remove From bookmark'),REST_Controller::HTTP_OK);
       }
        
        
    } 
    function is_exist($ebook_id,$type_id,$user_id=0){
              $this->db->where('user_id',$user_id);
              $this->db->where('ebook_id',$ebook_id);
               $this->db->where('addtype',$type_id);
               $data=$this->db->get('likeandbookmarks')->result();
               
               if(!empty($data)){
                 	$this->db->where('user_id',$user_id);
                 	$this->db->where('ebook_id',$ebook_id);
                     $this->db->where('addtype',$type_id);
                     $this->db->delete('likeandbookmarks');
                     return "Successfully Removed";
                   
               }else{
                   return 11;
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