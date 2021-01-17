<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    function __Construct(){
        parent::__Construct ();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('post');
        }

        public function index() {

        $data = array();

        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        $data['posts'] = $this->post->getRows();
        $data['title'] = 'Post Archive';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
        }

        public function view($id){
        $data = array();

        if(!empty($id)){
        $data['posts']  = $this->post->getRows($id);
        $data['title'] = 'Post Archive';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
        }else{
            redirect('/posts');
        }
    }

    public function add(){
        $data = array();
        $postData = array();

        if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('title', 'post title', 'required');
            $this->form_validation->set_rules('content', 'post content', 'required');
            $this->form_validation->set_rules('description', 'post description', 'required');
            $this->form_validation->set_rules('url', 'post url', 'required');
            $this->form_validation->set_rules('tags', 'post tags', 'required');
            $this->form_validation->set_rules('keyword', 'post keyword', 'required');
            $this->form_validation->set_rules('author', 'post author', 'required');

            $postData = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'description' => $this->input->post('description'),
                'url' => $this->input->post('url'),
                'tags' => $this->input->post('tags'),
                'keyword' => $this->input->post('keyword'),
                'author' => $this->input->post('author')
            );

            if($this->form_validation->run() == true){
                $insert = $this->post->insert($postData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Post has been added successfully.');
                    redirect('/posts');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }

        $data['post'] = $postData;
        $data['title'] = 'Create Post';
        $data['action'] = 'Add';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/add', $postData);
        $this->load->view('templates/footer');
    }

    public function edit($id){
        $data = array();
        $postData['post'] = $this->post->getRows($id);

         if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('title', 'post title', 'required');
            $this->form_validation->set_rules('content', 'post content', 'required');
            $this->form_validation->set_rules('description', 'post description', 'required');
            $this->form_validation->set_rules('url', 'post url', 'required');
            $this->form_validation->set_rules('tags', 'post tags', 'required');
            $this->form_validation->set_rules('keyword', 'post keyword', 'required');
            $this->form_validation->set_rules('author', 'post author', 'required');

            $postData = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'description' => $this->input->post('description'),
                'url' => $this->input->post('url'),
                'tags' => $this->input->post('tags'),
                'keyword' => $this->input->post('keyword'),
                'author' => $this->input->post('author')
            );

            if($this->form_validation->run() == true){
                $update = $this->post->update($postData, $id);
                if($update){
                    $this->session->set_userdata('success_msg', 'Post has been updated successfully.');
                    redirect('/posts');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['post'] = $postData;
        $data['title'] = 'Edit Post';
        $data['action'] = 'Add';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/edit', $postData);
        $this->load->view('templates/footer');

    }


    public function delete($id){
        if($id){
            $delete = $this->post->delete($id);

            if($delete){
                $this->session->set_userdata('success_msg', 'Post has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }
        redirect('/posts');
    }


}
?>