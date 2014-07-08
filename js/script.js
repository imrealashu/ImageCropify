$(document).ready(function(){
	$('#box').draggable({containment: '#container'});
	$('#box').resizable({containment: '#container'});
	
	$('#button').click(function(){
		var top = $('#box').position().top;
		var left = $('#box').position().left;
		var width = $('#box').width();
		var height = $('#box').height();
		
		$.post('crop.php',{top:top,left:left,width:width,height:height},function(){
			$('#output').html('<img src="new.jpg"/>');
		});
	});
});