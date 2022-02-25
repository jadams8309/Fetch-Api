<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,
			initial-scale=1, shrink-to-fit=no" />

	<!-- Links -->
    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity=
    "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">       
	<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
	<link rel="manifest" href="/images/site.webmanifest">

	<title>
		Fetch Github Api 
	</title>
</head>

<body>

    <h1 class="page-title text-center p-5 search-box">Search Organizations</h1>
    <div class="container">
        <form action="repository.php" method="get"> 
            <input class="form-control text-dark"type="text" name="organization_name" placeholder="Enter Organization Name" /> 
            <input class="btn home-button"type="submit" name="submit" value="Search"/> 
        </form> 
        <h5>Hint: Search for Keywords.....NetFlix, Blockbuster, NFL, and Twitter.</h5>
    </div>
<a href="#" class="scroll-down"></a>
<h1 id="typer-size">                
                <!-- TEXTS -->
                <span id="typed"></span>
                <div id="typed-strings">
                	<p>Hello</p>
                    <p>I'm Joel Adams</p>
                    <p>I love Web Development</p>
                    <p>To Code......is my Passion</p>
					<p>PHP</p>
					<p>JAVASCRIPT</p>
    				<p>HTML</p>
					<p>CSS</p>
					<p>MySQL</p>
					<p>AJAX</p>
					<p>jQuery</p>
					<p>Angular</p>
					<p>UI</p>
					<p>UX</p>
					<p>Coding is my Life</p>
                </div>
                <!-- TEXTS ENDS -->
            </h1>
            <!-- TITLE -->
            
    <h3>Frontend Engineer | Joel Adams</h3>
     <a href="https://php.joeleadams.com/Joel-Adams-Resume.pdf" target="blank"><h4>RESUME</h4></a>
    <a href="https://www.linkedin.com/in/joel-adams-55b11867/"><div class="fs-4 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
</svg>
              LinkedIn Profile
            </div>
    </a>
    




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous">
	</script>

	<script type="text/javascript">
		(function () {
   'use strict';
	
	// WAIT FOR ALL TO BE LOADED
	window.onload = function() {
		
		// add loaded class to html
		var root = document.documentElement;
		root.className += ' loaded';

		// TYPING EFFECT
		Typed.new('#typed', {
            stringsElement: document.getElementById('typed-strings'),
			loop: true,
			typeSpeed: 7,
			backSpeed: 2,
			startDelay: 1000,
			backDelay: 1200
        });
	}; // all loaded
	
	  
}());





/*
	PLUGINS
*/



