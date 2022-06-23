<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Prevents user from zooming on mobile. While yes, a terrible thing on most sites, there shouldn't be any need here -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Counter</title>
		<style>
			body {
				width: 100vw;
				height: 100vh;
				margin: 0;
				
				background-color: black;
				color: white;
				font-size: 10vmin;
				font-family: monospace;

				display: grid;
				grid-template-columns: 1fr;
				grid-template-rows: 1fr 1fr 1fr;
				align-items: stretch;
				justify-content: center;
			}
			h1 {
				margin: 0;
				display: flex;
				align-items: center;
				justify-content: center;
			}

			@media screen and (orientation: landscape) {
				body {
					grid-template-rows: 1fr;
					grid-template-columns: 1fr 1fr 1fr;
				}
			}

			button {
				font-size: inherit;
				font-weight: bold;
				border: 0;
				color: black;
				cursor: pointer;
			}
			#u {
				background-color: lime;
			}
			#d {
				background-color: red;
			}
		</style>
	</head>
	<body>
		<button id="u">&plus;</button>
		<h1>0</h1>
		<button id="d">&minus;</button>
		<script>
			const u = document.getElementById("u");
			const d = document.getElementById("d");
			const h = document.querySelector("h1");
			var count = 0;
			u.onclick = function(e){e.preventDefault(); count++; h.innerText = count;};
			d.onclick = function(e){e.preventDefault(); count--; h.innerText = count;};
		</script>
	</body>
</html>
