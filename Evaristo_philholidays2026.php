<?php include 'header.php'; ?>


<?php
$national_holidays = [
    ["New Year's Day", new DateTime("2026-01-01"), "", "one", "images/New Year.jpeg"],
    ["Maundy Thursday", new DateTime("2026-04-02"), "", "two", "images/Maundy.jpg"],
    ["Araw ng Kagitingan", new DateTime("2026-04-09"), "", "three", "images/kagitingan.jpg"],
    ["Labor Day", new DateTime("2026-05-01"), "", "four", "images/Labor.jpg"],
    ["Independence Day", new DateTime("2026-06-12"), "", "one", "images/Independence.jpg"],
    ["National Heroes Day", new DateTime("2026-08-31"), "", "two", "images/National.jpg"],
    ["Bonifacio Day", new DateTime("2026-11-30"), "", "three", "images/Bonifacio.jpg"],
    ["Christmas Day", new DateTime("2026-12-25"), "", "four", "images/Christmas.jpg"],
    ["Rizal Day", new DateTime("2026-12-30"), "", "one", "images/Rizal.jpg"]
];

$local_holidays = [
    ["Pinatubo Day", new DateTime("2026-06-15"), "", "two", "images/Pinatubo.jpg"],
    ["Pampanga Day", new DateTime("2026-12-11"), "", "three", "images/pampanga.jpg"],
    ["Fiestang Apung Mamacalulu", new DateTime("2026-08-30"), "", "two", "images/Apung.jpg"]
];


foreach ($national_holidays as $holiday) {
    holidayCardFormat($holiday);
}

echo '<div class="section-title">Local Holidays</div>'; 

foreach ($local_holidays as $holiday) {
    holidayCardFormat($holiday);
}

function holidayCardFormat($holiday) {
    $date = $holiday[1];
    $format1 = $date->format('D jS F Y');          
    
    echo '
    <div class="card-wrap">
        <div class="card-header '.$holiday[3].'">
            <i class="'.$holiday[2].'"></i>
        </div>
        <div class="card-image-placeholder">
            <img src="'.$holiday[4].'" alt="'.$holiday[0].'">
        </div>
        <div class="card-content">
            <h1 class="card-title">'.$holiday[0].'</h1>
            <p class="card-text"><strong>Day/ Month/ Year:</strong> '.$format1.'</p>
        </div>
    </div>';
}
?>
<?php include 'footer.php'; ?>

