<?php

$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";

$running = true;

while ($running) {
    echo "\n--- Contact Management App ---\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";
    $choice = trim(fgets(STDIN));
}