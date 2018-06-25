<?php
error_reporting( E_ALL&~E_NOTICE );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $headtitle ?></title>
<meta name="keywords" content="Youtube" />
<meta name="description" content="Youtube mirror" />

<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport" />
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link href="https://cdn.bootcss.com/Swiper/4.0.6/css/swiper.min.css" rel="stylesheet">
<!-- <script src="./inc/progress.js"></script>  -->

<script src="./inc/progress.js"></script>
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
<script src="//cdn.bootcss.com/jqueryui/1.11.2/jquery-ui.js"></script>
<link href="//cdn.bootcss.com/video.js/5.20.4/alt/video-js-cdn.min.css" rel="stylesheet" />
<script src="//libs.cdnjs.net/video.js/5.20.4/video.min.js"></script>
<script type="text/javascript" src="./inc/4.js"></script>
<link rel="stylesheet" href="./inc/theme.css" type="text/css">
<link rel="stylesheet" href="./inc/iconfont.css">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    
<div class="container" >
<!-- <i class="fa d-inline fa-youtube-play"></i><b style="color:black">&nbsp;<?php echo TITLENAME ?></b> -->
	<a class="navbar-brand" href="./"><img src="./inc/header.png" class="head_img img_res" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
		<ul class="navbar-nav">
		</ul>
		<div id="custom-search-input">
		     <form action="search.php" style="margin-bottom:0px">
			<div class="input-group col-md-12">
            <!-- search-query form-control search_res -->
                <input style=" width:90%;margin-left:-900px; border-radius: 6px;padding-left:0.5em;" type="text" name="q"  class="search-query form-control search_res" id="youtube"  placeholder="Search">
                <!-- <span class="input-group-btn"> -->
                    <button class="btn btn-danger go-search"  type="submit">
                        
                        <span class="fa d-inline fa-search" style=""> </span>
                    </button>
                <!-- </span> -->
				</div>
            </form>
            
		<script >
$("#youtube").autocomplete({
    source: function(request, response){
        
        var query = request.term;
        
        $.ajax({
            url: "./ajax/autocomplete.php?q="+query,  
            dataType: 'jsonp',
            success: function(data, textStatus, request) { 
               response( $.map( data[1], function(item) {
                    return {
                        label: item[0],
                        value: item[0]
                    }
                }));
            }
        });
    },
    
});
</script>
        </div>
        
    </div>
    
</div>

</nav>
