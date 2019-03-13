<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {


	 	public function index()
	{
	//	$this->load->helper(array('form','url'));
	//	$this->load->library(array('form_validation','session'));
    $this->load->view('header');

	  $this->load->view('login_form');

	  $this->load->view('footer');

  }

  public function login_validation()
  {
		$this->form_validation->set_rules('username','Username','required');
	  $this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
   {
     $username=$this->input->post('username');
		 $password=$this->input->post('password');
    // $this->load->model('Mymodel');


		 if($this->Mymodel->login_check($username,$password))
		 {
			 $session_data=array('username'=>$username );
			 $this->session->set_userdata($session_data);
			 redirect(base_url().'index.php/Log/enter');
	   	//$this->enter();
		 }

	 else
	 	{

			 $this->session->set_flashdata('error','Invalid Username or Password');
       redirect(base_url().'index.php/Log/index');
	 }
 }
 else
  {
   $this->index();
 }
 }
 public function enter(){
	 if($this->session->userdata('username')!='')
	 {
		   $this->load->view('welc.php');
      $this->load->view('log_success');
			$this->load->view('footer');

	 }
	 else{ redirect(base_url().'Log/index');	 }
 }

 public function logout()
 {
	 $this->session->unset_userdata('username');
   redirect(base_url().'index.php/Log/index');
 }
 public function store_index()
 {
	 if($this->session->userdata('username')!="")
	 {
	 $this->load->view('welc.php');
	 $spares['a']= $this->Mymodel->storefetch();
	 $this->load->view('store.php',$spares);
	// $this->load->view('footer');
 }
 else {	 redirect(base_url().'index.php/Log/index');  }
 }
 public function profiles()
 {
	 if($this->session->userdata('username')!="")
  {
  $this->load->view('welc.php');
  $this->load->view('profile.php');
//	$prof['p']= $this->Mymodel->();
//	$this->load->view('profile.php',$prof);
	$this->load->view('footer');
 }
 else { redirect(base_url().'index.php/Log/index'); }
 }
public function profilefetch()
{
	$this->load->view('welc.php');
	$busno=$this->input->post('busno');
	$prof['p']=$this->Mymodel->profile($busno);
	$this->load->view('vehprof.php',$prof);
}
 public function addspare()
 {
	 $this->load->view('addspare.php');
 }
 public function add_spare_db()
 {
	 $this->form_validation->set_rules('name','Name','required');
	 $this->form_validation->set_rules('brand','Brand','required');
	 if($this->form_validation->run())
	{
	$name=$this->input->post('name');
	$brand=$this->input->post('brand');
	$cost=$this->input->post('cost');
	$quantity=$this->input->post('quantity');
  $newspare['n']=$this->Mymodel->newspare($name,$brand,$cost,$quantity);
	 redirect(base_url().'index.php/Log/store_index');
 }
 else
	{

	 $this->session->set_flashdata('error','Enter details');
		 redirect(base_url().'index.php/Log/addspare');
 }
}

public function edit($id)
{

	$data['info']=$this->Mymodel->editdb($id);
	$this->load->view('editdb.php',$data);
}

public function update_spare($id)
{
	$this->form_validation->set_rules('name','Name','required');
  $this->form_validation->set_rules('brand','Brand','required');
  if($this->form_validation->run())
 {
 $name=$this->input->post('name');
 $brand=$this->input->post('brand');
 $cost=$this->input->post('cost');
 $quantity=$this->input->post('quantity');
 $newspare['n']=$this->Mymodel->update_spare($name,$brand,$cost,$quantity,$id);
  redirect(base_url().'index.php/Log/store_index');
 }
 else
 {

  $this->session->set_flashdata('error','Enter details');
 	 redirect(base_url().'index.php/Log/edit/'.$id);
 }
}
 public function search()
 {
	$name=$this->input->post('name');
  $data['p']=$this->Mymodel->search($name);
  $this->load->view('search_result.php',$data);
 }

}?>
