document.addEventListener("DOMContentLoaded", () => {
    if(window.location.href.split("?")[1]) {
      document.querySelector("#bgdark").style.display = "flex"
    }
  })

  

  document.querySelector(".hideModel").addEventListener("click", function() {
    document.querySelector("#bgdark").style.display = "none"
  })
  