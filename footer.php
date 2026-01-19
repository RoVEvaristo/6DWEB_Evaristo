<?php
function getThatTimeZone($timezone) {
    $tz = new DateTime('now', new DateTimeZone($timezone));
    return $tz->format('h:i:s A');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Timezones</title>
    <link rel="stylesheet" href="css/Styles.css">
</head>
<body>
    <footer class="footer">
        <section class="timezones">
            <div class="timezone">
                <div class="timezone-name">Manila, Philippines</div>
                <div class="timezone-time"><?php echo getThatTimeZone('Asia/Manila'); ?></div>
            </div>
            <div class="timezone">
                <div class="timezone-name">New York, USA</div>
                <div class="timezone-time"><?php echo getThatTimeZone('America/New_York'); ?></div>
            </div>
            <div class="timezone">
                <div class="timezone-name">London, UK</div>
                <div class="timezone-time"><?php echo getThatTimeZone('Europe/London'); ?></div>
            </div>
        </section>
        <div class = "copyright">&copy; Created by: EVARISTO RAINIER ROWAN D.</span></div>
    </footer>
</body>
</html>