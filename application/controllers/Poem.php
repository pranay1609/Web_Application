<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poem extends CI_Controller {

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
		$data['blog_list']=$this->db->get('poems')->result();

		$data['blogdata']=array();
		// $this->load->view('admin/layout/header');
		// $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/poems',$data);
		// $this->load->view('admin/layout/footer');
	}

	function addpoems(){

		$id=$this->input->post('id');
		

       $config = array(
        'upload_path' => './upload/',
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('thumb_img'))
        { 
            $data['imageError'] =  $this->upload->display_errors();
            $indata=array();

            if(!$id==''){
            	 $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];
			$dataf=array_merge($indata,$this->input->post());
            $in =$this->db->where('id',$id)->update('poems',$dataf);
            if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/poem'));
			


            }
          }
      }  else
        {
            $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];

            $indata['thumb_img']=$image;

            $indata['created_at']=date('d:m:y');

            $dataf=array_merge($indata,$this->input->post());
            if($id==''){
            	$in=$this->db->insert('poems',$dataf);
            }else{
            	$in =$this->db->where('id',$id)->update('poems',$dataf);

            }
         
		 	if($in){
			$this->session->flashdata('message','<div class="alert alert-success"> Successfully inserted data</div>');
			redirect(base_url('index.php/poem'));
			

		 	}
			else{
			$this->session->flashdata('message','<div class="alert alert-success"> Some thing went wrong data</div>');
			redirect(base_url('index.php/poem'));
			}
		}

    

	}

	function  update($id){
		$data['blogdata']=$this->db->where('id',$id)->get('poems')->row();
		$data['blog_list']=$this->db->get('poems')->result();
		$this->load->view('admin/poems',$data);
	}
	function delete($id){

		$del=$this->db->where('id',$id)->delete('poems');
		if($del){
			return redirect  (base_url('index.php/poem'));
		}
		
	}
}
