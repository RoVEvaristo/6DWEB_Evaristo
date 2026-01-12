<?php
$text = "Holy angel university"; 
$text2 = "Rainier Evaristo";
$text3 = " Panis ka boy! ";
$text4 = "Grabe ka na Janno Gibbs";
$match = preg_match('/Grabe/', $text4);
$split = preg_split('/\s+/', $text4);
$text5 = ['Hello Pogi ', 'Sir! ', 'Idol ', 'Musta ', 'Grabe ba! ', 'Hello sayo ',];
$text_key = array_rand($text5);
$text_value = $text5[$text_key];
$items = ['Guitar', 'Basketball', 'Cellphone', 'Charger', 'Notebook', 'Pen'];
$item_count = count($items);
$essential_items = implode(', ', $items);
$people = ['forename' => 'Rov',
           'surname' => 'Evaristo',
           'age' => 20,
          ];
if (array_key_exists('forename', $people)) {
    $text_value .= $people['forename'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP HTML TABLE</title>
<style>
    body {
        font-family: Arial, sans-serif;
        padding:20px;
    }
    p {
        border: 1px solid white;
        background-color: black;
        color: white;
        border-radius: 2px;
        padding: 5px;
        width: 240px;
    }

    html {
        background-color: Pink; 
    }

    table, tr, td {
        background-color: white;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
       
    }
</style>
</head>
<body>

<p>Changing the Case of Characters</p>
<table>
    <tr>
        <td>Lowercase</td>
        <td><?= strtolower($text) ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?= strtoupper($text) ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?= ucwords($text) ?></td>
    </tr>
</table>

<p>Counting Characters and Words</p>
<table>
    <tr>
        <td>Number of Characters</td>
        <td><?= strlen($text2) ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($text2) ?></td>
    </tr>
</table>

<p>Removing and Replacing Characters</p>
<table>
    <tr>
        <td>Remove whitespaces from left</td>
        <td>[<?= ltrim($text3, ' ') ?>]</td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td>[<?= rtrim($text3, ' ') ?>]</td>
    </tr>
    <tr>
        <td>Remove whitespace from left and right.</td>
        <td>[<?= trim($text3, ' ') ?>]</td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?= str_replace('boy', 'girl', $text3) ?></td>
    </tr>
    <tr>
        <td>String ireplace</td>
        <td><?= str_ireplace('BOY', 'girl', $text3) ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?= str_repeat($text3, 3) ?></td>
    </tr>
</table>
<p>Other Built-in Functions</p>
<table>
    <tr>
        <td>Character Count using mb_strlen</td>
        <td><?= mb_strlen($text4) ?></td>
    </tr>
    <tr>
        <td>First match of Gibbs</td>
        <td><?= strpos($text4, 'Gibbs') ?></td>
    </tr>
    <tr>
        <td>First match of Gibbs mb_strpos</td>
        <td><?= mb_strpos($text4, 'Gibbs') ?></td>
    </tr>
    <tr>
        <td>Text between two positions</td>
        <td><?= substr($text4, 11, 12) ?></td>
    </tr>
    <tr>
        <td>Is "Grabe" found in the sentence?</td>
        <td><?= ($match === 1) ? 'Yes' : 'No' ?></td>
    </tr>
    <tr>
        <th>Parts of the sentence using preg_split</th>
    </tr>
    <?php foreach ($split as $part) { ?>
        <tr>
            <td colspan = "2"><?= $part ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td>Greetings with array rand</td>
        <td><?= $text_value ?></td>
    </tr>
    <tr>
        <td>Number of essential items using count</td>
        <td><?= $item_count ?></td>
    </tr>
    <tr>
        <td>Essential items using implode</td>
        <td><?= $essential_items ?></td>
    </tr>
</table>

</body>
</html>