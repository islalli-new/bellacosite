// Cola menu
window.onscroll = function() {colamenu()}

var objcolado = document.getElementById("topocolado")
var notopo = objcolado.offsetTop

var alturaobjcolado = objcolado.offsetHeight

function colamenu() {
  var classbody = document.querySelector("body")
  if (window.pageYOffset > notopo) {
    classbody.classList.add("colado")
  } else {
    classbody.classList.remove("colado")
  }
}

//Classe menu no body
function togglemenu() {
   var classbody = document.querySelector("body")
   classbody.classList.toggle("menu-open")
}


// Menu onepage

// Cache selectors
var lastId,
    topMenu = $("#topocolado"),
    topMenuHeight = topMenu.outerHeight(),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      var classbody = document.querySelector("body")
      	classbody.classList.remove("menu-open")
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});



var options = {
  strings: ['<span style="opacity: .6;">We</span> {<br>&emsp; &emsp; <span style="opacity: .6;">bring-code</span>: into life;<br>}'],
  typeSpeed: 40,
  loop: true,
  loopCount: Infinity,
  backDelay: 2000,
};

var typed = new Typed('.coding', options);


function concatform() {
  var txtwa = document.getElementById("remtname").value;
  document.getElementById("wasend").value = "Hello! My name is " + txtwa + " and i would like to talk about Codenato";
}