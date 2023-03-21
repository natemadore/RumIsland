<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Rum Paradise</title>
	<style>
		body {
			background-color: #000000; /* Black background */
			color: #FFFFFF; /* White text */
			
		}
		.flag {
			position: relative;
			margin: 20px auto;
			width: 600px;
			height: 400px;
			background-image: url('https://cdn11.bigcommerce.com/s-yzgoj/images/stencil/1280x1280/products/1555422/4564896/apidiclpo__71721.1626740755.jpg?c=2'); 
			background-repeat: no-repeat;
			background-size: contain;
			background-position: center;
		}
		.banner {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			background-color: #FFFFFF;
			color: #000000; 
			font-size: 24px;
			text-align: center;
			padding: 10px;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			animation: lightning 0.5s infinite;
		}
		/* Lightning animation keyframes */
		@keyframes lightning {
			0% {
				background-color: #FFFFFF;
			}
			25% {
				background-color: #FFFF00;
			}
			50% {
				background-color: #FFFFFF;
			}
			75% {
				background-color: #FFFF00;
			}
			100% {
				background-color: #FFFFFF;
			}
		}

		/* Confetti animation */
		.confetti {
			position: absolute;
			background: #f00;
			border-radius: 50%;
			pointer-events: none;
			animation: confetti 1s ease-out infinite;
		}
		/* Confetti animation keyframes */
		@keyframes confetti {
			0% {
				transform: translateY(-100%);
			}
			100% {
				transform: translateY(100vh) rotate(360deg);
			}
		}
	</style>
	<script>
		window.onload = function() {
			document.getElementById("os").innerHTML = navigator.platform;
			document.getElementById("hostname").innerHTML = window.location.hostname;
			document.getElementById("browser").innerHTML = navigator.userAgent;
			// Create confetti elements and append to body
			const confettiColors = ['#f00', '#0f0', '#00f', '#ff0', '#f0f', '#0ff'];
			for (let i = 0; i < 200; i++) {
				const confetti = document.createElement('div');
				confetti.classList.add('confetti');
				confetti.style.top = `${Math.random() * 100}%`;
				confetti.style.left = `${Math.random() * 100}%`;
				confetti.style.width = `${Math.random() * 15}px`;
				confetti.style.height = `${Math.random() * 100}%`;
				confetti.style.background = confettiColors[Math.floor(Math.random() * confettiColors.length)];
				document.body.appendChild(confetti);
			}
		};
	</script>
</head>
<body>
	<div class="banner">Yar, ye are scurvy knaves! Prepare to meet my parrot or yest ze ship be boarded!</div>


	<center>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<h1>Welcome to Rum Paradise</h1>
		<p>There are no secrets here. Use with caution. Quarter be given unless ye see a red flag.</p>
		<p><strong>BUT WHO GIVES A SHIT WHEN YOU FOUND THE BEST PLACE ON EARTH!</strong></p>
		<p>***************************************************************************************************</p><p>***************************************************************************************************</p><p>***************************************************************************************************</p><p>***************************************************************************************************</p><p>***************************************************************************************************</p><p>***************************************************************************************************</p>

		<p>They call me Hanging Johnny,</p>
		<p>Away-i-oh</p>
		<p>They call me Hanging Johnny,</p>
		<p>So hang, boys, hang!</p>
		<p>&nbsp;</p>
		<p>First I hung my mother,</p>
		<p>Away-i-oh;</p>
		<p>Then I hung my brother,</p>
		<p>So hang, boys, hang!</p>
		<p>&nbsp;</p>
		<p>Hang and haul together,</p>
		<p>Away-i-oh;</p>
		<p>Hang for better weather,</p>
		<p>So hang, boys, hang!</p>
		<div>
			<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/5h7tba05LgI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
		<p>Operating System: <span id="os"></span></p>
		<p>Hostname: <span id="hostname"></span></p>
		<p>Browser Information: <span id="browser"></span></p>
	</center>
	<div class="flag"></div>
</body>
</html>
