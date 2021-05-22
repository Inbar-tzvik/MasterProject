function myFunction() {

   
  var  managementErr= true
  var designErr= true
  var softwareErr= true
  var workInATeamErr= true 
  var umlDiagramOrientedErr= true
  var teachingErr= true 
  var analysisCapabilitiesErr =true;
  

 var management = document.getElementById("management").value;
  var design = document.getElementById("design").value;
 var software = document.getElementById("software").value;
 var workInATeam = document.getElementById("workInATeam").value;
 var umlDiagramOriented = document.getElementById("umlDiagramOriented").value;
 var teaching = document.getElementById("teaching").value;
 var analysisCapabilities = document.getElementById("analysisCapabilities").value;

 var count=0;
 
  if (management>0)
  {
     count++;
  }
  else{
      managementErr= false;
  }
  
  
    if (design>0)
  {
     count++;
  }
  else{
      designErr= false;
  }
  
    if (software>0)
  {
     count++;
  }
  else{
      softwareErr= false;
  }
  
  if (workInATeam>0)
  {
     count++;
  }
  else{
      workInATeamErr= false;
  }
  
   if (umlDiagramOriented>0)
  {
     count++;
  }
  else{
      umlDiagramOrientedErr= false;
  }
  
  
     if (teaching>0)
  {
     count++;
  }
  else{
      teachingErr= false;
  }
  
    if (analysisCapabilities>0)
  {
     count++;
  }
  else{
      analysisCapabilitiesErr= false;
  }
  
  
  if(count>3){
       
        return true ;
   }
  else{
      
       //alert('צריך למלא לפחות 4 שדות על מנת שנוכל למצוא עבורך תפקיד מתאים');
       if(managementErr==false){
        document.getElementById('managementErr').innerHTML="*אנא מלא שדה זה כדי שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
        if(designErr==false){
        document.getElementById('designErr').innerHTML="*אנא מלא שדה זה כדי שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
        if(softwareErr==false){
        document.getElementById('softwareErr').innerHTML="*אנא מלא שדה זה כדי שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
       return false ;
       
       }


  }
  
