	$('.video').parent().click(function () {
	    if($(this).children(".video").get(0).paused){
	        $(this).children(".video").get(0).play();
	        $(this).children(".playpause").fadeOut();
	        $(this).children(".playpause").fadeOut();
	    }else{
	       $(this).children(".video").get(0).pause();
	        $(this).children(".playpause").fadeIn();
	    }

	});

	var ads = document.getElementById('ads').value;
	var videos = JSON.parse(ads);
	console.log(videos);

	var i = 0;
	var video = document.getElementById('video');
	var source = document.createElement('source');
	source.setAttribute("src", "http://127.0.0.1:8000/storage/"+videos[i].advert);
	video.appendChild(source);
	video.load();

	video.onended = function() {

		i++;
		source.setAttribute("src", "http://127.0.0.1:8000/storage/"+videos[i].advert);
		video.appendChild(source);
		video.load();

		document.getElementById('id01').style.display='block';
	};

	$('form').submit(function( event ) {
		event.preventDefault();
		$.ajax({
		    url: 'http://127.0.0.1:8000/credituser',
		    type: 'post',
		    data: $('form').serialize(), 
		    dataType: 'json'
		});

		    document.getElementById('id01').style.display='none';
	});



