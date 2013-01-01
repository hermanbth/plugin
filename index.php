<?php $title='Slideshow - skapa st&auml;mning p&aring; din webb'; include('header.php'); ?>

<div class='wrapper'>

<!-- box 8 -->
<!--
<div id='box8' class='box'>
  <div class='minimize'>x</div>
  <img class='gift' src='http://www.student.bth.se/~jche10/javascript/img/gift.png' alt='' />
  <h1 class='gift'>8. St&auml;mning</h1>
-->  
  <!-- <h1 class= 'example'>St&auml;mning - en slideshow</h1>
  -->

  <div class='slideshow'>
    <img src1='snowcristals.jpg' crop='0,200,0,0'/> 
    <img src1='nature.jpg' crop='0,200,0,0'/>
    <img src1='landscape.jpg' crop='0,200,0,0'/>
    <img src1='branches.jpg' crop='0,200,0,0'/>
  </div> <!-- end of slideshow -->
<!--
</div><!-- box 8 --
-->

<div id="text">
  <h1>Slideshow - skapa st&auml;mning p&aring; din webb</h1>
  <p>En slideshow p&aring; din webbplats startsida kan skapa st&auml;mning och ge en behaglig atmosf&auml;r f&ouml;r bes&ouml;karna. 
  Visa n&aring;gra bilder som f&aring;r kasta ljus p&aring; den verksamhet webbplatsen representerar och skifta dem i en 
  hastighet som &auml;r f&ouml;renlig med det som sidan ska f&ouml;rmedla. F&ouml;r att skapa ett lugn kan du l&aring;ta bilderna 
  tona in i varandra. D&auml;r har du skapat f&ouml;rus&auml;ttningar f&ouml;r en lyckad startsida som kommer locka bes&ouml;karna vidare 
  in p&aring; webbplatsen.</p>

  <p>N&auml;r du anv&auml;nder denna slideshow p&aring; din webbplats kan du enkelt &auml;ndra tidsintervallet f&ouml;r n&auml;r bilderna 
  ska b&ouml;rja att tona in. Det finns ocks&aring; m&ouml;jlighet att &auml;ndra intervallet f&ouml;r n&auml;r bilderna ska skifta.</p>

  <h2>S&aring; laddar du ner och installerar den</h2>
  <ol>
	<li>H&auml;mta hem och spara f&ouml;ljande zip-fil <a href="http://www.student.bth.se/~jche10/javascript/kmom0710/slidePlugin.zip"><br />
	http://www.student.bth.se/~jche10/javascript/kmom0710/slidePlugin.zip</a></li>
	
	
	<li>Extrahera filerna.</li>
	
	
	<li>Placera filerna i samma katalog som sidan ligger i som du vill att slideshowen ska visas p&aring;.</li>
	
	
	<li><p>I filen som motsvarar sidan som du vill att slideshowen ska finnas p&aring; l&auml;gger du in f&ouml;ljande 
	kod i <code>head</code>-elementet (se till s&aring; att s&ouml;kv&auml;garna till filerna st&auml;mmer hos dig):</p>

	<p>
	<code>
		&lt;link rel="stylesheet/less" type="text/css" href="style.less"&gt; <br />
		&lt;script src="less.min.js"&gt;&lt;/script&gt; <br />
		&lt;script src="modernizr.js"&gt;&lt;/script&gt; <br />
	</code>
	</p>
	
	<p>I samma fil l&auml;gger du i <code>body</code> (se till s&aring; att s&ouml;kv&auml;garna till filerna st&auml;mmer hos dig)</p>
	
	<p>
		<code>
		&lt;div class='wrapper'&gt; <br />
			&lt;div class='slideshow'&gt; <br />
				&lt;img src1='snowcristals.jpg' crop='0,200,0,0'/&gt; <br />
				&lt;img src1='nature.jpg' crop='0,200,0,0'/&gt; <br />
				&lt;img src1='landscape.jpg' crop='0,200,0,0'/&gt; <br />
				&lt;img src1='branches.jpg' crop='0,200,0,0'/&gt; <br />
			&lt;/div&gt; <br />
		&lt;/div&gt; <br />
	
		&lt;script src="jquery.js"&gt;&lt;/script&gt; <br />
		&lt;script src="main.js"&gt;&lt;/script&gt; <br />
		</code>
	</p></li>
	
	<li>Ladda upp dina webbplatsfiler p&aring; en server s&aring; att din webbplats visas i en webbl&auml;sare.</li>
	
	
	<h2>S&aring; &auml;ndrar du bilder, hastighet och toningar</h2> 
	
	
	<li>Bilderna finns med som exempel s&aring; att du kan se att slideshowen fungerar. Om du vill 
	anv&auml;nda egna bilder byter du ut <code>src</code>-v&auml;rdena. Om du l&auml;gger in egna bilder kan du radera de 
	medf&ouml;ljande bildfilerna.</li>

	
	<li><p>Om du vill att en st&ouml;rre eller mindre yta av bilderna ska visas &auml;ndrar du p&aring; v&auml;rdena i</p>
	<p><code>&lt;img ... crop=</code></p></li>
	
	
	<li><p>Om du vill &auml;ndra p&aring; intervallet f&ouml;r hur ofta bilderna v&auml;xlar g&ouml;r du det i filen <code>main.js</code>,
	d&auml;r det l&aring;ngt ned i koden st&aring;r</p>
	
	<p>
		<code>
		intervallId = setInterval(function() {rotateImages();}, 9000); <br />
		</code>
	</p>
	
	&Auml;ndra p&aring; v&auml;rdet <code>9000</code> till ett l&auml;gre v&auml;rde om du vill att bilderna ska v&auml;xla fortare. 
	S&auml;tt ett h&ouml;gre v&auml;rde om bilderna ska varieras i ett l&aring;ngsammare tempo.</li>
	
	
	<li><p>Om du vill att bilderna ska tona in med en annan hastighet &auml;ndrar du
	koden i filen <code>main.js</code>. N&auml;stan l&auml;ngst ner i koden st&aring;r det</p>
	
	<p>
		<code>
		$(this).slideshowInit({'duration':22000}); <br />
		</code>
	</p>
	
	Byt ut <code>22000</code> till ett l&auml;gre v&auml;rde om du vill att bilderna ska tona in fortare. Om du &ouml;nskar
	att bilderna ska tona in l&aring;ngsammare s&auml;tter du ett h&ouml;gre v&auml;rde.</li>
	
	
	
