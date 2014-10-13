var list = new Array;
var current;

$('.addButton').click(function() {
	for(var x = 0; x < list.length; x++)
		$('.' + list[x]).css( "display", "none");
});

function rememberPos(which)
{
	current = which;
}

function changeInterviewer(name)
{
	document.getElementById('interviewer' + current).value=name;
}

function addName(name)
{
	var found = false;
	for(var x = 0; x < list.length; x++)
	{
		if(list[x] == name)
		{
			found = true;
			break;
		}
	}

	if(!found)
		list.push(name);
}

$('.checkList').click(function() {
	var change = -1;
	var value = document.getElementById('interviewer1').value;
	var val1 = value.replace(" ", "_");
	var value = document.getElementById('interviewer2').value;
	var val2 = value.replace(" ", "_");
	var value = document.getElementById('interviewer3').value;
	var val3 = value.replace(" ", "_");
	var value = document.getElementById('interviewer4').value;
	var val4 = value.replace(" ", "_");

	for(var x = 0; x < list.length; x++)
	{
		if(list[x] != val1 &&
		   list[x] != val2 &&
		   list[x] != val3 &&
		   list[x] != val4)
		{
			change = x;
			break;
		}
	}

	if(change >= 0)
	{
		$('.' + list[change]).css( "display", "initial");
		list.splice(change, 1);
	}
});
