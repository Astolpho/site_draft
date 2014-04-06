$(document).ready(function()
{
});

function show_demo_tab()
{
	$('#demo_reel_div').show();
}
function load_page(element) //the function that loads pages via AJAX
{
	$('#demo_reel_div').hide();
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
