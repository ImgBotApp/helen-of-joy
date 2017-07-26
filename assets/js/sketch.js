var img;
var sections = ["AUDIO", "VIDEO", "SHOWS", "BLOG", "CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.5389558232931726;
var drawheight = -(imgh / 2 - sh / 2);
var moonflower; //font
var incircles = [];
var circlew = 27;
var textOpacity = 0;

var fontDraw = function() {
  if (sw >= 1200) {
    return imgh / 49;
  } else if (sw >= 700) {
    return imgh / 35;
  } else {
    return imgh / 25;
  }
}
var circleDraw = function() {
  if (sw >= 1000) {
    return circlew;
  } else if (sw < 1000) {
    return circlew - 7;
  } else {
    return circlew - 15;
  }
}

//smooth scrolling for sketch links
function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}


function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}


function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
}


function preload() {
  moonflower = loadFont('assets/fonts/moon-flower.ttf');
  img = loadImage("assets/img/helenofjoytall.jpg");
}

function setup() {
  var cnv = createCanvas(sw, sh);
  cnv.parent('hero');
  // Displays the image exactly as wide as the viewport and keeps the aspect ratio of
  // the image(1 over 1.5389558232931726)
  image(img, 0, drawheight, sw, sw * 1.5389558232931726);


  // clickable circles over the stars
  noStroke();
  ellipse(sw / 3.5555, imgh / 2.4981410215926707 + drawheight, circleDraw()); // AUDIO
  ellipse(sw / 1.38288, imgh / 2.4705695099518676 + drawheight, circleDraw()); // VIDEO
  ellipse(sw / 4.73372, imgh / 1.6903885892153363 + drawheight, circleDraw()); // SHOWS
  ellipse(sw / 2.24403, imgh / 1.7655350352677948 + drawheight, circleDraw()); // BLOG
  ellipse(sw / 1.434977, imgh / 1.666365438789363 + drawheight, circleDraw()); // CONTACT


  var myTimer = setInterval(function() {

    //  text that will fade in

    textOpacity += 10;
    fill(255, 255, 255, textOpacity);
    textFont(moonflower);
    tint(255, 126);
    textSize(fontDraw());
    text(sections[0], sw / 3.9036, imgh / 2.460693795890683 + drawheight, 70, 80);
    text(sections[1], sw / 1.4234, imgh / 2.4363465133883424 + drawheight, 70, 80);
    text(sections[2], sw / 5.5154, imgh / 1.6742969260954872 + drawheight, 70, 80);
    text(sections[3], sw / 2.3369, imgh / 1.7517188770051184 + drawheight, 70, 80);
    text(sections[4], sw / 1.5035, imgh / 1.6518331624797433 + drawheight, 70, 80);
  }, 105);

  setTimeout(function() {
    clearInterval(myTimer);
  }, 5000);

}

function draw() {

}

function mouseMoved() {
  // Check if mouse is inside the circles
  incircles[0] = dist(mouseX, mouseY, sw / 3.5555, imgh / 2.4981410215926707 + drawheight);
  incircles[1] = dist(mouseX, mouseY, sw / 1.38288, imgh / 2.4705695099518676 + drawheight);
  incircles[2] = dist(mouseX, mouseY, sw / 4.73372, imgh / 1.6903885892153363 + drawheight);
  incircles[3] = dist(mouseX, mouseY, sw / 2.24403, imgh / 1.7655350352677948 + drawheight);
  incircles[4] = dist(mouseX, mouseY, sw / 1.434977, imgh / 1.666365438789363 + drawheight);

  if (incircles[0] < circleDraw() / 2 || incircles[1] < circleDraw() / 2 || incircles[2] < circleDraw() / 2 || incircles[3] < circleDraw() / 2 || incircles[4] < circleDraw() / 2) {
    document.body.style.cursor = "pointer";
  } else {
    document.body.style.cursor = "default";
  }
}



function mousePressed() {
  // Check if mouse is inside the circles
  incircles[0] = dist(mouseX, mouseY, sw / 3.5555, imgh / 2.4981410215926707 + drawheight);
  incircles[1] = dist(mouseX, mouseY, sw / 1.38288, imgh / 2.4705695099518676 + drawheight);
  incircles[2] = dist(mouseX, mouseY, sw / 4.73372, imgh / 1.6903885892153363 + drawheight);
  incircles[3] = dist(mouseX, mouseY, sw / 2.24403, imgh / 1.7655350352677948 + drawheight);
  incircles[4] = dist(mouseX, mouseY, sw / 1.434977, imgh / 1.666365438789363 + drawheight);


  if (incircles[0] < circleDraw() / 2) {
    // window.location.href = "audio.html";
    smoothScroll('music-player');
  }
  if (incircles[1] < circleDraw() / 2) {
    smoothScroll('featurette');
  }
  if (incircles[2] < circleDraw() / 2) {
    smoothScroll('shows');
  }
  if (incircles[3] < circleDraw() / 2) {
    smoothScroll('blogsection'); 
  }
  if (incircles[4] < circleDraw() / 2) {
    window.location.href = "contact.html";
  }
}
