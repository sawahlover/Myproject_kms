<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    function findOneUser($email=null){
        return
        $this->db->get_where('tb_user', ['email' => $email]);
    }

}

/* End of file M_auth.php */
