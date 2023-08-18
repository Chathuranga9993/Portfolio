var tablinks = document.getElementByClassName("tab-links");
		var tabcontents = document.getElementByClassName("tab-contents");

		function opentab(tabname){
			for(tablink of tablinks){
				tablink.classList.remove("active-link");
			}
			for(tabcontent of tabcontents){
				tabcontent.classList.remove("active-tab");
			}
		}