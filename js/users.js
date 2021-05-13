
// Defining a function to display error message
//function printError(elemId, hintMsg) {
  //  document.getElementById(elemId).innerHTML = hintMsg;
//}

// Defining a function to validate form 
// Retrieving the values of form elements 
 // var subject = document.contactForm.subject.value;
 // var email = document.contactForm.email.value;
 // var comment = document.contactForm.comment.value;
 function validateForm() {
  var  emailErr,subjectErr,commentErr =true;
  
   // Validate email address
  var email = document.getElementById("email").value;
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if(!email.match(mailformat))
   {
      document.getElementById('emailErr').innerHTML="*You have entered an invalid email address!*";
      emailErr= false;
   }

// Validate subject
  var subject = document.getElementById("subject").value;
  var letters = /^[A-Za-z]+$/;
  if(!subject.match(letters)){
  
     document.getElementById("subjectErr").innerHTML =" You entered an invalid subject, the subject must contain only letters and spaces*";
     subjectErr= false;      
    }
 // Validate comment

 var comment = document.getElementById("comment").value;

 if(!comment.match(letters)){
     document.getElementById("commentErr").innerHTML ="You entered an invalid comment, the comment must contain only letters and spaces";  
        commentErr= false;
}
  
      document.write( emailErr.toString());
     document.write( subjectErr.toString());
     document.write( commentErr.toString());
   if((emailErr && subjectErr && commentErr)=== true) {
     
            alert('The form has been sent successfully');
                 return true ;
    }
     
 else{
    // document.write( emailErr.toString());
 //    document.write( subjectErr.toString());
   //  document.write( commentErr.toString());
     // alert('mayyy you make me crazy ');
            return false ;
           
              
        } 


}


     // /^[א-ת]+$/
  
      
    


