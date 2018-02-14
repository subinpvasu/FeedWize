/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
    Created on : Feb 8, 2018, 12:54:43 AM
    Author     : SUBINPVASU
*/
$(document).ready(function(){
      var baseurl = $("#baseurl").val();
      var siteurl = $("#siteurl").val();
      $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
       
    });
  });

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var baseurl = $("#baseurl").val();
  var siteurl = $("#siteurl").val();
  $(".signout").show();
  
  $.ajax({url: siteurl+"/FeedController/account_verification/",
		type:"post",
		 data: {
			 	googleId:profile.getId(),
                                googleName:profile.getName(),
                                googleImg:profile.getImageUrl(),
                                googleEml:profile.getEmail(),
                                demand:1
		 },
		success:function(result){
                    if($("#page").val()=='login' && result==1){
                       setTimeout(function(){ window.location.reload();}, 100);
                        }
                        else if($("#page").val()=='logout')
                        {
                            $("#logout").click();
                        }
                        
                }
            });
  
}
function signOut() {
    var baseurl = $("#baseurl").val();
    var siteurl = $("#siteurl").val();
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
$.ajax({url: siteurl+"/FeedController/account_verification/",
		type:"post",
		 data: {
			 	
                                demand:0
		 },
		success:function(result){
                    if($("#page").val()=='login' && result==1){
                       setTimeout(function(){ window.location.reload();}, 100);
                        }
                        else if($("#page").val()=='logout' && result==1)
                        {
                            $("#logout").click();
                            setTimeout(function(){window.location.reload();},100);
                        }
                        
                }
            });
      
    });
  }
  

  
  