<?php 
   // data sent in header are in JSON format
   header('Content-Type: application/json'); 
 
    $userFName  = $_POST['fname'];
    $userLName  = $_POST['lname'];
    $emailAddress  = $_POST['userEmail']; 
    $contactNumber  = $_POST['contactNumber'];
    $message  = $_POST['message']; 
 
    // Mail Address Where email will be submit  
    $to = $emailAddress;  
    $subject = "Contact Form, name: ".$userFName;
    $sendMessage = '';
    // Email Template
    $sendMessage = ' 
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">First Name</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $userFName . '</td>
            </tr>
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">Last Name</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $userLName . '</td>
            </tr>
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">Email Address</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $emailAddress . '</td>
            </tr>
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">Contact Number</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $contactNumber . '</td>
            </tr>
            <tr>
                <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="30%">Message</td>
                <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $message . '</td>
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
 
 