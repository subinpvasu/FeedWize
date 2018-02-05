<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-client_id" content="207827143663-jt6licv73bf4k6m1gqcvu607u8gnb0rn.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 250px;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
    
    
     
     
     
    
    


  <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  

  <div class="container" style="background-color:#f1f1f1;text-align: center;width: 120px;margin: 0px auto;">
   <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
  <div class="container" style="text-align: center;width: 300px;margin: 0px auto;">
   <div class="logger"></div>
  </div>

    
    
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
//  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//  console.log('Name: ' + profile.getName());
//  console.log('Image URL: ' + profile.getImageUrl());
//  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  var tmp ='<table><tr><td>'+profile.getName()+'</td><td><img src="'+profile.getImageUrl()+'"/></td></tr><tr><td>'+profile.getEmail()+'</td><td></td></tr></table>';
  $(".logger").append(tmp);
  
}

</script>
</body>
</html>
    