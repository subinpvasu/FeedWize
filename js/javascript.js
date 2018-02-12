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
  });

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var baseurl = $("#baseurl").val();
  var siteurl = $("#siteurl").val();
//  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//  console.log('Name: ' + profile.getName());
//  console.log('Image URL: ' + profile.getImageUrl());
//  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  
  
//$(".avatar").attr("src",profile.getImageUrl());
//  var tmp ='<table style="text-align: center;width: 100%;"><tr><td>'+profile.getName()+'</td></tr><tr><td>'+profile.getEmail()+'</td></tr></table>';
//  $(".logger").append(tmp);
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
                       setTimeout(function(){ window.location.reload(true);}, 2000);
                        }
                }
            });
  
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      $(".logger").html('<h3>User signed out.</h3>');
      setTimeout(function(){window.location.reload();},1000);
    });
  }
  
  