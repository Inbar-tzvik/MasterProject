
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'right': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'right': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$("#msform").submit(function (event){
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
      
       alert('צריך למלא לפחות 4 שדות על מנת שנוכל למצוא עבורך תפקיד מתאים');
       if(managementErr==false){
        document.getElementById('managementErr').innerHTML="*אנא מלא שדה של  אורינטציה ניהולית על מנת שנוכל למצוא עבורך את התפקיד המתאים ביותר *";}
        if(designErr==false){
        document.getElementById('designErr').innerHTML="*אנא מלא שדה  של אורינטציה עיצובית על מנת שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
        if(softwareErr==false){
        document.getElementById('softwareErr').innerHTML="*אנא מלא שדה  של אורינטציה תכנותית על מנת שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
          if(workInATeamErr==false){
        document.getElementById('workInATeamErr').innerHTML="*אנא מלא שדה  של עבודה בצוות על מנת שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
        if(analysisCapabilitiesErr==false){
        document.getElementById('analysisCapabilitiesErr').innerHTML="*אנא מלא שדה  של יכולות ניתוח והסקה על מנת שנוכל למצוא עבורך את התפקיד המתאים ביותר*";}
       return false ;
       
       }


 
})