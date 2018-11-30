function f4()
{
	if(document.fr.btn5.value=="Start")
	{
		if(document.getElementById("time").innerHTML=="Time")
		{
		document.getElementById("time").innerHTML="0";
		document.fr.btn5.value="Stop";
	    }
	    else
	    {
		document.fr.btn5.value="Stop";
	    }
	}
	else
	{
		document.fr.btn5.value="Start";
	}
	showf();
}
function showf()
{
        
        if (document.fr.btn5.value=="Stop") 
        {
        var x=parseInt(document.getElementById("time").innerHTML);
	   if(x<30)
	    {
		     x++;
             document.getElementById("time").innerHTML=x;
             
	     }
	  else
	   {
		    x=0;
		    document.getElementById("time").innerHTML=x;
		    x++;
	   }
	   setTimeout("showf()",1000);
}
}
