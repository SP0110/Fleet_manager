<?php
class Mymodel1 extends CI_Model
{
  function newstudent($n,$r,$y,$d,$bn,$bp,$f,$bin,$s)
  {
    $data=array('name'=>$n,'roll_no'=>$r,'year'=>$y,'department'=>$d,'bus_no'=>$bn,'board_pt'=>$bp,'fees'=>$f,'bill_no'=>$bin,'status'=>$s);
    $this->db->insert('student_db',$data);

  }
  function getcount($cat)
  {
  $this->db->select('count');
  $this->db->from($cat);
  $query=$this->db->get();
  return $query;
  }

  function studentlist_fetch($y)
  {
    $this->db->select('*');
    $this->db->from('student_db');
    $this->db->where('year',$y);
    $query=$this->db->get();
    return $query;
  }
  public function editdb($id)
  {
    $this->db->select('*');
    $this->db->from('student_db');
    $this->db->where('id',$id);
    $query=$this->db->get();
    return $query;

  }

  public function update_student($n,$r,$y,$d,$bn,$bp,$f,$bin,$s,$id)
  {
    $data=array('name'=>$n,'roll_no'=>$r,'year'=>$y,'department'=>$d,'bus_no'=>$bn,'board_pt'=>$bp,'fees'=>$f,'bill_no'=>$bin,'status'=>$s);
    $this->db->where('id',$id);
    $this->db->update('student_db',$data);

  }

  public function routelist_fetch($route)
  {
    $this->db->select('*');
    $this->db->from('student_db');
    $this->db->where('board_pt',$route);
    $query=$this->db->get();
    return $query;

  }

  }?>
