<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FeedModel extends CI_Model {
    
    
    public function __construct() {
        $this->load->database ();
        
        $tables = array(
            0=>"CREATE TABLE IF NOT EXISTS feedwize_userdata (  id int(10) NOT NULL AUTO_INCREMENT,  userid int(10) NOT NULL,  username varchar(256) NOT NULL,imageurl varchar(256) NOT NULL,  emailid varchar(256) NOT NULL,  status int(10) NOT NULL DEFAULT '0',  added datetime NOT NULL,  updated datetime NOT NULL,  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;"
        );
        
        foreach($tables as $table)
        {            
            $this->db->query($table);
        }
        
    }
    
    public function user_verification($google)
    {
        $sql = "SELECT id FROM feedwize_userdata WHERE userid=".$google['userid']." AND emailid='".$google['emailid']."'";
        $query = $this->db->query($sql);
        $data['uid'] = $query->result();
        $count = count($query->result());
        if($count>0)
        {
           $this->session->set_userdata('uid', $data['uid']['id']);
           return TRUE;
        }
        else
        {
            $google['added'] = date('Y-m-d h:i:s');
            $google['updated'] = date('Y-m-d h:i:s');
            $this->db->insert('feedwize_userdata', $google);
            $this->session->set_userdata('uid', $this->db->insert_id());
            return FALSE;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}