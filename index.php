<html>

<head>
    <title>Hello...</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <?php echo "<h1>Hola Mundo UNAM</h1>"; ?>

        <?php

        $conn = mysqli_connect($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], "information_schema");

        $query = 'SELECT * From KEYWORDS LIMIT 5;';
        $result = mysqli_query($conn, $query);
        echo '<table class="table table-striped">';
        echo '<thead><tr><th></th><th>WORD</th><th>RESERVED</th></tr></thead>';
        while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr>';
            echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }

            echo '</tr>';
        }
        echo '</table>';

        $result->close();

        mysqli_close($conn);

        ?>
    </div>
</body>

</html>
