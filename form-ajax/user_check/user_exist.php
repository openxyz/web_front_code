<?php   
$name = $_GET['name'];

//print "亲爱的$name,我收到你的信，这是回信！！！<br/>" ;
print is_exist($name) ;

function is_exist($name){
  $users = array('tom','john','lili');
  return in_array($name,$users);
}


?>
