$( document ).ready(function() {
    console.log( "Entro al login" );
    $('#loginModal').modal('show');
    $('#btnLogin').click(function(){
    	console.log($("#userLogin").val());
    	if($("#userLogin").val()=="daniel" && $("#passwordLogin").val()=="silva"){
    		$('#loginModal').modal('toggle');
    	}else{
    		console.log("no es");
    	}
    })
});