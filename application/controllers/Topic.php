<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {


	public function index()
	{
		$data['topic_list']=$this->db->get('topics')->result();

		$data['topicdata']=array();
		// $this->load->view('admin/layout/header');
		// $this->load->view('admin/layout/sidebar');
		$data['category_list']=$this->db->get('categorys')->result();
		$this->load->view('admin/topics',$data);
		// $this->load->view('admin/layout/footer');
	}

	function addtopic(){

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
            $in =$this->db->where('id',$id)->update('topics',$dataf);
            if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/topic'));
			


            }
          }
          else{
          	$data['imageError'] =  $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('index.php/topic'));
            

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
            	$in=$this->db->insert('topics',$dataf);
            }else{
            	$in =$this->db->where('id',$id)->update('topics',$dataf);

            }
         
		 	if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/topic'));
			

		 	}
			else{
			$this->session->flashdata('message','<div class="alert alert-success"> Some thing went wrong data</div>');
			redirect(base_url('index.php/topic'));
			}
		}

    

	}

	function  update($id){
		$data['topicdata']=$this->db->where('id',$id)->get('topics')->row();
		$data['topic_list']=$this->db->get('topics')->result();
		$this->load->view('admin/topics',$data);
	}
	function delete($id){

		$del=$this->db->where('id',$id)->delete('topics');
		if($del){
			return redirect  (base_url('index.php/topic'));
		}
		
	}
}
