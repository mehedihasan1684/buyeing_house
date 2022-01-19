<?php
class Buying_house extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }
    public function gallery()
    {
        $this->load->view('header');
        $this->load->view('gallery');
        $this->load->view('footer');
    }
    public function faq()
    {
        $this->load->view('header');
        $this->load->view('faq');
        $this->load->view('footer');
    }
    public function products()
    {
        $this->load->view('header');
        $this->load->view('products');
        $this->load->view('footer');
    }
    public function blog()
    {
        $this->load->view('header');
        $this->load->view('blog');
        $this->load->view('footer');
    }
    public function contact()
    {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function no_page()
    {
        $this->load->view('no_page');
    }
}

?>