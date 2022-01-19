<?php
class Blog extends CI_Controller
{
     public function blog_list()
     {
          // $this->load->model('DataModel');
          $data['list'] = $this->DataModel->get_blog();
          $this->load->view('blog/blog_list', $data);
     
    }
    public function edit_blog($id)
     {
         echo $id;
    }
     public function delete($id)
     {
         echo $id;  
   //   }
   //   public function view($id)
   //   {
   //        echo $id;
   //   }
    }
    public function add_blog()
    {
      $this->load->view('blog/add_blog');
    }
    public function save_blog()
    {
      $title =$this->input->post('title');
      $photo =$this->input->post('photo');
      $category =$this->input->post('category');
     $details =$this->input->post('details');
     $date =$this->input->post('date');
     $this->DataModel->insert('$title,$photo,$category, $details,$date');
      redirect(base_url('Blog'), 'refresh');
   }
}