<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array Beni Akbar XII RPL 3</h1>

    <?php
    echo "<h3> Soal 1 <br> Mengelompokkan nama-nama kids dan adults kedalam array</h3>";
    echo " kids = array(Mike, Dustin, Will, Lucas, Max, Eleven); <br>
    adults = array(Hopper, Nancy, Joyce, Jonathan, Murray); ";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: 11";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0]</li>";
    echo "<li> $kids[1]</li>";
    echo "<li> $kids[2]</li>";
    echo "<li> $kids[3]</li>";
    echo "<li> $kids[4]</li>";
    echo "<li> $kids[5]</li>";
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: 5"; // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "<h3> Soal 3</h3>";
    $cars = array(
        array("Will Byers", 12, "Will The Wise", "Alive"),
        array("Mike Wheeler", 12, "Dugeon Master", "Alive"),
        array("Jim Hopper", 43, "Chief Hopper", "Deceased"),
        array("Eleven", 12, "E1", "Alive")
    );

    echo "[0] => Array .<br> (" . "<br>" . "[Name] :" . $cars[0][0] . ".<br>" . "[In Age] : " . $cars[0][1] . ".<br>" . "[Aliances] : " . $cars[0][2] . ".<br>" . "[Status] : " . $cars[0][3] . "<br> )" .  "<br>" . "<br>";
    echo "[1] => Array .<br> (" . "<br>" . "[Name] :" . $cars[1][0] . ".<br>" . "[In Age] : " . $cars[1][1] . ".<br>" . "[Aliances] : " . $cars[1][2] . ".<br>" . "[Status] : " . $cars[1][3] . "<br> )" .  "<br>" . "<br>";
    echo "[2] => Array .<br> (" . "<br>" . "[Name] :" . $cars[2][0] . ".<br>" . "[In Age] : " . $cars[2][1] . ".<br>" . "[Aliances] : " . $cars[2][2] . ".<br>" . "[Status] : " . $cars[2][3] . "<br> )" .  "<br>" . "<br>";
    echo "[3] => Array .<br> (" . "<br>" . "[Name] :" . $cars[3][0] . ".<br>" . "[In Age] : " . $cars[3][1] . ".<br>" . "[Aliances] : " . $cars[3][2] . ".<br>" . "[Status] : " . $cars[3][3] . "<br> )" .  "<br>" . "<br>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
*/
    /*
            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */
    ?>
</body>

</html>