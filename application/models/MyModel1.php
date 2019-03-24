<?php
class Mymodel1 extends CI_Model
{
  function newstudent($n,$r,$y,$d,$bn,$bp,$f,$bin,$s)
  {
    $data=array('name'=>$n,'roll_no'=>$r,'year'=>$y,'department'=>$d,'bus_no'=>$bn,'board_pt'=>$bp,'fees'=>$f,'bill_no'=>$bin,'status'=>$s);
    $this->db->insert('student_db',$data);

  }
  }?>
