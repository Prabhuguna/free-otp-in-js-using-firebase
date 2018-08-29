<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
         Firebase Phone Number Auth
        </title>
    </head>
    <body>
        <form>
        <!--Enter Mobile Number with Country Code -->
            <input type="text" id="mobile" value=""> 
                <input type="button" value="Submit" onclick="return myFunction()">
                </form>
                <div id="recaptcha-container"></div>
                <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
                <script>
                      // Initialize Firebase
                      var config = {
                        apiKey: "AIzaSyAL8dSTuXb92DWu0l78dtV4m4fC8psKeV4",
                        authDomain: "groupinger-users.firebaseapp.com",
                        databaseURL: "https://groupinger-users.firebaseio.com",
                        projectId: "groupinger-users",
                        storageBucket: "groupinger-users.appspot.com",
                        messagingSenderId: "432661298034"
                      };
                      firebase.initializeApp(config);
                    </script>
                    <script type="text/javascript"> 
                    function myFunction() { 
                        var mobile = $("#mobile").val();//
                        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container'); 
                        firebase.auth().signInWithPhoneNumber(mobile, window.recaptchaVerifier) 
                        .then(function(confirmationResult) { 
                        window.confirmationResult = confirmationResult; 
                        a(confirmationResult); 
                        }); 
                    };
                      </script>
                 </body>
                </html>
