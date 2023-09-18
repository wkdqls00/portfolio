<?php
include './_common.php';
include_once(G5_THEME_PATH.'/head.php');
$LMSM = '3030';
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_URL . '/css/contents.css">');
?>

<style>
    .eagle-header-wrap, .mo-eagle-header-wrap{
        display:none !important;
    }
    @media(max-width:1024px){
      .d-section_inner_tit{
        top : 15px;
        left : 16px;
      }
      .inquiry-sec{
        padding-top : 30px;
      }
    }
</style>



<div class="content-wrap dn-wrap">
  <div class="inquiry-wrap">
    <section class="inquiry-sec">
      <div class="d-section_inner_tit chosun">
        <h1>Program</h1>
      </div>
      <div class="container">
        <form name="contactform" method="post" action="<?php echo G5_THEME_URL ?>/formMail/send.php">
          <ul class="reg_stat">
            <li class="reg_topBg">
              <div class="reg_form_topTit">
                <h1>
                  더 커뮤니티A <span>투어 신청</span>
                </h1>
                <span>
                  투어 신청하신 분께는<br>
                  저희 더 커뮤니티A에서 연락을 드리고,<br>
                  현장 투어 날짜와 시간을 상의 드리겠습니다.
                </span>
              </div>
            </li>
            <li class="reg_leftBg">
              <div class="reg_form_leftTit">
                <h1 class="chosun">
                  더 커뮤니티A<br>
                  투어 신청
                </h1>
                <span class="chosun">
                  "투어 신청하신 분께는 저희 더 커뮤니티A에서 연락을 드리고, 현장 투어 날짜와 시간을 상의 드리겠습니다."
                </span>
              </div>
            </li>
            <li class="reg_right">
              <div class="reg_formWrap">
                <div class="reg_form_rightTit">
                  <h3>고객정보</h3>
                </div>
                <ul class="register_line register_line_first">
                  <li class="register_subtit">
                    <p>성명</p>
                  </li>
                  <li class="register_input">
                    <input name="first_name" type="text" class="ipt name_input" maxlength="50" required>
                  </li>
                </ul>
                <ul class="register_line">
                  <li class="register_subtit">
                    <p>연락처</p>
                  </li>
                  <li class="register_input">
                    <input name="telephone" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="ipt e_input" maxlength="80" required>
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
                    <p>관심 상품</p>
                  </li>
                  <li class="register_input">
                    <div>
                      <div class="radio_group">
                        <input type="radio" value="장기형 상품" name="product_radio" id="residence_radio">
                        <label for="residence_radio" class="reg_agr_label">장기형 상품</label>
                      </div>
                      <div class="radio_group">
                        <input type="radio" value="단기형 상품" name="product_radio" id="condo_radio">
                        <label for="condo_radio">단기형 상품</label>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>연락 회신 선호 시간</p>
                  </li>
                  <li class="register_input">
                    <div>
                      <input type="radio" value="오전" name="time_radio" id="time_day">
                      <label for="time_day" class="reg_agr_label">오전</label>
                      <input type="radio" value="오후" name="time_radio" id="time_night">
                      <label for="time_night">오후</label>
                    </div>
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
                    <p>거주지</p>
                  </li>
                  <li class="register_input">
                    <div class="select_group">
                      <div class="select_wrap">
                        <select name="residence" id="residence" class="e_input">
                          <option value="서울특별시">서울특별시</option>
                          <option value="경기도">경기도</option>
                          <option value="인천광역시">인천광역시</option>
                          <option value="부산광역시">부산광역시</option>
                          <option value="대구광역시">대구광역시</option>
                          <option value="광주광역시">광주광역시</option>
                          <option value="대전광역시">대전광역시</option>
                          <option value="울산광역시">울산광역시</option>
                          <option value="세종특별자치시">세종특별자치시</option>
                          <option value="강원특별자치도">강원특별자치도</option>
                          <option value="충청북도">충청북도</option>
                          <option value="충청남도">충청남도</option>
                          <option value="전라북도">전라북도</option>
                          <option value="전라남도">전라남도</option>
                          <option value="경상북도">경상북도</option>
                          <option value="경상남도">경상남도</option>
                          <option value="제주특별자치도">제주특별자치도</option>
                        </select>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="register_line register_line_last margin-0">
                  <li class="register_subtit">
                    <p>관심영역<br>(복수 응답 가능)</p>
                  </li>
                  <li class="register_input">
                    <div class="interest_check"><input type="checkbox" value="골프" name="interest[]"><label for="interest">골프</label></div>
                    <div class="interest_check"><input type="checkbox" value="테니스" name="interest[]"><label for="interest">테니스</label></div>
                    <div class="interest_check"><input type="checkbox" value="수영" name="interest[]"><label for="interest">수영</label></div>
                    <div class="interest_check"><input type="checkbox" value="피트니스/필라테스" name="interest[]"><label for="interest">피트니스/필라테스</label></div>
                    <div class="interest_check"><input type="checkbox" value="미술/음악" name="interest[]"><label for="interest">미술/음악</label></div>
                    <div class="interest_check"><input type="checkbox" value="책/글쓰기" name="interest[]"><label for="interest">책/글쓰기</label></div>
                    <div class="interest_check"><input type="checkbox" value="요리/음식" name="interest[]"><label for="interest">요리/음식</label></div>
                    <div class="interest_check"><input type="checkbox" value="여행" name="interest[]"><label for="interest">여행</label></div>
                    <div class="interest_check"><input type="checkbox" value="영화" name="interest[]"><label for="interest">영화</label></div>
                    <div class="interest_check"><input type="checkbox" value="반려 식물" name="interest[]"><label for="interest">반려 식물</label></div>
                    <div class="interest_check"><input type="checkbox" value="반려 동물" name="interest[]"><label for="interest">반려 동물</label></div>
                    <div class="interest_check"><input type="checkbox" value="재테크/부동산" name="interest[]"><label for="interest">재테크/부동산</label></div>
                    <div class="interest_check"><input type="checkbox" value="기타" name="interest[]"><label for="interest">기타</label></div>
                  </li>
                </ul>
                <input type="hidden" name="comments" value="　　　">
                <div class="reg_agrWrap">
                  <article>
                    <b style="font-size:15px;">개인정보 수집 및 이용에 대한 동의 (필수사항)</b><br><br>
                    당사는 고객님의 개인정보를 중요시 하며, 개인정보보호법을 준수하고 있습니다.
                    수집된 개인 정보는 더 커뮤니티A의 현장 투어 안내 등 더 커뮤니티A의 정보 전달을 위해 이용하고자 합니다.
                    수집항목은 성명, 연락처, 연락 회신 선호 시간, 이메일, 연령, 거주지 관심 영역이며, 수집된 개인정보는 제 3자에게 제공하지 않고
                    수집목적 이외에는 사용하지 않습니다. 개인정보 보유기간은 2년 입니다.
                    개인정보 수집 이용에 대한 동의를 거부할 권리가 있으나, 동의를 원하시지 않을 경우 현장 투어 안내를 받으실 수 없습니다.
                  </article>
                </div>
                <div class="register_agrBtn">
                  <article>
                    <ul class="register_agrBtn_tit register_agrBtn_tit01 clearfix">
                      <li>
                        <p class="register_agr_tit">
                          개인정보 수집 및 이용에 동의하시겠습니까?
                        </p>
                      </li>
                      <li>
                        <div>
                          <input type="radio" value="동의함" name="register_agr" id="reg_agr" required> <label
                            for="reg_agr" class="reg_agr_label">동의</label>
                          <!-- <input type="radio" value="동의안함" name="register_agr" id="reg_Nagr">
                        <label for="reg_Nagr">동의안함</label> -->
                        </div>
                      </li>
                    </ul>
                  </article>

                </div>
                <div class="submit_btn">
                  <input type="submit" value="신 청" class="submitBtn">
                  <!-- <input name="재설정" type="reset" value="다시작성" class="btn_submit"> -->
                </div>
              </div>
      </div>
      </li>
      </ul>
      </form>
  </div>
  </section>
</div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>