function enableButton(){
	if(document.getElementById("check").checked){
		document.getElementById("submitbtn").disabled=false;
	}
	else{
		document.getElementById("submitbtn").disabled=true;
	}
}

function displayOffer(){
	var p= ["~~~~~~EXCLUSIVE OFFER!!~~~~~~","*  Enjoy wildbeast-Migration from september-December 2020","*  2 nights @ camp resorts","*  per adult $821.00|single room supplement $75.00"];
	var i;
	var length= p.length;
	var txt = "";
	for (i=0;i < length; i++)
	{
		txt += p[i] + "<br>";
	}
	document.getElementById('para1').innerHTML=txt;
}

function displayOffer1(){
var r= ["~~~~~~Get pempered in the wild with SL Safari camping( LIMITED TIME OFFER)","*  @ SL Safari camping YALA|UDAWALAWA","*  1 night stay with discount for both elite $premium packages"];
	var i;
	var length= r.length;
	var txt = "";
	for (i=0;i < length; i++)
	{
		txt += r[i] + "<br>";
	}
	document.getElementById('para2').innerHTML=txt;
}

function displayOffer2(){
var m= ["~~~~OFFER includes,","*  One night walk@ 9.00pm","*  One Srin lankan cooking lesson on the day arrival" ,"*  One border walk based on naturalist availability @ 10.00am"];
	var i;
	var length= m.length;
	var txt = "";
	for (i=0;i < length; i++)
	{
		txt += m[i] + "<br>";	}
	document.getElementById('para3').innerHTML=txt;
}


