$( document ).ready(function() {
    console.log( "Entro al login" );
    $('#loginModal').modal('show');
    $('#btnLogin').click(function(){
    	console.log($("#userLogin").val());
    	$('#fail').addClass('hiddenDiv')
    	if($("#userLogin").val()=="daniel" && $("#passwordLogin").val()=="silva"){
    		$('#loginModal').modal('toggle');
    	}else{
    		$('#fail').removeClass('hiddenDiv')
    		console.log("no es");
    	}
    })
});