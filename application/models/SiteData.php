<?php


class SiteData extends CI_Model {

        //public $User;
        //public $content;
        //public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function pushData($data)
        {
                $this->db->insert('news',$data);
        }
        public function pullData()
        {
                $query = $this->db->query
                (
                        'SELECT *
                        FROM news 
                        ORDER BY id 
                        DESC 
                        LIMIT 3'
                );
                $result = $query->result(); 
                return $result;
        }
        public function getByid($id)
        {
                $sql = 'SELECT *
                        FROM news 
                        WHERE id = ?';
                $query = $this->db->query($sql,array($id));
                return $query->result();

        }
        public function getBytag($tag)
        {
                $sql = 'SELECT *
                        FROM news
                        WHERE tag = ?';
                $query = $this->db->query($sql,array($tag));
                return $query->result();
        }
                
        public function updateData($id,$data)
        {
                $this->db->update('news',$data,array('id'=>$id));
        }

        public function loginData($data)
        {
                $sql = 'SELECT *
                        FROM login
                        WHERE username = ?
                        AND password = ?
                        ';
                $query = $this->db->query($sql,array('username'=>$data['username'],'password '=> $data['password']));
                if($query->num_row()>0)
                {
                        return true;
                }
                else
                {
                        return false;
                }
        }

        public function getUserID($user)
        {
                $sql = 'SELECT id
                        FROM login
                        WHERE username = ?';
                $query = $this->db->query($sql,$user);
                $result = $query->result();
                return $result;
        }


}

?>