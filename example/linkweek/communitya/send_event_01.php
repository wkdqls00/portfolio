<meta charset="utf-8">
<?php
if(isset($_POST['email'])) {
     
	$email_to = "olympicsports@naver.com";
	$email_subject = "[더 커뮤니티A] 체험 신청자 정보";
	$email_subject = '=?UTF-8?B?'.base64_encode($email_subject).'?=';

    function died($error) {
        // your error code can go here
        echo "<script> alert('메일발송을 실패하였습니다. 올바른 이메일 주소를 입력하세요.');";
		echo "history.go(-1);";
		echo "</script>";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['age']) ||
        !isset($_POST['postcode']) ||
        !isset($_POST['address']) ||
        !isset($_POST['detailAddress']) ||
        !isset($_POST['extraAddress']) ||
        !isset($_POST['room_radio']) ||
        !isset($_POST['accompany_name_first']) ||
        !isset($_POST['accompany_name_second']) ||
        !isset($_POST['accompany_name_third']) ||
        !isset($_POST['accompany_phone_first']) ||
        !isset($_POST['accompany_phone_second']) ||
        !isset($_POST['accompany_phone_third']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $telephone = $_POST['telephone']; // required
    $email_from = $_POST['email']; // required
    $age = $_POST['age']; // required
    $comments = $_POST['comments']; // required
    $postcode = $_POST['postcode']; // required
    $address = $_POST['address']; // required
    $detailAddress = $_POST['detailAddress']; // required
    $extraAddress = $_POST['extraAddress']; // required
    $room_radio = $_POST['room_radio']; // required
    $accompany_name_first = $_POST['accompany_name_first']; // required
    $accompany_name_second = $_POST['accompany_name_second']; // required
    $accompany_name_third = $_POST['accompany_name_third']; // required
    $accompany_phone_first = $_POST['accompany_phone_first']; // required
    $accompany_phone_second = $_POST['accompany_phone_second']; // required
    $accompany_phone_third = $_POST['accompany_phone_third']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "이름 : ".clean_string($first_name)."\n\n";
    $email_message .= "연락처 : ".clean_string($telephone)."\n\n";
    $email_message .= "이메일 : ".clean_string($email_from)."\n\n";
    $email_message .= "연령 : ".clean_string($age)."\n\n";
    $email_message .= "주소 : ".clean_string($postcode).clean_string($address).clean_string($detailAddress).clean_string($extraAddress)."\n\n";
    $email_message .= "객실 선택 : ".clean_string($room_radio)."\n\n";
    $email_message .= "첫 번째 동반자 정보 : ".clean_string($accompany_name_first).clean_string($accompany_phone_first)."\n\n";
    $email_message .= "두 번째 동반자 정보 : ".clean_string($accompany_name_second).clean_string($accompany_phone_second)."\n\n";
    $email_message .= "세 번째 동반자 정보 : ".clean_string($accompany_name_third).clean_string($accompany_phone_third)."\n\n";
    $email_message .= "　".clean_string($comments)."\n\n";
     
     
// create email headers
$headers = 'From: '.$email_from;
// 제목이 깨질경우 아래 캐릭터셋 적용

@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<script>
alert ("신청이 완료 되었습니다.\n신청 결과는 9/11일 개별 안내 됩니다.\n감사합니다.");
location.href='../../../index.php';
</script>
 
<?php
}
?>