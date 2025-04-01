<?php
function formatDate($date) {
    $parts = explode('-', $date);
    return $parts[2] . '/' . $parts[1] . '/' . $parts[0];
}
?>