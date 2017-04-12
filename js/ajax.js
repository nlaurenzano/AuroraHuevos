function SendContactEmail()
{
	$("#contactResponseTitle").html(":(");
	$("#contactResponse").html("Ya no estamos recibiendo pedidos.");
	return false;
}

$('#contactResponseTitle').html(':(');
$('#contactResponse').html('Lo sentimos mucho, pero ya no estamos recibiendo pedidos.');
$(window).load(function()
{
    $('#alertModal').modal('show');
});