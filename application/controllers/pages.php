<?php

class pages extends CI_Controller
{

    public function contact()
    {

        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('frm_contact');
        $this->load->view('theme/footer');


    }


    public function about()
    {

        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('about');
        $this->load->view('theme/footer');

    }

    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }

    public function login()
    {
        $data = array();
        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('login',$data);
        $this->load->view('theme/footer');
    }


    public function Check() {
        if ($this->input->post()) {
            $user = $this->input->post('user');
            $pass = $this->input->post('password');

            $usuario = $this->Login_model->login($user,$pass);
            if ($usuario) {
                $usuario_data = array(
                    'id' => $usuario->id,
                    'nombre' => $usuario->user,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                redirect('admin/dashboard');
            } else {
                redirect(base_url()."pages/login");
            }
        } else {
            $this->login();
        }
    }
    public function logueado() {
        if($this->session->userdata('logueado')){
            $data = array();
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('admin/dashboard', $data);
        }else{
            redirect(base_url()."pages/login");
        }
    }
    public function logout() {
        $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		redirect(base_url()."pages/login", 'refresh');
    }
	
	
    public function pqr()
    {
        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('pqr');
        $this->load->view('theme/footer');
    }



    public function menu()
    {
        $this->load->model('Productos_model');
        $data = array('productos' => $this->Productos_model->getProduct(),);
        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('menu',$data);
        $this->load->view('theme/footer');

    }
	
	public function compra()
    {
        
        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('compra');
        $this->load->view('theme/footer');

    }
	
		
	public function agregarCompra()
	{
	$info = array(
        'id'      => $this->input->post(idProducto),
        'qty'     => $this->input->post(quantity_input),
        'price'   => $this->input->post(Price),
        'name'    => $this->input->post(Nombre_Producto),
        'options' => $this->input->post(opciones),
);

	$this->cart->insert($info);
	redirect('pages/mostrarCompra');
   }
   
   public function mostrarCompra()
	{
        
	$this->load->view('theme/header');
    $this->load->view('navegador');
    $this->load->view('CheckBuy');
    $this->load->view('theme/footer');
	

   }
   
   public function cancelarCompras()
	{
        
	$this->cart->destroy();
	redirect('pages/mostrarCompra');

   }
 
 
}
