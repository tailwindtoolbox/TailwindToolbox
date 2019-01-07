<?php
	/*NAMING CONVENTION
		This page 	=> lowercase with - (e.g. fixed-header)
		Github link => titlecase with - (e.g. Fixed-Header)
	*/

	$pageID 	= basename(__FILE__, '.php'); //Pick up from filename; 
	$pageTITLE 	= ucwords(str_replace("-"," ",$pageID)); //'Convert $pageID to title case e.g. Fixed Header';

	$pageURL 	= 'https://www.tailwindtoolbox.com/templates/'.$pageID;
	$pageImage	= 'https://www.tailwindtoolbox.com/templates/'.$pageID.'png';

	$pageSRC 	= 'SRC-'.$pageID.'.php';
	$pageGIT 	= 'https://github.com/tailwindtoolbox/'.str_replace(" ","-",$pageTITLE);
	$pageDL 	= 'https://github.com/tailwindtoolbox/'.str_replace(" ","-",$pageTITLE).'/archive/master.zip';

	$pageOFFSET = '-100';
	$pageINTRO	= 'This starter template has a Fixed Header which will always appear at the top of the page.<br>
				   The nav bar shortcuts will wrap onto the next row for small screens.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - <?= $pageTITLE;?></title>
	<meta name="description" content="Free open source Tailwind CSS <?= $pageTITLE;?> starter template">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">

	<!-- Primary Meta Tags -->
	<title>Tailwind Toolbox - Free Starter Templates for Tailwind CSS</title>
	<meta name="title" content="Tailwind Toolbox - Free Starter Templates for Tailwind CSS">
	<meta name="description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.tailwindtoolbox.com/">
	<meta property="og:title" content="Tailwind Toolbox - Free Starter Templates for Tailwind CSS">
	<meta property="og:description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="og:image" content="<?= $pageImage;?>">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
	<meta property="twitter:title" content="Tailwind Toolbox - Free Starter Templates for Tailwind CSS">
	<meta property="twitter:description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="twitter:image" content="<?= $pageImage;?>">

	<!-- Stylesheets -->
	<link href="../css/tailwind.min.css" rel="stylesheet">
	<link href="../css/carbon.min.css" rel="stylesheet">

	<?php include '../includes/analytics.php';?>
	
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include '../includes/nav.php';?>

	<!--header-->
	<div class="h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-32 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Starter Template - <?= $pageTITLE;?></span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 xl:-mt-32 px-0">
			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="p-3 sm:p-6 lg:p-8 text-grey-darker leading-normal text-base md:text-xl">

					<div class="flex flex-wrap">

						<div class="w-full lg:w-4/5 p-3 text-grey-darker leading-normal text-base md:text-xl">
							<p class="text-xl md:text-2xl font-bold"><?= $pageINTRO;?></p>

							<div class="text-center pt-12">
								<a href="<?= $pageDL;?>" target="_blank" rel="noopener"><button class="w-full sm:w-auto bg-teal hover:bg-teal-dark text-white text-xl font-extrabold -mt-2 py-3 px-5 rounded shadow"><svg class="fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download Template</button></a>
								<span class="mr-6"></span>	
								<a href="<?=$pageGIT;?>" target="_blank" rel="noopener"><button class="w-full sm:w-auto bg-grey-lightest hover:bg-black text-grey-darkest hover:text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg">View on GitHub</button></a>
							</div>
				
						</div>

						<div class="w-full lg:w-1/5 py-6 lg:py-0">
							<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
						</div>

						<div class="w-full pt-12">
							<h2 class="text-xl md:text-3xl text-brand pb-4">Preview</h2>
							<hr class="border border-grey-lighter">
						</div>
					</div>


					<div class="text-center pt-6 h-1 invisible md:visible md:h-auto">
						<button class="bg-white text-brand border border-brand hover:bg-brand hover:text-white font-extrabold -mt-2 py-3 px-5 rounded" onclick="goMobile()">Mobile</button>
						<button class="bg-white text-brand border border-brand hover:bg-brand hover:text-white font-extrabold -mt-2 py-3 px-5 rounded" onclick="goTablet()">Tablet</button>
						<button class="bg-white text-brand border border-brand hover:bg-brand hover:text-white font-extrabold -mt-2 py-3 px-5 rounded" onclick="goDesktop()">Desktop</button>
					</div>
					
					<div class="rounded-b overflow-hidden mx-auto w-full mt-4 lg:mt-12 mb-4 shadow-lg" id="device">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						
						<iframe id="iframecontent" src="<?= $pageSRC;?>" style="width:100%;" onLoad="calcIframeHeight(<?= $pageOFFSET;?>);window.scroll(0,0);"></iframe>
					
					</div>

						<div class="pt-12">
							<h2 class="text-xl md:text-3xl text-brand pb-4">Code Snippet</h2>
							<hr class="border border-grey-lighter">
							<div class="py-4 text-center">
								<button id="copyButton" onclick="copyClipboard()" class="w-full sm:w-auto bg-teal hover:bg-teal-dark text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg">Copy to Clipboard</button>
								<span id="confirmation"></span>
							</div>
							
						</div>

						<div class="w-full lg:w-4/5 py-4 mx-auto">
							<div id="code" class="overflow-x-auto bg-grey-lightest text-sm md:text-base w-full border rounded shadow px-5 mb-5">
							<pre>
