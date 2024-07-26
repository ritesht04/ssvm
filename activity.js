document.addEventListener("scroll", function() {
    var sections = document.getElementsByClassName("section");
    var windowHeight = window.innerHeight;
  
    for (var i = 0; i < sections.length; i++) {
      var sectionTop = sections[i].getBoundingClientRect().top;
      
      if (sectionTop < windowHeight * 0.75) { // Adjust this value to determine when the card should slide in
        sections[i].classList.add("slide-in");
      }
    }
  });
  