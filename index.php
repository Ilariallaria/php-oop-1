<!-- create un file index.php in cui:
OK- è definita una classe ‘Movie’ 
OK => all'interno della classe sono dichiarate delle variabili d'istanza
OK  => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php 

class Movie{

    public $title;
    public $duration;
    public $genre;
    public $director = 'Unknow';
    public $year;

    public function __construct($_title, $_duration, $_genre){
        $this-> title =  $_title;
        $this-> duration =  $_duration;
        $this-> genre =  $_genre;
    }

    public function FoundAnimeMovie(){
        if($this->genre != 'Anime'){
            return 'is not an Anime movie';
        }else{
            return 'is Anime movie';
        }
    }
    
};

$ritorno_al_futuro = new Movie('Ritorno al Futuro', '1h 40m', 'Fantascienza');
$ritorno_al_futuro->title = 'Ritorno al Futuro';
$ritorno_al_futuro->duration = '1h 40m';
$ritorno_al_futuro->genre = 'Fantascienza'; 
$ritorno_al_futuro->director = 'Robert Zemeckis';

var_dump ($ritorno_al_futuro);
// echo ($ritorno_al_futuro-> FoundAnimeMovie());

$die_hard = new Movie('Die Hard', '1h 45m', 'Azione');
$die_hard->title = 'Die Hard';
$die_hard->duration = '1h 45m';
$die_hard->genre = 'Azione';

var_dump ($die_hard);
// echo ($die_hard-> FoundAnimeMovie());


$ponyo_sulla_scogliera = new Movie('Ponyo sulla scogliera', '1h 41m','Anime');
$ponyo_sulla_scogliera->director = 'Hayao Miyazaki';
$ponyo_sulla_scogliera->year = '2008';

var_dump ($ponyo_sulla_scogliera);
// echo ($ponyo_sulla_scogliera-> FoundAnimeMovie());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Film List:</h1>
        <ul>
            <li>
                <h3><?php echo ($ritorno_al_futuro->title) ?></h3>
                <div><?php echo $ritorno_al_futuro->FoundAnimeMovie()?></div>
            </li>
            <li>
                <h3><?php echo ($die_hard->title) ?></h3>
                <div><?php echo $die_hard->FoundAnimeMovie()?></div>
            </li>
            <li>
                <h3><?php echo ($ponyo_sulla_scogliera->title) ?></h3>
                <div><?php echo $ponyo_sulla_scogliera->FoundAnimeMovie()?></div>
            </li>
        </ul>
    </main>
</body>
</html>