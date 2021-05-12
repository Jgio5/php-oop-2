<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        ini_set('display_errors', 1);

        require_once 'User.php';

        //utente 1 
        $utente1 = new User();

        echo "Nickname: " . $utente1->nickname = "Jgio5";
        echo "<br>";
        echo "Img: " . $utente1->image = "img Gio";
        echo "<br>";
        echo "Tipo di membro: " . $utente1->setMember(3);
        echo "<br>";
        echo "Email: " . $utente1->setEmail('giorgio@gmail.com');
        echo "<br>";
        echo "Numero post: " .  $utente1->n_post = 20;
        echo "<br>";
        echo "Livello: " . $utente1->setType(20);
        echo "<br>";
        echo "Status: " . $utente1->status = "Disponibile";
        echo "<br>";

        var_dump($utente1);

        //utente 2
        $utente2 = new User();

        $utente2->nickname = "Tetrapiz";
        $utente2->image = "img Tetra";
        $utente2->setMember(8);
        $utente2->setEmail('tetra@gmail.com');
        $utente2->n_post = 10;
        $utente2->setType(10);
        $utente2->status = "Offline";

        var_dump($utente2);

        //utente 3
        $utente3 = new User();

        $utente3->nickname = "Bongo";
        $utente3->image = "img Bongo";
        $utente3->setMember(1);
        $utente3->setEmail('bongo@gmail.com');
        $utente3->n_post = 50;
        $utente3->setType(1);
        $utente3->status = "Silenzioso";

        var_dump($utente3);
    ?>  

</body>
</html>