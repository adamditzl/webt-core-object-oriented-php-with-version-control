
<?php
use src\YouTube;
use src\Vimeo;

require_once 'src/YouTube.php';
require_once 'src/Vimeo.php';
$videos = ''; //defining variable for later use

//creating essentially a map to make the creation of the videos easier in a foreach loop
$youtubes = array(
    "St. Maria Goretti0" => "FjuZJQdEcdg",
    "St. Maria Goretti1" => "FjuZJQdEcdg",
    "St. Maria Goretti2" => "FjuZJQdEcdg",
    "St. Maria Goretti3" => "FjuZJQdEcdg",
    "St. Maria Goretti4" => "FjuZJQdEcdg",
    "St. Maria Goretti5" => "FjuZJQdEcdg",
    "St. Maria Goretti6" => "FjuZJQdEcdg",
    "St. Maria Goretti7" => "FjuZJQdEcdg",
    "St. Maria Goretti8" => "FjuZJQdEcdg"
);
foreach (array_keys($youtubes) as $array_key) { //foreach loop going through map with each of the keys as "$array_key"
    $newVideo = new YouTube($array_key, $youtubes[$array_key]); //each loop creates a YouTube element with the data from the position in the map
    //now using HEREDOC notation
    $video = <<<VIDEO
            <section>
            <p> {$newVideo->getName()}  </p>
            {$newVideo->getHTML()}  
            </section>
VIDEO; //Name of the video displayed and iframe implemented
    $videos .= $video; //adding the part with the HEREDOC notation to previously initialized variable every time at the end of the loop
//variables have to be in curly brackets in
}

//the same as before, just for the vimeo videos
$vimeos = array(
    "Paul the Glanz0" => "296219988",
    "Paul the Glanz1" => "296219988",
    "Paul the Glanz2" => "296219988",
    "Paul the Glanz3" => "296219988",
    "Paul the Glanz4" => "296219988",
    "Paul the Glanz5" => "296219988",
    "Paul the Glanz6" => "296219988",
    "Paul the Glanz7" => "296219988",
    "Paul the Glanz8" => "296219988"
);

foreach (array_keys($vimeos) as $array_key) {
    $newVideo = new Vimeo($array_key, $vimeos[$array_key]);
    $vimeo = <<<VIMEO
    <section>
        <p>{$newVideo->getName()}</p>
        {$newVideo->getHTML()}
    </section>
VIMEO;

    $videos .= $vimeo;

}

//now using HEREDOC notation to create the template of the website
//as everything is now in $videos the variable can be called in article
$template = <<<TEMPLATE
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Übung 1 - Videoportal</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
    <h1>Folgende Videos stehen zu Ihrer Verfügung</h1>
    <article>
    {$videos}
    </article>
</body>
</html>
TEMPLATE;

echo $template; //$template has to be printed out to actually see it on the website