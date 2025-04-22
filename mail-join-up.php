<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$clientEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$companyName = "Dataflow Connect, S.A.";



$target = 'uploads/' . basename($_FILES['cv']['name']);

if (move_uploaded_file($_FILES['cv']['tmp_name'], $target)) {


  $fp = fopen($target, "r");
}


$subject = 'Dev - Career Inquiry  - ' . $name . ' - ' . $email;

$formContent = "<b>Name: </b>" . $name .
  "<br><b>Email: </b>" . $clientEmail;

$data = json_encode($formContent);
$subjectJson = json_encode($subject);

$content_name = $_FILES["cv"]["name"];
$content = base64_encode(file_get_contents($target));
$content_type = $_FILES['cv']['type'];

$some_data = '{
            "From": "supportdesk@dataflowconnect.biz",
            "To": "supportdesk@dataflowconnect.biz",
            "Subject": ' . $subjectJson . ',              
            "Attachments": [
                {
                  "Name": "' . $content_name . '",
                  "Content": "' . $content . '",
                  "ContentType": "' . $content_type . '"
                }
              ],
              "HtmlBody": ' . $data . ',  
            "MessageStream": "outbound"
        }';


$toSenderEmail = '{
  "From":"supportdesk@dataflowconnect.biz",
  "To": "' . $clientEmail . '",
  "Subject": "We have received your email!",
  "HtmlBody": "Hi ' . $firstname . ' , <br><br> Your email has been received and as soon as an agent is available they will contact you. <br><br> Regards, </br> ' . $companyName . '  ",
  "MessageStream": "outbound"
}';

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

  header("Location: ./?page=contact-us&email-sent=success&lang=".$_REQUEST['lang']);

} else {
  header("Location: ./?page=contact-us&email-sent=failed&lang=".$_REQUEST['lang']);
  //   echo "Error: " . curl_error($cSession) . " ";
}


// echo "Success";
?>