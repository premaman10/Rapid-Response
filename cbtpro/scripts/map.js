/*Map Initialization*/
var map = new MapmyIndia.Map('map', {center: [28.09, 78.3], zoom: 5, search: false});
    
    /*direction plugin initialization*/
var direction_option=
{
    map:map,
    callback:function(data)
    {
      $("#map").css("width","70%");
      window.myMapData = data;
      //mmirtRw active class Added To Row
      $("#fromLocation").text(data.Request[0].name);
      $("#toLocation").text(data.Request[1].name);
      $(".form").show();
    }
  }
var direction_plugin=MapmyIndia.direction(direction_option);  
      //direction_plugin.remove(); 

function loadMap()
{
  let activeDiv = $(".mmirtRw.active");
  if(activeDiv.length == 0)
  {
    alert("choose route please");
    return;
  }
  let active_route = activeDiv[0].id.replace("avalRt_map_","");//index route
  var data = myMapData;
  var distance = window.myMapData.data[active_route].distance;
  var time = window.myMapData.data[active_route].eta;
  $("#pickup").text(data.Request[0].name);
  $("#endPoint").text(data.Request[1].name);
  $("#dist").text(distance);
  $("#estTime").html(time);
  $(".content").show();
  var $this = $(this);
  var index = $(".btnn").index(this);
  $(window).scrollTop($(".content").eq(index).offset().top);

}
$("#bookBtn").click(function()
{
  
        // $user = $_COOKIE["login"];
        
        let pickup=$("#pickup").text();
        let endpoint=$("#endPoint").text();
        let distance1=$("#dist").text();
        let time=$("#time").val();
        if(!time)
        {
          alert("select departue time");
          return;
        }
        let cartype=$('input[name="carType"]:checked').val();
        if(!cartype)
        {
          alert("select car type");
          return;
        }
        var distance = window.myMapData.data[0].distance_mts/1000;
        var price = 0;
        if(cartype==="suv")
        {
          price = Math.round(distance*12);
        }
        else if(cartype==="sedan")
        {
          price = Math.round(distance*9);
        }
        else
        {
          price = Math.round(distance*5);
        }

        alert("CAB BOOKED SUCCESSFULY");
        var datasend = {
              "pickup":pickup,
              "endpoint":endpoint,
              "distance":distance1,
              "time":time,
              "cartype":$('input[name="carType"]:checked').val(),
              "price":price,

                };
                console.log(datasend);
                
                $.blockUI();
                $.post("backend_map.php",datasend,function(result)
                {
                  if(result["status"] === "fail")
                  {
                    alert("something went wrong try agian ");
                  }
                  else if(result["islogin"] ==="fail")
                  {
                   alert("login to proceede");
                    window.location.href = "htmlLogin.php";
                    
                  }
                  else 
                  {
                    alert("BOOKING RECEIVED")
                  window.location.href = "htmlServices.php";
                  }
                  $.unblockUI();
                },"json")

    
    
});
$(".carcontainer").click(function()
{
  var distance = window.myMapData.data[0].distance_mts/1000;
  $(this).find('.pricecal').toggle();
  $(this).find('input[name="carType"]').prop("checked",true)
  var priceCal = $(this).find('.pricecal');

  
  let cartype=$('input[name="carType"]:checked').val();
  if(cartype==="suv")
  {
    priceCal.html("<span>TOTAL AMOUNT:-"+Math.round(distance*12)+"</span>")
  }
  else if(cartype==="sedan")
  {
    priceCal.html("<span>TOTAL AMOUNT:-"+Math.round(distance*9)+"</span>")
  }
  else
  {
    priceCal.html("<span>TOTAL AMOUNT:-"+Math.round(distance*5)+"</span>")
  }

});
// $("#pricecal").hide();
//   $('input:radio[name=carType]:checked').change(function ()
//    {
//           var car=$("input[name='carType']:checked").val();
//           alert(car);

//     });

