<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
$clientEmail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
$captcha = filter_var($_POST['captcha'],FILTER_SANITIZE_STRING);
$companyName= "Dataflow Connect, S.A.";

$subject = 'Dev -Inquiry  - ' . $name . ' - ' . $clientEmail;

$formContent = "<b>Name: </b>" . $name .
  "<br><b>Phone: </b>" . $phone .
  "<br><b>Email: </b>" . $clientEmail .
  "<br><b>Message: </b>" . $message;

$data = json_encode($formContent);
$subjectJson = json_encode($subject);

$some_data = '{
  "From":"supportdesk@dataflowconnect.biz",
  "To": "supportdesk@dataflowconnect.biz",
  "Subject": ' . $subjectJson . ',
  "HtmlBody": ' . $data . ',
  "MessageStream": "outbound"
}';


$toSenderEmail = '{
  "From":"supportdesk@dataflowconnect.biz",
  "To": "' . $clientEmail . '",
  "Subject": "We have received your email!",
  "HtmlBody": "Hi ' . $name . ' , <br><br> Your email has been received and as soon as an agent is available they will contact you. <br><br> Regards, </br>'.$companyName.'  ",
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

  curl_setopt($cSession, CURLOPT_URL, "https://api.postmarkapp.com/email");
  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($cSession, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token:0eff8107-c3f8-47d9-bf00-ea7299b60151'));
  curl_setopt($cSession, CURLOPT_POSTFIELDS, $toSenderEmail);
  curl_setopt($cSession, CURLOPT_HEADER, false);
  curl_exec($cSession);
  curl_close($cSession);
  // echo $result;
  header("Location: ./?page=contact-us&email-sent=success");

} else {
  header("Location: ./?page=contact-us&email-sent=failed");
    // echo "Error: " . curl_error($cSession) . " ";
}

}else{
  header("Location: ./?page=contact-us&email-sent=failed");
}
// echo "Success";
?>