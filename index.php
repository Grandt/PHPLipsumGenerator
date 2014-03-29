<!DOCTYPE html>
<html>
	<head>
		<title>Lipsum Generator Test</title>
	</head>
	<body>
		<h1>Lipsum Generator Test</h1>
		<?php
			error_reporting(E_ALL | E_STRICT);
			ini_set('error_reporting', E_ALL | E_STRICT);
			ini_set('display_errors', 1);

			require_once './LipsumGenerator.php';
			$lg = new com\grandt\php\LipsumGenerator();
		?>
		<p><strong>Between 300 and 1000 words:</strong></p>
		<pre><?= $lg->generate(300, 1000) ?></pre>

		<p><strong>Between 50 and 100 words, single paragraph:</strong></p>
		<pre><?= $lg->generate(50, 100, FALSE) ?></pre>

		<p><strong>Between 50 and 100 words, multiple paragraphs. Don't start with the default 8 word 'Lorem Ipsum...':</strong></p>
		<pre><?= $lg->generate(50, 100, TRUE, FALSE) ?></pre>

		<p><strong>Between 50 and 100 words, multiple paragraphs. Don't start with the default 8 word 'Lorem Ipsum...', as HTML Paragraphs:</strong></p>
		<div style="background-color: #ddd; border: 1px solid black;">
<?= $lg->generateHTML(50, 100, TRUE, FALSE) ?>
		</div>
	</body>
</html>
