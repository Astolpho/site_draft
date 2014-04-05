$(document).ready(function()
{
});

function loadPage(element) //the function that loads pages via AJAX
{
	console.log(this)
	var url = element.id;
	$('loading').css('visibility','visible');

	$.ajax(
		{
			type: "POST",
			url: "load_page.php",
			data:'page='+url,
			dataType: "html",
			success: function(msg)
			{
				if(parseInt(msg)!=0)
				{
					$('#pageContent').html(msg);
					$('#loading').css('visibility','hidden');
				}
			}
		}); 
}
