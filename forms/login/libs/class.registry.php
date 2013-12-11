<?php



class registry  implements ArrayAccess
{
    private $user ,$pass;
    public  $info = array() ;


  function checkuser($email,$pass , $status){
  	
  	
    $db = $GLOBALS['db'];

    if($status == 'ad')
	$table = 'customer' ;
	else 
    $table = 'users' ;
	
	
     if( $_POST[$email] && $_POST[$pass]){
         $email     =  addslashes($_POST[$email]);
      	 $password  =  md5($_POST[$pass]);
           
    }else{
            
    	 $email    = addslashes($_COOKIE["$status"."_".$email]);
         $password = ($_COOKIE["$status"."_".$pass]);

    }
    
    	$this->info = $db->query_self("
    	 select * from `".$table."` where `email` = '".($email)."'
    	 and  `password` = '$password'
    	 limit 1");
    	 
    	if($this->info)
    	   return $this->info;
    	else
     	   return false;
  }

function returnInfo($user,$pass){
      $db = $GLOBALS['db'];

    if($_COOKIE[$user]){
    	$username = $_COOKIE[$user];
    	$password = $_COOKIE[$pass];

    }else{
        $username = $_POST[$user];
    	$password = md5($_POST[$pass]);

    }

    	$this->info = $db->query_self("
    	select * from `adminstrator` where user = '".htmlspecialchars($username)."'
    	and  pass = '$password'
    	");


    	if($this->info)
    	return true;
    	else
    	return false;
    }


public function offsetGet($key){
     return   $info[$key];
 }

 public function offsetExists($key){}

 public function offsetSet($key,$name){}

 public function offsetUnset($key){}



}





?>