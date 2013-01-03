<?php $title='Slideshow - &auml;ndra bilder, hastighet, toningar<'; include('header.php'); ?>


	<h1>S&aring; &auml;ndrar du bilder och hastighet</h1>
	
	<div id="text">
		<ol>	
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
  

<?php include('footer.php'); ?>