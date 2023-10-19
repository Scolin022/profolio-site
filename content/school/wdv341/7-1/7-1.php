<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Select Event Practice</title>
    <style>
        .flex-table {
            display: flex;
            flex-direction: column;
        }

        .flex-row {
            display: flex;
        }

        .flex-cell {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <?php
        include 'dbConnect.php';

        $stmt = $pdo->prepare("SELECT events_name,events_description FROM wdv341_events");

        try {
            $stmt->execute();
            $results = $stmt->fetchAll();
            if (!$results) {
                $message = "No events found in the table.";
            }
        } catch (PDOException $e) {
            $message = "Error: " . $e->getMessage();
        }

        $output = "<div class='flex-table'>";
        $output .= "<div class='flex-row'>";
        $output .= "<div class='flex-cell'>Event Name</div>";
        $output .= "<div class='flex-cell'>Event Description</div>";
        $output .= "</div>";
        
        foreach ($results as $row) {
            $output .= "<div class='flex-row'>";
            $output .= "<div class='flex-cell'>" . htmlspecialchars($row['events_name']) . "</div>";
            $output .= "<div class='flex-cell'>" . htmlspecialchars($row['events_description']) . "</div>";
            $output .= "</div>";
        }
        $output .= "</div>";

        echo isset($message) ? $message : $output;
    ?>
</body>
</html>