<?php

// Check if there are any GET arguments
if (!empty($_GET)) {
    // Start the HTML table
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Value</th></tr></thead>";
    echo "<tbody>";

    // Loop through each GET argument and display it in the table
    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No GET arguments found.";
}

?>
