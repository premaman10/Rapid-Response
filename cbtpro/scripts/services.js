$( document ).ready(function() {
    $.blockUI();
$.post("backend_services.php",function(result)
                  
                {
                  console.log(result);
                  if(result["status"] === "fail")
                  {
                    alert("something went wrong try agian ");
                  }
                  else if(result["islogin"] ==="fail")
                  {
                   alert("login to use this section");
                    window.location.href = "htmlLogin.php";
                    
                  }
                  else 
                  {
                    
                    // console.log(result["alldatavalue"].length);
                    // var length=result["alldatavalue"].length;
                    var length=result["alldatavalue"].length;
                    if(length>0)
                    {
                      var length=result["alldatavalue"].length;
                    for(var i=0;i<length;i++)
                    {
                        $("table").append("<tr><td>"+(i+1)+"</td><td>"+result.alldatavalue[i].serialNo+"</td><td>"+result.alldatavalue[i].date+"</td><td>"+result.alldatavalue[i].pickupoint+"</td><td>"+result.alldatavalue[i].endpoint+"</td><td>"+result.alldatavalue[i].distance+"</td><td>"+result.alldatavalue[i].cartype+"</td><td>"+result.alldatavalue[i].price+"</td></tr>");
                    }}
                    else
                    {
                      alert("book a ride first");
                      $.unblockUI();


                    }
                  }
                  $.unblockUI();
                },"json")
});
