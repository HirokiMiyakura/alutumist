<!-- footer -->
<footer class="footer" role="contentinfo">

<!-- copyright -->
<p class="copyright">
&copy; 楽之者洋行</a>.
</p>
<!-- /copyright -->

</footer>
<!-- /footer -->


<?php wp_footer(); ?>

<script>
jQuery(function($){

	// 固定ヘッダー
	$(function() {
	  var $win = $(window),
	      $main = $('main'),
	      $nav = $('nav'),
				$logo_s = $('.logoFixed')
	      navHeight = $nav.outerHeight(),
	      navPos = $nav.offset().top,
	      fixedClass = 'is-fixed';

	  $win.on('load scroll', function() {
	    var value = $(this).scrollTop();
	    if ( value - 167 > navPos ) {
	      $nav.addClass(fixedClass);
	      $main.css('margin-top', navHeight);
				$logo_s.toggle();
	    } else {
	      $nav.removeClass(fixedClass);
	      $main.css('margin-top', '0');
	    }
	  });
	});

  // $.scrollify({section:".box"});

	// 今いる場所をゴールドにする
	$(function(){

		var $win = $(window)

		$now_position = $(window).scrollTop()
		$service_position = $('#SERVICE').offset()['top'] - 200
		$models_position = $('#MODELS').offset()['top'] - 200
		$story_position = $('#STORY').offset()['top'] - 200
		$founders_position = $('#FOUNDERS').offset()['top'] - 200
		$contact_position = $('#CONTACT').offset()['top'] - 200
		$win.on('load scroll', function() {
			var value = $(this).scrollTop();

			if(value < $service_position) {
				$(".mainNavigationItem a").css("color", "#fff")
				$(".home > a").css("color", "gold")
			}
			else if((value > $service_position) && (value < $models_position)) {
				$(".mainNavigationItem a").css("color", "#fff")
			  $(".service > a").css("color", "gold")
			}
			else if((value > $models_position) && (value < $story_position)) {
				$(".mainNavigationItem a").css("color", "#fff")
			  $(".models > a").css("color", "gold")
			}
			else if((value > $story_position) && (value < $founders_position)) {
				$(".mainNavigationItem a").css("color", "#fff")
			  $(".story > a").css("color", "gold")
			}
			else if((value > $founders_position) && (value < $contact_position)) {
				$(".mainNavigationItem a").css("color", "#fff")
			  $(".founders > a").css("color", "gold")
			}
			else if (value > $contact_position) {
				$(".mainNavigationItem a").css("color", "#fff")
			  $(".contact > a").css("color", "gold")
			}
		})

		});


		$(function() {
		　$('.Toggle').click(function() {
		　  $(this).toggleClass('active');
				　if ($(this).hasClass('active')) {
			　　$('.NavMenu').addClass('active');　 //クラスを付与
			　} else {
			　　$('.NavMenu').removeClass('active'); //クラスを外す
			　}
		　});
		});

		// 固定ヘッダーの分ページ内リンク場所を変更する




});

AOS.init();

</script>
</body>
</html>
