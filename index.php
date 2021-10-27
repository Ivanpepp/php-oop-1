<!-- Descrizione:
Oggi pomeriggio ripassate i primi concetti di classe e di
 variabili e metodi d'istanza che abbiamo visto stamattina e 
 create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili 
d'istanza (attributi, o proprietà)
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a 
schermo i valori delle relative proprietà -->

<?php

/**
 * object that contains features of a film
 */
class Movie
{
    public $id;
    public $name;
    public $date;
    public $country;
    public $direction;
    public $actors;
    public $duration;
    public $type;

    /**
     * function return date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * function return date
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * function return date
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * instance of a movie
     *
     * @param int $id
     * @param string $name
     * @param string $date
     * @param string $country
     * @param string $direction
     * @param string $actors
     * @param int $duration
     * @param string $type
     * @param string $path
     */
    function __construct($id, $name, $date, $country, $direction, $actors, $duration, $type, $path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->country = $country;
        $this->direction = $direction;
        $this->actors = $actors;
        $this->duration = $duration;
        $this->type = $type;
        $this->path = $path;
    }
}

$venom = new Movie(347, 'Venom: Let There Be Carnage', '01-01-2021', 'USA', 'Andy Serkis', 'Tom Hardy, Woody Harrelson, Michelle Williams, Naomie Harris, Stephen Graham, Reid Scott, Peggy Lu', 90, 'Action', 'https://pad.mymovies.it/filmclub/2019/08/028/locandinapg2.jpg');
$bond = new Movie(235, '007 - No Time to Die(2021)', '05-01-2021', 'USA', 'Cary Fukunaga', 'Daniel Craig, Naomie Harris, Lashana Lynch, Léa Seydoux, Ana de Armas, Dali Benssalah, David Dencik, Ralph Fiennes, Rory Kinnear, Billy Magnussen, Jeffrey Wright, Rami Malek, Ben Whishaw', 90, 'Action/Adventure', 'https://i0.wp.com/cb01.uno/wp-content/uploads/2021/10/iUgygt3fscRoKWCV1d0C7FbM9TP-scaled.jpg');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="my-view">
            <div class="flex">
                <div class="flex-element">
                    <img src="<?= $venom->path; ?>" alt="<?= $venom->name; ?>">
                    <p>Name: <?= $venom->name; ?></p>
                    <p>Date: <?= $venom->getDate(); ?></p>
                    <p>Country: <?= $venom->getCountry(); ?></p>
                    <p>Direction: <?= $venom->direction; ?></p>
                    <p>Actors: <?= $venom->actors; ?></p>
                    <p>Duration: <?= $venom->getDuration(); ?></p>
                </div>
                <div class="flex-element">
                    <img src="<?= $bond->path; ?>" alt="<?= $bond->name; ?>">
                    <p>Name: <?= $bond->name; ?></p>
                    <p>Date: <?= $bond->getDate(); ?></p>
                    <p>Country: <?= $bond->getCountry(); ?></p>
                    <p>Direction: <?= $bond->direction; ?></p>
                    <p>Actors: <?= $bond->actors; ?></p>
                    <p>Duration: <?= $bond->getDuration(); ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>

</body>

</html>