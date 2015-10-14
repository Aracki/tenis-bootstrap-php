$("button#submit").click(function(){

//za refresh posle sekund od kada ubacimo
setTimeout(
  function() 
  {
    refreshTerene();
    // alert("refresh");
  }, 300);

	//salje niz post poruke
	$.post($("#myForm").attr("action"),
			$("#myForm :input").serializeArray(),
			function(data){
				// $("div#unet").html(data);
			});

	$("#myForm").submit(function(){
		return false;
	});

});


var sort = "";

function ucitajTerene(){
	$.ajax({    //create an ajax request to load_page.php
	        type: "GET",
	        url: "read.php",             
	        dataType: "html",   //expect html to be returned    

	        //ord varijabla po cemu da sortira
	        data: {func: 'tereni', ord: sort},            
	        success: function(response){                    
	            $("#svi_tereni").html(response); 
	            // alert(response);
	        }
    		});
}

//za zvuk kada ubacimo teren
$('#submit').click(function(){
	var audio = document.getElementById('zvukAdd');
	audio.play();
});

//za refreshovanje terena
function refreshTerene(){
	ucitajTerene();
	var id = 0;
	id = window.setInterval(ucitajTerene, 100);
	window.clearInterval(id);
}


$(document).ready(function() {

	napuniProgressBar();
	refreshTerene();

	// ucitajTerene();

	// refreshTerene();

	// var timerID = 0;
	//da se refreshuje odmah 0.1s
	// timerID = window.setInterval(ucitajTerene, 100);
	
	// window.clearInterval(timerID);

	$("#btnZapad").click(function() {                

	      $.ajax({    //create an ajax request to load_page.php
	        type: "GET",
	        url: "read.php",             
	        dataType: "html",   //expect html to be returned    
	        data: {func: 'zapad'},            
	        success: function(response){                    
	            $("#zapad").html(response); 
	            // alert(response);
	        }

    		});
	});

	$("#btnIstok").click(function() {                

	      $.ajax({    //create an ajax request to load_page.php
	        type: "GET",
	        url: "read.php",             
	        dataType: "html",   //expect html to be returned               
	        data: {func: 'istok'},     
	        success: function(response){                    
	            $("#istok").html(response); 
	            // alert(response);
	        }
	        
    		});
	});



});

//nalazi ukupan broj meceva
function napuniProgressBar(){
	var sum = 0;

	$('.brM').each(function(){
		var value = $(this).text();
		sum += parseFloat(value);
	});
	
	var broj = (sum/360) * 100;
	broj = Math.round(broj);

	updateProgress(broj);
}


//update progress bara
function updateProgress(percentage){
	if(percentage > 100) percentage = 100;
    // document.getElementById('progressBar').style.width = percentage+'%';
    // $('#progressText').html(percentage+'%');
    $('#progressBar').css('width', percentage+'%');
    $('#progressBar').html(percentage+'%');
}

function obrisiTeren(imeTerena){
	var imeTerena = imeTerena;
  			$.ajax({
					
				type: "GET",
		        url: "delete.php",             
		        dataType: "html",   //expect html to be returned               
		        data: {ime: imeTerena},     
							        
		        success: function(response){        
		            // alert(response);
		            refreshTerene();
		        }

	    	});
}

// za brisanje terena
$(function() {
    $(document).on('click', '[id^=teren]', function() {
       
    	var imeTerena = $(this).text();

    	$.confirm({ 
			    text: "Da li ste sigurni da zelite da obrisete "+imeTerena+"?",
			    title: "Confirmation required",
			    confirm: function(button) {
			        		// alert(this.innerHTML);
					  	    obrisiTeren(imeTerena);
			    },
			    cancel: function(button) {
			        
			    },
			    confirmButton: "Yes I am",
			    cancelButton: "No",
			    post: true,
			    confirmButtonClass: "btn-danger"			    
			 });

    	
    });
});


//on click za update cene
$(function() {
    $(document).on('click', '[id^=cenaX]', function() {
       
    	var idCene = jQuery(this).attr("id");
    	var niz = idCene.split('X');
    	var brCene = niz[1];

    	var idTerena = 'teren'.concat(brCene);
    	var teren = document.getElementById(idTerena).innerHTML;

    	var nova_cena = -1;

    	bootbox.prompt("Unesite novu cenu?", function(result) {                
			  nova_cena = result;
			  if(nova_cena > 0){
			  	updateCenu(nova_cena,teren);
			  } else {
			  	alert("Cena mora da bude veca od 0!")
			  }
		});
    });
});

//funckija za update cene
function updateCenu(c,t){
	
	$.ajax({
					
		type: "GET",
		url: "update.php",             
		dataType: "html",   //expect html to be returned               
		data: {ime: t, nova_cena: c},     
			        
		success: function(response){        
			// alert(response);
			refreshTerene();
		}

	});   	
}

$('.selectpicker').selectpicker({
      style: 'btn-info',
});

//za biranje iz sort selecta
function dynamic_Select(dropdown) {
	sort = ""+dropdown;
	refreshTerene();
}

//za brisanje popover
$(function () {
  $('[data-toggle="popover"]').popover();
})