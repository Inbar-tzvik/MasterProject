function myFunction() {


  // בודק אם המשתמש בחר מספר בין 1-10
    var numbers = /^[+]?[1-10]+$/;
    if(!management.value.match(numbers)){
         text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
     document.getElementById("managementErr").innerHTML = text;
     managementErr= false;
    }


    // אולי זה בדיקה למשתמש




    

    if((managementErr) === true) {
        
       
        alert('The form has been sent successfully');
             return true ;
}
  

  else{
         return false ;
           
          
      } 
}
