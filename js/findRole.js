// function myFunction() {
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Read more";
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Read less";
//       moreText.style.display = "inline";
//     }
//   }




      
function animateFunction() {
let dots = document.getElementById("myDiv");

 if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "סגור"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "הסבר"; 
moreText.style.display = "inline";
}
}

function animateFunction1() {
    let dots = document.getElementById("myDiv1");
    
     if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText1.innerHTML = "סגור"; 
    moreText1.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText1.innerHTML = "הסבר"; 
    moreText1.style.display = "inline";
    }
    }
    
