

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

var searchContainer = document.getElementById("search-container");
var searchMenuDiv = document.getElementById("search-content");
var searchField = document.getElementById("search-toggle");
let resultdiv = document.getElementById('searchresults');
let noresultdiv = document.getElementById('nosearchresults');
    
document.onclick = check;

function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //User Menu
    if (!checkParent(target, searchMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, searchField)) {
            // Only toggle if blank
              togglePanel()
            
        } else {
            // click both outside link and outside menu, hide menu
            minSearchResults()
        }
    }



}

function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}


function toggleSearch() {

  if (searchContainer.classList.contains("hidden")) {
    searchContainer.classList.remove("hidden");
    searchField.focus();
    
  } else {
    searchContainer.classList.add("hidden");
  }

}

function togglePanel() {


  //if (searchContainer.classList.contains("hidden")) {
  //  searchContainer.classList.remove("hidden")
  //}
    if (searchField.value === '') {
      clearSearchResults();
    } else {
      resultdiv.classList.remove("hidden");
    }


}

document.onkeydown = function(evt) {
  evt = evt || window.event
//		  searchField = document.getElementById("search-toggle")
  var isSlash = false
  var isEscape = false
  var isTab = false
  
  if ("key" in evt) {
    isSlash = (evt.key === "/")
    isEscape = (evt.key === "Escape" || evt.key === "Esc")
    isTab = (evt.key === "Tab")
  } else {
    isSlash = (evt.keyCode === 191 || evt.keyCode === 111)
    isEscape = (evt.keyCode === 27)
    isTab = (evt.keyCode === 9)
  }

  /* Pressing / to select the text field */
  if (isSlash && searchField != document.activeElement) {
    evt.preventDefault()
    searchField.focus()
    togglePanel()
  }
  
  /* Pressing Esc to close and clear the field */
  if (isEscape && searchField === document.activeElement) {
    searchField.blur()
    togglePanel()
  }

  /* Tabbing out will minimise */
  if (isTab && searchField === document.activeElement) {
    minSearchResults() 
  }


};
  
function clearSearchResults() {
  resultdiv.innerHTML = '';
}

function minSearchResults() {
  if (resultdiv.innerHTML != '') {
    resultdiv.classList.add("hidden");
  } else {
    resultdiv.classList.remove("hidden");
  }
}

function updateSearchResults(value) {

  let result = fuse.search(value);

    //check search results array
    if (result.length === 0) {
      //if we have a search term, then display no search results message (no results found) - otherwise hide if nothing entered
      if (value != '') {
          clearSearchResults();
          noresultdiv.classList.remove("hidden");
          searchMenuDiv.classList.remove("bg-white");
          searchMenuDiv.classList.remove("shadow-lg");
      } else {
          //resultdiv.style.display = 'none';
          clearSearchResults();
      }
    } else {
      // clear results
      resultdiv.innerHTML = '';
      noresultdiv.classList.add("hidden");
      searchMenuDiv.classList.add("bg-white");
      searchMenuDiv.classList.add("shadow-lg");

      //generate results listing
      for (let item in result.slice(0,4)) {
        //let searchitem = '<li><img style=\"height:75px;\" src=\"https://www.tailwindtoolbox.com/' + result[item].url_image +'\"><a href="/' + result[item].url + '">' + result[item].title + '</a> - ' + result[item].description + ' <span style="color:#c0c0c0;font-size:8pt;">(' + result[item].category + ')</span></li>';
        
        let searchitem = '<span class=\"p-4 border-b flex justify-between items-center group hover:bg-teal-100\"><a class="block flex-1 no-underline" href=\"' + result[item].url + '\"><p class=\"font-bold text-sm text-indigo-600 hover:text-indigo-500\"><span class=\"mr-2 text-teal-500\">' + result[item].site_section + '</span>' + result[item].title + (result[item].author  === "Tailwind Toolbox" ? "" : "<span class=\"text-indigo-300 font-normal\"> by " + result[item].author + '<svg class=\"inline-block pl-2  h-4 fill-current text-brand\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z\"/></svg>') + '</span></p><p class=\"hidden md:block text-xs text-teal-600\">' + result[item].url + '</p><p class=\"text-sm py-1\">' + result[item].description  + '</p></a><a href=\"' + result[item].url + '\"><img class=\"hidden md:block h-16 border-none\" src=\"https://www.tailwindtoolbox.com/' + result[item].url_image +'\"></a></span>';
        resultdiv.innerHTML += searchitem;
        
      }
      
      //show results;
      resultdiv.style.display = '';

    }
    
}
  
searchField.addEventListener("search", 
function(event){
  if(event.type === "search"){
    if(event.currentTarget.value == ""){
      clearSearchResults();
      searchMenuDiv.classList.remove("bg-white");
      searchMenuDiv.classList.remove("shadow-md");
    }
  }
});


function filterTemplates(filterVal) {

	//Get all the templates
	var divs = document.querySelectorAll("[data-twcat]");

	//Loop through and show (block) all which match the criteira and hide (none) the rest
	for (var i = 0; i < divs.length; ++i) {
		if (divs[i].dataset.twcat.indexOf(filterVal) >= 0) { //includes(filterVal)) {
			divs[i].style.display='block';
		} else {
			divs[i].style.display='none';
		}
	}
	
	//Reset the all filter to be "all" instead of ""
	if (filterVal == '') filterVal = "all";
	


	//Get all the filter buttons
	var btns = document.querySelectorAll("[data-twfilter]");
	var filterMsg = document.getElementById('filterMsg');

	//Loop through and set the criteria filter button to active
	for (var i = 0; i < btns.length; ++i) {
		if (btns[i].dataset.twfilter == filterVal) {
			btns[i].classList.add('active-tab');
		} else {
			btns[i].classList.remove('active-tab');
		}
	}
	
	//Hide message if showing all
	if (filterVal == "all") {
		filterMsg.classList.add('hidden');
	} else {
		filterMsg.classList.remove('hidden');
		filterMsg.innerHTML = 'Showing: ' + filterVal + " templates - Click here to show all templates!";
	}

}



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


  function clearSelection()
{
 if (window.getSelection) {window.getSelection().removeAllRanges();}
 else if (document.selection) {document.selection.empty();}
}

	function copyClipboard() {
	  var elm = document.getElementById("code");
	  // for Internet Explorer

	  if(document.body.createTextRange) {
		var range = document.body.createTextRange();
		range.moveToElementText(elm);
		range.select();
    document.execCommand("Copy");
    clearSelection();

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
    clearSelection();

		document.getElementById("copyButton").textContent = "Copied!";
		setTimeout(function(){
			document.getElementById("copyButton").textContent = "Copy Text";
		}, 1500);

	  }
	}
