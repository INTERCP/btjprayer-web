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
		background: url('<?php bloginfo( 'stylesheet_directory' ); ?>/img/close.png');
		background-size: 20px 20px;
        width: 20px;
        height: 20px;
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
        
    #gap_body p {
        font-size: 16px;
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

	#p4m_body img {
		max-width: 100%;
	}

	#p4m_comment table td, #p4m_comment table tr, #p4m_comment table {
		border: 0 none;
	}
        
    .videowrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videowrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
        
    .modal_tab .entry-title {
        font-size: 1.5em;
    }
	</style>

	<div style="float:right">
		<div class="gap_button modal_button"><a href="#gap_view" onclick="display_tap(0)" rel="modal:open"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ic_gap.png" alt="GAP" style="width:50px;" /></a></div>
		<div class="p4m_button modal_button"><a href="#p4m_view" onclick="load_p4m('korean');" rel="modal:open"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ic_p4m.png" alt="PRAYFORMUSLIMS" style="width:50px; margin-top: 1px; margin-left: 3px;" /></a></div>
	</div>
	<div style="clear:both"></div>

	<!-- GAP -->
	<div id="gap_view" class="modal">
		<header>
			<p style="padding: 0 30px; margin-bottom:6px;">
                <a href="#gap_0" onclick="display_tap(0)"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo_gap_activity.png" alt="GAP" style="width:100px;" /></a>
                <span style="float:right"><a id='ic_gapinfo' href="#gap_info"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ic_gapinfo.png" alt="갭이란?" style="width: 50px;" /></a></span>
                <span style="clear:both;"></span>
            </p>
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
				<li><a href="#" onclick="load_p4m('chinese');">中文</a></li>
				<li><a href="#" onclick="load_p4m('japanese');">日本語</a></li>
			</ul>
		</div>
		<div style="clear:both;"></div>
		<div class="modal_body">
			<div id="p4m_body"></div>
			<br/>
			<div id="p4m_comment">
				<h4 id="comment_title">기도문 남기기</h4>
				<form action="" method="GET" id="p4m_comment_form">
                    <p>
                        <label for='name' id='label_name'>이름</label><br/>
                        <input type="text" name="name"/><br/>
                        <label for='email' id='label_email'>이메일</label><br/>
                        <input type="text" name="email"/><br/>
                        <label for='content' id='label_content'>기도문</label><br/>
                        <textarea name="content"></textarea><br/>
                    </p>
                    <input type="submit" id='p4m_comment_submit' value="기도문 남기기" style="background-color: #ff4040"/>
				</form>
			</div>
		</div>
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

    function is_leap_year(year) {
        return (((year % 4) == 0) && (((year % 100) != 0) || ((year % 400) == 0)))
    }
    
    function get_day_of_year() {
        var today = new Date();
        var from = new Date(today.getFullYear(), 0, 1); // 오늘과 같은 해 1월 1일 0시로 맞춤
        var diff = today - from; // 1월 1일 이후로 오늘까지 시간 차
        var day = Math.floor(diff / 1000 / 60 / 60 / 24);
        
        // 윤년일 경우 2월 29일 같은 갭본문 반복을 적용해야 함
        if (is_leap_year(today.getFullYear()) && day > 57) {
            return day;    
        } else {
            return day + 1;
        }
    }
    
	function display_tap(tab_index) {
		$('.modal_tab').hide();
		$('#gap_'+tab_index).show();
	}

	var p4m_current_post;
	var p4m_current_tab;
	function display_p4m_tap(tab_index) {
		$('.modal_tab').hide();
		$('#p4m_'+tab_index).show();
		p4m_current_post = p4m_post_id[tab_index];
		p4m_current_tab = tab_index;
        
        if(tab_index == 'video') {
            $('#p4m_comment').hide();
        } else {
            $('#p4m_comment').show();
        }
	}

    function load_gap() {
        $.get('/api/bible.php?day=' + get_day_of_year() + '&escape=true', function(data) {
            var inner_html = '';
            var nav_html = '';
            var index = 0;
            for(var property in data) {
                nav_html += '<li><a href="#gap_'+ index + '" onclick="display_tap(' + index + ')">' + property + '</a></li>';

                inner_html += '<div class="modal_tab" id=gap_' + index + '>';

                for(var i in data[property]) {
                    inner_html += '<p>' + (parseInt(i) + 1) + ' ' + data[property][i] + '</p>';
                }

                inner_html += '</div>';
                index++;
            }
            
            inner_html += '<div class="modal_tab" id=gap_info>';
            inner_html += '<img src="<?php bloginfo('stylesheet_directory'); ?>/img/gapinfo.png" style="width: 100%;" />';
            inner_html += '</div>';
            

            $('#gap_body').html(inner_html);
            $('#gap_nav').html(nav_html);

            display_tap(0);
        }, 'json');    
    }
	

	var p4m_slug = {
		'korean': '16p4m',
		'english': '16p4meng',
		'chinese': '16p4mcn',
		'japanese': '16p4mjap'
	};
    
    var p4m_comment_label = {
        'korean': {
            'title': '기도문 남기기',
            'name': '이름',
            'email': '이메일',
            'content': '기도문',
            'submit': '기도문 남기기',
        },
        'english': {
            'title': 'Share Prayer Request',
            'name': 'Name',
            'email': 'Email',
            'content': 'Prayer Request',
            'submit': 'Share',
        },
        'chinese': {
            'title': '写代祷文',
            'name': '姓名',
            'email': '邮箱',
            'content': '祷告文',
            'submit': '发表',
        },
        'japanese': {
            'title': '祈りの文の投稿',
            'name': 'お名前',
            'email': 'メールアドレス',
            'content': 'お祈り',
            'submit': '投稿する',
        },
        
    };
    
    function change_comment_form_language(language) {
        var form_label = p4m_comment_label[language];
        $('#comment_title').html(form_label['title']);
        $('#label_name').html(form_label['name']);
        $('#label_email').html(form_label['email']);
        $('#label_content').html(form_label['content']);
        $('#p4m_comment_submit').val(form_label['submit']);
    }

	var p4m_post_id = [];
	var current_language;
    var days;
	function load_p4m(language) {
		current_language = language;
		today = new Date();
		d_day = new Date('Jun 6 2016 00:00:00');
		days = Math.floor((today - d_day) / 1000 / 60 / 60 / 24);
		// days = 3;
        
		if(days >= 0) {
			$.get('/api/core/get_category_posts/?slug=' + p4m_slug[language] + '&count=30', function(data) {
				var posts = data['posts'];
                var p4m_inner_html = '';
                var p4m_nav_html = '';
                
				for (var i in posts) {
					var post = posts[i];
					p4m_post_id[i] = post['id'];
					if(29 - i <= days) {
						p4m_nav_html = '<li><a href="#p4m_' + i + '" onclick="display_p4m_tap(' + i + ')">' + 'Day ' + (30 - i) + '</a></li>' + p4m_nav_html;
					}

					p4m_inner_html += '<div class="modal_tab" id=p4m_' + i + '>';
					p4m_inner_html += '<h1 class="entry-title">' + post['title'] + '</h1>';
					p4m_inner_html += post['content'] + '<br/><br/><h4>' + p4m_comment_label[language]['content'] + '</h4>';
					comments = post['comments'];
					for(var j in comments) {
						p4m_inner_html += '<p><span style="font-weight: bold;">' + comments[j]['name'] + '</span><br/>' + comments[j]['content'] + '</p>';
					}
					p4m_inner_html += '</div>';
				}
                
                $('#p4m_body').html(p4m_inner_html);
                $('#p4m_nav').html(p4m_nav_html);
                
                load_p4m_video(p4m_nav_html, p4m_inner_html);
                
                display_p4m_tap(29-days);
                change_comment_form_language(language);
			}, 'json');
		} else {
			$('#p4m_language_selector').hide();
            load_p4m_video();
            display_p4m_tap('video');
		}
	}
    
    function load_p4m_video(nav_html, inner_html) {
        if (typeof(nav_html)==='undefined') nav_html = '';
        if (typeof(inner_html)==='undefined') inner_html = '';
        nav_html = '<li><a href="#p4m_video" onclick="display_p4m_tap(\'video\')">라마단이란?</a></li>' + nav_html;
        inner_html += '<div class="modal_tab" id=p4m_video>';
        if(days < 0) {
            inner_html += '<h1 class="entry-title">D' + days + '</h1>';
        }
        inner_html += '<div class="videowrapper">';
        inner_html += '<iframe width="420" height="315" src="https://www.youtube.com/embed/W2Z7acYGHfM" frameborder="0" allowfullscreen></iframe>';
        inner_html += '</div></div>';
            
        $('#p4m_body').html(inner_html);
        $('#p4m_nav').html(nav_html);
    }

	function submit_comment(event) {
		event.preventDefault();

		var comment_name = $('#p4m_comment input[name=name]').val();
		var comment_email = $('#p4m_comment input[name=email]').val();
		var comment_content = $('#p4m_comment textarea[name=content]').val();

		var arguments = $('#p4m_comment_form').serialize();

		if(comment_name == '') {
			alert('이름을 입력해주세요');
		} else if(comment_email == '') {
			alert('이메일을 입력해주세요');
		} else if(comment_content == '') {
			alert('기도문 내용을 입력해주세요');
		} else {
			$.get('/api/respond/submit_comment?post_id=' + p4m_current_post + '&' + arguments, function(data) {
				load_p4m(current_language);
				display_p4m_tap(p4m_current_tab);
			}, 'json');
		}
	}

    $(document).ready(function() {
        load_gap();
        load_p4m('korean');
        $('#p4m_comment').submit(submit_comment);
        $('#ic_gapinfo').click(function() {
            display_tap('info');
        })
    });
</script>
</body>
</html>


<!--
btjprayer.net/api/respond/submit_comment/?post_id=11823&name=이준원&email=esanzy87@gmail.com&content=기도문테스트
-->
