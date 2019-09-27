<?php

$quotes

$quote1 = array(
  "quote" => "There are wounds that never show on the body that are deeper and more hurtful than anything that bleeds.",
  "source" => "Laurell K. Hamilton",
  "citation" => "Mistral’s Kiss",
  "year" => "2006"
);

$quote2 = array(
  "quote" => "It’s hard to be a friend to someone who’s depressed, but it is one of the kindest, noblest, and best things you will ever do.",
  "source" => "Stephen Fry",
  "citation" => "",
  "year" => ""
);

$quote3 = array(
  "quote" => "There is no point treating a depressed person as though she were just feeling sad, saying, ‘There now, hang on, you’ll get over it.’ Sadness is more or less like a head cold – with patience, it passes. Depression is like cancer.",
  "source" => "Barbara Kingsolver",
  "citation" => "The Bean Trees",
  "year" => "1988"
);

$quote4 = array(
  "quote" => "Mental pain is less dramatic than physical pain, but it is more common and also more hard to bear. The frequent attempt to conceal mental pain increases the burden: it is easier to say \“My tooth is aching\” than to say \“My heart is broken.\”",
  "source" => "C.S. Lewis",
  "citation" => "The Problem of Pain",
  "year" => "1940"
);

$quote5 = array(
  "quote" => "That is all I want in life: for this pain to seem purposeful.",
  "source" => "Elizabeth Wurtzel",
  "citation" => "Prozac Nation",
  "year" => "1994"
);

$quote6 = array(
  "quote" => "That very deadened feeling, which is so very different from feeling sad. Sad hurts but it’s a healthy feeling. It is a necessary thing to feel. Depression is very different.",
  "source" => "J.K. Rowling",
  "citation" => "",
  "year" => ""
);

$quote7 = array(
  "quote" => "There are better things ahead than any we leave behind.",
  "source" => "C. S. Lewis",
  "citation" => "Letters to an American Lady",
  "year" => "1950"
);

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
?>
