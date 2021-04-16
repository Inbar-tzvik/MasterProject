  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAmES9z2pOZAiRzMJ1Az9v43eMH3FPvgTo",
    authDomain: "masterproject-611b0.firebaseapp.com",
    projectId: "masterproject-611b0",
    storageBucket: "masterproject-611b0.appspot.com",
    messagingSenderId: "754111163911",
    appId: "1:754111163911:web:b46475fa84f76613efc4a2",
    measurementId: "G-QMX0QY2971"
  };
  // Initialize Firebase
//   firebase.initializeApp(firebaseConfig);
//   firebase.analytics();

//   firebase.auth.Auth.Persistence.LOCAL;


firebase.initializeApp(config);

const docRef= firestore.doc("samples/sandwichData");
 const oh = document.querySelector("#d1");
 const iT = document.querySelector("#d2");
 const saveButton = document.querySelector("#saveButton");

 saveButton.addEventListener("click", function() {

    const textToSave= inputTextField.value;
    console.log("bla bla" + textToSave+ "bla bla");
    docRef.set(
        {
            id1: textToSave
        } ).then (function()
        {
            console.log("save");
        });
  

 });
 


//   $("#btn-login").click(function()
//   {

//   var email =  $("#email").val();
  

//   if(email != "") 
//   {
// var result = firebase.auth().signWithEmail(email);
// result.catch(function(error)
// {
//     var errorCode = error.code;
//     var errorMessage = error.maesage;

//       console.log(errorCode);
//       console.log(errorMessage);

//     window.alert("message: " + errorMessage);
// });

//   }
  
// else 
// {
//     window.alert("dhjsdshd");
// }
    
//   }
  
//   );


