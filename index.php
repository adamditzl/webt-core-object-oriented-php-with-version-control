
<?php
use src\YouTube;
use src\Vimeo;

require_once 'src/YouTube.php';
require_once 'src/Vimeo.php';

$youtubes = array(
            "St. Maria Goretti" => "FjuZJQdEcdg"
        );
$videos = '';
foreach (array_keys($youtubes) as $array_key) {
    $newVideo = new YouTube($youtubes[$array_key], $array_key);
    $video = <<<VIDEO
            <section>
            <p> {$newVideo->getName()}  </p>
            {$newVideo->getHTML()}  
            </section>
VIDEO;
    $videos .= $video;

}
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
