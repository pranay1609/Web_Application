<?php

class  HomeController extends CI_Controller{


    function index(){
        
        
        //echo $this->session->userdata('popularproject');
    
        $data['category_list']=$this->db->get('categorys')->result();
        
        $data['blog_list']=$this->db->get('bookpdf')->result();
        
        $this->db->select('topic_id,topics.title');
   
    $this->db->join('topics', 'topics.id = bookpdf.topic_id');
    $this->db->group_by('bookpdf.topic_id');
    $this->db->from('bookpdf');

    $query = $this->db->get();
    
    
$topics_list= $query->result();


$product=[];
foreach($topics_list as $tlist){
    
    $product[$tlist->title]=$this->db->where('topic_id',$tlist->topic_id)->order_by('id','DESC')->get('bookpdf')->result();
    
}


    $data['product_list']=$product;
    $data['grid_product']=$this->db->order_by('id','DESC')->get('bookpdf')->result();
    
        $this->load->view('home/index',$data);
    }

    public function signin(){
        
        if($this->input->post()){
            
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="error alert alert-danger">', '</span>');
            $this->form_validation->set_rules('lemail', 'Email  ', 'required');
            $this->form_validation->set_rules('lpassword', ' Email', 'trim|required');
         if ($this->form_validation->run() == true) {
          
     $email=$this->input->post('lemail');
     $password=$this->input->post('lpassword');
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
              'user_type'=>$query->user_type,
              );
              $this->session->set_userdata($userdata);
              $this->session->set_flashdata("message",'<div class="alert alert-success text-center"> Login Success </div>');
              redirect(base_url());
          
      }else{
          
          
           $this->session->set_flashdata("message",'<div class="alert alert-danger text-center"> Invalid Credential ! try again.. </div>');
      }
      
        }
       
           
        }
        
        $data['category_list']=$this->db->get('categorys')->result();
        $this->load->view('home/signin',$data);
    }

    function bookdetails($id=''){
        $data['rating']=array();
    	$data['category_list']=$this->db->get('categorys')->result();
    	
    	$data['bookdetails']=$this->db->where('id',$id)->get('bookpdf')->row();
    	
    	$data['topic_name']=$this->db->where('id',$data['bookdetails']->topic_id)->get('topics')->row()->title;
    	
    	$data['post_coments']=$this->db->where('ebook_id',$id)->get('ebook_coments')->result();
    	
    	$this->db->select_avg('rating_point	');
    	$this->db->where('ebook_id',$id);
      $data['rating']=  $this->db->get('ebook_coments')->row();
      
      
      
    
    	
    	$this->load->view('home/bookdetails',$data);
    }
    
    function upload($ids=""){
           $data['post']=[];
           $data['book_details']=[];
           $in=false;
        
        if($ids!=''){
            $data['book_details']=$this->db->where('id',$ids)->get('bookpdf')->row();
            
        }
        
        if($this->session->userdata('user_id')==''){
             $this->session->set_flashdata('success','<div class="alert alert-info"> Login First to upload any file !</div>');
            redirect('signin');
        }
 $data['category_list']=$this->db->get('categorys')->result();
        
        if($this->input->post()){
            
             $data['book_details']=  (object)$this->input->post();
            $id=$this->input->post('id');
      
      if($ids!=''){
          $in=$this->db->where('id',$ids)->update('bookpdf',$this->input->post());
          	$this->session->set_flashdata('is_active','upload');
          redirect(base_url('my-profile'));
          
      }else { 

	  $indata=array();
       $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "pdf",
        'overwrite' => TRUE,
        
        
        
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('upload_pdf'))
        { 
            
          $data['imageError'][0] =  $this->upload->display_errors();
              $this->session->set_flashdata('errorp', $this->upload->display_errors());
        }else{

        
            $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];

            $indata['upload_pdf']=$image;


            }



         $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "gif|jpg|png|jpeg",
        'max_height'=>900,
        'max_width'=>1200,
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('front_image'))
        { 
            
          $data['imageError'][1] =  $this->upload->display_errors();
              $this->session->set_flashdata('errort', $this->upload->display_errors());
        }else{

        
            $imageDetailArrays = $this->upload->data();
            $this->resizeImage($imageDetailArrays['file_name']);
            $images = $imageDetailArrays['file_name'];

            $indata['front_image']=$images;
            $indata['user_email']=$this->session->userdata('user_email');
            $indata['user_name']=$this->session->userdata('user_name');


            }

            if(empty($data['imageError'])){

             $dataf=array_merge($indata,$this->input->post());
             
            //  print_r($dataf);
            //  die;
			$in=$this->db->insert('bookpdf',$dataf);	
		    $lat_id=$this->db->insert_id();

			
			
            }else{
			$this->session->set_flashdata('message','<div class="alert alert-danger"> Some thing went wrong data</div>');
// 			redirect(base_url('homecontroller/upload'))->with($data['imageError']);
			}
	
                }
                if($in){
			$this->session->set_flashdata('message','<div class="alert alert-success"> Successfully Upload  </div>');
			$this->session->set_flashdata('toastnotification',' Successfully Upload');
			
			$this->sendMail($this->input->post('professor_email'),$lat_id);
			
		if($ids!=''){
		    
		  redirect(base_url('homecontroller/upload/'.$ids));  
		}else{
		    redirect(base_url());
		}	
			

		 	}

        }

        $data['topic_list']=$this->db->get('topics')->result();
        $this->load->view('home/upload',$data);
    
    }
    function userregister(){
        $data['post'] = [];
        $data['category_list']=$this->db->get('categorys')->result();
       
     if($this->input->post()){
          $data=$this->input->post();
           $data['post'] =$this->input->post();
     $this->load->library('form_validation');
     $this->form_validation->set_error_delimiters('<span class="error alert alert-danger">', '</span>');
            $this->form_validation->set_rules('name', 'Name ', 'required');
            $this->form_validation->set_rules('email', ' Email', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password ', 'required');
            $this->form_validation->set_rules('re_password', '  Re type password', 'trim|required|matches[password]');
             if ($this->form_validation->run() == true) {
           
            //$this->load->view('home/signin');
        unset($data['re_password']);
        unset($data['post']);
    
        $redata['user_email']=$this->input->post('email');
        
        $this->session->set_userdata('reg',$data);
        $otp=rand(100000,999999);
        $redata['enterotp']=$otp;
       $meaage= "your OTP is $otp for new registration";
        $this->sendotp($this->input->post('email'),$redata['enterotp']);
        
        
        $html=$this->load->view('home/optconform',$redata,true);
        echo $html;
        die;
        
    
      
     
             } 
     }   
    
    $this->load->view('home/signinup',$data);
     
     
    }
     function docoment(){
         
    
         $in=$this->db->insert('ebook_coments',$this->input->post());
         
         redirect( base_url('book-details/'.$this->input->post('ebook_id')));
     }
    
    public function my_profile(){
         if($this->session->userdata('user_id')==''){
             $this->session->set_flashdata('success','<div class="alert alert-info"> Login First to view Profile !</div>');
            redirect('signin');
        }
     $data['category_list']=$this->db->get('categorys')->result();
     
     $data['my_books']=$this->db->where('created_by',$this->session->userdata('user_id'))->order_by('id','DESC')->get('bookpdf')->result();
     
     $this->db->select('*,likeandbookmarks.id as id');
   
    $this->db->join('bookpdf', 'likeandbookmarks.ebook_id = bookpdf.id');
    $this->db->order_by('bookpdf.id','DESC');
    $this->db->where('likeandbookmarks.user_id',$this->session->userdata('user_id'));
    $this->db->group_by('bookpdf.topic_id');
    $this->db->from('likeandbookmarks');
    $data['my_bookmarkss']= $this->db->get()->result();
  
     
        $data['userdata']=$this->db->where('id',$this->session->userdata('user_id'))->get('users')->row();
        if($this->session->userdata('user_type')==1){
            $data['studentproject']=$this->db->where('professor_email',$this->session->userdata("user_email"))->get('bookpdf')->result();
            $emailss=[];
            foreach($data['studentproject'] as $list){
                $emailss[]=$list->user_email;
                
            }
        $data['srudent_list']=$this->db->where_in('email',$emailss)->get('users')->result();
             $this->load->view("home/professorprofile",$data);
        
        }else{
        $this->load->view("home/myaccount",$data);}
    }
    function updateprofile(){
        
         $this->load->library('form_validation');
     $this->form_validation->set_error_delimiters('<span class="error alert alert-danger">', '</span>');
            $this->form_validation->set_rules('name', 'Name ', 'required');
            $this->form_validation->set_rules('email', ' Email', 'trim|required|valid_email');
 if($this->form_validation->run() == FALSE)
    {
        $this->session->set_flashdata('profile_error','yes');
        $this->session->set_flashdata('is_active','accountdetails');
         $this->my_profile();
        
           
    }else{
        

     $config = array(
        'upload_path' => './profile_image/',
        'allowed_types' => "gif|jpg|png|jpeg",
        'max_height'=>900,
        'max_width'=>1200,
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('profile_imge'))
        { 
            
         $data['imageError'][1] =  $this->upload->display_errors();
       $this->session->set_flashdata('errort', $this->upload->display_errors());
       print_r($this->upload->display_errors());
       
        }else{
        $imageDetailArrays = $this->upload->data();
          $images = $imageDetailArrays['file_name'];

            $data['profile_imge']=$images;
        }
            
        
        $this->session->unset_userdata('profile_error');
         $this->session->set_flashdata('is_active','accountdetails');
         $data=$this->input->post()+array('profile_imge'=>$images);
        unset($data['cpassword']);
        
        unset($data['cupassword']);
        unset($data['password']);
           $this->db->where('id',$this->session->userdata('user_id'))->update('users',$data);
               $this->session->set_flashdata('is_active','accountdetails');
       redirect(base_url('my-profile'));
    }
        
    }
    function logout(){
        $this->session->unset_userdata($userdata);
        $this->session->sess_destroy();
        
        redirect(base_url());
    }
    function contact_us(){
        	$data['category_list']=$this->db->get('categorys')->result();
        $this->load->view("home/contact",$data);
    }
    
    function getdatabyparameter($type='',$type_data=''){
        $data['grid_product']=array();
    
        $data['category_list']=$this->db->get('categorys')->result(); 
        if($type=='search'){
           $type_data= $this->input->post('search');
           $data['result']=$type_data;
            $data['grid_product']=$this->db->like('title',$type_data,'both')->get('bookpdf')->result();
            
            
            // if(empty($data['grid_product'])){
            //     $ids=array();
                 
            //      $ids=$this->db->like('title',$type_data)->get('topics')->result();
                 
            //      $idarray=[];
            //      if(!empty($ids)){
            //      foreach($ids as $liid){
            //          $idarray[]=$liid['id'];
            //      }
            //      $data['grid_product']=$this->db->where_in('topic_id',$idarray)->get('bookpdf')->result();
            //      } 
                  
            // }
        }
        if($type=='department'){
            $data['result']=$this->db->where('id',$type_data)->get('topics')->row()->title;
            
            $data['grid_product']= $this->db->where('topic_id',$type_data)->get('bookpdf')->result();
        }
        if($type=='category'){}
        
        if($type=="topics"){}
        $this->load->view('home/multiuse',$data);
    }
    function addbookmarkandlikes($ebook_id='',$type_id='', $uri=''){
        
         if($this->session->userdata('user_id')==''){
             $this->session->set_flashdata('success','<div class="alert alert-warning"> Login First to '.$type.' any  ebook !</div>');
            redirect('signin');
        }
        if($type_id==1){
            $type="Like";
        }else{ 
        $type='Bookmarks';} 
        
        if($uri==''){
            
            $uri=base_url();
        }else{
            
            $uri=base_url('book-details/'.$ebook_id);
        }
       
    $insertdata['user_id']=$this->session->userdata('user_id');
        $insertdata['ebook_id']=$ebook_id;
        $insertdata['addtype']=$type_id;
        $this->is_exist($ebook_id,$type_id,$uri);
        
        $in=$this->db->insert('likeandbookmarks',$insertdata);

        	if($in){
			$this->session->set_flashdata('success','<div class="alert alert-success"> Successfully Added into your '.$type.'  ..!</div>');
				$this->session->set_flashdata('toastnotification',' Successfully Added into your '.$type.'  ..!');
			redirect($uri);
			
			
			
			

		 	}
		 	else{
			$this->session->set_flashdata('success','<div class="alert alert-danger"> Some thing went wrong data</div>');
			$this->session->set_flashdata('toastnotification',' Some thing went wrong data ..!');
			redirect($uri);
			}
    }
    function sendMail($mail_id,$book_id) 
        { 
            $data=array();
            $data['student']=$this->session->userdata('user_name');
            $data['book_id']=$book_id;
            
            $message =  $this->load->view('home/mailformate.php',$data,TRUE);
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
            $ci->email->subject("Regarding user new book ");
            $ci->email->message($message);
            $ci->email->send();  
            echo $this->email->print_debugger();
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
            echo $this->email->print_debugger();
        }
        
        function isverify($ebook_id='',$status_id){
            
            $data['is_verify']=$status_id;
           $in= $this->db->where('id',$ebook_id)->update('bookpdf',$data);
           if($in){
             $this->session->set_flashdata('message','Successfully Verified');
              $this->session->set_flashdata('is_active','upload');
             
               redirect('my-profile');
           }else{
                 $this->session->set_flashdata('message','Something went wrong');
                 $this->session->set_flashdata('is_active','upload');
               redirect('my-profile');
           }
        }
        
        function is_exist($ebook_id,$type_id,$uri){
              $this->db->where('user_id',$this->session->userdata('user_id'));
              $this->db->where('ebook_id',$ebook_id);
               $this->db->where('addtype',$type_id);
               $data=$this->db->get('likeandbookmarks')->result();
               
               if(!empty($data)){
                 	
                 	$this->db->where('user_id',$this->session->userdata('user_id'));
                 	$this->db->where('ebook_id',$ebook_id);
                     $this->db->where('addtype',$type_id);
                     $this->db->delete('likeandbookmarks');
                     $this->session->set_flashdata('toastnotification',' Successfully Removed ..!');
                   redirect($uri);
               }else{
                   return true;
               }
             
        }
        function removelikenadbookmarks($id=''){
           $del= $this->db->where('id',$id)->delete('likeandbookmarks');
           if($del){
               $this->session->set_flashdata('is_active','bookmark');
               redirect('my-profile');
           }
            
        }
        
        function removebook($id){
            $del= $this->db->where('id',$id)->delete('bookpdf');
           if($del){
               $this->session->set_flashdata('is_active','upload');
               redirect('my-profile');
           }
        }
        function gridtest(){
            
            $this->load->view('home/grid');
        }
        function popularproject(){
            $this->session->set_userdata('popularproject',1);
            redirect(base_url());
        }
        function customsign(){
            $this->load->view('home/customsign');
                
            
        }
        function loaddata(){
            $id=$this->input->post('data');
            Sleep (1) ; 
            $data['active']=$id;
            
            
            if($id==1){
                $data['grid_product']=$this->db->order_by('id','DESC')->get('bookpdf')->result();
            }elseif($id==2){
                
                $this->db->select('*,count(user_id) AS numb');    
$this->db->from('likeandbookmarks');
$this->db->join('bookpdf', 'bookpdf.id = likeandbookmarks.ebook_id');
$this->db->group_by('bookpdf.id');
$this->db->order_by('numb',"DESC");
  $data['grid_product'] = $this->db->get()->result();
            }
            else{
                $data['grid_product']=$this->db->order_by('id','DESC')->where('user_email',$id)->get('bookpdf')->result();
            }
        $html =$this->load->view('home/loaddata',$data);
        echo json_encode($html);
        }
        function registratonstore(){
            $in=$this->db->insert('users',$this->session->userdata('reg'));
      	if($in){
			$this->session->set_flashdata('success','<div class="alert alert-success"> Successfully Register now can login ..!</div>');
			redirect(base_url('signin'));
			

		 	}
		 	else{
			$this->session->set_flashdata('success','<div class="alert alert-success"> Some thing went wrong data</div>');
			redirect(base_url('signup'));
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
   function forgetpassword($id=''){
       
       if($this->input->post()){
           $otp=rand(100000,999999);
           $this->session->set_userdata('forgetotp',$otp);
           
          $userdata= $this->db->where('email',$this->input->post('email'))->get('users')->row();
          $message=" Your OTP for reste Password is $otp Don't share to anyone";
          if(!empty($userdata)){
             $this->sendotp($this->input->post('email'),$message);
             $redata['enterotp']=$otp;
              $redata['email']=$this->input->post('email');
             
     $html=$this->load->view('home/optconformforget',$redata,true);
        echo $html;
        die;
          }else{
              $this->session->set_flashdata('message','<div class="alert alert-danger"> this emil is not register yet must register first... </div>');
          }
           
       }
      $this->load->view('home/forgetpassword'); 
     
      
       
       
   }
   function resetpassword($email=''){
       if($this->input->post()){
           
            $this->load->library('form_validation');
     $this->form_validation->set_error_delimiters('<span class="error alert alert-danger">', '</span>');
            $this->form_validation->set_rules('password', 'Password ', 'required');
            $this->form_validation->set_rules('cpassword', '  Confrim password', 'trim|required|matches[password]');
             if ($this->form_validation->run() == true) {
                 $this->db->where('email',$email)->update('users',array('password'=>$this->input->post('cpassword')));
                     $this->session->set_flashdata('success','<div class="alert alert-info">Password has been changed now can login... !</div>');
                 redirect(base_url('signin'));
                //   unset($data['re_password']);
           
            //$this->load->view('home/signin');
             }else{
                 
             }
      
           
       }
       $data['email']=$email;
 $this->load->view('home/resetpassword',$data); 
   }
   function studentprofile($id=''){
       $data['userdata']=$this->db->where('email',$id)->get('users')->row();
     $data['category_list']=$this->db->get('categorys')->result();
       $this->load->view('home/studentprofile',$data);
   }
    }
