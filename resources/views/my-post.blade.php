<!--
    This is just a sample webpage view including the its model and controller, organizing its contents...
-->


<!DOCTYPE html>

<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <link rel = "stylesheet" href = "\bacci_css\bacci_header.css">
    </head>

    <body>
        <article>
            <?= 
                $my_post; 
                <a href = "/"> Go Back </a>
            ?>
        </article>
    </body>

</html>