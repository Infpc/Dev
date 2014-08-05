
function verifMatricule()
{
	var matricule_c = document.getElementById('matricule_c');
	var val = matricule_c.value;
	val = val.replace(/[a-zA-Z ]*/gi, '');
	val = val.substr(0, 4) +' '+ val.substr(4, 7);

	matricule_c.value = val;
}