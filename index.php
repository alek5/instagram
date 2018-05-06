<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Instagram test task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Kaushan+Script|Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<? include 'add_user.php' ?>

	<header>
		<div class="container">
			<div class="row justify-content-center">
				<img src="<?=$profile_picture?>" alt="">
				<div class="users">
					<div>
					<h4>Имя пользователя: <?=$full_name?></h4>
				</div>
				<div>
					<p>Количество добавленных фото: <?=$counts?></p>
				</div>
				</div>
				

        		
        	</div>
                	
		</div>
	
		
    </header>

    <hr>

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-7 align-self-center">
          <a href="#">
            <img class="img-fluid unloaded rounded mb-3 mb-md-0" src="http://placehold.it/700x400" alt="">
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        </div>
      </div>

      <hr>

      
    </div>
    <div class="text-center">
    	<button class="btn btn-success">Загрузить ещё</button>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	$.ajax({
  		url: "add_user.php",
  		type: 'GET',
  		success: function(data){

    		//$("#results").append(html);
    		console.log(data)
    	 // data.data[x].images.low_resolution.url - URL of image, 306х306
			// data.data[x].images.thumbnail.url - URL of image 150х150
			// data.data[x].images.standard_resolution.url - URL of image 612х612
			// data.data[x].link - Instagram post URL 
			//}
    		/*for(var i = 0; i < 10; i++) {
				(function(e) {
					setTimeout(function() {
						console.log(e);
					}, 1000);
				})(i);
			}

			for( x in data.data ) {
				(function(x) {
					$(".img-fluid.unloaded").each(function() {
						$(this).attr("src", data.data[x].images.standard_resolution.url)
					})
				})(x);
			}

    		/*$(".img-fluid.unloaded").each(function(){
    			
    			
    			for( x in data.data ){
					//$('ul').append('<li><img src="'+data.data[x].images.low_resolution.url+'"></li>');
    				//for (var i = 0; i < html.data.length; i++) {
    				//console.log(that)
    				$(this).attr("src", data.data[x].images.standard_resolution.url)
    			}
    		})*/
  		}	
	});
</script>	
</body>
</html>
