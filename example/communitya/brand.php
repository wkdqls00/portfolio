<?php
include './_common.php';
include_once(G5_THEME_PATH.'/head.php');
$LMSM = '3030';
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_URL . '/css/contents.css">');
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_URL . '/css/style.css">');

?>

<style>
  body, h1, h2 {
    color: #2F2F2F !important;
  }
  .toggle-button .menu-bar {
    background: #000;
  }
  .subPageLogo{
    display: none !important;
  }
  .mainPageLogo{
    display: block;
    width: 300px;
    height: 40px;
  }
  .d-section_inner_tit {
    top: 80px;
  }
  .d-section_inner_tit h1 {
    color: #000;
  }
  .eagle-menu-right h1 {
    color: #FFF !important;
  }
</style>

<div class="content-wrap">
  <div class="brand-wrap">
    <!-- 첫 번째 섹션 -->
    <section class="brand-sec-01">
      <div class="d-section_inner_tit chosun">
        <h1>Brand Story</h1>
      </div>
      <!-- 로고 -->
      <div class="brand-header">
        <h1 class="chosun">최고 · 최초<br>그 이상의 의미를 갖는</h1>
      </div>
      <div class="brand-logo">
        <img src="../img/brandstory_logo.png">
      </div>
      <!-- 브랜드 인포 첫 번째 박스 -->
      <div class="brand-info-01">
        <div class="brand-info chosun">
          <div class="brand-info-tit">
            <img src="../img/orange-bar.png" class="info-bar">
            <h2>Ace</h2>
          </div>
          <ul class="dashed">
            <li>사회적 존경을 받는 최고의 프리미엄 커뮤니티 구성원</li>
            <li>구성원들과의 즐거운 네트워크, 문화활동</li>
          </ul>
        </div>
        <div class="b-right"></div>
        <div class="brand-info chosun">
          <div class="brand-info-tit">
            <img src="../img/orange-bar.png" class="info-bar">
            <h2>Active</h2>
          </div>
          <ul class="dashed">
            <li>새로운 라이프 스타일을 위한 적극적인 활동</li>
            <li>자연속에서의 Activity한 레저활동<br>(골프, 수영, 테니스 피트니스 등)</li>
          </ul>
        </div>
        <div class="b-right"></div>
        <div class="brand-info chosun">
          <div class="brand-info-tit">
            <img src="../img/orange-bar.png" class="info-bar">
            <h2>Advanced</h2>
          </div>
          <ul class="dashed">
            <li>품격 있는 일상을 위한 고급스런 프라이빗 시설</li>
            <li>호텔급 생활서비스 제공</li>
          </ul>
        </div>
      </div>
      <!-- 브랜드 인포 두 번째 박스 -->
      <div class="brand-info-02">
        <h2 class="chosun">최고의 구성원들과 함께 할<br class="break-t"> 단 하나의 커뮤니티<br>더 커뮤니티A는 <span class="f-yellow">최고, 최초 <br class="break-t">그 이상의 가치</span>를 제공해 드립니다.</h2>
      </div>
    </section>
    <!-- 두 번째 섹션  -->
    <section class="brand-sec-02">
      <div class="brand-info-03 chosun">
        <div class="brand-info-next">
          <h2>공간의 Next</h2>
          <span>
            북한산 사계, 페어웨이의 <br class="break-t">석양속에서 태어난 이곳은<br>
            아름다운 자연의 빛과 인간의 동선 속<br>
            최적의 균형을 고려해 태어났습니다.<br>
            프리미엄 주거의 자부심을 선사합니다.
          </span>
        </div>
        <div class="brand-info-next">
          <h2>인생의 Next</h2>
          <span>
            삶을 치열하게 걸어온 당신을 위해<br>
            더 커뮤니티A는 태어났습니다.<br>
            명예로운 삶을 존경하는 마음을 <br class="break-t">담아 품격있고<br class="break-m">
            가치있는 <br class="break-t">행복한 라이프 스타일을 제안합니다.
          </span>
        </div>
        <div class="brand-info-next">
          <h2>시간의 Next</h2>
          <span>
            감각을 깨우는 액티비티와 <br class="break-t">나를 충전하는 시간 속에서는<br>
            하루를 시작하는 일이 365일 즐겁습니다.<br>
            수준 높은 콘텐츠와 문화공간으로<br>
            휴식과 에너지의 균형을 선물합니다.
          </span>
        </div>
        <div class="brand-info-next">
          <h2>관계의 Next</h2>
          <span>
            언제나 라운드가 가능한 필드와 프리미엄<br>
            문화공간에서 즐거운 네트워크를 <br class="break-t">만들어보세요.<br class="break-m">
            사랑하는 이들을 초대해 <br class="break-t">사계절 낭만 가득한<br class="break-m">
            루프탑의 <br class="break-t">Sky track을 걸을 수 있습니다.
          </span>
        </div>
      </div>
      <div class="brand-info-04 chosun">
        <h2>당신의 <span class="f-orange">Next</span>는 어디입니까?</h2>
        <div class="brand-info-footer" style="margin-right: 10px;">
          <span>
            열정적이고 성공적인 삶을 살아오신 당신<br>
            오롯이 나에게 집중하면서,<br class="break-s">
            앞으로의 삶을 그려보는 선물 같은 시간이 필요할 때입니다.
          </span>
          <span>
            THE COMMUNITY A는 최고의 멤버들과 함께 하는<br class="break-m">
            단 하나의 커뮤니티입니다.
          </span>
        </div>
        <div class="brand-info-footer">
          <span>
            365일 원하는 시간에 부킹 할 수 있는 골프<br>
            가사의 부담에서 벗어난 생활,<br class="break-s">
            품격 있는 분들과 함께하는 다양한 문화 프로그램은<br class="break-m">
            언제나 새로운 영감을 자극합니다.
          </span>
          <span>
            휴식과 생활이 일상이 되고,<br class="break-s">
            일상과 문화가 공존하는 프리미엄 라이프 스타일.
          </span>
          <span class="f-orange">
            최고의 인생을 위한 새로운 차원의 가치를<br>
            THE COMMUNITY A가 제안합니다.
          </span>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>