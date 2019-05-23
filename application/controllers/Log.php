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
//--------------------------------------------------------------------------------------
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
 //----------------------------------------------------------------------------------
 public function enter(){

	 if($this->session->userdata('username')!='')
	 {

		  $this->load->view('welc1.php');
			$this->load->view('log_success');

			$this->load->view('notifications.php');
			$this->load->view('footer');

	 }
	 else
	 {
		  redirect(base_url().'Log/index');
			 }
 }
 //----------------------------------------------------------------------------------
 public function logout()
 {
	 if($this->session->userdata('username')!="")
	{
	 $this->session->unset_userdata('username');
   redirect(base_url().'index.php/Log/index');
 }
 else {	 redirect(base_url().'index.php/Log/index');  }
 }
 //----------------------------------------------------------------------------------
 public function store_index()
 {
	 if($this->session->userdata('username')!="")
	{
	 $this->load->view('welc1.php');
	 $this->load->view('spare_categories');
 }
 else {	 redirect(base_url().'index.php/Log/index');  }

 }
 //----------------------------------------------------------------------------------

 public function store_index1()
 {
	 if($this->session->userdata('username')!="")
	 {
	 $this->load->view('welc1.php');
	 $spares['a']= $this->Mymodel->storefetch();
	 $this->load->view('store.php',$spares);
	// $this->load->view('footer');
 }
 else {	 redirect(base_url().'index.php/Log/index');  }
}
//----------------------------------------------------------------------------------

 public function profiles()
 {
	 if($this->session->userdata('username')!="")
  {
  $this->load->view('welc1.php');
  $this->load->view('profile.php');
//	$prof['p']= $this->Mymodel->();
//	$this->load->view('profile.php',$prof);
	$this->load->view('footer');
 }
 else { redirect(base_url().'index.php/Log/index'); }
 }
 //----------------------------------------------------------------------------------

public function profilefetch()
{
	if($this->session->userdata('username')!="")
 {
	$this->load->view('welc1.php');
	$busno=$this->input->post('busno');
	$prof['p']=$this->Mymodel->profile($busno);
	$this->load->view('vehprof.php',$prof);
}
else {	 redirect(base_url().'index.php/Log/index');  }

}
//----------------------------------------------------------------------------------

 public function addspare()
 {
	 if($this->session->userdata('username')!="")
	 {
	 $this->load->view('addspare.php');
 }
	 else {	 redirect(base_url().'index.php/Log/index');  }

 }
 //----------------------------------------------------------------------------------

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
	$set=$this->input->post('sets');
  $newspare['n']=$this->Mymodel->newspare($name,$brand,$cost,$quantity,$set);
	 redirect(base_url().'index.php/Log/store_index1');
 }
 else
	{

	 $this->session->set_flashdata('error','Enter details');
		 redirect(base_url().'index.php/Log/addspare');
 }
}
//----------------------------------------------------------------------------------

public function edit($id)
{
	if($this->session->userdata('username')!="")
 {
	$data['info']=$this->Mymodel->editdb($id);
	$this->load->view('editdb.php',$data);
}	else {	 redirect(base_url().'index.php/Log/index');  }


}
//----------------------------------------------------------------------------------

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
  redirect(base_url().'index.php/Log/store_index1');
 }
 else
 {

  $this->session->set_flashdata('error','Enter details');
 	 redirect(base_url().'index.php/Log/edit/'.$id);
 }
}
//----------------------------------------------------------------------------------

 public function search()
 {
	 if($this->session->userdata('username')!="")
	{
	$name=$this->input->post( 'name');
  $data['p']=$this->Mymodel->search($name);
  $this->load->view('search_result.php',$data);
}
	else {	 redirect(base_url().'index.php/Log/index');  }

 }

 public function consume($id)
 {

	 if($this->session->userdata('username')!="")
	{
 	$data['info']=$this->Mymodel->editdb($id);
 	$this->load->view('consume.php',$data);
}
else {	 redirect(base_url().'index.php/Log/index');  }

 }
 //----------------------------------------------------------------------------------

public function spare_not()
{
	if($this->session->userdata('username')!="")
 {
  $this->load->view('welc1.php');
  $spares['a']= $this->Mymodel->notifications();
	$this->load->view('spare_not.php',$spares);
	$this->load->view('footer');
}
else {	 redirect(base_url().'index.php/Log/index');  }


}

//----------------------------------------------------------------------------------

public function feesdetails()
{
	if($this->session->userdata('username')!="")
 {
	$this->load->view('welc1.php');
  $spares['a']= $this->Mymodel->fees();
	$this->load->view('fees_details.php',$spares);
	$this->load->view('footer');

}
	else {	 redirect(base_url().'index.php/Log/index');  }

}
//----------------------------------------------------------------------------------

public function fuelprofile()
{
	if($this->session->userdata('username')!="")
 {
	$this->load->view('welc1.php');
	$this->load->view('vehiclereport.php');
	$this->load->view('footer');
}
	else {	 redirect(base_url().'index.php/Log/index');  }

}
//----------------------------------------------------------------------------------
public function spareset($set)
{
	if($this->session->userdata('username')!="")
 {
	$this->load->view('welc1.php');
	$spare['a']=$this->Mymodel->spareset($set);
	$this->load->view('spareset.php',$spare);
	$this->load->view('footer');
}
 else {	 redirect(base_url().'index.php/Log/index');  }
}
//----------------------------------------------------------------------------------
public function service()
{
	if($this->session->userdata('username')!="")
{
	$this->load->view('welc1.php');
	$this->load->view('servicedash.php');
	$this->load->view('footer');


}
else {	 redirect(base_url().'index.php/Log/index');  }
}
}
?>
