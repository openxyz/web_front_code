<?php
   
  file_put_contents('./data.txt', $_POST);  
   
  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // 来自 XMLHttpRequest 
    echo  "你提交到服务端的数据已经被保存！";    
    
  }else{
  
      var_export($_POST);
      header( 'Location: ./form_ajax.htm' ) ;
  }
 
?>
