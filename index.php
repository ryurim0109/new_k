    <? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/start.html" ?>

    <link rel="stylesheet" href="/newk/css/main.css">
    <script src="/newk/js/main.js"></script>
</head>
<body>
    <!-- 바로가기 시작 -->
    <ul id="skipmenu">
        <li><a href="#mainmenu_list">메뉴바로가기</a></li>
        <li><a href="#hotplace_inner">본문바로가기</a></li>
        <li><a href="#footer_inner">하단바로가기</a></li>
    </ul>
    <!-- 바로가기 끝 -->
    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/header.html" ?>
    <!-- 상단영역끝 -->
    <!-- 비쥬얼영역시작 -->
    <div id="visual_wrap">
        <h2 class="hidden">newk광고글</h2>
        <ul id="visual_list">
            <li>
                <a href="#;"><img src="/newk/images/main_visual01.jpg" alt="비진도이미지"></a>
                <div class="visual_t">                    
                    <p class="visual_title">NEW K</p>
                    <p class="visual_text">여기가 진짜 한국이라구요?<br>NEW K가 이색적인 한국을 소개해드릴게요! 기대해도 좋아요~!</p>
                </div>
            </li>
            <li>
                <a href="#;"><img src="/newk/images/main_visual02.jpg" alt="혼자앉아있는남자"></a>
                <div class="visual_t">
                    <p class="visual_title">나홀로 여행</p>
                    <p class="visual_text">혼자 여행은 고독이 제 맛이죠!<br>혼자서도 알차고 재미있게 즐길 수 있는 코스를 알려드릴게요.</p>
                </div>
            </li>
            <li>
                <a href="#;"><img src="/newk/images/main_visual03.jpg" alt="강아지이미지"></a>
                <div class="visual_t">
                    <p class="visual_title">반려견과 함께</p>
                    <p class="visual_text">반려견과 떨어지기 힘들어 여행을 망설 이 시나요?<br>그런 당신을 위해 New K가 알짜배기 코스만 모았습니다.</p>
                </div>
            </li>
        </ul>
        <div id="btn">
            <a id="prevBtn" href="#;"><i class="fas fa-angle-left"></i></a>
            <a id="nextBtn" href="#;"><i class="fas fa-angle-right"></i></a>
        </div>

        <div id="indicate">
            <div id="colorIndicate"></div>
        </div>
        
    </div>
    <!-- 비쥬얼영역끝 -->
    <!-- 컨텐츠영역시작 -->
    <div id="contents_wrap" class="clearFix">
      <div id="hotplace_wrap">
          <section id="hotplace_inner">
            <h2 id="hotplace_title" class="contents_title"><a href="#">외국 같은 이색여행지 TOP08</a></h2>
            <ul id="hotplace">
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace01.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">안동 만휴정</a></p>
                    <p class="place_text"><a href="#;">미스터션샤인의 촬영지로 알려져 있는<br>안동의 숨은 서원</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>  
              <li> 
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace02.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">고성 상족암군립공원</a></p>
                    <p class="place_text"><a href="#;">새발자국, 공룡 발자국이 있는<br>해변산책로 고성의 명소</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace03.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">소노캄 제주</a></p>
                    <p class="place_text"><a href="#;">서귀포에 위치한 호텔, 하트 나무<br>포토존에서 러블리한 사진 한 컷</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace04.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">태안 신두리해안사구</a></p>
                    <p class="place_text"><a href="#;">대한민국의 이집트<br>고운 모래 사구와 저녁 노을이 지는 바다의 조화</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace05.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">남해 독일마을</a></p>
                    <p class="place_text"><a href="#;">남해바다를 안주삼아 맥주 한 잔?<br>독일에 온 느낌이 가득한 마을</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace06.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">제주 도두봉</a></p>
                    <p class="place_text"><a href="#;">올라가는 데 10분! 운동도 하고 인생사진도<br>찍을 수 있는 제주도 키세스존</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace07.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">사천 시맨스</a></p>
                    <p class="place_text"><a href="#;">경남의 코타키나발루<br>밤이나 낮이나 아름다운 선셋 카페</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
              <li>
                <p class="place_img"><a href="#;"><img src="/newk/images/hotplace08.jpg" alt="안동만휴정이미지"></a></p>
                <div class="place_text_wrap">
                    <p class="place_title"><a href="#;">안동 낙강물길공원</a></p>
                    <p class="place_text"><a href="#;">파리의 지베르니 느낌나는 비밀의 숲<br>잔잔한 분수와 푸릇푸릇한 나무가 있는 힐링명소</a></p>
                    <p class="place_location"><a href="#;"><i class="fas fa-map-marker-alt"></i></a></p>
                </div>
              </li>
            </ul>
          </section>
      </div> <!--hotplace_wrap-->
      <div id="aboutTrip_wrap">
        <section id="aboutTrip_inner">
          <h2 id="aboutTrip_title" class="contents_title"><a href="#;">이런 여행은 어떠세요?</a></h2>
          <div id="aboutTrip_left">
            <div id="aboutTrip">
              <h3 class="hidden">여행테마추천영역</h3>
              <ul id="aboutTrip_list">
                    <li>
                      <p class="aboutTrip_img"><a href="#;"><img src="/newk/images/contents_img01.png" alt="캠핑카이미지"></a></p>
                      <p class="aboutTrip_title"><a href="#;">언택트 캠핑</a></p>
                      <p class="aboutTrip_text"><a href="#;">일상에서 벗어나 상쾌한 공기로 에너지를<br>충전해봐요.</a></p>
                      <p class="aboutTrip_eyes"><i class="far fa-eye"></i> 12</p>
                      <p class="aboutTrip_heart">5 <a href="#;"><i class="fas fa-heart"></i></a></p>
                    </li>
                    <li>
                        <p class="aboutTrip_img"><a href="#;"><img src="/newk/images/contents_img02.png" alt="수영장에서튜브타고있는이미지"></a></p>
                        <p class="aboutTrip_title"><a href="#;">호캉스</a></p>
                        <p class="aboutTrip_text"><a href="#;">바쁜 평일을 보낸 당신! 주말만큼은 호텔에서<br>꿀 같은 휴식을 갖는 건 어떨까요?</a></p>
                        <p class="aboutTrip_eyes"><i class="far fa-eye"></i> 12</p>
                        <p class="aboutTrip_heart">5 <a href="#;"><i class="fas fa-heart"></i></a></p>
                    </li>
                    <li>
                        <p class="aboutTrip_img"><a href="#;"><img src="/newk/images/contents_img03.png" alt="정상에올라가있는이미지"></a></p>
                        <p class="aboutTrip_title"><a href="#;">소도시 여행</a></p>
                        <p class="aboutTrip_text"><a href="#;">인기 관광지는 한번씩 다 가봐서 지겹다구요?<br>소도시로 떠나 소도시만의 매력을 느껴봐요~</a></p>
                        <p class="aboutTrip_eyes"><i class="far fa-eye"></i> 12</p>
                        <p class="aboutTrip_heart">5 <a href="#;"><i class="fas fa-heart"></i></a></p>
                    </li>
                </ul>
              </div> <!--end aboutTrip-->
              <div id="festival">
                <h3 id="festival_title"><a href="#;">다가오는 축제 일정 <span><i class="fas fa-plus-square"></i></span></a></h3>
                <ul id="festival_list">
                  <li><a href="#;">[2021.07.24~08.16] 태백 해바라기 축제</a></li>
                  <li><a href="#;">[2021.07.17~08.08] 경북 안동시 대한민국 연극제</a></li>
                </ul>
              </div> <!--end festival-->
            </div> <!--end aboutTrip_left-->
          <div id="aboutTrip_right">
            <div id="couple_banner">
             <ul id="couple_banner_list">
               <li>
                 <p id="couple_banner_title">허니문 호텔 추천</p>
                 <p id="couple_banner_text">외국을 가지 못하는<br>신혼부부를 위해<br>New K 가 이색 호텔만 추려 왔어요!</p>
                 <p id="plus_icon"><a href="#;"><i class="fas fa-plus"></i></a></p>
               </li>
             </ul>
            </div> <!--end couple_banner-->
          </div> <!--end aboutTrip_right-->
        </section>
      </div> <!--aboutTrip_wrap-->
      <div id="shareTrip_wrap">
        <section id="shareTrip_inner">
          <h2 id="share_title" class="contents_title"><a href="#;">당신의 여행을 공유해주세요.</a></h2>
          <ul id="shareTrip_list">
            <li>
              <p class="shareTrip_img"><a href="#;"><img src="/newk/images/share01.jpg" alt="강원도육백마지기이미지"></a></p>
              <p class="shareTrip_title"><a href="#;">강원도에서 힐링여행</a></p>
            </li>
            <li>
              <p class="shareTrip_img"><a href="#;"><img src="/newk/images/share02.png" alt="제주월림차경호텔이미지"></a></p>
              <p class="shareTrip_title"><a href="#;">호캉스vs캠핑</a></p>
            </li>
            <li>
              <p class="shareTrip_img"><a href="#;"><img src="/newk/images/share03.png" alt="평창삼양목장이미지"></a></p>
              <p class="shareTrip_title"><a href="#;">혼행으로 스트레스 해소!!</a></p>
            </li>
          </ul>
          <div id="write"><a href="#;">글쓰기</a></div>
        </section>
      </div> <!--shareTrip_wrap-->
    </div> <!--end contents_wrap-->
    <!-- 컨텐츠영역끝 -->
    <!-- 하단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/footer.html" ?>
    <!-- 하단영역끝 -->
</body>
</html>