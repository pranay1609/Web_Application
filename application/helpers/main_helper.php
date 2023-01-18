<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($ebook_id,$type_id)
    {
        $ci=& get_instance();
      $ci->load->database();
      $ci->load->library('session');
      
           $ci->db->where('user_id',$ci->session->userdata('user_id'));
              $ci->db->where('ebook_id',$ebook_id);
              $ci->db->where('addtype',$type_id);
               $data=$ci->db->get('likeandbookmarks')->result();
               
              
               if(!empty($data)){
                   return true;
               }else{
                   return false;
               }
    
    }   
}