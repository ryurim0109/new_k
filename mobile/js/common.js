window.addEventListener('load',()=>{
  menuEffect();
});
//상단 햄버거 영역 효과 시작
function menuEffect(){
    const body=document.querySelector('body');
    const header=document.querySelector('header');
    const menu=document.querySelector('#menu>a');
    const hideMenu=document.querySelector('#hideMenu');
    const closeBtn=document.querySelector('#close_btn>a');
    const mobileGrayLayer=document.createElement('div');
    mobileGrayLayer.id='mobile_graylayer';

    let hideMenuWidth=window.innerWidth*0.8;

    const hideMenuLi=document.querySelectorAll('#hideMenuList>li>a');
    const SubMenu=document.querySelectorAll('.hideSubMenu');

    let openHeight;
    let closeHeight=48;
    let selectedMenu;

    
    init();
    initEvent();
    function init(){
      gsap.set(hideMenu,{width:hideMenuWidth,height:window.innerHeight,left:-hideMenuWidth});
    };//init
    function initEvent(){
        menu.addEventListener('click',showHideMenu);
        closeBtn.addEventListener('click',HideMenu);
        for(const item of hideMenuLi){
          item.addEventListener('click',hideMenuClick);
        }
        for(const item of SubMenu){
          item.addEventListener('click',SubMenuClick);
        }       

    }; //initEvent

    function showHideMenu(){
        gsap.set(mobileGrayLayer,{display:'block'});
        header.append(mobileGrayLayer);
        gsap.set(body,{overflow:'hidden'});
        gsap.set(hideMenu,{display:'block'});
        gsap.to(hideMenu,{left:0,duration:1,ease:'power1.out'})
    }; //showHideMenu

    function HideMenu(){
      gsap.set(mobileGrayLayer,{display:'none'});
        gsap.to(hideMenu,{left:-hideMenuWidth,duration:0.5,ease:'power1.out',onComplete:()=>{
            gsap.set(hideMenu,{display:'block'});
            gsap.set(body,{overflow:'visible'});
        }});
    }; //HideMenu

    function hideMenuClick(){
      let checkNum=getIndex(this.parentElement);
      //alert(checkNum);
      menuInActivate(checkNum);
      menuActivate(checkNum);
    }; //hideMenuClick

    function getIndex(checkMenu){
      let selectedIndex=0;
      while((checkMenu=checkMenu.previousElementSibling)!=null){
        selectedIndex++;
      }
      return selectedIndex;
    }; //getIndex

    function menuInActivate(num){
      if(selectedMenu!=null && selectedMenu!=hideMenuLi[num]){
        gsap.to(selectedMenu.parentElement,{height:closeHeight,duration:0.5,ease:'power1.out'});
        selectedMenu.children[0].classList.remove('selected');
      }
    }; //menuInActivate

    function menuActivate(num){
      if(selectedMenu!=hideMenuLi[num]){
        selectedMenu=hideMenuLi[num]
        openHeight=closeHeight+(closeHeight*selectedMenu.nextElementSibling.children.length);
        gsap.to(selectedMenu.parentElement,{height:openHeight,duration:0.5,ease:'power1.out'});
        selectedMenu.children[0].classList.add('selected');
      }
    }; //menuActivate

    function SubMenuClick(){
      menuInActivate(this);
      selectedMenu=null;
    }
}; //menuEffect
//상단 햄버거 영역 효과 끝
