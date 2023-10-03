<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    private $_table = "user_alif";

    public $id_alif;
    public $nama_alif;
    public $username_alif;
    public $password_alif;
    public $level_alif;

    public function rules()
    {
        return [
            ['field' => 'id_alif',
            'label' => 'Id',
            'rules' => ''],

            ['field' => 'nama_alif',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'username_alif',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password_alif',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level_alif',
            'label' => 'Level',
            'rules' => 'required']
        ];
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_alif)
    {
        return $this->db->get_where($this->_table, ["id_alif" => $id_alif])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_alif = $post["id_alif"];
        $this->nama_alif = $post["nama_alif"];
        $this->username_alif = $post["username_alif"];
        $this->password_alif = $post["password_alif"];
        $this->level_alif = $post["level_alif"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_alif = $post["id_alif"];
        $this->nama_alif = $post["nama_alif"];
        $this->username_alif = $post["username_alif"];
        $this->password_alif = $post["password_alif"];
        $this->level_alif = $post["level_alif"];
        return $this->db->update($this->_table, $this, array('id_alif' => $post['id_alif']));
    }

    public function caridata($keyword)
    {
	    if(!$keyword){
		return null;
	    }
	    $this->db->like('id_alif', $keyword);
	    $this->db->or_like('nama_alif', $keyword);
        $this->db->or_like('username_alif', $keyword);
	    $query = $this->db->get($this->_table);
	    return $query->result();
    }

    public function delete($id_alif)
    {
        return $this->db->delete($this->_table, array("id_alif" => $id_alif));
    }
}