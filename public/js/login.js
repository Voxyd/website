/*
* @name         : login.js
* @authors      : Dylan Clement <dylanclement7@gmail.com>, ...
* @description  : Login
* @copyright    : (c) QC 2015
*/

$(document).ready(function()
{
    $(document).on("click", ".login_submit", function(e)
    {
    	var e = 0;
    	$(".red").remove();
    	if(!$("#password").val())
    	{
    		// Message d'erreur mot de passe vide
    		$(".login_submit").after("<span class='red'>Mot de passe vide</span>");
    		e = 1;
		}

    	if(!$("#username").val())
    	{
    		// Message d'erreur nom d'utilisateur vide
    		$(".login_submit").after("<span class='red'>Nom d'utilisateur vide</span>");
    		e = 1;
		}

		if(e == 0)
		{
	    	// Animation avant d'envoyer le formulaire
	        $(".login_submit").replaceWith("<div class='spinner sphere' id='sphere'><div class='inner'><div class='disc'></div><div class='disc'></div><div class='disc'></div></div></div><br />");
	        setTimeout(function()
	        {
				$('#form').submit();
			}, 250);
    	}
    });
});