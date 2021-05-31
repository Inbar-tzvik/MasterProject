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

	$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
      
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        
        var $target = $(e.target);
           
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
      
    $(".next-step").click(function (e) {
      
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

        $('.wizard .nav-tabs li.active .connecting-line').css({"border-bottom-left-radius": 0, "border-top-left-radius": 0});

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);
        
    });
});
function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}