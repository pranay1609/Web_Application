<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function index()
	{
		$data['category_list']=$this->db->get('categorys')->result();

		$data['blogdata']=array();
		// $this->load->view('admin/layout/header');
		// $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/categorys',$data);
		// $this->load->view('admin/layout/footer');
	}

	function addcategory(){

		$id=$this->input->post('id');
		

       $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('thumb_img'))
        { 
            



            if(!$id==''){
            	$indata=array();
            	 $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];
			$dataf=array_merge($indata,$this->input->post());
            $in =$this->db->where('id',$id)->update('categorys',$dataf);
            if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/blog'));
			


            }
          }
          else{
          	$data['imageError'] =  $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('index.php/blog'));
            

          }
      }  else
        {
        	$indata=array();
            $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];

            $indata['thumb_img']=$image;

            $indata['created_at']=date('d:m:y');

            $dataf=array_merge($indata,$this->input->post());
            if($id==''){
            	$in=$this->db->insert('categorys',$dataf);
            }else{
            	$in =$this->db->where('id',$id)->update('categorys',$dataf);

            }
         
		 	if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/blog'));
			

		 	}
			else{
			$this->session->flashdata('message','<div class="alert alert-success"> Some thing went wrong data</div>');
			redirect(base_url('index.php/blog'));
			}
		}

    

	}

	function  update($id){
		$data['blogdata']=$this->db->where('id',$id)->get('categorys')->row();
		$data['category_list']=$this->db->get('categorys')->result();
		$this->load->view('admin/categorys',$data);
	}
	function delete($id){

		$del=$this->db->where('id',$id)->delete('categorys');
		if($del){
			return redirect  (base_url('index.php/blog'));
		}
		
	}
}
