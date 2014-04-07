$(document).ready(function()
{
	var tab_id = $('#tab_id').val();
	if( tab_id )
	{
	console.log( tab_id);
		$('#' + tab_id + '_div').show();
	}
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
	var url = element.id;
	location.replace('/site_draft/?tab_id=' + url);
	$('#artist_statement_div').hide();
	$('#demo_reel_div').hide();
	$('#biography_div').hide();
	$('#credits_div').hide();
	$("#" + element.id + "_div").show();
}