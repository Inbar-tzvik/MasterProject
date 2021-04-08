
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
  
  
  
  
  