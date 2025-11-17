<?php
$title = "Black Dress";
$artist = "PUBLIC STATIC";
$mood = "Melancholy";

$nouns = ['Day', 'Pain', 'Canvas', 'Unique', 'Other', "I'm", 'Love', 'Mind', 'Dress',
          'Night', 'Hand', 'Beauty', 'Heart', 'Art', 'Doubt', 'My', 'You'];

$verbs = ['make','stay','take','saw','seeing','smile','got','stuck','wanna','know','go',
          'falling','supposed','do','care','give','existed','standing','ask','hold','tell',
          'feeling','see','die','over-complicate','putting','fake'];

$verse1 = $nouns[0] . " by " . $nouns[0] . "\n" .
          "you " . $verbs[0] . " me " . $verbs[8] . " " . $verbs[1] . "\n" .
          "here all " . $nouns[0] . "\n" .
          "you " . $verbs[2] . " the " . $nouns[1] . " away\n" .
          "\n" .
          ucfirst($verbs[4]) . " you " . $verbs[5] . "\n" .
          "through your eyes\n" .
          "I " . $verbs[6] . " " . $nouns[16] . "\n" .
          $verbs[7] . " on my " . $nouns[7] . "\n";

$prechorus1 = "You're a " . $nouns[2] . " with empty spaces\n" .
               "You're " . $nouns[11] . " is " . $nouns[3] . " among the " . $nouns[4] . " faces\n" .
               "all I " . $verbs[8] . " " . $verbs[9] . "\n" .
               "is where you " . $verbs[8] . " " . $verbs[10] . "\n";

$chorus = "I think " . $verbs[11] . " I'm " . $verbs[11] . " in " . $nouns[6] . " with " . $nouns[16] . "\n" .
          "what am I " . $verbs[12] . " to " . $verbs[13] . "\n" .
          "my " . $nouns[7] . "'s a mess\n" .
          "until I " . $verbs[3] . " you in that " . $nouns[8] . "\n" .
          "I don't " . $verbs[14] . " about\n" .
          "if they will " . $verbs[15] . " a " . $nouns[14] . "\n" .
          "you're an empty piece of " . $nouns[13] . "\n" .
          "that " . $verbs[16] . ", only in my beating " . $nouns[12] . "\n";

$verse2 = "Seeing you there\n" .
          $verbs[17] . " in that black " . $nouns[8] . "\n" .
          $verbs[0] . "s me " . $verbs[8] . " " . $verbs[18] . "\n" .
          $nouns[16] . " for a dance\n" .
          "\n" .
          "I " . $verbs[8] . " " . $verbs[19] . " your " . $nouns[10] . "\n" .
          "through the " . $nouns[9] . "\n" .
          "and " . $verbs[20] . " you\n" .
          "what " . $nouns[5] . " " . $verbs[21] . " inside\n";

$prechorus2 = "'Don't " . $verbs[8] . " " . $verbs[22] . " you with another guy\n" .
               "I get the " . $verbs[21] . " that I might " . $verbs[23] . " inside\n" .
               "all I " . $verbs[8] . " " . $verbs[9] . "\n" .
               "is where you " . $verbs[8] . " " . $verbs[10] . "\n";

$bridge = "Maybe I " . $verbs[24] . " it\n" .
          $verbs[25] . " up a " . $verbs[5] . "\n" .
          "though I have to " . $verbs[26] . " it\n" .
          "darling where'd " . $nouns[16] . " " . $verbs[10] . "\n" .
          "I just " . $verbs[8] . " " . $verbs[9] . "\n";

$verseCount = 2;
$repeatChorus = 3;
$repeatPreChorus = 2;
$bridgeCount = 1;
$totalStanzas = $verseCount + $repeatChorus + $bridgeCount + $repeatPreChorus;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LYRICS</title>
    <style>
        body {
            font-family: "Courier New", Courier, monospace;
            background-color: rgb(4, 104, 235);
            color: rgb(219, 235, 0);
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: lightblue;
        }
        h2 {
            color: lightblue;
        }
        p {
            line-height: 1.5;
            color: rgb(255, 255, 255);
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $artist; ?></h2>
    <p><strong>Mood:</strong> <?php echo $mood; ?></p>
    <p>Verse 1:<br><?php echo $verse1; ?></p>
    <p>Pre-Chorus 1:<br><?php echo $prechorus1; ?></p>
    <p>Chorus:<br><?php echo $chorus; ?></p>
    <p>Verse 2:<br><?php echo $verse2; ?></p>
    <p>Pre-Chorus 2:<br><?php echo $prechorus2; ?></p>
    <p>Chorus:<br><?php echo $chorus; ?></p>
    <p>Bridge:<br><?php echo $bridge; ?></p>
    <p>Chorus:<br><?php echo $chorus; ?></p>
    <p><strong>Total Stanzas:</strong> <?php echo $totalStanzas; ?></p>
</body>
</html>