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

	var videos= ["http://127.0.0.1:8000/storage/video1.MP4",
	"http://127.0.0.1:8000/storage/video2.MP4",
	"http://127.0.0.1:8000/storage/video3.MP4",
	"http://127.0.0.1:8000/storage/video4.MP4"]
	var i = 0;
	var video = document.getElementById('video');
	var source = document.createElement('source');
	source.setAttribute("src", videos[i]);
	video.appendChild(source);
	video.load();

	video.onended = function() {

		i++;
		source.setAttribute("src", videos[i]);
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

	// $(document).ready(function(){

	//     $("#btn-submit").click(function(){

	      
	//         var mobile = $("#mobile").val();

	//         var credit = $("#credit").val();

	//         var token = $("#token").val();

	        
	//         $.ajax({

	//            type: "post",

	//            data: "mobile="+mobile+ "&credit="+credit+"&token="+token,

	//            url: "<?php echo url('/credituser') ?>",

	//            success:function(data){

	//               alert(data);

	//            }

	//         });

	// 	});


	// });


// var videos= ["http://127.0.0.1:8000/storage/video1.MP4","http://127.0.0.1:8000/storage/video2.MP4"]
// var i = 0;
// do{
// 	var video = document.getElementById('video');
// 	var source = document.createElement('source');

// 	source.setAttribute("src", videos[i]);

// 	video.appendChild(source);
// 	video.load();
	

// 	video.onended = function() {

// 	    var button = document.getElementById('id01').style.display='block';
// 	   	button.addEventListener("click", function(){
//   			  i=1;
// 			});
// 	};

// }while(i<videos.length);



// function changeSource(url) {
//    var video = document.getElementById('video');
//    video.src = url;
//    video.play();
// }
// function addSourceToVideo(element, src, type) {
//     var source = document.createElement('source');

//     source.src = src;
//     source.type = type;

//     element.appendChild(source);
// }

// var video = document.createElement('video');

// document.body.appendChild(video);

// addSourceToVideo(video, "{{ asset('storage/video1.MP4') }}","video/mp4");

// video.play();

// var video = document.getElementById('video');
// var source = document.createElement('source');

// source.setAttribute("src", "http://127.0.0.1:8000/storage/video1.MP4");

// video.appendChild(source);
// video.play();

// setTimeout(function() {  
//     video.pause();

//     source.setAttribute("src", "http://127.0.0.1:8000/storage/video2.MP4"); 

//     video.load();
//     video.play();
// }, 3000);