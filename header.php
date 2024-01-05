<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Version 2 JCUEducation GroupPA1</title>

    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <link href="<?php bloginfo('template_directory');?>/css/groupa1style.css" rel="stylesheet">

    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    

    
    <?php wp_head();?>

</head>

<body>

    <div class="jumbotron">
        
        <div class="container">
            <h1>
                <?php echo 'James Cook University Open House'; ?>
            </h1>
            <p>
                <?php echo 'January 8th-14th January'; ?>
            </p>

            <!-- This is the most basic nav menu you can get. If for example the portfolio doesn't need to be on a separate 
            page and you don't want to include it in the footer or header, you can just make an extra php file, 
            say portfolio-section.php, to make up the building blocks of your one-page site (or with extra pages with 
            other subjects): -->

            <?php wp_list_pages( '&title_li=' ); ?>

            <img src="wp-content/themes/version2test/img/JCUopenhousemain.png" height="700px", width="1000px" style="position:relative; left:60px;"></img>

                

        </div>
        
    </div>
    
