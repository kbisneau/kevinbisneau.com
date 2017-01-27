<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class badges_model extends CI_Model {

  function __construct()
  {
       // Call the Model constructor
       parent::__construct();
  }

  public function checkbadge($pagename) {
    if ($this->session->$pagename != 1) {
      $this->session->$pagename = 1;
      $this->session->badges -= 1;
    }
  }

  function badges($usr) {
    /*
    $sql = "select badges from tbl_usrs where username = '" . $usr . "' and status = 'active'";
    $query = $this->db->query($sql);
    $result = $query->result();
    if ($query->num_rows() == 1) // Make sure there is only one record
     return $result[0]->badges;
     else
       return '';
       */
       if ($this->session->badges >0)
         return $this->session->badges;
      else
        return '';
  }

  public function showbadge($pagename) {
    if ($this->session->$pagename != 1) {
      echo '<span class="badge round">1</span>';
    }
  }

  public function hasbadge($pagename) {
    if ($this->session->$pagename == 1) {
      return 'class="strike"';
    }
  }

  public function completed($pagename) {
    if ($this->session->$pagename == 1) {
      return '<span class="complete">Completed</span>';
    }
    else
      return 'Not viewed';
  }

}
