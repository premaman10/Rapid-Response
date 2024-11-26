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

