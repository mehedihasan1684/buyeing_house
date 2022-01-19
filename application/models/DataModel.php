<?php
class DataModel extends CI_Model
{
     function __construct()
     {
           parent::__construct();
     }
     public function get_blog()
     {
          $blog = $this->db->get('blog');
          return $blog->result();
   
     }
      public function get_product($title,$photo,$category,$details,$date)
     {
           $this->db->get_product('blog', array('title' -> $title, 'photo' ->$photo, 'category' -> $category, 'details' -> $details, 'date' -> $date));
         
         //  return $blog->row();
     //}
 //     public function post_blog($data)
 //     {
 //          $this->db->insert('blog', $data);
 //     }
 //     public function update_blog($data, $id)
 //     {
 //          $this->db->where('id', $id);
 //          $this->db->update('blog', $data);
 //     }
 //     public function delete_blog($id)
 //     {
 //          $this->db->where('id', $id);
 //          $this->db->delete('blog');

  }

}
 // public function get_product()
 //    {
 //        $this->db->select('products.*,product_category.category');
 //        $this->db->from('products');
 //        $this->db->join('product_category', 'product_category.id = products.categoryID');
 //        $query_result = $this->db->get();
 //        $r = $query_result->result();
 //        return $r;


 //        // $data = $this->db->get('products');
 //        // return $data->result();
 //    }