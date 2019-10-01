<?php
// PHP - Random Quote Generator
// I'm going for an Exceeds Expectations grade.
// $quotes is a multidimentional array filled with 7 associatave arrays.

$quotes = [
    [
      'quote' => 'I’m fine. Well, I’m not fine – I’m here.',
      'source' => 'Ned Vizzini',
      'citation' => 'It’s Kind of a Funny Story',
      'year' => '2006',
      'tags' => 'Humor'
    ],

    [
      'quote' => 'It’s hard to be a friend to someone who’s depressed, but it is one of the kindest, noblest, and best things you will ever do.',
      'source' => 'Stephen Fry',
      'citation' => '',
      'year' => '',
      'tags' => 'Quote'
    ],

    [
      'quote' => 'There is no point treating a depressed person as though she were just feeling sad, saying, ‘There now, hang on, you’ll get over it.’ Sadness is more or less like a head cold – with patience, it passes. Depression is like cancer.',
      'source' => 'Barbara Kingsolver',
      'citation' => 'The Bean Trees',
      'year' => '1988',
      'tags' => 'Book'
    ],

    [
      'quote' => 'Mental pain is less dramatic than physical pain, but it is more common and also more hard to bear. The frequent attempt to conceal mental pain increases the burden: it is easier to say "My tooth is aching" than to say "My heart is broken".',
      'source' => 'C.S. Lewis',
      'citation' => 'The Problem of Pain',
      'year' => '1940',
      'tags' => 'Book'
    ],

    [
      'quote' => 'That is all I want in life: for this pain to seem purposeful.',
      'source' => 'Elizabeth Wurtzel',
      'citation' => 'Prozac Nation',
      'year' => '1994',
      'tags' => 'Book'
    ],

    [
      'quote' => 'That very deadened feeling, which is so very different from feeling sad. Sad hurts but it’s a healthy feeling. It is a necessary thing to feel. Depression is very different.',
      'source' => 'J.K. Rowling',
      'citation' => '',
      'year' => '',
      'tags' => 'Quote'
    ],

    [
      'quote' => 'There are better things ahead than any we leave behind.',
      'source' => 'C. S. Lewis',
      'citation' => 'Letters to an American Lady',
      'year' => '1950',
      'tags' => 'Book'
    ]
];


// This function generates a random number between 0 and 6 and assigns it to the variable $randnum.
// Then it returns $quotes[$randnum] pulling an array based on that random number.

function getRandomQuote(){
  global $quotes;
  $randnum = rand (0, 6);
  return $quotes[$randnum];
}


// printQuote function takes the return of getRandom Quotes, assigns it to a variable and writes
// the html code to place the quote, source, citation and year (if citation and year exist).


function printQuote() {
  $random_quote = getRandomQuote();
    echo "<p class=\"quote\">" . $random_quote["quote"] . "</p>\n";
    echo "      <p class=\"source\">" . $random_quote["source"] . "</span>";

    if($random_quote["citation"]){
        echo "<class=\"citation\">, " . $random_quote["citation"] . "</span>";
      }

      if($random_quote["year"] > 1){
        echo "<span class=\"year\">" . $random_quote["year"] . "</span>";
      }

      if($random_quote["tags"] == "Humor" || $random_quote["tags"] == "Quote"){
        echo " <span class=\"tags\"> (" . $random_quote["tags"] . ")</span></p>";
      } else {
        echo "</p>";
      }
}
// I'm going for an Exceeds Expectations grade.
// This function creates an array of colors, then chooses a random number and chooses the color associated with that number.

function changeColor() {
  $colors = array('Peru', 'Coral', 'Teal', 'Olive', 'Dimgray', 'Darkkhaki');
  $num = rand (0, 5);
  return $colors[$num];
}
// I'm going for an Exceeds Expectations grade.
// This function takes the return from changeColor() and assigns it to a varaible which is then used in the <body> tag in the index file.

function printColor() {
  $bg = changeColor();
  echo $bg;
}
?>
