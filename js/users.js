
function myFunction() {
    var x, text;
  
    var  emailErr = subjectErr = commentErr =true;
     
     
      //  אימייל
      x = document.getElementById("email").value;
      var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if(!email.value.match(mailformat))
      {
         text = "You have entered an invalid email address!";
         document.getElementById("emailErr").innerHTML = text;
     emailErr= false;
      }
  
  
      
    
    //  subject
    x = document.getElementById("subject").value;
     var s_letters = /^[A-Za-z]+$/;

     if(!subject.value.match(s_letters)){
        text = "You entered an invalid subject, the subject must contain only letters and spaces";
        document.getElementById("subjectErr").innerHTML = text;  
        subjectErr= false;      
       }

        // comment
        x = document.getElementById("comment").value;
      var letters = /^[A-Za-z]+$/;
      
      if(!comment.value.match(letters)){
        text = "You entered an invalid comment, the comment must contain only letters and spaces";
        document.getElementById("commentErr").innerHTML = text;  
           commentErr= false;
          }
    
  
   
    
     
            
        if((emailErr && subjectErr &&  commentErr ) === true) {
          
         
               alert('The form has been sent successfully');
                    return true ;
       }
        
     
         else{
               return false ;
                 
                
           } 

            
  
     
  }
  
  
  
  
  // Defining a function to display error message
//function printError(elemId, hintMsg) {
  //  document.getElementById(elemId).innerHTML = hintMsg;
//}

// Defining a function to validate form 
function validateForm() {
  // Retrieving the values of form elements 
  var subject = document.contactForm.subject.value;
  var email = document.contactForm.email.value;
  var comment = document.contactForm.comment.value;

  
// Defining error variables with a default value
  var  emailErr = subjectErr = commentErr = true;
  
  
  // Validate email address
  if(email == "") {
      printError("emailErr", "Please enter your email address");
  } else {
      // Regular expression for basic email validation
      var regex = /^\S+@\S+\.\S+$/;
      if(regex.test(email) === false) {
          printError("emailErr", "Please enter a valid email address");
      } else{
          printError("emailErr", "");
          emailErr = false;
      }
  }
  
  
  // Validate subject
  if(subject == "") {
      printError("subjectErr", "Please enter your name");
  } else {
      var regex = /^[a-zA-Z\s]+$/;                
      if(regex.test(subject) === false) {
          printError("subjectErr", "Please enter a valid subject");
      } else {
          printError("subjectErr", "");
          nameErr = false;
      }
  }
  
    // Validate comment
  if(comment == "") {
      printError("commentErr", "Please enter your name");
  } else {
      var regex = /^[a-zA-Z\s]+$/;                
      if(regex.test(comment) === false) {
          printError("commentErr", "Please enter a valid comment");
      } else {
          printError("commentErr", "");
          nameErr = false;
      }
  }
  
  

  // Prevent the form from being submitted if there are any errors
  if((subjectErr && emailErr && commentErr ) == true) {
     return false;
  } else {
      // Creating a string from input data for preview
      var dataPreview = "You've entered the following details: \n" +
                        "Subject : " + Subject + "\n" +
                        "Comment : " + Comment + "\n" +
                      
      // Display input data in a dialog box before submitting the form
      alert(dataPreview);
  }
}

