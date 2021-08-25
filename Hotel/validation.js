function validation()
{
    var x=document.myform.uname.value;  
	var xexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(x=="")
    {
        alert("name can't be left blank");
		document.myform.uname.focus();
        return false;
    }
	else if(!x.match(xexp))
	{alert ("Name is invalid");
	document.myform.uname.focus();
	return false;
	}
	
	var z=document.myform.phone.value;
    var zexp=/^[0-9]{10}$/;
	if(z=="")
    {
        alert("Phone is required");
        document.myform.phone.focus();
		return false;
    }

	else if(!z.match(zexp))
	{alert ("Phone is invalid");
	document.myform.phone.focus();
	return false;
	}
	
	
	var e=document.myform.email.value;
    var eexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
	if(e=="")
    {
        alert("Can't left email blank");
        document.myform.email.focus();
		return false;
    }


var y=document.myform.subject.value;
    var yexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
	if(y=="")
    {
        alert("Can't left subject blank");
        document.myform.subject.focus();
		return false;
    }

	else if(!y.match(yexp))
	{alert ("Subject is invalid");
	document.myform.subject.focus();
	return false;
	}


var m=document.myform.message.value;
    var mexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
	if(m=="")
    {
        alert("Can't left message blank");
        document.myform.message.focus();
		return false;
    }

alert("Message Send")
	
	return true;	
	
}


function validation1()
{


var u=document.myform1.username.value;  
	var uexp=/^['room513']+$/;
   if(u=="")
    {
        alert("username can't be left blank");
		document.myform1.username.focus();
        return false;
	}
	else if(!u.match(uexp))
	{alert ("Username is invalid");
	document.myform1.username.focus();
	return false;
	}

var p=document.myform1.Password.value;  
	var pexp=/^[A-Za-z]{1}[A-Za-z\.\s]+$/;
   if(p=="")
    {
        alert("Password can't be left blank");
		document.myform1.Password.focus();
        return false;
	}

	return true;
}

function book()
{
    var ad=document.myform2.adate.value;  
   if(ad=="")
    {
        alert("Date is empty");
		document.myform2.adate.focus();
        return false;
    }
	else
{
	return true;
}
	}

