<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log2 extends CI_Controller {

function stud_db()
{

   $this->load->view('welc.php');
  // $countcol1['b']=$this->MyModel1->getcount('buswise');
   //$countcol2['d']=$this->MyModel1->getcount('deptwise');
   //$countcol3['s']=$this->MyModel1->getcount('stopwise');
   //$countcol4['y']=$this->MyModel1->getcount('yearwise');

   $this->load->view('stud_dash');//$countcol1,$countcol2,$countcol3,$countcol4);

}

//---------------------------------------------------------------------------------------------------------

public function edit($id)
{
	$data['info']=$this->MyModel1->editdb($id);

	$this->load->view('edit_stud_db.php',$data);
}

//---------------------------------------------------------------------------------------------------------

public function update_stud($id)
{
  $y=$this->uri->segment(4);
  $this->form_validation->set_rules('name','Name','required');
  $this->form_validation->set_rules('year','Year','required');
  $this->form_validation->set_rules('department','Department','required');
  $this->form_validation->set_rules('bus_no','Bus Number','required');
  $this->form_validation->set_rules('board_pt','Boarding point','required');
  $this->form_validation->set_rules('fees','Fees','required');

  if($this->form_validation->run())
  {
  $name=$this->input->post('name');
  $roll_no=$this->input->post('roll_no');
  $year=$this->input->post('year');
  $department=$this->input->post('department');
  $bus_no=$this->input->post('bus_no');
  $board_pt=$this->input->post('board_pt');
  $fees=$this->input->post('fees');
  $bill_no=$this->input->post('bill_no');
  $status=$this->input->post('status');
  $newstudent['n']=$this->MyModel1->update_student($name,$roll_no,$year,$department,$bus_no,$board_pt,$fees,$bill_no,$status,$id);
  redirect(base_url().'index.php/Log2/studentlist/'.$y);
  }
  else
  {

  $this->session->set_flashdata('error','Enter details');
    redirect(base_url().'index.php/Log2/edit'.$id);
  }
}

//---------------------------------------------------------------------------------------------------------

public function studentlist($y)
{
  if($this->session->userdata('username')!="")
  {

  $this->load->view('welc.php');
  $students['a']= $this->MyModel1->studentlist_fetch($y);
  $this->load->view('studentlist.php',$students);

 // $this->load->view('footer');
}

//---------------------------------------------------------------------------------------------------------

}
public function addstud()
{
   $this->load->view('welc.php');
  $this->load->view("addstud.php");

}
//---------------------------------------------------------------------------------------------------------------
public function route_category()
{
  $this->load->view('welc.php');

  $this->load->view('routelist.php');
}

//---------------------------------------------------------------------------------------------------------
public function routewise($route)
{
  $this->load->view('welc.php');
  $students['a']= $this->MyModel1->routelist_fetch($route);
  $this->load->view('list.php',$students);
}
//----------------------------------------------------------------------------------------------------------
public function add_stud_db()
{
  $this->form_validation->set_rules('name','Name','required');
  $this->form_validation->set_rules('year','Year','required');
  $this->form_validation->set_rules('department','Department','required');
  $this->form_validation->set_rules('bus_no','Bus Number','required');
  $this->form_validation->set_rules('board_pt','Boarding point','required');
  $this->form_validation->set_rules('fees','Fees','required');

  if($this->form_validation->run())
 {
 $name=$this->input->post('name');
 $roll_no=$this->input->post('roll_no');
 $year=$this->input->post('year');
 $department=$this->input->post('department');
 $bus_no=$this->input->post('bus_no');
 $board_pt=$this->input->post('board_pt');
 $fees=$this->input->post('fees');
 $bill_no=$this->input->post('bill_no');
 $status=$this->input->post('status');
  $newstudent['n']=$this->MyModel1->newstudent($name,$roll_no,$year,$department,$bus_no,$board_pt,$fees,$bill_no,$status);
  redirect(base_url().'index.php/Log2/stud_db');
}
else
 {

  $this->session->set_flashdata('error','Enter details');
    redirect(base_url().'index.php/Log2/addstud');
}
}

//---------------------------------------------------------------------------------------------------------

function stud_index()
{

}
}?>
