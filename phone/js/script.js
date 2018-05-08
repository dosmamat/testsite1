
$(document).ready(function() {
	$('.mobile-tab').hide();
	$('#burg').on('click', function(){
		$('.mobile-tab').slideToggle(1000);
	})
	loadInfoPhone(); //загрузка цен
	$('#accordeon .acc-head').on('click', f_acc); //для аккариидона

});
function loadInfoPhone(){ //загрузка телефонов
	$.ajax({
		url: "../php/loadInfoPhonePHP.php", //Change
		dataType:'json',
		success: function(data){
			for(var i=1;i<=data.count;i++){
    			$('.phones').append("<li> <a href='#ph"+i+"'>"+data.name[i]+ " за "+data.price[i]+  " р. </a> </li>");
    			$('#ph'+i).html(data.price[i]+"руб.");
   			 	}
			}			
	});

}
function f_acc(){
	$(this).next().slideToggle(1000);
}
