function reservar(id_vuelo){
	$('#modal_user input[name=id_vuelo]').val(id_vuelo);
	$('#modal_user').modal('show');
}