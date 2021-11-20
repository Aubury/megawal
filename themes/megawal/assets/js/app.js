let submenu = document.querySelector('.sub-menu');
let menuitem = document.querySelectorAll('.menu-item');





 let closer = document.createElement('div'),
 activEntry;
 closer.className = "closer";
 document.body.append(closer);

 menuitem.forEach(function (entry) {
     entry.addEventListener("click", function (event){
         event.preventDefault();
         if(entry.children[1]){
            activEntry = entry.children[1];
            entry.children[1].style.display ="flex";
            entry.children[1].style.zIndex = "1000"
            closer.style.display = "block"
            closer.style.zIndex = "999"

        }else{
            window.location.href = entry.children[0].href;
        }
  });
});

closer.addEventListener("click", function (event){
    activEntry.style.display ="none";
    activEntry.style.zIndex = "0"
    closer.style.display = "none"
    closer.style.zIndex = "0"
});


//owl carousel

var bunerSlider = $('.bunerSlider');

$(document).ready(function(){


    bunerSlider.find(".owl-carousel").owlCarousel({
        items:1,
        dots: true,
        nav: true,
        lazyLoad: true,
        navContainer: ".navBtnCarousel",
        dotsContainer: ".owlDotsBlock",
        rewind: true,
        autoplay: true,
        loop:"true"
    });

  });
//   --------------- PROJECTS --------------------
let slider = multiItemSlider('.project_1', {
    isCycling: true
});
document.querySelector('.main_photo_project').classList.add('active');

function open_project(data, ev){

    let dots = document.getElementsByClassName('main_photo_project');
    for(var i = 0; i < dots.length; i++){
        ev === dots[i] ? dots[i].classList.add('active') : dots[i].classList.remove('active');
    }


    let x = document.getElementsByClassName("project");
    for (let i = 0; i < x.length; i++) {

        if(x[i].id === data.id){
            x[i].style.display = '';
            slider = multiItemSlider('.'+ data.id, {
                isCycling: true
            })
        }else{
            x[i].style.display = "none";
        }
    }
}
