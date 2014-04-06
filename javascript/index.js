$(document).ready(function()
{
	$('#demo_reel_div').hide();
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
		location.reload();
}

function show_tab(element)
{
	console.log(element.id)
	var url = element.id;
	$('#artist_statement_div').hide();
	$('#demo_reel_div').hide();
	$('#biography_div').hide();
	$('#credits_div').hide();
	soundManager.finish();
	$("#" + element.id + "_div").show();
}