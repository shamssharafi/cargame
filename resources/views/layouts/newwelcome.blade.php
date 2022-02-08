<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body    { padding-bottom:40px; padding-top:40px; align-content: center; }
    </style>
    <button type="submit" class="btn btn-success">Play again</button>
    <button type="submit" class="btn btn-success">Save my score</button><br/><br/>
<?php
function randomName() {
    $names = array(
        'Alfa',
        'BMW',
        'Opel',
        'Ford',
        'Jaguar',
        // and so on

    );
    
    return $names[rand ( 0 , count($names) -1)];
}

print randomName();
