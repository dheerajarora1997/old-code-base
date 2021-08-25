function validation1()
{
    var firstname=document.book.name.value;  
	var firstnameexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(firstname=="")
    {
        alert("name can't be left blank");
		document.book.name.focus();
		document.book.name.value='';
        return false;
    }
	else if(!firstname.match(firstnameexp))
	{alert ("Name is invalid");
	document.book.name.focus();
	return false;
	}


var lastnamee=document.book.lastname.value;  
	var lastnameeexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(lastnamee==='')
    {
        alert("last name can't be left blank");
		document.book.lastname.focus();
        return false;
    }
	else if(!lastnamee.match(lastnameeexp))
	{alert ("Last name is invalid");
	document.book.lastname.focus();
	return false;
	}
		

	var z=document.book.phone_no.value;
    var zexp=/^[0-9]{10}$/;
	if(z==="")
    {
        alert("Phone is required");
        document.book.phone_no.focus();
		return false;
    }

	else if(!z.match(zexp))
	{alert ("Phone is invalid");
	document.book.phone_no.focus();
	return false;
	}

	var e=document.book.email.value;
   // var eexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
	if(e==="")
    {
        alert("Can't left email blank");
        document.book.email.focus();
		return false;
    }

var pass=document.book.password.value;  
//	var passexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(pass==='')
    {
        alert("password can't be left blank");
		document.book.password.focus();
        return false;
    }
	

	return true;	
	
}
