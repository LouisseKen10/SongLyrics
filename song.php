<?php 

$title = "One and Only You";
$artist = "Parokya Ni Edgar";
$mood = "romantic";

$verseCount = 2;
$chorusCount = 2;
$totalSongSelection = $verseCount + $chorusCount + "1"; //Incorporated the numeric operations by counting how many total selections are in the song. Used "1" to incoprorate my first type juggling which is the count of the bridge
$sectionMessage = "The total selection of the song is: " . $totalSongSelection; //Type juggling by combining string and integer together

//two numeric operation which is + and =
//two type juggling , the "1" and the sectionMessage by combining string and integer together

//(Nouns, Verbs, and Adjectives)
$nouns = ["look", "smile", "heart", "life", "step", "you", "fact"];
$verbs = ["take", "find", "revived", "complain", "know"];
$adjectives = ["one", "only", "easy", "mine", "yours"];



// Store the song's verses and chorus in arrays and later on will be used to display
$verse1 = [
    "It took one " . $nouns[0] . " and forever lay out in front of me,",
    "One " . $nouns[1] . ", then I die, only to be " . $verbs[2] . " by " . $nouns[5] . ",",
    "There I was, thought I had everything figured out,",
    "Goes to show just how much I " . $verbs[4] . " 'bout the way " . $nouns[3] . " plays out."
];

$chorus = [
    "I " . $verbs[0] . " one " . $nouns[4] . " away,",
    "Then I " . $verbs[1] . " myself coming back to " . $nouns[5] . ",",
    "My " . $adjectives[0] . " and " . $adjectives[1] . ",",
    "One and only " . $nouns[5] . ", ooh-ooh-ooh."
];

$verse2 = [
    "Now I " . $verbs[4] . " that I known not a thing at all,",
    "Except the " . $nouns[6] . " that I am " . $adjectives[4] . ",",
    "And that " . $nouns[5] . " are " . $adjectives[3] . "."
];

$bridge = [
    "Oh, if you told me that this wouldn't be " . $adjectives[2] . ",",
    "And oh, I'm not one to " . $verbs[3] . "."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
</head>
<style>
    body {
      background-image: linear-gradient(
        rgb(0, 0, 0), 
        rgba(0, 0, 0, 0.6)  
    ), 
    url('img/parokya.png');
    background-repeat: no-repeat;
    background-size: cover;     
    background-position: center; 
    text-align: center;
    color: aliceblue;
}
    p {
        font-weight: 100;
        font-size: 15px;  /* optional: makes it cleaner */
    }

    h1, h2, h3 {
        font-size: 25px;
        font-weight: bold;
        color: yellow;
    }
</style>
<body>


<h1><?php echo $title; ?></h1>
<h2>by <?php echo $artist; ?></h2>
<p><em>Mood: <?php echo $mood; ?></em></p>

<!-- This displays each line in the verse using array no. (applies to the others) -->
<h3>Verse 1</h3>
<p><?=$verse1[0]; ?></p>
<p><?=$verse1[1]; ?></p>
<p><?=$verse1[2]; ?></p>
<p><?=$verse1[3]; ?></p>


<h3>Chorus</h3>
<p><?=$chorus[0]; ?></p>
<p><?=$chorus[1]; ?></p>
<p><?=$chorus[2]; ?></p>
<p><?=$chorus[3]; ?></p>


<h3>Verse 2</h3>
<p><?=$verse2[0]; ?></p>
<p><?=$verse2[1]; ?></p>
<p><?=$verse2[2]; ?></p>


<h3>Bridge</h3>
<p><?=$bridge[0]; ?></p>
<p><?=$bridge[1]; ?></p>


<h3>Chorus</h3>
<p><?=$chorus[0]; ?></p>
<p><?=$chorus[1]; ?></p>
<p><?=$chorus[2]; ?></p>
<p><?=$chorus[3]; ?></p>
<p><?=$chorus[0]; ?></p>
<p><?=$chorus[1]; ?></p>
<p><?=$chorus[2]; ?></p>
<p><?=$chorus[3]; ?></p>

<!-- This displays the song desriptions-->
<h2>Song Description</h2>
<p><?= $sectionMessage; ?></p> 

</body>
</html>
