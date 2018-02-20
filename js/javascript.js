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
      $("#wrapper").css("min-height",eval(screen.height-100)+'px');
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
        account_box += '<div class="col-lg-2 import-type-box account-box">';
        if(accounts[i].status==1){
            account_box += '<div class="sub-colors-grn" style="text-align:right;padding-right:1px;"><input type="hidden" class="account" value="'+accounts[i].id+'"><i class="far fa-play-circle fa-2x"></i></div><i class="fas fa-chart-area iconsize image fa-8x org-colors"></i><div class="middle sub-colors-grn"><span class="sub-colors-grn edition" name="'+accounts[i].id+'"><i class="far fa-list-alt fa-2x sub-colors-grn"></i> Edit</span><br/><span class="sub-colors-red deletion"  name="'+accounts[i].id+'"><i class="fas fa-ban fa-2x sub-colors-red"></i> Delete</span></div><div class="highlight-box"><label>'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</label></div></div>';
        }else{
             account_box += '<div class="sub-colors-gry" style="text-align:right;padding-right:1px;"><input type="hidden" class="account" value="'+accounts[i].id+'"><i class="far fa-pause-circle fa-2x"></i></div><i class="fas fa-chart-area iconsize image fa-8x sub-colors-gry"></i><div class="middle sub-colors-grn"><span class="sub-colors-grn edition" name="'+accounts[i].id+'"><i class="far fa-list-alt fa-2x sub-colors-grn"></i> Edit</span><br/><span class="sub-colors-red deletion"  name="'+accounts[i].id+'"><i class="fas fa-ban fa-2x sub-colors-red"></i> Delete</span></div><div class="highlight-box"><label>'+encodeURIComponent(accounts[i].account_name).replace(/%2B/g, " ")+'</label></div></div>';
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
                        
                        $(".reply-message").html('<label for="email">New Account Created Successfully.</label>');
                        $(".wait-section").html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>');
                       $('#AccountModal').on('hidden.bs.modal', function () {
                          window.location.reload(true);
                        });
                    }
                    if(obj.account_existing==1)
                    {
                        $(".button-section").show();
                         $(".wait-section").hide();
                        $(".reply-message").prepend('<label for="email" style="color:red;font-weight:bold;">Account name exists.</label><br/>');
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
  

  
  