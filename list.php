<?php include "includes/header.php"; ?>
		<div class="maintext-list">
			<iframe id="forum_embed"
				src="javascript:void(0)"
				scrolling="no"
				frameborder="0"
				width="900"
				height="700">
			</iframe>
			<script type="text/javascript">
				document.getElementById('forum_embed').src =
				'https://groups.google.com/forum/embed/?place=forum/star-trek-the-line'
				+ '&showsearch=true&showpopout=true&showtabs=false'
     				+ '&parenturl=' + encodeURIComponent(window.location.href);
			</script>
		</div>
<?php include 'includes/footer.php'; ?>
