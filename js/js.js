/*
function popup(x)

{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade').style.display='block';
}

function popupclose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade').style.display='none';	
}
*/
function displaycart()
{
	if (document.getElementById('cart').style.display=='block')
	{
		document.getElementById('cart').style.display='none';
	}
	else
	{
		document.getElementById('cart').style.display='block';
	}
}

function addTocart(x)
{
	document.getElementById('CartContent').innerHTML += x;
	document.getElementById('CartContent').innerHTML += "<br>";
	
}