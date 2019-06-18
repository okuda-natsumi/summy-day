document.addEventListener('DOMContentLoaded', function(){
  var flugMenu = true,
   menuWrap = document.querySelector('.menu_wrap'),
   menuBtn = document.querySelector('.menu_btn'),
   menuLink = document.querySelectorAll('.menu_list a'),
   header = document.querySelector('.header'),
   header_wrap = document.querySelector('.header_wrap'),
   load_wrap = document.querySelector('.loading'),
   hero_image = document.querySelector('.hero_image'),
   hero_logo = document.querySelector('.hero_logo'),
   scroll_info = document.querySelector('.scroll_info'),
   screenHeight = window.innerHeight,
   headerHeight = header_wrap.clientHeight;
  menuBtn.addEventListener('click', function() {
    if(flugMenu){
      openMenu();
    }else{
      closeMenu();
    }
  });

  var resizeTimer;
  var interval = Math.floor(1000 / 60 * 10);
  window.addEventListener('resize', function (event) {
    if(!flugMenu){
      if (resizeTimer !== false) {
        clearTimeout(resizeTimer);
      }
      resizeTimer = setTimeout(function () {
        closeMenu();
      }, interval);
    }
  });

  function openMenu(){
    menuBtn.classList.add('on');
    menuBtn.classList.remove("off");
    menuWrap.classList.add('show');
    setTimeout(function() {
      menuWrap.classList.add('on');
    }, 100);
    flugMenu = false;
  }

  function closeMenu(){
    menuBtn.classList.add('off');
    menuBtn.classList.remove("on");
    menuWrap.classList.remove('on');
    setTimeout(function() {
      menuWrap.classList.remove('show');
    }, 400);
    flugMenu = true;
  }

  //scroll
  var scrollFlag = true;
  window.onscroll = function() {
    var scrollOffset = window.innerHeight - headerHeight;
    scroll(scrollOffset);
  };

  var scroll = function(scrollOffset){
    var y = window.pageYOffset ;
    if (y >= scrollOffset && scrollFlag) {
      header.classList.add('on');
      menuWrap.classList.add('on-pc');
      scrollFlag = false;
    }else if(y <= scrollOffset && !scrollFlag){
      header.classList.remove('on');
      menuWrap.classList.remove('on-pc');
      scrollFlag = true;
    }
    // scrollImage(y,scrollOffset);
  }

  function scrollImage(y,scrollOffset){
    var translate = (window.pageYOffset * 0.1) ;
    var translate2 = (window.pageYOffset * 0.05) ;
    if (y <= scrollOffset) {
      // console.log(y , translate);
      hero_image.setAttribute("style", "transform: translate(0, -"+translate+"px);");
      hero_logo.setAttribute("style", "transform: translate(0, -"+translate2+"px);");
    }
  }

  //VIDEO
  var videoItem = document.querySelectorAll('.video_item'),
   videoWrap = document.querySelector('.video_wrap'),
   videoLsit = document.getElementById('js-video_list'),
   videoClose = document.querySelector('.video_wrap .close'),
   videoFrame = document.getElementById("video_frame");

  for (var i = 0; i <= videoItem.length-1; i++) {
    videoItem[i].addEventListener('click', function(e) {
      var videoId = this.getAttribute("data-video_id");
      openVideo(videoId);
    });
  }

  videoClose.addEventListener('click', function() {
    closeVideo();
  });
  videoWrap.addEventListener('click', function() {
    closeVideo();
  });

  function openVideo(videoId){
    setVideo(videoId);
    videoWrap.classList.add('show');
    setTimeout(function() {
      videoWrap.classList.add('on');
    }, 500);
  }
  function closeVideo(){
    videoWrap.classList.remove('on');
    setTimeout(function() {
      videoWrap.classList.remove('show');
      videoFrame.setAttribute("src", "");
    }, 400);
  }

  function setVideo(videoId){
    var videoUrl = "https://www.youtube.com/embed/" + videoId;
    videoFrame.setAttribute("src", videoUrl);
    // console.log(videoFrame);
  }

  //Image
  function heroFade(){
    hero_logo.classList.add('on');
    hero_image.classList.add('on');
    menuWrap.classList.add('fadein');
    scroll_info.classList.add('fadein');
  }

  imagesLoaded('.hero_image', { background: true }, function () {
    hideLoading();
    setTimeout(function () {
      heroFade();
    }, 300);
  });

  function hideLoading() {
    load_wrap.classList.add('off');
    setTimeout(function () {
      load_wrap.classList.add('hide');
    }, 300);
  }

  //Scroll
  var smoothScroll = new SmoothScroll('a[href*="#"]', {
    header: '[data-scroll-header]',
    updateURL: false,
    topOnEmptyHash: true,
    speed: 500,
    easing: 'easeInOutCubic',
    offset: (-screenHeight) + (headerHeight-1)
  });
  var scrollEvent = function (event) {
    screenHeight = window.innerHeight;
    closeMenu();
  };
  document.addEventListener('scrollStart', scrollEvent, false);
});


