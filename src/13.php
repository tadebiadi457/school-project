
<?php
function getRandomColor() {
    $colors = array(
        'red', 'green', 'blue', 'yellow', 'orange', 'purple', 'pink'
    );
    return $colors[array_rand($colors)];
}
?>