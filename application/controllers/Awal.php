<?php

class Awal extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('html/index');
		$this->load->view('templates/footer');
	}
	public function home()
	{
		$data['user']=$this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('html/home');
		$this->load->view('templates/footer');
	}
	public function property()
	{
		$this->load->view('templates/header');
		$this->load->view('html/property');
		$this->load->view('templates/footer');
	}
	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('html/contact');
		$this->load->view('templates/footer');
	}
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about');
		$this->load->view('templates/footer');
	}
	public function about2()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about2');
		$this->load->view('templates/footer');
	}
		public function about3()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about3');
		$this->load->view('templates/footer');
	}
	public function about4()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about4');
		$this->load->view('templates/footer');
	}
		public function about5()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about5');
		$this->load->view('templates/footer');
	}
	public function about6()
	{
		$this->load->view('templates/header');
		$this->load->view('html/about6');
		$this->load->view('templates/footer');
	}
		public function tentang()
	{
		$this->load->view('templates/header');
		$this->load->view('html/tentang');
		$this->load->view('templates/footer');
	}
	public function pesanlangsung()
	{
		$this->load->view('templates/header');
		$this->load->view('html/pesanlangsung');
		$this->load->view('templates/footer');
	}
	public function loginawal()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('pass', 'Pass', 'trim|required');
		if($this->form_validation->run()==false)
		{
		$this->load->view('templates/atas');
		$this->load->view('html/loginawal');
		}
		else
		{
			$this->masuk();
		}
		
	}
	private function masuk()
	{
		$email = $this->input->post('email');
		$pass= $this->input->post('pass');
		$user = $this->db->get_where('user', ['email'=>$email])->row_array();
		if($user)
		{

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Email is Not registered!</div>');
			redirect('awal/home');
			}else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Email is Not registered!</div>');
			redirect('awal/loginawal');
			}

	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[3]', ['min_length' =>'Passworrd too short']);
		if($this->form_validation->run() == false)
		{
		$this->load->view('templates/atas');
		$this->load->view('html/login');
		$this->load->view('templates/akhir');
		}
		else
		{
		$data= 
		[

			'name'=> htmlspecialchars ($this->input->post('name', true)),

			'email'=>htmlspecialchars($this->input->post('email', true)) ,

			'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),

			'role_id'=> 2,
			'date_created'=>time()
		];
		$this->db->insert('user', $data);
		$this->session->set_flashdata('message','<div class="alert-success" role="alert">
			Your account has been created</div>');
		redirect('awal/loginawal');

		}

	}

}
