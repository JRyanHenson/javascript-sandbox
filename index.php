<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" href="css/styles.css" rel="stylesheet">
		<link type="text/css" href="css/javascript-events.css" rel="stylesheet">
		<script src="js/javascript-events.js" type="text/javascript"></script>
		<title>JavaScript Challenge</title>
	</head>
	<body>
		<h1 class="text-center">This is my JavaScript challenge</h1>
			<h2>On Click</h2>
			<p>What happens when you click here?</p>
			<div id="click" onclick="clickEvent();">Nice!</div>
			<h2>Mouse Over</h2>
			<p>What happens when you mouse over and back?</p>
			<div id="mouse" onmouseover="mouseOver();" onmouseout="mouseOut();">
				<p>Virual craft beer glossier snackwave helvetica dreamcatcher pop-up health goth gastropub pug semiotics fingerstache
				leggings letterpress cred. Umami asymmetrical cred, tofu irony green juice chillwave franzen pickled vexillologist
				sartorial scenester listicle. Man braid twee knausgaard PBR&B, cornhole roof party post-ironic humblebrag occupy.
				Meh waistcoat wolf, listicle kombucha scenester vinyl. Lo-fi gochujang organic activated charcoal chambray.
				Occupy bespoke bitters tacos cred subway tile tumeric umami tbh. Kale chips prism vinyl pork belly hoodie hashtag.
				Post-ironic hoodie taxidermy, whatever dreamcatcher stumptown flexitarian. Poutine vape hexagon mixtape,
				helvetica semiotics blog ethical crucifix hell of try-hard. Irony disrupt chillwave, stumptown slow-carb +1 hella DIY hammock austin pour-over gluten-free.
				</p>
			</div>
		<h2>Double Click</h2>
		<p>What happens when you double click?</p>
		<div id="doubleClick" ondblclick="doubleClick();">
			<p>
				Bacon ipsum dolor amet pig filet mignon pork belly jerky short loin leberkas ball tip t-bone.
				Burgdoggen corned beef flank chicken, venison pig pork loin tongue filet mignon short ribs shank tail
				picanha porchetta meatloaf. Jerky bresaola shoulder pastrami burgdoggen salami fatback venison. Biltong
				hamburger tail ball tip, turducken filet mignon doner pork tri-tip short ribs. Tongue sirloin pancetta swine venison.
				Sausage cupim pig pork belly ball tip tail flank filet mignon jerky bresaola.
			</p>
		</div>
		<h2>Find and Replace</h2>
		<div id="searchText">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
			dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<br>
			<p>Find: <input id="find" name="find" type="text"</p>
			<p>Replacment: <input id="replacement" name="replacement" type="text"</p>
		<br>
		<p><input type="button" value="Find" onClick="findMyText(document.getElementById('find').value, document.getElementById('replacement').value);"></p>
	</body>
</html>