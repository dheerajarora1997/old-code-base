function validateForm()
{
    var x=document.myform.fname.value;  
	var xexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(x=="")
    {
        alert("name can't be left blank");
		document.myform.fname.focus();
        return false;
    }
	else if(!x.match(xexp))
	{alert ("Name is invalid");
	document.myform.fname.focus();
	return false;
	}
	
	

    var y=document.myform.lname.value;
    var yexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
	if(y=="")
    {
        alert("last name is mandatory");
        document.myform.lname.focus();
		return false;
    }

	else if(!y.match(yexp))
	{alert ("Lastname is invalid");
	document.myform.lname.focus();
	return false;
	}
	
	
    var z=document.myform.age.value;
    var zexp=/^[0-9]{2}$/;
	if(z=="")
    {
        alert("age is required");
        document.myform.age.focus();
		return false;
    }

	else if(!z.match(zexp))
	{alert ("age is invalid");
	document.myform.age.focus();
	return false;
	}
			else if(z<18)
			{alert	("Age is short");
				document.myform.age.focus();
				return false;}
			
			else if(z>40)
			{alert	("Age is too long");
				document.myform.age.focus();
				return false;}
				
				/*if (!document.myform.edu[0]chacked&&
					!document.myform.edu[1]chacked&&
					!document.myform.edu[2]chacked&&
					!document.myform.edu[3]chacked)
					{
						alert("Chack Any Quality!");
					return false;}
					*/
					
			
			
}

