<?php
class Mymodel extends CI_Model
{
/*   public function insert_db()
   {
   	     $table_data=array('NAME'=>$_POST['username'],'password'=>md5($_POST['password']),'Mail'=>$_POST['email']);

                        $this->db->insert('details',$table_data);
   }
   public function getdb(){
   	 $query=$this->db->get_where('details',array('NAME'=>$this->session->userdata('curr_user')));
             return $query->result_array();
   }
}*/

  public function login_check($username,$password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get('users');

    if($query->num_rows() > 0 )
    {
      return true;
    }
    else {
      return false;
    }
  }
  public function fetch_data()
  {
    $this->db->select("*");
    $this->db->from('user');
    $query=$this->db->get();
    return $query;
  }
  public function storefetch()
  {
    $this->db->select("*");
    $this->db->from('store');
    $query=$this->db->get();
    return $query;
  }

  public function profile($no)
  {

    $this->db->select("*");
    $this->db->from('bus');
    $this->db->where('busno',$no);
    $query=$this->db->get();
    return $query;
  }
  public function newspare($name,$brand,$cost,$quantity)
  {

    $data=array('spare'=>$name,'brand'=>$brand,'cost'=>$cost,'quantity'=>$quantity);
    $this->db->insert('store',$data);
  }

  public function sparetable($search){

        $query = $this
                ->db
                ->select('*')
                ->from('store')
                ->like('name',$search)
                ->or_like('brand',$search)
                ->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }

}
public function editdb($id)
{
  $this->db->select('*');
  $this->db->from('store');
  $this->db->where('id',$id);
  $query=$this->db->get();
  return $query;

}
public function update_spare($name,$brand,$cost,$quantity,$id)
{
  $data=array('spare'=>$name,'brand'=>$brand,'cost'=>$cost,'quantity'=>$quantity);
  $this->db->where('id',$id);
  $this->db->update('store',$data);

}

public function search($name)
{
  $this->db->select('*');
  $this->db->from('store');
  $this->db->where('spare',$name);
  $query=$this->db->get();
  return $query;
}
}
?>
