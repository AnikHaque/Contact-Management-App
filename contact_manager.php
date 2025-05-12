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

    if ($choice === "1") {
        // Contact add logic
        if ($contact1_name !== "" && $contact2_name !== "") {
            echo "You can only add up to 2 contacts.\n";
        } else {
            echo "Enter Name: ";
            $name = trim(fgets(STDIN));
            echo "Enter Phone Number: ";
            $phone = trim(fgets(STDIN));

            if ($contact1_name === "") {
                $contact1_name = $name;
                $contact1_phone = $phone;
                echo "Contact 1 saved.\n";
            } else {
                $contact2_name = $name;
                $contact2_phone = $phone;
                echo "Contact 2 saved.\n";
            }
        }

    }
}