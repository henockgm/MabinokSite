<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title')| Mabinok </title>
		<!-- <link rel="stylesheet" type="text/css" href="/packages/css/main.css"> -->
    
    <!-- <link href="public/css/social-sharing.css" rel="stylesheet"> -->
    {{ HTML::style('css/social-sharing.css') }}
		<meta charset="UTF-8">	    
		<meta name="viewport" content="initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="apple-touch-startup-image" href="http://mabinok.com/public/images/ios_startup-6@2x.png" sizes="750x1294">
		<!-- <link href="/packages/css/bootstrap.css" rel="stylesheet"> -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/custom.css') }}
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="/packages/css/blueimp-gallery.min.css"> -->
    {{ HTML::style('css/blueimp-gallery.min.css') }}

                 
	</head>
	<body>

    @include('layouts.header_slider')
		@include('layouts.menu')
        
		<div class="container"> 
			@if(Session::has('global'))
			<div class="alert alert-success"> {{ Session::get('global') }} 
   				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			</div> 
			@endif
		</div>
		<!-- @include('layouts.navigation') -->

		@yield('content')
       
           <!-- footer -->

		<div class="alt2">
			<!-- <div class="container"> -->
				<footer>
					<p class="copy-right"><span class="glyphicon glyphicon-copyright-mark"></span> mabinok.com 2016 </p>
			 		@include('footers.flinks')
			 		 @include('contact.contactus')
			 					 		 		
				</footer>
			<!-- </div> -->
		</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="/packages/js/bootstrap.js"></script> -->
{{ HTML::script('js/bootstrap.js'); }}
<!-- <script src="/packages/js/blueimp-gallery.min.js"></script> -->
{{ HTML::script('js/blueimp-gallery.min.js'); }}



<!--?????????????????????????      Testing            ???????????????????????? -->


<script>
(function() {

  "use strict";

  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();

</script>


<!-- ????????????????????????????????????????????????????????????????????????? -->

<script> 
    // var link = "";              
    //     for (var i = 1; i < 50; i++) {
    //              link = '<a href="/jfu/server/php/files/' + i + '.jpg" title=""> <img src="/jfu/server/php/files/thumbnail/' + i + '.jpg" alt=""> </a>' ;

    //              $( "#links" ).append(link);
    //         };    
</script> 

<script>
// document.getElementById('links').onclick = function (event) {
//     event = event || window.event;
//     var target = event.target || event.srcElement,
//         link = target.src ? target.parentNode : target,
//         options = {index: link, event: event},
//         links = this.getElementsByTagName('a');
//     blueimp.Gallery(links, options);
// };
</script>

<script>

// // Add slideup & fadein animation to dropdown
//    $('.dropdown').on('show.bs.dropdown', function(e){
//       var $dropdown = $(this).find('.dropdown-menu');
//       var orig_margin_top = parseInt($dropdown.css('margin-top'));
//       $dropdown.css({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}).animate({'margin-top': orig_margin_top + 'px', opacity: 1}, 300, function(){
//          $(this).css({'margin-top':''});
//       });
//    });
//    // Add slidedown & fadeout animation to dropdown
//    $('.dropdown').on('hide.bs.dropdown', function(e){
//       var $dropdown = $(this).find('.dropdown-menu');
//       var orig_margin_top = parseInt($dropdown.css('margin-top'));
//       $dropdown.css({'margin-top': orig_margin_top + 'px', opacity: 1, display: 'block'}).animate({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}, 300, function(){
//          $(this).css({'margin-top':'', display:''});
//       });
//    });

</script>


<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-67472059-2', 'auto');
  // ga('send', 'pageview');
</script>



</body>
</html>