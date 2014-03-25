<!DOCTYPE html>
<html>
	<head>
		<title>Lipsum Generator Test</title>
	</head>
	<body>
		<pre>
<?php
	require_once './LipsumGenerator.php';
	$lg = new com\grandt\php\LipsumGenerator();

	echo "\r\n** Between 300 and 1000 words. **\n";
	echo "Chapter 1\r\n\r\n" . $lg->generate(300, 1000) . "\r\n";

	echo "\r\n** Between 50 and 100 words, single paragraph. **\n";
	echo "Chapter 2\r\n\r\n" . $lg->generate(50, 100, FALSE) . "\r\n";

	echo "\r\n** Between 50 and 100 words, multiple paragraphs. Don't start with the default 8 word 'Lorem Ipsum...' **\n";
	echo "Chapter 2\r\n\r\n" . $lg->generate(50, 100, TRUE, FALSE) . "\r\n";
?>
		</pre>
	</body>
</html>