</ol>
  
</div><!-- text -->

</div> <!-- wrapper -->


<script src="jquery.js"></script>
<script src="main.js"></script>
</body>
</html> 

<!-- 
  <p>Du beh&ouml;ver endast ladda ned tre stycken filer: index.php, main.js och style.less. 
  H&auml;r f&ouml;ljer en guide som beskriver hur du g&aring;r tillv&auml;ga.</p>
  
  <ol>
    <li>Klicka p&aring; <a href="http://www.student.bth.se/~jche10/javascript/lekplats/source.php?dir=plugin">
    &ouml;ppna k&auml;llkoder i nytt f&ouml;nster</a></li>
     
    <li>I det nya f&ouml;nstret klickar du p&aring; l&auml;nken index.php och kopierar koden som visas. 
    Klistra in koden i ett nytt dokument i n&aring;gon texteditor, t ex Notepad, och spara filen som index.php.</li>

    <li>Klicka sedan p&aring; l&auml;nken main.js, kopiera koden, klistra in i ett nytt dokument och spara som main.js</li>

    <li>Klicka p&aring; style.less, kopiera koden som ligger mellan <code>/* Slideshow */</code> och <code>/* slut slideshow */</code>, 
    klistra in i ett nytt dokument och spara som style.less</li>
  </ol>

  <h2>S&aring; f&aring;r du den att fungera</h2>

  <ol>
    <li>N&auml;r du laddat ner filerna ska du l&auml;gga in koderna i din webbplats koder. 
    F&ouml;ljande guide &auml;r t&auml;nkt att hj&auml;lpa dig integrera slideshowen i din befintliga webbplats.</li>

    <li>I filen index.php kopierar du koden fr&aring;n <code>&lt;div class='slideshow'&gt;</code> till <code>&lt;/div&gt;</code> 
    <!-- end of slideshow -- och klistrar in den i koden f&ouml;r den sida d&auml;r du vill att slideshowen ska visas. 
    V&auml;l till exempel webbplatsens startsida.</li>

    <li>L&auml;gg in s&ouml;kv&auml;gen till dina egna bilder i varje <code>&lt;img src1=</code></li>

    <li>Om du vill att en st&ouml;rre eller mindre yta av bilderna ska visas &auml;ndrar du p&aring; v&auml;rdena i <code>&lt;img ... crop=</code></li>

    <li>Filen style.less l&auml;gger du bara in som den &auml;r i samma katalog som filen ligger d&auml;r du nyss 
    klistrade in slideshow-koden.</li>

    <li>&auml;ven filen main.js l&auml;gger du in i samma katalog som i f&ouml;reg&aring;ende steg.</li>

    <li>Ladda upp dina webbplatsfilerna p&aring; en server s&aring; att din webbplats visas i en webbl&auml;sare.</li>

    <li>Om du vill att bilderna ska tona in fortare eller saktare &auml;ndrar du endast en sak i koden i 
    filen main.js. N&auml;stan l&auml;ngst ner i koden st&aring;r det<br />  

    <code class="newRow">$(this).slideshowInit({'duration':22000});</code><br />

    Byt ut <code>22000</code> till ett l&auml;gre v&auml;rde om du vill att bilderna ska tona in fortare. Om du &ouml;nskar att 
    bilderna ska tona in l&aring;ngsammare s&auml;tter du ett h&ouml;gre v&auml;rde.</li>
  </ol>  
-->