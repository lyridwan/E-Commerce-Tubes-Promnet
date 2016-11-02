<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
	protected $_ci;
	function __construct(){
		$this->_ci =&get_instance();
		$this->_ci->load->model('ph_model');
	}
	
	function load($template, $data = null){
		$data['d_kategori'] = $this->_ci->ph_model->menu_kategori(0);
		$data['contents'] = $this->_ci->load->view($template, $data, true);
		$this->_ci->load->view('header.php', $data);
		$this->_ci->load->view('trending_items.php', $data);
		$this->_ci->load->view('web.php', $data);
		
	}

	function load2($template, $data = null){
		$data['contents'] = $this->_ci->load->view($template, $data, true);
		$this->_ci->load->view('template.php', $data);
	}

	function load3($template, $data = null, $header_content){
		$data['d_kategori'] = $this->_ci->ph_model->menu_kategori(0);
		$data['contents'] = $this->_ci->load->view($template, $data, true);
		$data['header_content'] = $header_content;

		

		$this->_ci->load->view('header2.php', $data);
		$this->_ci->load->view('web.php', $data);
		
	}
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */