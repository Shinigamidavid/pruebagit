<?php

function timer()
{
    $data = [
        'title' => 'timer o cuenta regresiva'
    ];

    // Render the view and pass the data
    render('timerView.php', $data);
}

function render($view, $data)
{
    // Extract the data array to variables
    extract($data);

    // Include the view file
    include $view;
}

?>

