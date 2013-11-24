<?php

abstract class userobserver {
    abstract function update(user $user_in);
}

abstract class user {
    abstract function login(userobserver $observer_in);
    abstract function logout(userobserver $observer_in);
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class user_state extends userobserver {
    public function __construct() {
    }
    public function update(user $user) {    
    }
}

class system_users extends user {
    private $userid = NULL;
    private $observers = array();
    function __construct() {
    }
    function login(userobserver $observer_in) {
      //could also use array_push($this->observers, $observer_in);
      $this->observers[] = $observer_in;
    }
    function logout(userobserver $observer_in) {
      //$key = array_search($observer_in, $this->observers);
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }
    function updateuser_id($newFavorites) {
      $this->favorites = $newFavorites;
      $this->notify();
    }
    function get_userid() {
      return $this->userid;
    }
}