&lt;nav class=&quot;fixed w-full z-10 pin-t&quot;&gt;
  &lt;div class=&quot;container mx-auto flex flex-wrap items-center&quot;&gt;
    &lt;div class=&quot;flex w-full md:w-1/2 justify-center md:justify-start&quot;&gt;
      &lt;a class=&quot;no-underline&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;text-2xl pl-2&quot;&gt;Your Brand&lt;/span&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end&quot;&gt;
      &lt;ul class=&quot;list-reset flex justify-between flex-1 md:flex-none items-center&quot;&gt;
        &lt;li class=&quot;mr-3&quot;&gt;
          &lt;a class=&quot;inline-block text-underline&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;mr-3&quot;&gt;
          &lt;a class=&quot;inline-block&quot; href=&quot;#&quot;&gt;link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;mr-3&quot;&gt;
          &lt;a class=&quot;inline-block&quot; href=&quot;#&quot;&gt;link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;mr-3&quot;&gt;
          &lt;a class=&quot;inline-block&quot; href=&quot;#&quot;&gt;link&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/nav&gt;
							</pre>
						
							</div>
						</div>



					<p class="my-16 p-6 w-full container mx-auto bg-teal-lightest text-center text-grey-dark">Find more templates at: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.tailwindtoolbox.com/starter-templates" target="_blank" rel="noopener">www.TailwindToolbox.com/starter-templates</a></p>	
					
				</div>
			</div>
		</div>
	</div>


	<!--Disqus-->
	<div class="container w-4/5 lg:w-3/5 mx-auto pb-12">

	<div id="disqus_thread"></div>
	<script>

	var disqus_config = function () {
	this.page.url = '<?=$pageURL;?>';  // Page's canonical URL variable
	this.page.identifier = '<?=$pageID;?>'; // Page's unique identifier variable
	};

	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://tailwindtoolbox.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
							
	</div>
	<!-- / Disqus -->

	<?php include '../includes/footer-templates.php';?>

<script>
	function calcIframeHeight(offset) {
		var the_height = document.getElementById('iframecontent').contentWindow.document.body.scrollHeight;
		document.getElementById('iframecontent').height = the_height + offset;
	}

	function goMobile() {
		document.getElementById("device").classList.add("w-1/3");
		document.getElementById("device").classList.remove("w-full");
		document.getElementById("device").classList.remove("w-2/3");
	}

	function goTablet() {
		document.getElementById("device").classList.add("w-2/3");
		document.getElementById("device").classList.remove("w-full");
		document.getElementById("device").classList.remove("w-1/3");
	}
	function goDesktop() {
		document.getElementById("device").classList.add("w-full");
		document.getElementById("device").classList.remove("w-1/3");
		document.getElementById("device").classList.remove("w-2/3");
	}

</script>
<script>
	function copyClipboard() {
	  var elm = document.getElementById("code");
	  // for Internet Explorer

	  if(document.body.createTextRange) {
		var range = document.body.createTextRange();
		range.moveToElementText(elm);
		range.select();
		document.execCommand("Copy");

		document.getElementById("copyButton").textContent = "Copied!";
		setTimeout(function(){
			document.getElementById("copyButton").textContent = "Copy Text";
		}, 1500);

	  }
	  else if(window.getSelection) {
		// other browsers

		var selection = window.getSelection();
		var range = document.createRange();
		range.selectNodeContents(elm);
		selection.removeAllRanges();
		selection.addRange(range);
		document.execCommand("Copy");

		document.getElementById("copyButton").textContent = "Copied!";
		setTimeout(function(){
			document.getElementById("copyButton").textContent = "Copy Text";
		}, 1500);

	  }
	}
	</script>
