<meta charset="utf-8">
<?php
if(isset($_POST['email'])) {
     
	$email_to = "olympic5111911@gmail.com";
	$email_subject = "[더 커뮤니티A] 관심고객 등록";
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
        !isset($_POST['email']) ||
        !isset($_POST['product_radio']) ||
        !isset($_POST['time_radio']) ||
        !isset($_POST['age']) ||
        !isset($_POST['residence']) ||
        !isset($_POST['interest']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['register_agr']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $product_radio = $_POST['product_radio'];
    $time_radio = $_POST['time_radio'];
    $age = $_POST['age']; // required
    $residence = $_POST['residence']; // required
    $interest = $_POST['interest']; // required
    $telephone = $_POST['telephone']; // required
    $comments = $_POST['comments']; // required
    $register_agr = $_POST['register_agr']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';

    $list = $_POST['interest'];
    echo $list[0];
    echo $list[1];
    echo $list[2];
    echo $list[3];
    echo $list[4];
    echo $list[5];
    echo $list[6];
    echo $list[7];
    echo $list[8];
    echo $list[9];

    $list = implode(', ', $_POST['interest']);

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
    $email_message .= "관심 상품 : ".clean_string($product_radio)."\n\n";
    $email_message .= "연락 회신 선호 시간 : ".clean_string($time_radio)."\n\n";
    $email_message .= "연령 : ".clean_string($age)."\n\n";
    $email_message .= "거주지 : ".clean_string($residence)."\n\n";
    $email_message .= "관심영역 : ".clean_string($list)."\n\n";
    $email_message .= "개인정보 수집 및 이용에 동의 : ".clean_string($register_agr)."\n\n";
    $email_message .= "　".clean_string($comments)."\n\n";
     
     
// create email headers
$headers = 'From: '.$email_from;
// 제목이 깨질경우 아래 캐릭터셋 적용

@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<script>
alert ("메일이 발송되었습니다.\n빠른 시일안에 답변드리겠습니다.");
location.href='../../../index.php';
</script>
 
<?php
}
?>