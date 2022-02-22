document.addEventListener('DOMContentLoaded',()=>{
    contentScrollEffect();
    heartEffect();
 });
 
 window.addEventListener('load',()=>{
   visualslideEffect();
 });
 
 
 //비쥬얼 슬라이드 효과 시작
 function visualslideEffect(){
 const visualWrap=document.querySelector('#visual_wrap');
 const visualList=document.querySelector('#visual_list');
 const visualLi=document.querySelectorAll('#visual_list>li');
 const visualImg=document.querySelectorAll('#visual_list>li>a>img');
 const prevBtn=document.querySelector('#prevBtn');
 const nextBtn=document.querySelector('#nextBtn'); 
 
 
 const visualText=document.querySelectorAll('.visual_t');
 
 const indicate=document.querySelector('#indicate');
 const colorIndicate=document.querySelector('#colorIndicate');
 
 let visualLength=visualLi.length;
 //alert(visualLength);
 let visualWidth;
 let indicateWidth;
 let currentIndex=0;
 let isSlide=false;
 let timer;
 
 
 init();
 initEvent();
 visualReset();
 autoPlay();
 
 function init(){
   let lastVisualLi=visualList.lastElementChild
   visualList.prepend(lastVisualLi);
   textAni(currentIndex);
 }; //init
 
 function initEvent(){
   window.addEventListener('resize',visualReset);
   nextBtn.addEventListener('click',showNextImg);
   prevBtn.addEventListener('click',showPrevImg);
   visualWrap.addEventListener('mouseenter',stopAutoPlay);
   visualWrap.addEventListener('mouseleave',autoPlay);
   
 }; //initEvent
 
 function autoPlay(){
     timer=setInterval(showNextImg,5000);
 }; //autoPlay
 
 function stopAutoPlay(){
     clearInterval(timer);
 }; //stopAutoPlay
 
 
 
 function visualReset(){
   visualWidth=visualWrap.offsetWidth;
   indicateWidth=indicate.offsetWidth/visualLength
   gsap.set(visualLi,{width:visualWidth});
   gsap.set(visualImg,{width:visualWidth});
   gsap.set(visualList,{width:visualWidth*visualLength});
   gsap.set(visualWrap,{height:visualImg[0].offsetHeight});
   gsap.set(visualList,{left:-visualWidth});
   gsap.set(colorIndicate,{width:indicateWidth});
 }; //visualReset
 
 
 function showNextImg(){
   if(isSlide==false){
       isSlide=true;
       currentIndex++;
       if(currentIndex>=visualLength){
           currentIndex=0
       }
       slideBar(currentIndex);
       gsap.set(visualText, {opacity:0, top:5+'%'});
 
       let currentPosition=visualList.offsetLeft;
       gsap.to(visualList,{left:currentPosition-visualWidth,duration:0.5,ease:'power1.out',onComplete:()=>{
           visualList.append(visualList.firstElementChild);
           gsap.set(visualList,{left:-visualWidth});
           textAni(currentIndex)
           isSlide=false;
       }});
   }; //if
   
 }; //showNextImg
 
 function showPrevImg(){
   if(isSlide==false){
       isSlide=true;
       currentIndex--;
       if(currentIndex<0){
           currentIndex=visualLength-1; 
       }
       slideBar(currentIndex);
       gsap.set(visualText, {opacity:0, top:5+'%'});
 
       let currentPosition=visualList.offsetLeft;
       gsap.to(visualList,{left:currentPosition+visualWidth,duration:0.5,ease:'power1.out',onComplete:()=>{
       visualList.prepend(visualList.lastElementChild);
       gsap.set(visualList,{left:-visualWidth});
       textAni(currentIndex);
       isSlide=false;
       }});
   }; //if
 }; //showPrevImg
 
 function slideBar(num){ 
   gsap.to(colorIndicate, {left:indicateWidth*num, duration:0.5, ease:'back.out'})
  }; //slideBar
 
 function textAni(num){   
   gsap.to(visualText[num], {opacity:1,top:15+'%',duration:1, ease:'bounce.out'})
 }; //textAni
 }; //visualslideEffect
 //비쥬얼 슬라이드 효과 끝
 
 //콘텐츠 스크롤 효과
 
 function contentScrollEffect(){
   
 
  const hotPlaceLi=document.querySelectorAll('#hotplace>li');
  const hotPlaceTitle=document.querySelector('#hotplace_title');
  const aboutTripTitle=document.querySelector('#aboutTrip_title');
  const aboutTripDiv=document.querySelectorAll('#aboutTrip_inner>div');
  const shareTripLi=document.querySelectorAll('#shareTrip_list>li');
  const shareTitle=document.querySelector('#share_title');
  const writeBtn=document.querySelector('#write');



 
 initEvent();
 
 function initEvent(){
    window.addEventListener('scroll', constentScroll)
 }; //initEvent
 
 function constentScroll(){
 
   let scrollHeight=window.pageYOffset;  

 
   if(scrollHeight>=400){
     gsap.to(hotPlaceTitle,{top:0, opacity:1, duration:1, ease:'power1.out'})
   }; //if
 
   if(scrollHeight>=500){
      gsap.to(hotPlaceLi, {top:0, opacity:1, duration:1, ease:'power1.out'}) 
   }; //if

   if(scrollHeight>=1300){
    gsap.to(aboutTripTitle,{top:0,opacity:1,duration:1, ease:'power1.out'});
  };
  if(scrollHeight>=1400){
    gsap.to(aboutTripDiv,{top:0,opacity:1,duration:1, ease:'power1.out'});
  };
  if(scrollHeight>=1800){
    gsap.to(shareTitle,{top:0,opacity:1,duration:1, ease:'power1.out'});
  }; //if
  if(scrollHeight>=1900){
    gsap.to(writeBtn,{top:85,opacity:1,duration:1, ease:'power1.out'});
  }; //if
  if(scrollHeight>=1950){
    for(let i=0; i<shareTripLi.length; i++){
      gsap.to(shareTripLi[i],{top:0, opacity:1,delay:0.3*i, duration:0.3, ease:'power1.out'})
    }
  }; //if
 }; //constentScroll 
 }; //contentScrollEffect
 
 //콘텐츠 스크롤 효과
 

 //콘텐츠 2 하트 효과 시작
 function heartEffect(){
   const heartBtn=document.querySelectorAll('.aboutTrip_heart');
   const aboutTripLi=document.querySelectorAll('#aboutTrip_list>li')
   let isActivate=false;
   let clickNum;
 
   initEvent();
   function initEvent(){
     for(const item of heartBtn){
       item.addEventListener('click', clickHeart);
     }
   }; //initEvent
 
   function clickHeart(){
     clickNum=getIndex(this.parentElement);
     //alert(clickNum)
     heartActivate(clickNum);
   }; //clickHeart
 
   function getIndex(checkNum){
     let selectedIndex=0;
     while((checkNum=checkNum.previousElementSibling)!=null){
       selectedIndex++;
     }
     return selectedIndex;
   }; //getIndex
 
   function heartActivate(num){
     if(isActivate==false){
       aboutTripLi[num].children[4].children[0].classList.add('red');
       isActivate=true;
     }else{
       aboutTripLi[num].children[4].children[0].classList.remove('red');
       isActivate=false;
     }
   }; //heartActivate
 }; //heartEffect
 //콘텐츠 2 하트 효과 끝
 