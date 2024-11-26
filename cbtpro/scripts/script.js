let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}
console.log("heloo");
function fillToAddress()
{
  window.tolocation = autocompleteto.getPlace();
}
function fillFromAddress()
{
  window.fromlocation = autocompletefrom.getPlace();
}
function initMap() 
{  
  const to = document.getElementById("tolocation");
  const from=document.getElementById("fromlocation")
  window.autocompleteto = new google.maps.places.Autocomplete(to);
  window.autocompletefrom = new google.maps.places.Autocomplete(from);
  // console.log(window.autocompleteto);  
  autocompleteto.addListener("place_changed", fillToAddress);
  autocompletefrom.addListener("place_changed", fillFromAddress);
}
function loadMap()
{
  console.log(window.fromlocation);
  console.log(window.tolocation);

  //  const marker = new google.maps.Marker({
  //   position: getLocation(window.tolocation),
  //   map: window.map,
  // });
  //  const marker2=new google.maps.Marker(
  //  {
  //    position:getLocation(window.fromlocation),
  //    map:window.map
  //  })
  //  //direction
  var tolat=window.tolocation.geometry.location.lat();
  var tolng=window.tolocation.geometry.location.lng();
  var fromlat=window.fromlocation.geometry.location.lat();
  var fromlng=window.fromlocation.geometry.location.lng();
  if(tolat.lenght!=0 && tolng.lenght!=0 && fromlat.lenght!=0 && fromlng.lenght!=0 )
  {
    window.location.href = "map.html?tolat="+tolat+"&tolng="+tolng+"&fromlat="+fromlat+"&fromlng="+fromlng;
  }
  else
    alert("enter data again");
  
      
}

