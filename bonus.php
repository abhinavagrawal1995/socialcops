<?php 
	function getword(){
		$ch = curl_init("http://randomword.setgetgo.com/get.php?len=4");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
?>

<!DOCTYPE HTML>
<!--
	SocialCops Task
	abhinavagrawal.in | gR00T
-->
<html>
	<head>
		<title>SocialCops</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/medium-editor.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="assets/css/themes/default.css" id="medium-editor-theme">
		<script src="assets/js/medium-editor.min.js"></script>
    	<script src="assets/js/MediumButton.js"></script>

    	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html">SocialCops</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="https://socialcops.quip.com/2T5EAf6Ab7CO" target="_new">Main Task</a></li>
							<li><a href="https://socialcops.quip.com/2T5EAf6Ab7CO" target="_new">Additional Task</a></li>
							<li><a href="http://abhinavagrawal.in" class="button">gR00T</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>SocialCops</h2>
					<p>FrontEnd developer bonus task.</p>
					<ul class="actions">
						<li><a class="button special" onclick="sample()">Sample</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">
					<nav id="begin"></nav>
					<section class="box special">

						<div class="box">						
						 <div class="editable" id="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						 <br>
						 <button class="button special" onclick="done()">Go</button>
						 
					</div>
					</section>

					


				</section>

			<!-- CTA -->
				

			<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>By: <a href="http://abhinavagrawal.in">gR00T</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script>
			    var editor = new MediumEditor('.editable', {
			            buttons: ['bold', 'U', 'R'],
			            extensions: {
							'bold': new MediumButton({label:'BOLD', start:'<b>', end:'</b>'}),
							'U': new MediumButton({label:'U', start:'<u>', end:'</u>'}),
							'R': new MediumButton({label:'red', start:'<span style="color:red;">', end:'</span>'})
						}	
			        }),
			        cssLink = document.getElementById('medium-editor-theme');

					document.getElementById('sel-themes').addEventListener('change', function () {
			            cssLink.href = 'css/' + this.value + '.css';
			        });
			</script>
			<script>
				function sample()
				{
					location.href = "#begin";
					var article =document.getElementById('article');
					article.innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

				}
				function done()
				{
					location.href = "#res";
					var article =document.getElementById('article');
					var arr=article.innerHTML.match(/\b(?!span)\w{4}\b/gi);
					console.log(arr);
					for(i=0;i<arr.length;i++)
					{
						article.innerHTML=article.innerHTML.replace(arr[i],"<?php echo getword(); ?>");
					}
				}
			</script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>