
 function validateForm() {
   var  emailErr,subjectErr,commentErr =true;
   
    // Validate email address
   var email = document.getElementById("email").value;
   var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.match(mailformat))
    {
       document.getElementById('emailErr').innerHTML="*אנא הכנס מייל במבנה חוקי !*";
  emailErr= false;
    }
    
    else{
         emailErr= true;
    }



// Validate subject
   var subject = document.getElementById("subject").value;
// var letters = /^[A-Za-z]+$/ ;
   var letters = (/^[a-zA-Z\u0590-\u05FF\u200f\u200e ]+$/);

  
   if(!subject.match(letters)){
   
      document.getElementById("subjectErr").innerHTML ="אנא הכנס נושא שמכיל רק אותיות ורווחים";
  subjectErr= false;
     }
     
        else{
         subjectErr=true;
     }
     
     
     
  // Validate comment

  var comment = document.getElementById("comment").value;
  if(!comment.match(letters)){
      document.getElementById("commentErr").innerHTML ="אנא הכנס תגובה שמכילה רק אותיות ורווחים";  
  commentErr = false;
}


else{
    commentErr =true;
}


  
   if((emailErr && subjectErr && commentErr)=== true) {
      
             alert('הטופס נשלח בהצלחה, תודה על תגובתך');
                  return true ;
}


      
  else{

            return false ;
            
         } 


}

