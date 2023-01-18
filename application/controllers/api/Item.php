<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {
    
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
	public function index_get($id = 0,$userid=0,$isactive=1)
	{
	   
	    $addtype=2;
	    $likes=1;
        if(!empty($id)){
            $this->db->select('bookpdf.*,(SELECT COUNT(*) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreview, (SELECT Avg(rating_point) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreviewweight,');
            $data = $this->db->get_where("bookpdf", ['id' => $id])->row();
        }else{
            if($isactive==1){
                $this->db->select('(SELECT COUNT(*) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreview, (SELECT Avg(rating_point) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreviewweight,');
            $data = $this->db->select('university,created_by,id,title,Description,user_name, CONCAT(SUBSTRING_INDEX(front_image, ".", 1),"_thumb",".",SUBSTRING_INDEX(front_image, ".", -1)) as front_image,
            upload_pdf,is_verify,graduation,professor,user_email,(SELECT COUNT(*) FROM `likeandbookmarks` WHERE ebook_id=bookpdf.id && addtype='.$addtype.' && user_id='.$userid.') AS is_bookmrk, (SELECT COUNT(*) FROM `likeandbookmarks` WHERE ebook_id=bookpdf.id && addtype='.$likes.' && user_id='.$userid.') AS is_like')->order_by('id','Desc')->get("bookpdf")->result();
            }elseif($isactive==2){
                 $this->db->select('(SELECT COUNT(*) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreview, (SELECT Avg(rating_point) FROM `ebook_coments` WHERE ebook_id=bookpdf.id) AS totalreviewweight,');
                $this->db->select('university,created_by,bookpdf.id,title,Description,user_name, CONCAT(SUBSTRING_INDEX(front_image, ".", 1),"_thumb",".",SUBSTRING_INDEX(front_image, ".", -1)) as front_image,
            upload_pdf,is_verify,graduation,professor,user_email,(SELECT COUNT(*) FROM `likeandbookmarks` WHERE ebook_id=bookpdf.id && addtype='.$addtype.' && user_id='.$userid.') AS is_bookmrk, (SELECT COUNT(*) FROM `likeandbookmarks` WHERE ebook_id=bookpdf.id && addtype='.$likes.' && user_id='.$userid.') AS is_like,count(user_id) AS numb');    
$this->db->from('bookpdf');
$this->db->join('likeandbookmarks', 'bookpdf.id = likeandbookmarks.ebook_id');
$this->db->group_by('bookpdf.id');
$this->db->order_by('numb',"DESC");
  $data= $this->db->get()->result();
                
                
            }
        }
     
        $this->response(array('data'=>$data), REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index1111_post()
    {
        $input = $this->input->post();
        
        $base64Image= $this->input->post('image');
        $decoded=base64_decode($base64Image);

        $this->response([$decoded], REST_Controller::HTTP_OK);
    
        
        $indata=array();
      $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "pdf/jpg/jpeg/png",
        'overwrite' => TRUE,
        
        
        
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('image'))
        { 
            
          $imageeroor =  $this->upload->display_errors();
          $this->session->set_flashdata('errorp', $this->upload->display_errors());
        }else{

        
            $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];

              $input['front_image']=$image;


            }
              
            //  $return= $this->du_uploads($this->input->post('image'));
            // $input['front_image']= $this->input->post('image');
   //  unset($input['image']);
     
    // $this->db->insert('bookpdf',$input);
    //  $this->response([$input], REST_Controller::HTTP_OK);
     
    //  if(empty($imageeroor)){
    //       $this->db->insert('bookpdf',$input);
    //       $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    //  }else {
    //      $this->response([$imageeroor], REST_Controller::HTTP_OK);
         
    //  }
       
     
        
    } 
     
     function uploadphoto_post(){
         $this->response([" hi sanjay"], REST_Controller::HTTP_OK);
     }
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('bookpdf', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('bookpdf', array('id'=>$id));
       
        $this->response(["ststus"=>'1',"message"=>"deleted successfully"], REST_Controller::HTTP_OK);
    }
    public function du_uploads($base64string){
        $path= './upload/';
        if(
            $this->is_base64($base64string) == true 
        ){  
            $base64string = "data:image/jpeg;base64,".$base64string;
            $this->check_size($base64string);
            $this->check_dir($path);
            $this->check_file_type($base64string);
            
            /*=================uploads=================*/
            list($type, $base64string) = explode(';', $base64string);
            list(,$extension)          = explode('/',$type);
            list(,$base64string)       = explode(',', $base64string);
            $fileName                  = uniqid().date('Y_m_d').'.'.$extension;
            $base64string              = base64_decode($base64string);
            file_put_contents($path.$fileName, $base64string);
            return array('status' =>true,'message' =>'successfully upload !','file_name'=>$fileName,'with_path'=>$path.$fileName);
        }else{
            print_r(json_encode(array('status' =>false,'message' => 'This Base64 String not allowed !')));exit;
        }
    }
    public function index_post() {	
       
        $indata=array();
        $input = $this->input->post();
          
  if(!empty($_FILES['image']['name'])) {
    $res        = array();
    $name       = 'image';
    $imagePath 	= './upload';
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
    $indata['front_image']=$data['file_name']; 
     $this->resizeImage($data['file_name']);
      }
        $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "pdf",
        'overwrite' => TRUE,
        
        
        
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('upload_pdf'))
        { 
            
          $pdferror =  $this->upload->display_errors();
              
        }else{

        
            $pdfdirectory = $this->upload->data();
            $pdf = $pdfdirectory['file_name'];

            $indata['upload_pdf']=$pdf;


            }
            $dataf=array_merge($indata,$input);
            
      
      if (!empty($res)) {
           
      
             
            //  print_r($dataf);
            //  die;
		
			if($this->input->post("id")!=''){
			    	
			   $in= $this->db->where('id',$this->input->post('id'))->update('bookpdf',$dataf);
			}else{
			    $in=$this->db->insert('bookpdf',$dataf);
			}
		    $lat_id=$this->db->insert_id();

          
           $this->response(array(
            "status" => 1,
            "data" => $dataf,
            "msg" => "upload successfully",
             "count" => "0",
            
          ), REST_Controller::HTTP_OK);

      }else{
          $in= $this->db->where('id',$this->input->post('id'))->update('bookpdf',$dataf);
          $this->response(array(
            "status" => 1,
            "data" => array(),
            "msg" => "not found",
            "base_url" => base_url(),
            "count" => "0"
          ), REST_Controller::HTTP_OK);
	
      }
    }
  }
}
     public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' =>600,
          'height' =>270
      );


      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


      $this->image_lib->clear();
   }
}