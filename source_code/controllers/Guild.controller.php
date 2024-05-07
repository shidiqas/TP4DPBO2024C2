<?php
include_once("connection.php");
include_once("models/Guild.class.php");
include_once("views/Guild.view.php");

class GuildController {
  private $guild;

  function __construct(){
    $this->guild = new Guild(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->guild->open();
    $this->guild->getAllGuilds();
    $data = array();
    while($row = $this->guild->getResult()){
      array_push($data, $row);
    }

    $this->guild->close();

    $view = new GuildView();
    $view->render($data);
  }

  
  function add($data){
    $this->guild->open();
    $this->guild->addGuild($data);
    $this->guild->close();
    
    header("location:guild.php");
  }

  function edit($data){
    $this->guild->open();
    $this->guild->updateGuild($data);
    $this->guild->open();
    
    header("location:guild.php");
  }

  function delete($id){
    $this->guild->open();
    $this->guild->deleteGuild($id);
    $this->guild->close();
    
    header("location:guild.php");
  }
}
?>
