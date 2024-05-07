<?php
include_once("conf.php");
include_once("models/Member.class.php");
include_once("views/Member.view.php");

class MemberController {
  private $member;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->getAllMembers();
    $data = array();
    while($row = $this->member->getResult()){
      array_push($data, $row);
    }
    $this->member->close();

    $view = new MemberView();
    $view->render($data);
  }

  
  function add($data){
    $this->member->open();
    $this->member->addMember($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function edit($data){
    $this->member->open();
    $this->member->updateMember($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->member->open();
    $this->member->deleteMember($id);
    $this->member->close();
    
    header("location:index.php");
  }

}
?>
