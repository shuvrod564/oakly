<?php 
   // data sent in header are in JSON format
   header('Content-Type: application/json'); 
  
    $emailAddress  = $_POST['userEmail']; 
 
      // Mail Address Where email will be submit  
      $to = "hello@Oaklykochi.com"; 
      $subject = "Newsletter Subscription ";
      $sendMessage = '';
      // Email Template
      $sendMessage = ' 
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                  <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">Email Address</td>
                  <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $emailAddress . '</td>
              </tr> 
          </table>
      ';
     
  
      $header = "From:"+$email+" \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      // die($sendMessage);
      $retval = mail ($to,$subject,$sendMessage,$header);
      // message Notification
      if( $retval == true ) {
          echo json_encode(array(
          'response'=> 'true',
          'message' => 'Message sent successfully'
          ));  
      }else {
          echo json_encode(array(
              'response'=> 'false',
              'message' => 'Error sending message'
          ));
      } 
?>
 
 