jQuery('a[href="#"]').click(function(e) { 
  e.preventDefault ? e.preventDefault() : e.returnValue = false;
});

function toggleVis() {
  
  var toggle = document.getElementById("mobile-wrap");
  var main = document.getElementsByTagName("main")[0];

  // If you click the Hamburger and Menu Display style is empty or "none" ...
  if (toggle.style.display === "" || toggle.style.display === "none") {
    
    // Show the Menu with a display of block...
    toggle.style.display = "block";

    // Blur the background...

    main.classList.add("blur");
    main.classList.remove("blur-out");

    // Log that the blur was added
    console.log("Blur added...");

  } else {
    
    console.log("Blur removed...");

    if(main.classList.contains("blur")){

      toggle.style.display = "none";

      main.classList.remove("blur");

      main.classList.add("blur-out");
      
    }

  }

}