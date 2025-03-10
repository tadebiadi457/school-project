function getRandomInt($min, $max) {
    $random = mt_rand() / mt_getrandmax();
    $random *= $max - $min;
    $random += $min;
    return (int) $random;
}
