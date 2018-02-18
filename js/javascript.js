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
      
      $(".wait-section").hide();
      $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
       
    });
    
    var accounts = JSON.parse(decodeURIComponent($("#accounts").val()));    
    var acc_opt1 = '<optgroup label="Active Accounts">';
    var acc_opt2 = '</optgroup><optgroup label="Inactive Accounts">';
    for(var i=0;i<accounts.length;i++)
    {
        
        if(accounts[i].status==1)
        {
            acc_opt1 += '<option value="'+accounts[i].id+'">'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</option>';
        }else
        {
            acc_opt2 += '<option value="'+accounts[i].id+'">'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</option>';
        }
            
    }
    var acc_lst = acc_opt1+acc_opt2+'</optgroup>';
    $(".selectpicker").append(acc_lst);
    
    var account_box = '';
    if($("#account_listing").val()==1)
    {
        for(var i=0;i<accounts.length;i++)
    {
        account_box += '<div class="col-lg-3 import-type-box"><div class="highlight-box"></div>';
        if(accounts[i].status==1){
            account_box += '<img src="'+baseurl+'/images/edit.ico"  class="iconsize"><div class="highlight-box"><label>'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</label></div></div>';
        }else{
             account_box += '<img src="'+baseurl+'/images/edit-inactive.png"  class="iconsize"><div class="highlight-box"><label>'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</label></div></div>';
        }
            
    }
    $(".list-accounts").prepend(account_box);
    }
    
    
    
    //create account 
    
    $("#account_create").click(function(){
        if(verifyInputField($("#account_name").val())){
            $(".button-section").hide();
            $(".wait-section").show();
            $("#account_name").addClass('inactive-field');
          $.ajax({url: siteurl+"/FeedController/user_project_creation/",
		type:"post",
		 data: {
			 	account:$("#account_name").val()
		 },
		success:function(result){
                    var obj = JSON.parse(result);
                    if(obj.account_created==1)
                    {
                        alert("New Account Created Successfully");
                        window.location.reload(true);
                    }
                        
                }
            });
        }
    });
    
    
  });

function verifyInputField(value)
{
    if(value.trim().length>2){
        return true;
    }
    else
    {
        alert('Account Name should have atleast 3 Characters');
        return false;
    }
}

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
                            setTimeout(function(){window.location.reload();},1000);
                        }
                        
                }
            });
      
    });
  }
  

  
  