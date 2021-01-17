<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model{

    function getRows($id = ""){
        if(!empty($id)){
            $this->db->select("*");
            $this->db->from('post_db.posts');
            $this->db->join('post_db.posts_extra', 'posts_extra.id = posts.id');
            $this->db->join('post_author.author', 'author.id = posts.id');
            $this->db->where('posts.id', $id);
            $query = $this->db->get();
            $all2= $query->result();
            return($all2);
        }else{
            $this->db->select("*");
            $this->db->from('post_db.posts');
            $this->db->join('post_db.posts_extra', 'posts_extra.id = posts.id');
            $this->db->join('post_author.author', 'author.id = posts.id');
            $query = $this->db->get();
            $all2= $query->result_array();
            return($all2);
       }
    }

    public function insert($data = array()) {

        $db1 = array(
            'title'=>$data['title'],
            'content'=>$data['content'],
            'description'=>$data['description']
        );
        $db2 = array(
            'url'=>$data['url'],
            'tags'=>$data['tags'],
            'keyword'=>$data['keyword']

        );
        $db3 = array(
            'author'=>$data['author']
        );

        $insert = $this->db->insert('post_db.posts', $db1);
        $insert = $this->db->insert('post_db.posts_extra', $db2);
        $insert = $this->db->insert('post_author.author', $db3);

        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function update($data, $id) {
        if(!empty($data) && !empty($id)){

        $db1 = array(
            'title'=>$data['title'],
            'content'=>$data['content'],
            'description'=>$data['description']
        );
        $db2 = array(
            'url'=>$data['url'],
            'tags'=>$data['tags'],
            'keyword'=>$data['keyword']

        );
        $db3 = array(
            'author'=>$data['author']

        );
            $update = $this->db->update('post_db.posts', $db1, array('id'=>$id));
            $update = $this->db->update('post_db.posts_extra', $db2, array('id'=>$id));
            $update = $this->db->update('post_author.author', $db3, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

    public function delete($id){
        $delete = $this->db->delete('post_db.posts', array('id'=>$id));
        $delete = $this->db->delete('post_db.posts_extra', array('id'=>$id));
        $delete = $this->db->delete('post_author.author', array('id'=>$id));
        return $delete?true:false;
    }

}
?>