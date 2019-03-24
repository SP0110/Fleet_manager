<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log2 extends CI_Controller {

function stud_db()
{
   $this->load->view('welc.php');
   $this->load->view('stud_dash');

}
function addstud()
{
   $this->load->view('welc.php');
  $this->load->view("addstud.php");

}
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
function stud_index()
{

}
}?>
