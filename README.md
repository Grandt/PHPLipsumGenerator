PHPLipsumGenerator
==================

Create garbled, non repetitive "chapters" using the standard Lorem Ipsum text as a basis.


## License
LGPL 2.1

### Guide

The intention is to help debug or test text input, by being quickly able to generate vast amounts of non predictable text. 

The user can set the source text to something different than the original Latin Lorem text, if desired.

To use the class, simply call generate with these parameters, all of which are optional:

* $minWordCount (integer)
  Default: 200.
* $maxWordCount (integer)
  Default: 2000.
* $useMultipleParagraphs (boolean)
  Generate a text with multiple paragraphs.
  Default: TRUE. 
* $startWithLorem (boolean)
  Will start each chapter with the text "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", the length of which is subtracted from the $minWordCount. Used to help identify the place holder text for what it really is.
  Default: TRUE.
* $indent (String)
  Indentation of each new paragraph in the generated text.
  Default: "  " (two spaces).
* $eol (String)
  End of line sequence.
  Default: The Windows new line sequence ("\r\n").

generateHTML is a convenience method, identical to generate, but where $indent="&lt;p&gt;" and $eol="&lt;/p&gt;\r\n".