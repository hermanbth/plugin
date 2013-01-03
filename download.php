<?php $title='Slideshow - ladda ner och installera'; include('header.php'); ?>


  <h1>S&aring; laddar du ner och installerar den</h1>

  <div id="text">
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
	</ol>


<?php include('footer.php'); ?>