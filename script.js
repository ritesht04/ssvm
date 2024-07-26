const mobile_nav = document.querySelector(".line3");
const nav_header = document.querySelector(".header");
const mobile_nav1 = document.querySelector(".line1");
const mobile_nav2 = document.querySelector(".line2");

const toggleNavbar = () => {
  // alert("Plz Subscribe ");
  nav_header.classList.toggle("active");
  mobile_nav.classList.toggle("line3hide")
  mobile_nav1.classList.toggle("line1trans")
  mobile_nav2.classList.toggle("line2trans")
};

mobile_nav.addEventListener("click", () => toggleNavbar());



document.addEventListener("scroll", function() {
  var sections = document.getElementsByClassName("btm");
  var windowHeight = window.innerHeight;

  for (var i = 0; i < sections.length; i++) {
    var sectionTop = sections[i].getBoundingClientRect().top;
    
    if (sectionTop < windowHeight * 0.75) { // Adjust this value to determine when the card should slide in
      sections[i].classList.add("slide-in");
    }
  }
});

function error(id, error) {
  document.getElementById(id).innerHTML = error;
}


function validate() {
  var res = true;
  var name = document.form1.name.value;
  var father = document.form1.father.value;
  var mother = document.form1.mother.value;
  if (name.length < 3) {
      error('name', '!');
      res = false;
  }
  if (father.length < 3) {
      error('father', '!');
      res = false;
  }
  if (mother.length < 3) {
      error('mother', '!');
      res = false;
  }

  var cname = document.form1.cname.value;
  if (cname == '') {
      error('cname', '!');
      res = false;
  }

  var email = document.form1.email.value;
  if (email.length < 9) {
      error('email', '!');
      res = false;
  }


  var contact = document.form1.contact.value;
  if (contact.length < 10) {
      error('contact', '!');
      res = false;
  }
  var city = document.form1.city.value;
  if (city == '') {
      error('city', '!');
      res = false;
  }
  if (res == false) {
      error('error', 'Enter valid information');
  }

  return res;
}

function generate() { 
  var minm = 1000; 
  var maxm = 9999;
  var userid = Math.floor(Math .random() * (maxm - minm + 1)) + minm;
  document.getElementById('userid').value = userid; 
} 