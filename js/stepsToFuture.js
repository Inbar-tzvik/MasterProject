//function myFunction() {

  //  var  SQLErr= true
    // var  CErr= true
 //    var HTMLErr= true
  //   var PYTHONErr= true
//     var SAP_ERPErr= true 
  //   var java_scriptErr= true
   //  var UI_UXErr= true 
   //  var Data_ScienceErr =true;
   
   
   
   function validateThisFrom(thisForm) {
    var name_role = document.getElementById("name_role").value;

 if (thisForm.name_role.value === "") {
   //  document.getElementById("roleErr").innerHTML ="חובה לבחור תפקיד מהרשימה"; 
    alert("חובה לבחור תפקיד מהרשימה");
     thisForm.name_role.focus();
     return false;

}

else{
return true;
}
}