<script>
	w3CodeColor(document.getElementById("code"));
//https://www.w3schools.com/howto/howto_syntax_highlight.asp
function w3CodeColor(elmnt,mode){var lang=(mode||"html");var elmntObj=(document.getElementById(elmnt)||elmnt);var elmntTxt=elmntObj.innerHTML;var tagcolor="mediumblue";var tagnamecolor="brown";var attributecolor="red";var attributevaluecolor="mediumblue";var commentcolor="green";var cssselectorcolor="brown";var csspropertycolor="red";var csspropertyvaluecolor="mediumblue";var cssdelimitercolor="black";var cssimportantcolor="red";var jscolor="black";var jskeywordcolor="mediumblue";var jsstringcolor="brown";var jsnumbercolor="red";var jspropertycolor="black";elmntObj.style.fontFamily="Consolas,'Courier New', monospace";if(!lang){lang="html"}
if(lang=="html"){elmntTxt=htmlMode(elmntTxt)}
if(lang=="css"){elmntTxt=cssMode(elmntTxt)}
if(lang=="js"){elmntTxt=jsMode(elmntTxt)}
elmntObj.innerHTML=elmntTxt;function extract(str,start,end,func,repl){var s,e,d="",a=[];while(str.search(start)>-1){s=str.search(start);e=str.indexOf(end,s);if(e==-1){e=str.length}
if(repl){a.push(func(str.substring(s,e+(end.length))));str=str.substring(0,s)+repl+str.substr(e+(end.length))}else{d+=str.substring(0,s);d+=func(str.substring(s,e+(end.length)));str=str.substr(e+(end.length))}}
this.rest=d+str;this.arr=a}
function htmlMode(txt){var rest=txt,done="",php,comment,angular,startpos,endpos,note,i;comment=new extract(rest,"&lt;!--","--&gt;",commentMode,"W3HTMLCOMMENTPOS");rest=comment.rest;while(rest.indexOf("&lt;")>-1){note="";startpos=rest.indexOf("&lt;");if(rest.substr(startpos,9).toUpperCase()=="&LT;STYLE"){note="css"}
if(rest.substr(startpos,10).toUpperCase()=="&LT;SCRIPT"){note="javascript"}
endpos=rest.indexOf("&gt;",startpos);if(endpos==-1){endpos=rest.length}
done+=rest.substring(0,startpos);done+=tagMode(rest.substring(startpos,endpos+4));rest=rest.substr(endpos+4);if(note=="css"){endpos=rest.indexOf("&lt;/style&gt;");if(endpos>-1){done+=cssMode(rest.substring(0,endpos));rest=rest.substr(endpos)}}
if(note=="javascript"){endpos=rest.indexOf("&lt;/script&gt;");if(endpos>-1){done+=jsMode(rest.substring(0,endpos));rest=rest.substr(endpos)}}}
rest=done+rest;for(i=0;i<comment.arr.length;i++){rest=rest.replace("W3HTMLCOMMENTPOS",comment.arr[i])}
return rest}
function tagMode(txt){var rest=txt,done="",startpos,endpos,result;while(rest.search(/(\s|<br>)/)>-1){startpos=rest.search(/(\s|<br>)/);endpos=rest.indexOf("&gt;");if(endpos==-1){endpos=rest.length}
done+=rest.substring(0,startpos);done+=attributeMode(rest.substring(startpos,endpos));rest=rest.substr(endpos)}
result=done+rest;result="<span style=color:"+tagcolor+">&lt;</span>"+result.substring(4);if(result.substr(result.length-4,4)=="&gt;"){result=result.substring(0,result.length-4)+"<span style=color:"+tagcolor+">&gt;</span>"}
return"<span style=color:"+tagnamecolor+">"+result+"</span>"}
function attributeMode(txt){var rest=txt,done="",startpos,endpos,singlefnuttpos,doublefnuttpos,spacepos;while(rest.indexOf("=")>-1){endpos=-1;startpos=rest.indexOf("=");singlefnuttpos=rest.indexOf("'",startpos);doublefnuttpos=rest.indexOf('"',startpos);spacepos=rest.indexOf(" ",startpos+2);if(spacepos>-1&&(spacepos<singlefnuttpos||singlefnuttpos==-1)&&(spacepos<doublefnuttpos||doublefnuttpos==-1)){endpos=rest.indexOf(" ",startpos)}else if(doublefnuttpos>-1&&(doublefnuttpos<singlefnuttpos||singlefnuttpos==-1)&&(doublefnuttpos<spacepos||spacepos==-1)){endpos=rest.indexOf('"',rest.indexOf('"',startpos)+1)}else if(singlefnuttpos>-1&&(singlefnuttpos<doublefnuttpos||doublefnuttpos==-1)&&(singlefnuttpos<spacepos||spacepos==-1)){endpos=rest.indexOf("'",rest.indexOf("'",startpos)+1)}
if(!endpos||endpos==-1||endpos<startpos){endpos=rest.length}
done+=rest.substring(0,startpos);done+=attributeValueMode(rest.substring(startpos,endpos+1));rest=rest.substr(endpos+1)}
return"<span style=color:"+attributecolor+">"+done+rest+"</span>"}
function attributeValueMode(txt){return"<span style=color:"+attributevaluecolor+">"+txt+"</span>"}
function commentMode(txt){return"<span style=color:"+commentcolor+">"+txt+"</span>"}
function cssMode(txt){var rest=txt,done="",s,e,comment,i,midz,c,cc;comment=new extract(rest,/\/\*/,"*/",commentMode,"W3CSSCOMMENTPOS");rest=comment.rest;while(rest.search("{")>-1){s=rest.search("{");midz=rest.substr(s+1);cc=1;c=0;for(i=0;i<midz.length;i++){if(midz.substr(i,1)=="{"){cc++;c++}
if(midz.substr(i,1)=="}"){cc--}
if(cc==0){break}}
if(cc!=0){c=0}
e=s;for(i=0;i<=c;i++){e=rest.indexOf("}",e+1)}
if(e==-1){e=rest.length}
done+=rest.substring(0,s+1);done+=cssPropertyMode(rest.substring(s+1,e));rest=rest.substr(e)}
rest=done+rest;rest=rest.replace(/{/g,"<span style=color:"+cssdelimitercolor+">{</span>");rest=rest.replace(/}/g,"<span style=color:"+cssdelimitercolor+">}</span>");for(i=0;i<comment.arr.length;i++){rest=rest.replace("W3CSSCOMMENTPOS",comment.arr[i])}
return"<span style=color:"+cssselectorcolor+">"+rest+"</span>"}
function cssPropertyMode(txt){var rest=txt,done="",s,e,n,loop;if(rest.indexOf("{")>-1){return cssMode(rest)}
while(rest.search(":")>-1){s=rest.search(":");loop=!0;n=s;while(loop==!0){loop=!1;e=rest.indexOf(";",n);if(rest.substring(e-5,e+1)=="&nbsp;"){loop=!0;n=e+1}}
if(e==-1){e=rest.length}
done+=rest.substring(0,s);done+=cssPropertyValueMode(rest.substring(s,e+1));rest=rest.substr(e+1)}
return"<span style=color:"+csspropertycolor+">"+done+rest+"</span>"}
function cssPropertyValueMode(txt){var rest=txt,done="",s;rest="<span style=color:"+cssdelimitercolor+">:</span>"+rest.substring(1);while(rest.search(/!important/i)>-1){s=rest.search(/!important/i);done+=rest.substring(0,s);done+=cssImportantMode(rest.substring(s,s+10));rest=rest.substr(s+10)}
result=done+rest;if(result.substr(result.length-1,1)==";"&&result.substr(result.length-6,6)!="&nbsp;"&&result.substr(result.length-4,4)!="&lt;"&&result.substr(result.length-4,4)!="&gt;"&&result.substr(result.length-5,5)!="&amp;"){result=result.substring(0,result.length-1)+"<span style=color:"+cssdelimitercolor+">;</span>"}
return"<span style=color:"+csspropertyvaluecolor+">"+result+"</span>"}
function cssImportantMode(txt){return"<span style=color:"+cssimportantcolor+";font-weight:bold;>"+txt+"</span>"}
function jsMode(txt){var rest=txt,done="",esc=[],i,cc,tt="",sfnuttpos,dfnuttpos,compos,comlinepos,keywordpos,numpos,mypos,dotpos,y;for(i=0;i<rest.length;i++){cc=rest.substr(i,1);if(cc=="\\"){esc.push(rest.substr(i,2));cc="W3JSESCAPE";i++}
tt+=cc}
rest=tt;y=1;while(y==1){sfnuttpos=getPos(rest,"'","'",jsStringMode);dfnuttpos=getPos(rest,'"','"',jsStringMode);compos=getPos(rest,/\/\*/,"*/",commentMode);comlinepos=getPos(rest,/\/\//,"<br>",commentMode);numpos=getNumPos(rest,jsNumberMode);keywordpos=getKeywordPos("js",rest,jsKeywordMode);dotpos=getDotPos(rest,jsPropertyMode);if(Math.max(numpos[0],sfnuttpos[0],dfnuttpos[0],compos[0],comlinepos[0],keywordpos[0],dotpos[0])==-1){break}
mypos=getMinPos(numpos,sfnuttpos,dfnuttpos,compos,comlinepos,keywordpos,dotpos);if(mypos[0]==-1){break}
if(mypos[0]>-1){done+=rest.substring(0,mypos[0]);done+=mypos[2](rest.substring(mypos[0],mypos[1]));rest=rest.substr(mypos[1])}}
rest=done+rest;for(i=0;i<esc.length;i++){rest=rest.replace("W3JSESCAPE",esc[i])}
return"<span style=color:"+jscolor+">"+rest+"</span>"}
function jsStringMode(txt){return"<span style=color:"+jsstringcolor+">"+txt+"</span>"}
function jsKeywordMode(txt){return"<span style=color:"+jskeywordcolor+">"+txt+"</span>"}
function jsNumberMode(txt){return"<span style=color:"+jsnumbercolor+">"+txt+"</span>"}
function jsPropertyMode(txt){return"<span style=color:"+jspropertycolor+">"+txt+"</span>"}
function getDotPos(txt,func){var x,i,j,s,e,arr=[".","<"," ",";","(","+",")","[","]",",","&",":","{","}","/","-","*","|","%"];s=txt.indexOf(".");if(s>-1){x=txt.substr(s+1);for(j=0;j<x.length;j++){cc=x[j];for(i=0;i<arr.length;i++){if(cc.indexOf(arr[i])>-1){e=j;return[s+1,e+s+1,func]}}}}
return[-1,-1,func]}
function getMinPos(){var i,arr=[];for(i=0;i<arguments.length;i++){if(arguments[i][0]>-1){if(arr.length==0||arguments[i][0]<arr[0]){arr=arguments[i]}}}
if(arr.length==0){arr=arguments[i]}
return arr}
function getKeywordPos(typ,txt,func){var words,i,pos,rpos=-1,rpos2=-1,patt;if(typ=="js"){words=["abstract","arguments","boolean","break","byte","case","catch","char","class","const","continue","debugger","default","delete","do","double","else","enum","eval","export","extends","false","final","finally","float","for","function","goto","if","implements","import","in","instanceof","int","interface","let","long","NaN","native","new","null","package","private","protected","public","return","short","static","super","switch","synchronized","this","throw","throws","transient","true","try","typeof","var","void","volatile","while","with","yield"]}
for(i=0;i<words.length;i++){pos=txt.indexOf(words[i]);if(pos>-1){patt=/\W/g;if(txt.substr(pos+words[i].length,1).match(patt)&&txt.substr(pos-1,1).match(patt)){if(pos>-1&&(rpos==-1||pos<rpos)){rpos=pos;rpos2=rpos+words[i].length}}}}
return[rpos,rpos2,func]}
function getPos(txt,start,end,func){var s,e;s=txt.search(start);e=txt.indexOf(end,s+(end.length));if(e==-1){e=txt.length}
return[s,e+(end.length),func]}
function getNumPos(txt,func){var arr=["<br>"," ",";","(","+",")","[","]",",","&",":","{","}","/","-","*","|","%","="],i,j,c,startpos=0,endpos,word;for(i=0;i<txt.length;i++){for(j=0;j<arr.length;j++){c=txt.substr(i,arr[j].length);if(c==arr[j]){if(c=="-"&&(txt.substr(i-1,1)=="e"||txt.substr(i-1,1)=="E")){continue}
endpos=i;if(startpos<endpos){word=txt.substring(startpos,endpos);if(!isNaN(word)){return[startpos,endpos,func]}}
i+=arr[j].length;startpos=i;i-=1;break}}}
return[-1,-1,func]}}
</script>

</body>
</html>