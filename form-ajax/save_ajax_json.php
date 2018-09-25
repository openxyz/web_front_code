<?php
   
  file_put_contents('./data.txt', $_POST);  

  $msg = array(
    'title' => '消息' , // 也可能是警告、错误等
    'content' => "你提交到服务端的数据已经被保存！",    
  );

   
  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // 来自 XMLHttpRequest
    
    echo json_encode($msg);    
    
  }else{
  
    echo json_encode($msg);    
    //echo implode(':',$msg);
//      header( 'Location: ./form_ajax.htm' ) ;
  }
  

?>
