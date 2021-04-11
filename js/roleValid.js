function myFunction() {

   
  var  managementErr= true
  var designErr= true
  var softwareErr= true
  var workInATeamErr= true 
  var umlDiagramOrientedErr= true
  var teachingErr= true 
  var analysisCapabilitiesErr =true;



  // בודק אם המשתמש בחר מספר בין 1-10
    var numbers = /^[+]?[1-10]+$/;
    if(!management.value.match(numbers)){
         text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
     document.getElementById("managementErr").innerHTML = text;
     managementErr= false;
    }


    //design
    var numbers = /^[+]?[1-10]+$/;
    if(!design.value.match(numbers)){
         text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
     document.getElementById("designErr").innerHTML = text;
     designErr= false;
    }

//software
    var numbers = /^[+]?[1-10]+$/;
    if(!software.value.match(numbers)){
         text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
     document.getElementById("softwareErr").innerHTML = text;
     softwareErr= false;
    }


    //workInATeam
    var numbers = /^[+]?[1-10]+$/;
    if(!workInATeam.value.match(numbers)){
         text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
     document.getElementById("workInATeamErr").innerHTML = text;
     workInATeamErr= false;
    }


  //umlDiagramOriented
  var numbers = /^[+]?[1-10]+$/;
  if(!umlDiagramOriented.value.match(numbers)){
       text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
   document.getElementById("umlDiagramOrientedErr").innerHTML = text;
   umlDiagramOrientedErr= false;
  }

//teaching
  var numbers = /^[+]?[1-10]+$/;
  if(!teaching.value.match(numbers)){
       text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
   document.getElementById("teachingErr").innerHTML = text;
   teachingErr= false;
  }


  //analysisCapabilities
  var numbers = /^[+]?[1-10]+$/;
  if(!analysisCapabilities.value.match(numbers)){
       text = "נראה שיש תחום עניין שעדיין 0 , רק בודקים שלא שכחת";
   document.getElementById("analysisCapabilitiesErr").innerHTML = text;
   analysisCapabilitiesErr= false;
  }



    

    

    if((managementErr && designErr && softwareErr && workInATeamErr && umlDiagramOrientedErr && teachingErr&& analysisCapabilitiesErr ) === true) {
        
       
        alert('The form has been sent successfully');
             return true ;
}
  

  else{
         return false ;
           
          
      } 
}






// function myFunction() {


//   // בודק אם המשתמש בחר מספר בין 1-10
//     var numbers = /^[+]?[1-10]+$/;
//     if(!management.value.match(numbers)){
//          text = "The number need to be between 1-6";
//      document.getElementById("managementErr").innerHTML = text;
//      managementErr= false;
//     }



//     if((managementErr) === true) {
        
       
//         alert('The form has been sent successfully');
//              return true ;
// }
  

//   else{
//          return false ;
           
          
//       } 
// }
