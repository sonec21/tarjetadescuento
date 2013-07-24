<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('discount_model');
        $this->response_data  = new stdClass();

    }

    public function index()
    {
        $data = array();
        $data["food_discounts"] = (array)$this->discount_model->get_random_discounts(1);
        $data["bar_discounts"]   = (array)$this->discount_model->get_random_discounts(2);
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');

    }

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */