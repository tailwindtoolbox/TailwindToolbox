<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Basic Skeleton Template</title>
	<meta name="description" content="Free skeleton template to start your Tailwind CSS project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,skeleton, skeleton template">
	<?php include 'includes/head.php'; ?>

	<?php include 'includes/analytics.php'; ?>

	<?php include 'includes/ads.php'; ?>

</head>

<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Tailwind Skeleton Template</span>
		</div>
	</div>

	<!--section-->

	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">
			<div class="bg-white rounded shadow mx-1">
				<div class="p-3 sm:p-6 lg:p-8 text-grey-darker leading-normal text-base md:text-xl">

					<p class="text-xl md:text-2xl my-6 font-bold">This is a simple skeleton template for you to start your project with. Just copy the text and paste it into your editor</p>

					<p>If you build something using any of these template, please tweet us at <a href="https://www.twitter.com/tailwindtoolbox">@tailwindtoolbox</a> so we can check it out!</p>
				</div>

				<div class="w-4/5 py-4 mx-auto">
					<div id="divClipboard" class="overflow-x-auto bg-gray-100 text-sm md:text-base w-full border rounded shadow px-5 mb-5">
						<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;

&lt;head&gt;
  &lt;meta charset=&quot;UTF-8&quot;&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
  &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;ie=edge&quot;&gt;
  &lt;title&gt;Tailwind CSS Skeleton&lt;/title&gt;
  &lt;meta name=&quot;description&quot; content=&quot;&quot;&gt;
  &lt;meta name=&quot;keywords&quot; content=&quot;&quot;&gt;
  &lt;meta name=&quot;author&quot; content=&quot;&quot;&gt;

  &lt;!-- Font Awesome if you need it
  &lt;link rel=&quot;stylesheet&quot; href=&quot;https://use.fontawesome.com/releases/v5.10.2/css/all.css&quot;&gt;
  --&gt;
  &lt;link href=&quot;https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;!--Replace with your tailwind.css once created--&gt;
  &lt;link href=&quot;https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms--&gt;

&lt;/head&gt;

&lt;body class=&quot;bg-grey-100 font-sans leading-normal tracking-normal&quot;&gt;

  &lt;div class=&quot;container mx-auto&quot;&gt;
    &lt;h1 class=&quot;text-2xl font-bold text-indigo-500&quot;&gt;Hello World&lt;/h1&gt;
  &lt;/div&gt;


  &lt;!-- jQuery if you need it
  &lt;script
  src=&quot;https://code.jquery.com/jquery-3.4.1.min.js&quot;
  integrity=&quot;sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=&quot;
  crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
  --&gt;

&lt;/body&gt;

&lt;/html&gt;
</pre>

					</div>

					<div class="py-4">
						<button id="copyButton" onclick="copyClipboard()" class="w-full sm:w-auto bg-brand hover:bg-teal-500 text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg">Copy Text</button>
						<button class="w-full mt-6 sm:mt-0 sm:w-auto bg-brand hover:bg-teal-500 text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg" id="dwn-btn">Download</button>
						<span id="confirmation"></span>
					</div>


				</div>

				<div class="p-6">
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				</div>

			</div>
		</div>

	</div>







	<?php include 'includes/footer.php'; ?>


	<script>
		function copyClipboard() {
			var elm = document.getElementById("divClipboard");
			// for Internet Explorer

			if (document.body.createTextRange) {
				var range = document.body.createTextRange();
				range.moveToElementText(elm);
				range.select();
				document.execCommand("Copy");

				document.getElementById("copyButton").textContent = "Copied!";
				setTimeout(function() {
					document.getElementById("copyButton").textContent = "Copy Text";
				}, 1500);

			} else if (window.getSelection) {
				// other browsers

				var selection = window.getSelection();
				var range = document.createRange();
				range.selectNodeContents(elm);
				selection.removeAllRanges();
				selection.addRange(range);
				document.execCommand("Copy");

				document.getElementById("copyButton").textContent = "Copied!";
				setTimeout(function() {
					document.getElementById("copyButton").textContent = "Copy Text";
				}, 1500);

			}
		}
	</script>

	<script>
		function download(filename, text) {
			var element = document.createElement('a');
			element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
			element.setAttribute('download', filename);

			element.style.display = 'none';
			document.body.appendChild(element);

			element.click();

			document.body.removeChild(element);
		}

		// Start file download.
		document.getElementById("dwn-btn").addEventListener("click", function() {
			// Generate download of hello.txt file with some content
			var text = document.getElementById("divClipboard").innerText;
			var filename = "index.html";

			download(filename, text);
		}, false);
	</script>

	<script>
		w3CodeColor(document.getElementById("divClipboard"));
		//https://www.w3schools.com/howto/howto_syntax_highlight.asp
		function w3CodeColor(elmnt, mode) {
			var lang = (mode || "html");
			var elmntObj = (document.getElementById(elmnt) || elmnt);
			var elmntTxt = elmntObj.innerHTML;
			var tagcolor = "mediumblue";
			var tagnamecolor = "brown";
			var attributecolor = "red";
			var attributevaluecolor = "mediumblue";
			var commentcolor = "green";
			var cssselectorcolor = "brown";
			var csspropertycolor = "red";
			var csspropertyvaluecolor = "mediumblue";
			var cssdelimitercolor = "black";
			var cssimportantcolor = "red";
			var jscolor = "black";
			var jskeywordcolor = "mediumblue";
			var jsstringcolor = "brown";
			var jsnumbercolor = "red";
			var jspropertycolor = "black";
			elmntObj.style.fontFamily = "Consolas,'Courier New', monospace";
			if (!lang) {
				lang = "html"
			}
			if (lang == "html") {
				elmntTxt = htmlMode(elmntTxt)
			}
			if (lang == "css") {
				elmntTxt = cssMode(elmntTxt)
			}
			if (lang == "js") {
				elmntTxt = jsMode(elmntTxt)
			}
			elmntObj.innerHTML = elmntTxt;

			function extract(str, start, end, func, repl) {
				var s, e, d = "",
					a = [];
				while (str.search(start) > -1) {
					s = str.search(start);
					e = str.indexOf(end, s);
					if (e == -1) {
						e = str.length
					}
					if (repl) {
						a.push(func(str.substring(s, e + (end.length))));
						str = str.substring(0, s) + repl + str.substr(e + (end.length))
					} else {
						d += str.substring(0, s);
						d += func(str.substring(s, e + (end.length)));
						str = str.substr(e + (end.length))
					}
				}
				this.rest = d + str;
				this.arr = a
			}

			function htmlMode(txt) {
				var rest = txt,
					done = "",
					php, comment, angular, startpos, endpos, note, i;
				comment = new extract(rest, "&lt;!--", "--&gt;", commentMode, "W3HTMLCOMMENTPOS");
				rest = comment.rest;
				while (rest.indexOf("&lt;") > -1) {
					note = "";
					startpos = rest.indexOf("&lt;");
					if (rest.substr(startpos, 9).toUpperCase() == "&LT;STYLE") {
						note = "css"
					}
					if (rest.substr(startpos, 10).toUpperCase() == "&LT;SCRIPT") {
						note = "javascript"
					}
					endpos = rest.indexOf("&gt;", startpos);
					if (endpos == -1) {
						endpos = rest.length
					}
					done += rest.substring(0, startpos);
					done += tagMode(rest.substring(startpos, endpos + 4));
					rest = rest.substr(endpos + 4);
					if (note == "css") {
						endpos = rest.indexOf("&lt;/style&gt;");
						if (endpos > -1) {
							done += cssMode(rest.substring(0, endpos));
							rest = rest.substr(endpos)
						}
					}
					if (note == "javascript") {
						endpos = rest.indexOf("&lt;/script&gt;");
						if (endpos > -1) {
							done += jsMode(rest.substring(0, endpos));
							rest = rest.substr(endpos)
						}
					}
				}
				rest = done + rest;
				for (i = 0; i < comment.arr.length; i++) {
					rest = rest.replace("W3HTMLCOMMENTPOS", comment.arr[i])
				}
				return rest
			}

			function tagMode(txt) {
				var rest = txt,
					done = "",
					startpos, endpos, result;
				while (rest.search(/(\s|<br>)/) > -1) {
					startpos = rest.search(/(\s|<br>)/);
					endpos = rest.indexOf("&gt;");
					if (endpos == -1) {
						endpos = rest.length
					}
					done += rest.substring(0, startpos);
					done += attributeMode(rest.substring(startpos, endpos));
					rest = rest.substr(endpos)
				}
				result = done + rest;
				result = "<span style=color:" + tagcolor + ">&lt;</span>" + result.substring(4);
				if (result.substr(result.length - 4, 4) == "&gt;") {
					result = result.substring(0, result.length - 4) + "<span style=color:" + tagcolor + ">&gt;</span>"
				}
				return "<span style=color:" + tagnamecolor + ">" + result + "</span>"
			}

			function attributeMode(txt) {
				var rest = txt,
					done = "",
					startpos, endpos, singlefnuttpos, doublefnuttpos, spacepos;
				while (rest.indexOf("=") > -1) {
					endpos = -1;
					startpos = rest.indexOf("=");
					singlefnuttpos = rest.indexOf("'", startpos);
					doublefnuttpos = rest.indexOf('"', startpos);
					spacepos = rest.indexOf(" ", startpos + 2);
					if (spacepos > -1 && (spacepos < singlefnuttpos || singlefnuttpos == -1) && (spacepos < doublefnuttpos || doublefnuttpos == -1)) {
						endpos = rest.indexOf(" ", startpos)
					} else if (doublefnuttpos > -1 && (doublefnuttpos < singlefnuttpos || singlefnuttpos == -1) && (doublefnuttpos < spacepos || spacepos == -1)) {
						endpos = rest.indexOf('"', rest.indexOf('"', startpos) + 1)
					} else if (singlefnuttpos > -1 && (singlefnuttpos < doublefnuttpos || doublefnuttpos == -1) && (singlefnuttpos < spacepos || spacepos == -1)) {
						endpos = rest.indexOf("'", rest.indexOf("'", startpos) + 1)
					}
					if (!endpos || endpos == -1 || endpos < startpos) {
						endpos = rest.length
					}
					done += rest.substring(0, startpos);
					done += attributeValueMode(rest.substring(startpos, endpos + 1));
					rest = rest.substr(endpos + 1)
				}
				return "<span style=color:" + attributecolor + ">" + done + rest + "</span>"
			}

			function attributeValueMode(txt) {
				return "<span style=color:" + attributevaluecolor + ">" + txt + "</span>"
			}

			function commentMode(txt) {
				return "<span style=color:" + commentcolor + ">" + txt + "</span>"
			}

			function cssMode(txt) {
				var rest = txt,
					done = "",
					s, e, comment, i, midz, c, cc;
				comment = new extract(rest, /\/\*/, "*/", commentMode, "W3CSSCOMMENTPOS");
				rest = comment.rest;
				while (rest.search("{") > -1) {
					s = rest.search("{");
					midz = rest.substr(s + 1);
					cc = 1;
					c = 0;
					for (i = 0; i < midz.length; i++) {
						if (midz.substr(i, 1) == "{") {
							cc++;
							c++
						}
						if (midz.substr(i, 1) == "}") {
							cc--
						}
						if (cc == 0) {
							break
						}
					}
					if (cc != 0) {
						c = 0
					}
					e = s;
					for (i = 0; i <= c; i++) {
						e = rest.indexOf("}", e + 1)
					}
					if (e == -1) {
						e = rest.length
					}
					done += rest.substring(0, s + 1);
					done += cssPropertyMode(rest.substring(s + 1, e));
					rest = rest.substr(e)
				}
				rest = done + rest;
				rest = rest.replace(/{/g, "<span style=color:" + cssdelimitercolor + ">{</span>");
				rest = rest.replace(/}/g, "<span style=color:" + cssdelimitercolor + ">}</span>");
				for (i = 0; i < comment.arr.length; i++) {
					rest = rest.replace("W3CSSCOMMENTPOS", comment.arr[i])
				}
				return "<span style=color:" + cssselectorcolor + ">" + rest + "</span>"
			}

			function cssPropertyMode(txt) {
				var rest = txt,
					done = "",
					s, e, n, loop;
				if (rest.indexOf("{") > -1) {
					return cssMode(rest)
				}
				while (rest.search(":") > -1) {
					s = rest.search(":");
					loop = !0;
					n = s;
					while (loop == !0) {
						loop = !1;
						e = rest.indexOf(";", n);
						if (rest.substring(e - 5, e + 1) == "&nbsp;") {
							loop = !0;
							n = e + 1
						}
					}
					if (e == -1) {
						e = rest.length
					}
					done += rest.substring(0, s);
					done += cssPropertyValueMode(rest.substring(s, e + 1));
					rest = rest.substr(e + 1)
				}
				return "<span style=color:" + csspropertycolor + ">" + done + rest + "</span>"
			}

			function cssPropertyValueMode(txt) {
				var rest = txt,
					done = "",
					s;
				rest = "<span style=color:" + cssdelimitercolor + ">:</span>" + rest.substring(1);
				while (rest.search(/!important/i) > -1) {
					s = rest.search(/!important/i);
					done += rest.substring(0, s);
					done += cssImportantMode(rest.substring(s, s + 10));
					rest = rest.substr(s + 10)
				}
				result = done + rest;
				if (result.substr(result.length - 1, 1) == ";" && result.substr(result.length - 6, 6) != "&nbsp;" && result.substr(result.length - 4, 4) != "&lt;" && result.substr(result.length - 4, 4) != "&gt;" && result.substr(result.length - 5, 5) != "&amp;") {
					result = result.substring(0, result.length - 1) + "<span style=color:" + cssdelimitercolor + ">;</span>"
				}
				return "<span style=color:" + csspropertyvaluecolor + ">" + result + "</span>"
			}

			function cssImportantMode(txt) {
				return "<span style=color:" + cssimportantcolor + ";font-weight:bold;>" + txt + "</span>"
			}

			function jsMode(txt) {
				var rest = txt,
					done = "",
					esc = [],
					i, cc, tt = "",
					sfnuttpos, dfnuttpos, compos, comlinepos, keywordpos, numpos, mypos, dotpos, y;
				for (i = 0; i < rest.length; i++) {
					cc = rest.substr(i, 1);
					if (cc == "\\") {
						esc.push(rest.substr(i, 2));
						cc = "W3JSESCAPE";
						i++
					}
					tt += cc
				}
				rest = tt;
				y = 1;
				while (y == 1) {
					sfnuttpos = getPos(rest, "'", "'", jsStringMode);
					dfnuttpos = getPos(rest, '"', '"', jsStringMode);
					compos = getPos(rest, /\/\*/, "*/", commentMode);
					comlinepos = getPos(rest, /\/\//, "<br>", commentMode);
					numpos = getNumPos(rest, jsNumberMode);
					keywordpos = getKeywordPos("js", rest, jsKeywordMode);
					dotpos = getDotPos(rest, jsPropertyMode);
					if (Math.max(numpos[0], sfnuttpos[0], dfnuttpos[0], compos[0], comlinepos[0], keywordpos[0], dotpos[0]) == -1) {
						break
					}
					mypos = getMinPos(numpos, sfnuttpos, dfnuttpos, compos, comlinepos, keywordpos, dotpos);
					if (mypos[0] == -1) {
						break
					}
					if (mypos[0] > -1) {
						done += rest.substring(0, mypos[0]);
						done += mypos[2](rest.substring(mypos[0], mypos[1]));
						rest = rest.substr(mypos[1])
					}
				}
				rest = done + rest;
				for (i = 0; i < esc.length; i++) {
					rest = rest.replace("W3JSESCAPE", esc[i])
				}
				return "<span style=color:" + jscolor + ">" + rest + "</span>"
			}

			function jsStringMode(txt) {
				return "<span style=color:" + jsstringcolor + ">" + txt + "</span>"
			}

			function jsKeywordMode(txt) {
				return "<span style=color:" + jskeywordcolor + ">" + txt + "</span>"
			}

			function jsNumberMode(txt) {
				return "<span style=color:" + jsnumbercolor + ">" + txt + "</span>"
			}

			function jsPropertyMode(txt) {
				return "<span style=color:" + jspropertycolor + ">" + txt + "</span>"
			}

			function getDotPos(txt, func) {
				var x, i, j, s, e, arr = [".", "<", " ", ";", "(", "+", ")", "[", "]", ",", "&", ":", "{", "}", "/", "-", "*", "|", "%"];
				s = txt.indexOf(".");
				if (s > -1) {
					x = txt.substr(s + 1);
					for (j = 0; j < x.length; j++) {
						cc = x[j];
						for (i = 0; i < arr.length; i++) {
							if (cc.indexOf(arr[i]) > -1) {
								e = j;
								return [s + 1, e + s + 1, func]
							}
						}
					}
				}
				return [-1, -1, func]
			}

			function getMinPos() {
				var i, arr = [];
				for (i = 0; i < arguments.length; i++) {
					if (arguments[i][0] > -1) {
						if (arr.length == 0 || arguments[i][0] < arr[0]) {
							arr = arguments[i]
						}
					}
				}
				if (arr.length == 0) {
					arr = arguments[i]
				}
				return arr
			}

			function getKeywordPos(typ, txt, func) {
				var words, i, pos, rpos = -1,
					rpos2 = -1,
					patt;
				if (typ == "js") {
					words = ["abstract", "arguments", "boolean", "break", "byte", "case", "catch", "char", "class", "const", "continue", "debugger", "default", "delete", "do", "double", "else", "enum", "eval", "export", "extends", "false", "final", "finally", "float", "for", "function", "goto", "if", "implements", "import", "in", "instanceof", "int", "interface", "let", "long", "NaN", "native", "new", "null", "package", "private", "protected", "public", "return", "short", "static", "super", "switch", "synchronized", "this", "throw", "throws", "transient", "true", "try", "typeof", "var", "void", "volatile", "while", "with", "yield"]
				}
				for (i = 0; i < words.length; i++) {
					pos = txt.indexOf(words[i]);
					if (pos > -1) {
						patt = /\W/g;
						if (txt.substr(pos + words[i].length, 1).match(patt) && txt.substr(pos - 1, 1).match(patt)) {
							if (pos > -1 && (rpos == -1 || pos < rpos)) {
								rpos = pos;
								rpos2 = rpos + words[i].length
							}
						}
					}
				}
				return [rpos, rpos2, func]
			}

			function getPos(txt, start, end, func) {
				var s, e;
				s = txt.search(start);
				e = txt.indexOf(end, s + (end.length));
				if (e == -1) {
					e = txt.length
				}
				return [s, e + (end.length), func]
			}

			function getNumPos(txt, func) {
				var arr = ["<br>", " ", ";", "(", "+", ")", "[", "]", ",", "&", ":", "{", "}", "/", "-", "*", "|", "%", "="],
					i, j, c, startpos = 0,
					endpos, word;
				for (i = 0; i < txt.length; i++) {
					for (j = 0; j < arr.length; j++) {
						c = txt.substr(i, arr[j].length);
						if (c == arr[j]) {
							if (c == "-" && (txt.substr(i - 1, 1) == "e" || txt.substr(i - 1, 1) == "E")) {
								continue
							}
							endpos = i;
							if (startpos < endpos) {
								word = txt.substring(startpos, endpos);
								if (!isNaN(word)) {
									return [startpos, endpos, func]
								}
							}
							i += arr[j].length;
							startpos = i;
							i -= 1;
							break
						}
					}
				}
				return [-1, -1, func]
			}
		}
	</script>

</body>

</html>