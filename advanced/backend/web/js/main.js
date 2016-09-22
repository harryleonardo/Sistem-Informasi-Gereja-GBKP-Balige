$(function(){
	//Get the click on create Button
    $('#modalButton').click(function(){
       $('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
    });
});


