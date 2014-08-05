window.onload = showInformations;

function showInformations()
{
	var of = document.getElementById('is_offreur_de_formation_c').checked;
	
	if(!of)
		document.getElementById('tab2').setAttribute('style', 'display:none');
	else
		document.getElementById('tab2').setAttribute('style', '');
}