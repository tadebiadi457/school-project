 <?php
function get_random_number($min, $max) {
    $randomNumber = mt_rand($min, $max);
    echo $randomNumber;
}

get_random_number(1, 10); ?>