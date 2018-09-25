<?php   
$name = $_POST['name'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

$err = '';
if(!is_valid($name)){
  $err .=  "用户名错误<br>";  
}

if(!is_match($pwd1,$pwd2)){
  $err .=  "密码不匹配<br>";
}

if(!is_unique($name)){
  $err .=  "该用户名已被占用<br>";
}

if(!$err){
  $err = '注册成功zz！';
}

echo $err;

function is_valid($name){
  return preg_match('/^[a-z|A-Z][a-z0-9A-Z]+$/',$name);
}

function is_match($pwd1,$pwd2){
  return  $pwd1 !='' && $pwd1 == $pwd2 ;
}

function is_unique($name){
  $users = array('tom','john','lili');
  return !in_array($name,$users);
}


?>