! function(t, s, e) {
	"use strict";
	var i = function(t, s) {
		var i = this;
		this.el = t, this.options = {}, Object.keys(r).forEach(function(t) {
			i.options[t] = r[t]
		}), Object.keys(s).forEach(function(t) {
			i.options[t] = s[t]
		}), this.isInput = "input" === this.el.tagName.toLowerCase(), this.attr = this.options.attr, this.showCursor = !this.isInput && this.options.showCursor, this.elContent = this.attr ? this.el.getAttribute(this.attr) : this.el.textContent, this.contentType = this.options.contentType, this.typeSpeed = this.options.typeSpeed, this.startDelay = this.options.startDelay, this.backSpeed = this.options.backSpeed, this.backDelay = this.options.backDelay, e && this.options.stringsElement instanceof e ? this.stringsElement = this.options.stringsElement[0] : this.stringsElement = this.options.stringsElement, this.strings = this.options.strings, this.strPos = 0, this.arrayPos = 0, this.stopNum = 0, this.loop = this.options.loop, this.loopCount = this.options.loopCount, this.curLoop = 0, this.stop = !1, this.cursorChar = this.options.cursorChar, this.shuffle = this.options.shuffle, this.sequence = [], this.build()
	};
	i.prototype = {
		constructor: i,
		init: function() {
			var t = this;
			t.timeout = setTimeout(function() {
				for (var s = 0; s < t.strings.length; ++s) t.sequence[s] = s;
				t.shuffle && (t.sequence = t.shuffleArray(t.sequence)), t.typewrite(t.strings[t.sequence[t.arrayPos]], t.strPos)
			}, t.startDelay)
		},
		build: function() {
			var t = this;
			if (this.showCursor === !0 && (this.cursor = s.createElement("span"), this.cursor.className = "typed-cursor", this.cursor.innerHTML = this.cursorChar, this.el.parentNode && this.el.parentNode.insertBefore(this.cursor, this.el.nextSibling)), this.stringsElement) {
				this.strings = [], this.stringsElement.style.display = "none";
				var e = Array.prototype.slice.apply(this.stringsElement.children);
				e.forEach(function(s) {
					t.strings.push(s.innerHTML)
				})
			}
			this.init()
		},
		typewrite: function(t, s) {
			if (this.stop !== !0) {
				var e = Math.round(70 * Math.random()) + this.typeSpeed,
					i = this;
				i.timeout = setTimeout(function() {
					var e = 0,
						r = t.substr(s);
					if ("^" === r.charAt(0)) {
						var o = 1;
						/^\^\d+/.test(r) && (r = /\d+/.exec(r)[0], o += r.length, e = parseInt(r)), t = t.substring(0, s) + t.substring(s + o)
					}
					if ("html" === i.contentType) {
						var n = t.substr(s).charAt(0);
						if ("<" === n || "&" === n) {
							var a = "",
								h = "";
							for (h = "<" === n ? ">" : ";"; t.substr(s + 1).charAt(0) !== h && (a += t.substr(s).charAt(0), s++, !(s + 1 > t.length)););
							s++, a += h
						}
					}
					i.timeout = setTimeout(function() {
						if (s === t.length) {
							if (i.options.onStringTyped(i.arrayPos), i.arrayPos === i.strings.length - 1 && (i.options.callback(), i.curLoop++, i.loop === !1 || i.curLoop === i.loopCount)) return;
							i.timeout = setTimeout(function() {
								i.backspace(t, s)
							}, i.backDelay)
						} else {
							0 === s && i.options.preStringTyped(i.arrayPos);
							var e = t.substr(0, s + 1);
							i.attr ? i.el.setAttribute(i.attr, e) : i.isInput ? i.el.value = e : "html" === i.contentType ? i.el.innerHTML = e : i.el.textContent = e, s++, i.typewrite(t, s)
						}
					}, e)
				}, e)
			}
		},
		backspace: function(t, s) {
			if (this.stop !== !0) {
				var e = Math.round(70 * Math.random()) + this.backSpeed,
					i = this;
				i.timeout = setTimeout(function() {
					if ("html" === i.contentType && ">" === t.substr(s).charAt(0)) {
						for (var e = "";
							"<" !== t.substr(s - 1).charAt(0) && (e -= t.substr(s).charAt(0), s--, !(s < 0)););
						s--, e += "<"
					}
					var r = t.substr(0, s);
					i.attr ? i.el.setAttribute(i.attr, r) : i.isInput ? i.el.value = r : "html" === i.contentType ? i.el.innerHTML = r : i.el.textContent = r, s > i.stopNum ? (s--, i.backspace(t, s)) : s <= i.stopNum && (i.arrayPos++, i.arrayPos === i.strings.length ? (i.arrayPos = 0, i.shuffle && (i.sequence = i.shuffleArray(i.sequence)), i.init()) : i.typewrite(i.strings[i.sequence[i.arrayPos]], s))
				}, e)
			}
		},
		shuffleArray: function(t) {
			var s, e, i = t.length;
			if (i)
				for (; --i;) e = Math.floor(Math.random() * (i + 1)), s = t[e], t[e] = t[i], t[i] = s;
			return t
		},
		reset: function() {
			var t = this;
			clearInterval(t.timeout);
			this.el.getAttribute("id");
			this.el.textContent = "", "undefined" != typeof this.cursor && "undefined" != typeof this.cursor.parentNode && this.cursor.parentNode.removeChild(this.cursor), this.strPos = 0, this.arrayPos = 0, this.curLoop = 0, this.options.resetCallback()
		}
	}, i["new"] = function(t, e) {
		var r = Array.prototype.slice.apply(s.querySelectorAll(t));
		r.forEach(function(t) {
			var s = t._typed,
				r = "object" == typeof e && e;
			s && s.reset(), t._typed = s = new i(t, r), "string" == typeof e && s[e]()
		})
	}, e && (e.fn.typed = function(t) {
		return this.each(function() {
			var s = e(this),
				r = s.data("typed"),
				o = "object" == typeof t && t;
			r && r.reset(), s.data("typed", r = new i(this, o)), "string" == typeof t && r[t]()
		})
	}), t.Typed = i;
	var r = {
		strings: ["These are the default values", "Try them", "Use your own!", ".."],
		stringsElement: null,
		typeSpeed: 0,
		startDelay: 0,
		backSpeed: 0,
		shuffle: !1,
		backDelay: 500,
		loop: !1,
		loopCount: !1,
		showCursor: !0,
		cursorChar: "|",
		attr: null,
		contentType: "html",
		callback: function() {},
		preStringTyped: function() {},
		onStringTyped: function() {},
		resetCallback: function() {}
	}
}(window, document, window.jQuery);
	</script>


</body>

</html>
