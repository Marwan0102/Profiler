var width, height, container, canvas, ctx, points, target, animateHeader = true;

function init() {
    initHeader();
    initAnimation();
    addListeners();
}

function initHeader() {
    width = window.innerWidth;
    height = window.innerHeight;
    target = {
        x: width / 2,
        y: height / 2
    };


    canvas = document.getElementById('canvas');
    canvas.width = width;
    canvas.height = height;
    ctx = canvas.getContext('2d');

    // create points
    points = [];

    //  assign a circle to each point
    for (var i in points) {
        var c = new Circle(points[i], 2 + Math.random() * 2, 'rgba(255,255,255,0.9)');
        points[i].circle = c;
    }
}

// Event handling
function addListeners() {
    if (!('ontouchstart' in window)) {
        //  window.addEventListener("mousemove", mouseMove);
    }
    window.addEventListener("resize", resize, true);
    window.addEventListener("scroll", scrollCheck);
}

function mouseMove(e) {
    var posx = posy = 0;
    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY;
    } else if (e.clientX || e.clientY) {
        posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }
    target.x = posx;
    target.y = posy;
}

function scrollCheck() {
    if (document.body.scrollTop > height) animateHeader = false;
    else animateHeader = true;
}

function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    container.style.height = height + 'px';
    ctx.canvas.width = width;
    ctx.canvas.height = height;
}

// animation
function initAnimation() {
    animate();
    for (var i in points) {
        shiftPoint(points[i]);
    }
}

function animate() {
    if (animateHeader) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (var i in points) {
            // detect points in range
            if (Math.abs(getDistance(target, points[i])) < 4000) {
                points[i].active = 0.3;
                points[i].circle.active = 0.6;
            } else if (Math.abs(getDistance(target, points[i])) < 20000) {
                points[i].active = 0.1;
                points[i].circle.active = 0.3;
            } else if (Math.abs(getDistance(target, points[i])) < 40000) {
                points[i].active = 0.02;
                points[i].circle.active = 0.1;
            } else {
                points[i].active = 0;
                points[i].circle.active = 0;
            }

            drawLines(points[i]);
            points[i].circle.draw();
        }
    }
    requestAnimationFrame(animate);
}

function shiftPoint(p) {
    TweenLite.to(p, 1 + 1 * Math.random(), {
        x: p.originX - 50 + Math.random() * 100,
        y: p.originY - 50 + Math.random() * 100,
        ease: Circ.easeInOut,
        onComplete: function() {
            shiftPoint(p);
        }
    });
}

// Canvas manipulation
function drawLines(p) {
    if (!p.active) return;
    for (var i in p.closest) {
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.closest[i].x, p.closest[i].y);
        ctx.strokeStyle = 'rgba(255,255,255,' + p.active + ')';
        ctx.stroke();
    }
}

function Circle(pos, rad, color) {
    var _this = this;

    // constructor
    (function() {
        _this.pos = pos || null;
        _this.radius = rad || null;
        _this.color = color || null;
    })();

    this.draw = function() {
        if (!_this.active) return;
        ctx.beginPath();
        ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
        ctx.fillStyle = 'rgba(255,255,255,' + _this.active + ')';
        ctx.fill();
    };
}

// Util
function getDistance(p1, p2) {
    return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
}

init();


;
(function(window) {

    'use strict';

    var search_form = document.getElementsByClassName('search__form');
    console.log(search_form);



    function createHome() {

        var homeDiv = document.createElement('div');
        window.location.href = 'home/index.php';


    }


    $(search_form).submit(function(event) {
        if ('Hello World' === $("input").val() || 'HelloWorld' === $("input").val()|| 'HELLO WORLD' === $("input").val() || 'HELLOWORLD' === $("input").val() || 'hello world' === $("input").val() || 'helloworld' === $("input").val()) {

            createHome();
        }
        var binder = $('input').val();
        var terminal_div = document.getElementsByClassName('terminal');
        $('.terminal').addClass("binding");

        var commands = document.createElement('p');
        commands.innerHTML = ('Execute: ' + binder);
        commands.setAttribute('class', 'terminal__line');
        $(commands).appendTo(terminal_div);





        event.preventDefault();
    });



})(window);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// ——————————————————————————————————————————————————
// TextScramble
// ——————————————————————————————————————————————————

function textScramble() {
  var TextScramble = function () {
    function TextScramble(el) {
      _classCallCheck(this, TextScramble);

      this.el = el;
      this.chars = 'abcdefghijklmnopqrstuvwxyz';
      this.update = this.update.bind(this);
    }

    TextScramble.prototype.setText = function setText(newText) {
      var _this = this;

      var oldText = this.el.innerText;
      var length = Math.max(oldText.length, newText.length);
      var promise = new Promise(function (resolve) {
        return _this.resolve = resolve;
      });
      this.queue = [];
      for (var i = 0; i < length; i++) {
        var from = oldText[i] || '';
        var to = newText[i] || '';
        var start = Math.floor(Math.random() * 40);
        var end = start + Math.floor(Math.random() * 600);
        this.queue.push({ from: from, to: to, start: start, end: end });
      }
      cancelAnimationFrame(this.frameRequest);
      this.frame = 0;
      this.update();
      return promise;
    };

    TextScramble.prototype.update = function update() {
      var output = '';
      var complete = 0;
      for (var i = 0, n = this.queue.length; i < n; i++) {
        var _queue$i = this.queue[i];
        var from = _queue$i.from;
        var to = _queue$i.to;
        var start = _queue$i.start;
        var end = _queue$i.end;
        var char = _queue$i.char;

        if (this.frame >= end) {
          complete++;
          output += to;
        } else if (this.frame >= start) {
          if (!char || Math.random() < .28) {
            char = this.randomChar();
            this.queue[i].char = char;
          }
          output += '<span class="dud">' + char + '</span>';
        } else {
          output += from;
        }
      }
      this.el.innerHTML = output;
      if (complete === this.queue.length) {
        this.resolve();
      } else {
        this.frameRequest = requestAnimationFrame(this.update);
        this.frame++;
      }
    };

    TextScramble.prototype.randomChar = function randomChar() {
      return this.chars[Math.floor(Math.random() * this.chars.length)];
    };

    return TextScramble;
  }();

  var phrases = ['HellOrWord'];

  var el = document.querySelector('.text');
  var fx = new TextScramble(el);

  var counter = 0;
  var next = function next() {
    fx.setText(phrases[counter]).then(function () {
      setTimeout(next, 8000);
    });
    counter = (counter + 1) % phrases.length;
  };

  next();
}
setTimeout(textScramble, 0);