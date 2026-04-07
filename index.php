<?php
try {
    $countries = array(
        'Spain' => 'Madrid',
        'Russia' => 'Moscow'
    );

    if ($countries['Germany'] == '') {
        throw new Exception("Элемент Germany не существует");
    }

    echo $countries['Germany'];
}
catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
