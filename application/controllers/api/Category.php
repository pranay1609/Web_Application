<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Category extends REST_Controller {
    
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
	    $data=array();
        if(!empty($id)){
            $data = $this->db->get_where("categorys", ['id' => $id])->row_array();
        }else{
            $maincategory= $this->db->select('*')->order_by('id','Asc')->get("categorys")->result();
            
            foreach($maincategory as $listcat){
                $data[]=array('title'=>$listcat->title,
                "department"=>$this->db->select('*')->order_by('id','Desc')->order_by('id','Asc')->where('category_id',$listcat->id)->get("topics")->result(),
                );
               
                
            }
            
        }
     
        $this->response(array('data'=>$data), REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert(' categorys',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update(' categorys', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete(' categorys', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}