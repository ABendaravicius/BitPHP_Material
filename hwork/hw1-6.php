<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "ARNAS";
        $date = 20201006;

        echo <<<EOT
        <h1>Heading</h1>
        <p>
        Lorem ipsum dolor sit amet $name consectetur adipisicing elit.
        Est nihil aliquam autem magni? Autem maxime, nam minus iusto
        neque sequi molestias non eveniet consequuntur iste reiciendis
        atque ad ab sunt. Architecto $date quidem quibusdam magni ut provident,
        necessitatibus voluptatibus iusto qui cum quis porro dolore ametesse,
        tempore voluptate reiciendis facere.
        </p>
        EOT;
    ?>
</body>
</html>