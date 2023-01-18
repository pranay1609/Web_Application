<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['blog_list']=$this->db->get('bookpdf')->result();

		$data['blogdata']=array();
		$data['topic_list']=$this->db->get('topics')->result();
		// $this->load->view('admin/layout/header');
		// $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/ebook',$data);
		// $this->load->view('admin/layout/footer');
	}

	function addBook(){

		$id=$this->input->post('id');

	    


	  $indata=array();
       $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "pdf",
        'overwrite' => TRUE,);

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
        'overwrite' => TRUE,);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('front_image'))
        { 
            
          $data['imageError'][1] =  $this->upload->display_errors();
              $this->session->set_flashdata('errort', $this->upload->display_errors());
        }else{

        
            $imageDetailArrays = $this->upload->data();
            $images = $imageDetailArrays['file_name'];

            $indata['front_image']=$images;


            }

            if(empty($data['imageError'])){

             $dataf=array_merge($indata,$this->input->post());
			$in=$this->db->insert('bookpdf',$dataf);	

			if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/ebook'));
			

		 	}
			
            }else{
			$this->session->flashdata('message','<div class="alert alert-success"> Some thing went wrong data</div>');
			redirect(base_url('index.php/ebook'))->with($data['imageError']);
			}
	


          
		 	

    

	}

	function  update($id){
		$data['blogdata']=$this->db->where('id',$id)->get('ebooks')->row();
		$data['blog_list']=$this->db->get('ebooks')->result();
		$this->load->view('admin/ebooks',$data);
	}
	function delete($id){

		$del=$this->db->where('id',$id)->delete('ebooks');
		if($del){
			return redirect  (base_url('index.php/ebook'));
		}
		
	}
}
