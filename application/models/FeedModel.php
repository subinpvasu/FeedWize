<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FeedModel extends CI_Model {
    
    
    public function __construct() {
        $this->load->database ();
        $this->load->helper('date');
        
      /*  $tables = array(
            0=>"CREATE TABLE IF NOT EXISTS feedwize_userdata ( id int(10) NOT NULL AUTO_INCREMENT, userid varchar(50) NOT NULL, username varchar(256) NOT NULL, imageurl varchar(256) NOT NULL, emailid varchar(256) NOT NULL, status int(10) NOT NULL DEFAULT '0', added datetime NOT NULL, updated datetime NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1"
        );
        
        foreach($tables as $table)
        {            
            $this->db->query($table);
        }*/
        
    }
    
    public function user_verification($google)
    {
        $sql = "SELECT id FROM feedwize_userdata WHERE userid=".$google['userid']." AND emailid='".$google['emailid']."'";

        $query = $this->db->query($sql);
        $data['uid'] = $query->result();
        $count = count($query->result());
        if($count>0)
        {
           foreach($data['uid'] as $k){$uid = $k->id;}
           $this->session->set_userdata('uid', $uid);
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
    
    public function create_account($account_name, $projectid)
    {
        
        $result = array();
        $now = date('Y-m-d H:i:s');
        //check name available
        $sql = "SELECT * FROM feedwize_user_accounts WHERE deletion=0 AND account_name='".$account_name."' AND userid=".$this->session->userdata('uid');
        $query = $this->db->query($sql);
        $data['account_data'] = $query->result();
        $total = count($query->result());
        if($total==0)
        {
            
            if($projectid == 0)
            {
            $account = array('userid'=>$this->session->userdata('uid'),
                'account_name'=>$account_name,
                'adwords_status'=>0,
                'status'=>0,
                'added'=>$now);
             $this->db->insert('feedwize_user_accounts', $account);
             $result['account_created'] = 1;
             $result['account_existing'] = 0;
            }
            else
            {
                $account = array(
                'account_name'=>$account_name,
                'updated'=>$now);
             
             $this->db->where('id', $projectid);
             $this->db->update('feedwize_user_accounts', $account);

             $result['account_updated'] = 1;
             $result['account_existing'] = 0;
            }
             
        }
        else
        {
            $result['account_created'] = 0;
            $result['account_existing'] = 1;
            $result['account_updated'] = 0;
        }
        return $result;
    }
    
    public function list_accounts()
    {
        $sql = "SELECT * FROM feedwize_user_accounts WHERE deletion=0 AND  userid=".$this->session->userdata('uid')." ORDER BY status DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_account_byid($accountid)
    {
        $sql = "SELECT * FROM feedwize_user_accounts WHERE deletion=0 AND  userid=".$this->session->userdata('uid')." AND id=".$accountid;
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function delete_account_byid($accountid)
    {
        $now = date('Y-m-d H:i:s');
         $account = array(
                'deletion'=>1,
                'updated'=>$now);
             
             $this->db->where('id', $accountid);
             $this->db->update('feedwize_user_accounts', $account);
             return true;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}