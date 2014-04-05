$(document).ready(function()
{
	checkURL(); 

	$('.blue_button').click(function (e)
	{

		console.log(this.hash);
		console.log(this);
		checkURL(this.hash);
	});

	setInterval("checkURL()",250);
});


function checkURL(hash)
{
	if(!hash) hash-window.location.hash;

	if(hash != lasturl)
	{
		var lasturl=hash;
		loadPage(hash);
	}
}

function loadPage(url) //the function that loads pages via AJAX
{
	url=url.replace('#page',''); // strips the page of the hash and leaves only the page number 

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
					$('loading'),css('visibility','hidden');
				}
			}
		}); 
}