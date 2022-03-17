document.addEventListener("DOMContentLoaded", () => {
    if(window.location.href.split("?")[1]) {
      document.querySelector("#bgdark").style.display = "flex"
    }
  })

  

  document.querySelectorAll(".hideModel").forEach(btn => {
    btn.addEventListener("click", function() {
      document.querySelector("#bgdark").style.display = "none"
    })

  })

  function myFunction() {
    var x = document.getElementById("ajouter");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }