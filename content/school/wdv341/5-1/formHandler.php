<?php
$firstName = $_POST['first_name'];
$academicStanding = $_POST['academic_standing'];
$selectedMajor = $_POST['selected_major'];
$emailAddress = $_POST['email'];

// check checkboxes
if (isset($_POST['Receiving program information.'])) {
	$contactUser = $_POST['Receiving program information.'];
}

if (isset($_POST['Contacting a program advisor.'])) {
	$userWillContact = $_POST['Contacting a program advisor.'];
}

$comments = $_POST['additional_comments'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="basic html and php form handler">
	<meta name="author" content="Samantha Colin">
	<title>WDV101 Basic Form Handler Example</title>
	<style>
        body, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            font-size: 16px;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            background-color: #fff;
            margin: 40px auto;
            padding: 20px 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        b {
            color: #2c3e50;
        }
    </style>
</head>
<body>
	<p>Dear <b><?php echo $firstName; ?></b>,</p>
	<p>Thank you for your interest in DMACC.</p>
	<p>We have you listed as a <b><?php echo $academicStanding; ?></b> starting this fall.</p>
	<p>You have declared <b><?php echo $selectedMajor; ?></b> as your major.</p>
	<p>Based upon your responses, we will provide the following information in our confirmation email to you at <b><?php echo $emailAddress; ?></b>.</p>

	<?php if (isset($contactUser)): ?>
		<p><b><?php echo $contactUser; ?></b></p>
	<?php endif; ?>

	<?php if (isset($userWillContact)): ?>
		<p><b><?php echo $userWillContact; ?></b></p>
	<?php endif; ?>

	<?php if (!empty($comments)) {
    echo "<p>You have shared the following comments which we will review:</p>";
    echo "<p><b>" . $comments . "</b></p>";
	} ?>
</body>
</html>