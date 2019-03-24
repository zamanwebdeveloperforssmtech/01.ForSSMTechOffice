function check_track()
{
	if(document.display.hawb_num.value=="")
	{
		alert('Please enter HAWB No.');
		document.display.origin.focus();
		return false;
	}
	else if(document.display.origin.value=="")
	{
		alert('Please enter origin');
		document.display.destination.focus();
		return false;
	}
	else if(document.display.destination.value=="")
	{
		alert('Please enter destination');
		document.display.post_date.focus();
		return false;
	}
	else if(document.display.post_date.value=="")
	{
		alert('Please enter post_date');
		return false;
	}
}

function check()
{
	if(document.form1.current_location.value=="")
	{
		alert('enter current_location !');
		document.form1.activity.focus();
		return false;
	}
	if(document.form1.activity.value=="")
	{
		alert('enter Activity');
		document.form1.post_date.focus();
		return false;
	}
	if(document.form1.post_date.value=="")
	{
		alert('enter pdate');
		return false;
	}
	
}