function sum()
{
	
	var a1=document.getElementById("a");
	var b1=document.getElementById("b");
	var c1=document.getElementById("c");
	var d1=document.getElementById("d");
	var e1=document.getElementById("e");
	var f1=document.getElementById("f");
	var g1=document.getElementById("g");
	var h1=document.getElementById("h");
	var i1=document.getElementById("i");
	var j1=document.getElementById("j");
	var k1=document.getElementById("k");
	var l1=document.getElementById("l");
	var m1=document.getElementById("m");
	var n1=document.getElementById("n");
	var o1=document.getElementById("o");
	var p1=document.getElementById("p");
	var q1=document.getElementById("q");
	var r1=document.getElementById("r");
	var s1=document.getElementById("s");
	var t1=document.getElementById("t");
	var u1=document.getElementById("u");
	var v1=document.getElementById("v");
	var w1=document.getElementById("w");
	var x1=document.getElementById("x");
	var y1=document.getElementById("y");
	var z1=document.getElementById("z");
	var a4=document.getElementById("a7");
	var add=0;
	if(a1.checked==true)
	{
		add=add+1;
	}
	if(b1.checked==true)
	{
		add=add+1;
	}
	if(c1.checked==true)
	{
		add=add+1;
	}
	if(d1.checked==true)
	{
		add=add+1;
	}
	if(e1.checked==true)
	{
		add=add+1;
	}
	if(f1.checked==true)
	{
		add=add+1;
	}
	if(g1.checked==true)
	{
		add=add+1;
	}
	if(h1.checked==true)
	{
		add=add+1;
	}
	if(i1.checked==true)
	{
		add=add+1;
	}
	if(j1.checked==true)
	{
		add=add+1;
	}
	if(k1.checked==true)
	{
		add=add+1;
	}
	if(l1.checked==true)
	{
		add=add+1;
	}
	var per1=(add*100)/12;
var num=0;
	if(m1.checked==true)
	{
		num=num+1;
	}
	if(n1.checked==true)
	{
	     num=num+1;
	}
	if(o1.checked==true)
	{
		num=num+1;
	}
	if(p1.checked==true)
	{
	     num=num+1;
	}
	if(q1.checked==true)
	{
	     num=num+1;
	}
 var per2=(num*100)/5;
	var mix=0;

	if(r1.checked==true)
	{
		mix=mix+1;
	}
	if(s1.checked==true)
	{
		mix=mix+1;
	}
	if(t1.checked==true)
	{
		mix=mix+1;
	}
	if(u1.checked==true)
	{
		mix=mix+1;
	}
	if(v1.checked==true)
	{
		mix=mix+1;
	}
	if(w1.checked==true)
	{
		mix=mix+1;
	}
	if(x1.checked==true)
	{
		mix=mix+1;
	}
	if(y1.checked==true)
	{
		mix=mix+1;
	}
	if(z1.checked==true)
	{
		mix=mix+1;
	}
	if(a4.checked==true)
	{
		mix=mix+1;
	}
	var per3=(mix*100)/10;



if((per1>75 && per3<50)  && (per2>50 && per2<75) ) 
{
	
		alert("Your are Controller");
}

else if((per1>50 && per1<75) && (per2>75 && per3<50))
{
	 	alert("You are a join controller");	
}
else if ((per1<50) && ((per2>50) && (per2<75)) && (per3<50))
{
	alert("Look like you are joint controller");
}
else if((per1>50 && per1<75) && per2<50 && per3<50)
{
	alert("Look like you are a controller");
}
else if(per1>70 && (per2>50 && per3<70))
{
	 	alert("You are a Processor");	
}
else if((per1>75 && per3>75) || ((per1>75) && (per3>50 && per3<75)) || ((per1>50 && per1<75) && (per3>75)))
{
	alert("you cannot be a controller and processor for the same processing Activity and same puspose .however you can a controller and for the same processing.....");
}
else
{
	alert("please attend the questions");
}
}