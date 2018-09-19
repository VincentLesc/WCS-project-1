// Hover on images

$(".olivierImg").on({"mouseover" : function() {
    this.src = '../src/Images/instructors/olivgif.gif';
}, 
"mouseout" : function() {
    this.src='../src/Images/instructors/olivier.jpg';
  }
});

$(".gaetanImg").on({"mouseover" : function() {
    this.src = '../src/Images/instructors/badass.gif';
}, 
"mouseout" : function() {
    this.src='../src/Images/instructors/gaetan.jpg';
  }
});

$(".loicImg").on({"mouseover" : function() {
    this.src = '../src/Images/instructors/chew.gif';
}, 
"mouseout" : function() {
    this.src='../src/Images/instructors/loic.jpg';
  }
});