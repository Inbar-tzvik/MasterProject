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

<<<<<<< HEAD
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
=======
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
>>>>>>> 2bf3923781947d1b4c4bafb365917adb7a648c77
