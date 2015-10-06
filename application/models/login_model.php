<?php
if (!defined('BASEPATH')) exit('No direct to Access Here');

/**
* 
*/
class Login_model extends CI_Model
{
    
    function __construct()
    {
        # code...
    }

    public function login($username,$password,$akses){
    	$this->db->select('*');
        $this->db->from('guru');
        $this->db->where('nip',$username);
        $this->db->where('nip',$password);
        $this->db->where('akses',$akses);
        //$this->db->limit(1);

        $result = $this->db->get();


        //$query = $this->mymodel->tam_data("guru","where nip = $username and nip = $password");

        if ($result->num_rows() == 1){
            return $result->result();
        }else{
            return FALSE;
        }
    }
}
?>