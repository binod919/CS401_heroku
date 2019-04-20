$(document).ready(function(){

$(function(){
	$(".button").click(function(){
		$(".postDivcontainer").css('display', 'flex')
	});
})


	$(".close").click(function(){
		$(".postDivcontainer").fadeOut();
	});
});
