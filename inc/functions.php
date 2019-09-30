// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

// Build associative arrays for each quote inside a Multidimensional array using shortcode
$quotes = [
    [
      'quote' => 'I’m fine. Well, I’m not fine – I’m here.',
      'source' => 'Ned Vizzini',
      'citation' => 'It’s Kind of a Funny Story',
      'year' => '2006'
    ],

    [
      'quote' => 'It’s hard to be a friend to someone who’s depressed, but it is one of the kindest, noblest, and best things you will ever do.',
      'source' => 'Stephen Fry',
      'citation' => '',
      'year' => ''
    ],

    [
      'quote' => 'There is no point treating a depressed person as though she were just feeling sad, saying, ‘There now, hang on, you’ll get over it.’ Sadness is more or less like a head cold – with patience, it passes. Depression is like cancer.',
      'source' => 'Barbara Kingsolver',
      'citation' => 'The Bean Trees',
      'year' => '1988'
    ],

    [
      'quote' => 'Mental pain is less dramatic than physical pain, but it is more common and also more hard to bear. The frequent attempt to conceal mental pain increases the burden: it is easier to say "My tooth is aching" than to say "My heart is broken".',
      'source' => 'C.S. Lewis',
      'citation' => 'The Problem of Pain',
      'year' => '1940'
    ],

    [
      'quote' => 'That is all I want in life: for this pain to seem purposeful.',
      'source' => 'Elizabeth Wurtzel',
      'citation' => 'Prozac Nation',
      'year' => '1994'
    ],

    [
      'quote' => 'That very deadened feeling, which is so very different from feeling sad. Sad hurts but it’s a healthy feeling. It is a necessary thing to feel. Depression is very different.',
      'source' => 'J.K. Rowling',
      'citation' => '',
      'year' => ''
    ],

    [
      'quote' => "There are better things ahead than any we leave behind.",
      'source' => 'C. S. Lewis',
      'citation' => 'Letters to an American Lady',
      'year' => '1950'
    ]
];


// This function generates a random number between 0 and 6 and assigns it to the variable $randnum. Then it returns $quotes[$randnum] pulling a quote from the array by the randomly sellected number.
function getRandomQuote(){
  global $quotes;
  $randnum = rand (0, 6);
  return $quotes[$randnum];
}


// Create the printQuote funtion and name it printQuote
function printQuote() {
  <?php include 'inc/functions.php'; ?>
  $quotes[$randnum]['quote']
  $quotes[$randnum]['source']
  $quotes[$randnum]['citation']
  $quotes[$randnum]['year']
}
