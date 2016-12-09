<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ask Me Now</title>
        
        <link rel="stylesheet" href="asset/css/style.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <header class="highlight">
                <h1>
                    <a href="<?php echo site_url(); ?>">
                        AskMeNow
                    </a>
                </h1>
                <ul class="nav">
                    <li>
                        <a href="<?php echo site_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('questions/listing'); ?>">
                            Questions
                        </a>
                    </li>
                </ul>
            </header>
            <section class="main">
                <?php
                    // parser html
                    if (isset($html)) {
                        echo $html;    
                    }
                    // load the view
                    if (isset($subview)) {
                        $this->load->view($subview);
                    }
                ?>
            </section>
            <footer>
                &copy;<?php echo date('Y'); ?>
            </footer>
        </div>
    </body>
</html>