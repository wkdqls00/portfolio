<?php
include './_common.php';
include_once(G5_THEME_PATH.'/head.php');
$LMSM = '3030';
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_URL . '/css/contents.css">');

?>

<style>
  .eagle-menu-right h1 {
    color: #FFF !important;
  }
</style>

<div class="content-wrap">
  <div class="event-wrap">
    <div class="event-bg-pc-wrap">
      <img id="event-bg-pc" src="../img/event_bg_01_pc.jpg" alt="PC 배경 상단 이미지" style="width: 100%;">
    </div>
    <div class="event-bg-mo-wrap">
      <img id="event-bg-mo" src="../img/event_bg_01_mo.jpg" alt="MO 배경 상단 이미지" style="width: 100%;">
    </div>
    <!-- 폼 -->
      <div class="event-form-wrap">
        <div class="reg_formWrap">
          <div class="reg_form_rightTit">
            <h3>신청자 정보</h3>
          </div>
          <form name="contactform" method="post" action="<?php echo G5_THEME_URL ?>/formMail/send_event_01.php">
            <ul>
              <li>
                <ul class="register_line register_line_first">
                  <li class="register_subtit">
                    <p>성명</p>
                  </li>
                  <li class="register_input">
                    <input name="first_name" type="text" class="ipt e_input" maxlength="50" required>
                  </li>
                </ul>
                <ul class="register_line">
                  <li class="register_subtit">
                    <p>연락처</p>
                  </li>
                  <li class="register_input">
                    <input name="telephone" type="number" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="ipt e_input" maxlength="80" required>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>이메일</p>
                  </li>
                  <li class="register_input">
                    <input name="email" type="text" class="ipt e_input" maxlength="80" required>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>연령</p>
                  </li>
                  <li class="register_input">
                    <div class="select_group">
                      <div class="select_wrap">
                        <select name="age" id="age" class="e_input">
                          <option value="20대">20대</option>
                          <option value="30대">30대</option>
                          <option value="40대">40대</option>
                          <option value="50대">50대</option>
                          <option value="60대">60대</option>
                          <option value="70대">70대</option>
                          <option value="80대">80대</option>
                        </select>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>주소 검색</p>
                  </li>
                  <li class="register_input">
                    <div class="address_group">
                      <div class="postcode_group">
                        <input type="text" id="postcode" name="postcode" placeholder="우편번호" class="ipt e_input" required>
                        <button type="button" onclick="sample6_execDaumPostcode()">우편 번호 찾기</button>
                      </div>
                      <div class="address_wrap">
                        <input type="text" id="address" name="address" placeholder="주소" class="ipt e_input" required>
                      </div>
                      <div class="detail_address_wrap">
                        <input type="text" id="detailAddress" name="detailAddress" placeholder="상세주소" class="ipt e_input" required>
                      </div>
                      <div class="extra_address_wrap">
                        <input type="text" id="extraAddress" name="extraAddress" placeholder="참고항목" class="ipt e_input">
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>객실 선택</p>
                  </li>
                  <li class="register_input">
                    <div>
                      <div class="one_person">
                        <input type="radio" value="1인 1실" name="room_radio" id="one_person" required>
                        <label for="one_person" class="reg_agr_label">1인 1실</label>
                      </div>
                      <div class="two_person">
                        <input type="radio" value="2인 1실" name="room_radio" id="two_person" required>
                        <label for="two_person" class="reg_agr_label">2인 1실</label>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="register_line">
                  <li class="register_subtit">
                    <p>동반자 정보</p>
                  </li>
                  <li class="register_input">
                    <div class="accompany_wrap">
                      <input name="accompany_name_first" type="text" placeholder="이름" class="ipt e_input e_name">
                      <input name="accompany_phone_first" type="number" pattern="\d*" placeholder="전화번호" class="ipt e_input e_phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="accompany_wrap">
                      <input name="accompany_name_second" type="text" placeholder="이름" class="ipt e_input e_name">
                      <input name="accompany_phone_second" type="number" pattern="\d*" placeholder="전화번호" class="ipt e_input e_phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="accompany_wrap">
                      <input name="accompany_name_third" type="text" placeholder="이름" class="ipt e_input e_name">
                      <input name="accompany_phone_third" type="number" pattern="\d*" placeholder="전화번호" class="ipt e_input e_phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                  </li>
                  <li>
                    <span class="caution_span">* 동반자는 객실 배정, 조 편성 등에 활용 되며, 이벤트에 당첨 되시면, 신청하신 분께서 대표로 납입해 주셔야 합니다. 동반자가 없으실 경우 적지 않으셔도 됩니다.</span>
                  </li>
                </ul>
                <input type="hidden" name="comments" value="　　　">
                <div class="submit_btn">
                  <input type="submit" value="이벤트 신청" class="submitBtn"></input>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
</div>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("extraAddress").value = extraAddr;
                
                } else {
                    document.getElementById("extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postcode').value = data.zonecode;
                document.getElementById("address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("detailAddress").focus();
            }
        }).open();
    }
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>