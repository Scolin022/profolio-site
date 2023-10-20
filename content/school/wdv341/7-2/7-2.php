<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .eventBox {
            border:thin solid black;
            margin-bottom:20px;
        }

        .boldEvent {
            font-weight:bold;
        }

    </style>
</head>
<body>
    <h1>Select One Event</h1>
    <?php
        // Step 1
        include 'dbConnect.php';

        // Step 2
        $eventId = 3; // Hardcoded event number for testing
        $stmt = $pdo->prepare("SELECT events_name,events_description FROM wdv341_events WHERE event_id = :eventId");
        $stmt->bindParam(':eventId', $eventId, PDO::PARAM_INT);

        // step 3
        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                // Step 5
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // Step 6
                    echo '<table border="1">';
                    echo '<tr>';
                    foreach ($row as $key => $value) {
                        echo '<th>' . $key . '</th>';
                    }
                    echo '</tr>';
                    echo '<tr>';
                    foreach ($row as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                    echo '</table>';
                }
            } else {
                echo "No event found with ID: $eventId";
            }
        } catch (PDOException $e) {
            // check for errors
            echo "Error: " . $e->getMessage();
        }
    ?>
</body>
</html>