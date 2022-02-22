document.addEventListener('DOMContentLoaded',()=>{
    naviEffect();
   
  });
  
  
  
  //상단 네비게이션 효과
  function naviEffect(){
    const mainMenu=document.querySelectorAll("#mainmenu_list>li>a");
    const subMenu=document.querySelectorAll(".submenu");
    const headerWrap=document.querySelector("#header_wrap");
    const subMenuA=document.querySelectorAll(".submenu>li>a");
    const lastA=subMenuA[subMenuA.length-1]; //서브메뉴a의 마지막 순번
  
  
    let selectedMenu=null;
  
  
    init();
    initEvent();
  
    function init(){
    gsap.set(subMenu,{opacity:0,display:'none'});
    }; //init
  
    function initEvent(){
        for(const item of mainMenu){
            item.addEventListener('mouseenter',mainMenuOver);
            item.addEventListener('focus',mainMenuOver);
        }
        headerWrap.addEventListener('mouseleave',mainMenuOut);
        lastA.addEventListener('focusout',mainMenuOut);
    }; //initEvent
  
    function mainMenuOver(){
    menuInActivate(this);
    menuActivate(this);
    }; //mainMenuOver
  
    function mainMenuOut(){
      menuInActivate(this);
      subMenuOut();
    }
  
    function menuActivate(overMenu){
        if(selectedMenu!=overMenu){
            selectedMenu=overMenu.parentElement;
            selectedMenu.classList.add('selected');
            selectedMenu.children[0].classList.add('purple');
            
            gsap.to(headerWrap,{height:360,duration:0.3,ease:'power1.out'});
            
            let newSubMenu=selectedMenu.children[1];
            gsap.set(newSubMenu,{display:'block'});
            gsap.to(newSubMenu,{opacity:1,top:60,duration:0.3,ease:'back.out'});
        }; //if
        
       
    }; //menuActivate
  
    function menuInActivate(overMenu){
      if(selectedMenu!=null&&selectedMenu!=overMenu){
          selectedMenu.classList.remove('selected');
          selectedMenu.children[0].classList.remove('purple');
          
         
          
          let oldSubMenu=selectedMenu.children[1];
          gsap.to(oldSubMenu,{opacity:0,top:90,duration:0.3,ease:'back.out'});
          gsap.set(oldSubMenu,{display:'none'});
          
      }; //if
      
     
  }; //menuInActivate
  
  function subMenuOut(){
    gsap.to(headerWrap,{height:178,duration:0.3,ease:'power1.out'});
  }; //subMenuOut
  }; //naviEffects
  //상단 네이게이션 효과 끝
  
  
  