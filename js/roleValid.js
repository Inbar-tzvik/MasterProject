function myFunction() {


  // לבצע התאמות
    var numbers = /^[+]?[1-10]+$/;
    if(!management.value.match(numbers)){
         text = "The number need to be between 1-6";
     document.getElementById("managementErr").innerHTML = text;
     managementErr= false;
    }



    if((managementErr) === true) {
        
       
        alert('The form has been sent successfully');
             return true ;
}
  

  else{
         return false ;
           
          
      } 
}
