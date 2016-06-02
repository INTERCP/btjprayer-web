<?php if(!isset($_GET["mobile"])) : ?>
<footer class="footer">
	<div style="float:left">
		COPYRIGHT BTJPRAYER ALL RIGHTS RESERVED, 2016<br/>
		btjprayer@hanmail.net <a href="http://www.btjprayer.net/40ucsILHrT/wp-login.php">관리자 로그인</a>
	</div>

	<style>
	.modal {
		display: none;
		margin: 0 auto;
		margin-top: 35px;
		margin-bottom: 15px;
		width: 500px;
		border-radius: 0;
		padding: 0;
	}

	.modal header {
		background-color: #bb1d22;
	}

	.modal header img {
		margin-top: 8px;
	}

	.modal_body {
		padding: 15px 30px;
		height: 80%;
		overflow-y: auto;
	}

	.blocker {
		z-index: 20;
	}

	@media screen and (max-width: 500px) {
		.modal {
			width: 80%;
		}
	}

	#gap_nav, #p4m_nav {
		color: white;
		padding-left: 15px;
		background-color: #333;
		width: 100%;
		height: 30px;
		list-style: none;
		white-space:nowrap;
		overflow-x: scroll;
		overflow-y: hidden;
	}

	#gap_nav::-webkit-scrollbar, #p4m_nav::-webkit-scrollbar {
		display: none;
	}

	#gap_nav li, #p4m_nav li {
		display: inline-block;
		padding: 5px 15px;
	}

	.modal a.close-modal {
		top: 0;
		right: 0;
	}

	.modal_button {
		position: fixed;
		right: 50%;
		margin-right: -330px;
		width: 60px;
		height: 60px;
		border-radius: 50%;
		text-align: center;
		font-weight: bold;
		color: white;
	}

	.gap_button {
		bottom: 20px;
		background-color: navy;
		font-size: 20px;
		line-height: 55px;
	}

	.p4m_button {
		bottom: 100px;
		background-color: #ff4040;
		font-size: 10px;
		line-height: 14px;
		padding-top: 17px;
	}

	@media screen and (max-width: 700px) {
		.modal_button {
			right: 20px;
			margin-right: auto;
		}
	}

	#p4m_language_selector {
		float: right;
		margin-right: 15px;
	}

	#p4m_language_selector li {
		display: inline-block;
		margin-left: 15px;
	}
	</style>

	<div style="float:right">
		<div class="gap_button modal_button"><a href="#gap_view" onclick="display_tap(0)" rel="modal:open"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ic_gap.png" alt="GAP" style="width:50px;" /></a></div>
		<div class="p4m_button modal_button"><a href="#p4m_view" onclick="display_p4m_tap(0)" rel="modal:open">PRAYFOR<br/>MUSLIM</a></div>
	</div>
	<div style="clear:both"></div>

	<!-- GAP -->
	<div id="gap_view" class="modal">
		<header>
			<p style="padding: 0 30px; margin-bottom:6px;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo_gap_activity.png" alt="GAP" style="width:100px;" /></p>
			<nav>
				<ul id="gap_nav" class="horizontal dragscroll"></ul>
			</nav>
		</header>
		<div id="gap_body" class="modal_body"></div>
	</div>

	<!-- pray for muslims -->
	<div id="p4m_view" class="modal">
		<header>
			<p style="padding: 0 30px; margin-bottom:6px;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo_p4m.png" alt="PRAYFORMUSLIM" style="width:150px; margin-left: -10px; margin-top: 15px; margin-bottom:5px;" /></p>
			<nav>
				<ul id="p4m_nav" class="horizontal dragscroll"></ul>
			</nav>
		</header>
		<div id="p4m_language_selector">
			<ul>
				<li><a href="#" onclick="load_p4m('korean');">한국어</a></li>
				<li><a href="#" onclick="load_p4m('english');">English</a></li>
				<li><a href="#" onclick="load_p4m('chinese');">중국어</a></li>
				<li><a href="#" onclick="load_p4m('japanese');">일본어</a></li>
			</ul>
		</div>
		<div id="p4m_body" class="modal_body"></div>
	</div>
</footer>
<?php endif; ?>
</div> <!-- #wrapper -->
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/dragscroll.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.modal.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('#nation_summary_title').click(function() {
		if ($('#nation_summary_title span').hasClass("glyphicon-menu-down") ) {
			$('#nation_summary_title span').removeClass("glyphicon-menu-down").addClass("glyphicon-menu-up");
		} else {
			$('#nation_summary_title span').removeClass("glyphicon-menu-up").addClass("glyphicon-menu-down");
		}
		$('#nation_summary_content').slideToggle();
	});
/*
	$('#prayer_request_title').click(function() {
		if ($('#prayer_request_title span').hasClass("glyphicon-menu-down") ) {
			$('#prayer_request_title span').removeClass("glyphicon-menu-down").addClass("glyphicon-menu-up");
		} else {
			$('#prayer_request_title span').removeClass("glyphicon-menu-up").addClass("glyphicon-menu-down");
		}
		$('#prayer_request_content').slideToggle();
	});*/

	function display_tap(tab_index) {
		$('.modal_tab').hide();
		$('#gap_'+tab_index).show();
	}

	function display_p4m_tap(tab_index) {
		$('.modal_tab').hide();
		$('#p4m_'+tab_index).show();
	}

	$.get('/api/bible.php?day=<?php echo get_day_of_year(); ?>&escape=true', function(data) {
		var inner_html = '';
		var nav_html = '';
		var index = 0;
		for(var property in data) {
			nav_html += '<li><a href="#" onclick="display_tap(' + index + ')">' + property + '</a></li>';

			inner_html += '<div class="modal_tab" id=gap_' + index + '>';

			for(var i in data[property]) {
				inner_html += '<p>' + (parseInt(i) + 1) + ' ' + data[property][i] + '</p>';
			}

			inner_html += '</div>';
			index++;
		}

		$('#gap_body').html(inner_html);
		$('#gap_nav').html(nav_html);

		display_tap(0);
	}, 'json');

	var p4m_slug = {
		'korean': '16p4m',
		'english': '16p4meng',
		'chinese': '16p4mcn',
		'japanese': '16p4mjap'
	}

	function load_p4m(language) {
		$.get('/api/core/get_category_posts/?slug=' + p4m_slug[language] + '&count=30', function(data) {
			var posts = data['posts'];

			var p4m_inner_html = '';
			var p4m_nav_html = '';

			for (var i in posts) {
				var post = posts[i];

				p4m_nav_html = '<li><a href="#" onclick="display_p4m_tap(' + i + ')">' + 'Day ' + (30 - i) + '</a></li>' + p4m_nav_html;
				p4m_inner_html += '<div class="modal_tab" id=p4m_' + i + '>';
				p4m_inner_html += post['title'];
				p4m_inner_html += post['content'];
				p4m_inner_html += '</div>';
			}

			$('#p4m_body').html(p4m_inner_html);
			$('#p4m_nav').html(p4m_nav_html);

			display_p4m_tap(0);
		}, 'json');
	}

	load_p4m('korean');
</script>
</body>
</html>
