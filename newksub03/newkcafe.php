<? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/start.html" ?>
    <link rel="stylesheet" href="/newk/newktrip/css/newktrip.css">
</head>
<body>
      <!--바로가기메뉴시작-->
      <ul id="skipmenu">
        <li><a href="#mainmenu_list">메뉴바로가기</a></li>
        <li><a href="#newkTrip">본문바로가기</a></li>
        <li><a href="#footer_inner">하단바로가기</a></li>
    </ul>
    <!--바로가기메뉴끝-->
    <!--상단영역시작-->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/header.html" ?>
    <!--상단영역끝-->
    <!-- 콘텐츠 영역 시작 -->
    <div id="newkTrip_wrap">
        <section id="newkTrip">
         <h2 id="newkTripTitle">NEW K PICK 맛집</h2>
         <div id="filter"><a href="#">최신순 | 인기순</a></div>
         <div id="newkTrip_box">
             <ul id="newkTrip_box_list">
             <li>
                <div class="newkTrip_img">
                    <a href="#"><img src="/newk/newksub03/images/restaurant_img01.jpg" alt="료코"></a>
                    <a class="wishList" href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="newkTrip_t">
                    <p class="newkTrip_t_title">
                        <a href="#">료코</a>
                    </p>
                    <p class="newkTrip_text">
                        <a href="#">경주 황리단길에 위치한 일식당.<br>
                        아기자기한 인테리어 덕분에 일본에 온 느낌이 납니다.</a>
                    </p>
                    <p class="hashtag">
                        <a href="#">#경주맛집 #돈까스맛집 #일식 #황리단길맛집</a>
                    </p>
                </div>
                <p class="newkTrip_btn">
                    <a class="red" href="#"><i class="fas fa-heart"></i>13</a>
                    <a href="#"><i class="far fa-share-square"></i></a>
                </p>
            </li>
            <li>
                <div class="newkTrip_img">
                    <a href="#"><img src="/newk/newksub03/images/restaurant_img02.jpg" alt="타이빈"></a>
                    <a class="wishList" href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="newkTrip_t">
                    <p class="newkTrip_t_title">
                        <a href="#">타이빈</a>
                    </p>
                    <p class="newkTrip_text">
                        <a href="#">부산 동래구에 위치한 태국 음식점.<br>
                        인생사진을 건질 수 있는 방갈로 자리는 예약이 필수입니다.</a>
                    </p>
                    <p class="hashtag">
                        <a href="#">#부산맛집 #이색음식점 #태국음식 #포토존</a>
                    </p>
                </div>
                <p class="newkTrip_btn">
                    <a class="red" href="#"><i class="fas fa-heart"></i>13</a>
                    <a href="#"><i class="far fa-share-square"></i></a>
                </p>
            </li>
            <li>
                <div class="newkTrip_img">
                    <a href="#"><img src="/newk/newksub03/images/restaurant_img03.jpg" alt="별내리는 산북"></a>
                    <a class="wishList" href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="newkTrip_t">
                    <p class="newkTrip_t_title">
                        <a href="#">별내리는 산북</a>
                    </p>
                    <p class="newkTrip_text">
                        <a href="#">강원도 강릉시 성산면에 위치한 고깃집.<br>
                        푸릇한 논밭을 배경으로 야외에서 먹을 수 있는 맛집입니다.</a>
                    </p>
                    <p class="hashtag">
                        <a href="#">#강원도맛집 #강릉맛집 #고기 #이베리코 #산골뷰</a>
                    </p>
                </div>
                <p class="newkTrip_btn">
                    <a class="red" href="#"><i class="fas fa-heart"></i>13</a>
                    <a href="#"><i class="far fa-share-square"></i></a>
                </p>
            </li>
             </ul>
         </div>
         <div id="more_btn"><a href="#">더보기</a></div>
        </section>


    </div>
             
    <!-- 콘텐츠 영역 끝 -->
  
     <!--하단영역시작-->
     <? include_once $_SERVER["DOCUMENT_ROOT"]."/newk/inc/footer.html" ?>
     <!--하단영역끝-->
</body>
</html>