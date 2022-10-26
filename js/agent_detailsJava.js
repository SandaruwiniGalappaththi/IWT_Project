var index = 1;

function plusSlides(n){
	index = index + n;
	showImage(index);
}

showImage(1);

function showImage(n){
	var i;
	var x = document.getElementsByClassName("img-container");
	if(n > x.length){ index = 1};
	if(n < 1){ index = x.length};
	for(i=0;i<x.length;i++)
	{
		x[i].style.display = "none";
	}
	x[index-1].style.display = "block";
}

showSlides();

function showSlides(){
	var i;
	var x = document.getElementsByClassName("img-container");
	for(i=0;i<x.length;i++)
	{
		x[i].style.display = "none";
	}
	if(index > x.length){ index = 1};
	x[index-1].style.display = "block";
	index++;
	setTimeout(showSlides, 3000); 
}

function openTabs(evt, tabName){
  var i, bodycontent, tabs;
  bodycontent = document.getElementsByClassName("bodycontent");
  for (i = 0; i < bodycontent.length; i++) {
    bodycontent[i].style.display = "none";
  }
  tabs = document.getElementsByClassName("tabs");
  for (i = 0; i < tabs.length; i++) {
    tabs[i].className = tabs[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();



