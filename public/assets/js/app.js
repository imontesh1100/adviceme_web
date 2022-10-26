var tabsFilter= document.getElementById('tabsFilter');
var btnFilter= document.getElementById('btnFilter');
var sliderItem= document.getElementById('sliderItem');
var lastScrollTop = 0;

window.addEventListener("scroll", function(){
   var st = window.pageYOffset || document.documentElement.scrollTop;
   if (st > lastScrollTop){
      // tabsFilter.classList.add('active');
      btnFilter.classList.add('active');
      sliderItem.classList.add('hide');

   } else {
      // upscroll code
      sliderItem.classList.remove('hide');
      // tabsFilter.classList.remove('active');
      btnFilter.classList.remove('active');
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

function modalSelection(){
   document.getElementById('labelTxt').innerText="SELECCIONA ESPECIALIDAD:";
   document.getElementById('modalBody').innerHTML="";
   for(x=1;x<=5;x++){
      document.getElementById('modalBody').innerHTML+=`
         <a class="modal-opc d-block mb-1" href="javascript:;" data-bs-dismiss="modal">Especialidad ${x}</a>`;
   }
}

var myModal = document.getElementById('filtersModal')
myModal.addEventListener('hidden.bs.modal', function () {
   document.getElementById('labelTxt').innerText="SELECCIONA PROFESION:";
   document.getElementById('modalBody').innerHTML="";
   for(x=1;x<=3;x++){
      document.getElementById('modalBody').innerHTML+=`
         <a class="modal-opc d-block mb-1" href="javascript:;" onclick="modalSelection()">Profesion ${x}</a>`;
   }
   myModal.classList.add('active')
});
function openFilters(){
   var btnFilter=document.getElementById('btnFilter')
   btnFilter.classList.remove('active')
   var filtersModal = new bootstrap.Modal(document.getElementById('filtersModal'));
   filtersModal.show();
}

var videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
// function openVideo(url){
//    var video = document.getElementById('shortVideo');
//    video.play();
//    videoModal.show();
// }
function openVideo(url){
   var video = document.getElementById('shortVideo');
   var source = document.createElement('source');

   source.setAttribute('src', url);
   source.setAttribute('type', 'video/mp4');
   video.appendChild(source);
   video.play();
   videoModal.show();
}
function closeVideo(){
   videoModal.hide();
}
