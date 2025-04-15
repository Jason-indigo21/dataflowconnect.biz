<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$captcha = $_POST['captcha'];


$subject = 'Inquiry  - ' . $name . ' ' . $surname . ' - ' . $email;

$formContent = "<b>Name: </b>" . $name .
  "<br><b>Email: </b>" . $email .
  "<br><b>Phone Number: </b>" . $phone .
  "<br><b>Message: </b>" . $message;

$data = json_encode($formContent);
$subjectJson = json_encode($subject);

$some_data = '{
  "From":"supportdesk@dataflowconnect.biz",
  "To": "christine.carillo@indigo21.com",
  "Subject": ' . $subjectJson . ',
  "HtmlBody": ' . $data . ',
  "MessageStream": "outbound"
}';


$toSenderEmail = '{
  "From":"supportdesk@dataflowconnect.biz",
  "To": '. $email .',
  "Subject": "We have received your email!",
  "HtmlBody": "Hi ' . $name . ' , <br><br> Your email has been received and as soon as an agent is available they will contact you. <br><br> Regards, </br> Axento Digital Solutions ",
  "MessageStream": "outbound"
}';

if($captcha) {
$cSession = curl_init();
// Step 2
curl_setopt($cSession, CURLOPT_URL, "https://api.postmarkapp.com/email");
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);

curl_setopt($cSession, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token:0eff8107-c3f8-47d9-bf00-ea7299b60151'));

curl_setopt($cSession, CURLOPT_POSTFIELDS, $some_data);

curl_setopt($cSession, CURLOPT_HEADER, false);
// Step 3
$result = curl_exec($cSession);
// Step 4
curl_close($cSession);
// Step 5
// echo $some_data;

if ($result) {
  // echo $result;
  curl_setopt($cSession, CURLOPT_URL, "https://api.postmarkapp.com/email");
  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($cSession, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token:0eff8107-c3f8-47d9-bf00-ea7299b60151'));
  curl_setopt($cSession, CURLOPT_POSTFIELDS, $toSenderEmail);
  curl_setopt($cSession, CURLOPT_HEADER, false);
  curl_exec($cSession);
  curl_close($cSession);

  header("Location: ./?page=contact-us&email-sent=success");

} else {
  header("Location: ./?page=contact-us&email-sent=failed");
  //   echo "Error: " . curl_error($cSession) . " ";
}

}else{
  header("Location: ./?page=contact-us&email-sent=failed");
}
?>