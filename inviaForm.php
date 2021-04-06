<?php
    include('connessione.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if ($message != ''){
        $sql = "SELECT ID
            FROM Cliente 
            WHERE name_c LIKE '$name'
            AND surname_c LIKE '$surname'
            AND email_c LIKE '$email' 
            AND phone_c LIKE '$phone'";
        $cliente = eseguiquery($sql);

        if (empty($cliente)){
            $sql = "INSERT INTO Cliente (name_c, surname_c, email_c, phone_c) 
                    VALUES ('$name','$surname','$email','$phone')";
            insertquery($sql);

            $sql = "SELECT ID
                    FROM Cliente 
                    WHERE name_c LIKE '$name'
                    AND surname_c LIKE '$surname'
                    AND email_c LIKE '$email' 
                    AND phone_c LIKE '$phone'";
            $cliente = eseguiquery($sql);
        }
        $client_id = $cliente[0]['ID'];
        $sql = "INSERT INTO Messaggio (text_m, fk_client_id) 
                VALUES ('$message',$client_id)";
        insertquery($sql);
    }
    

    $html = "
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Chiara Franco</title>
        <link href='stylesheet.css' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <!--<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>-->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script>
            var tot=0;
            $(document).ready(function(){
                $('#myTopbar p').addClass('has-text-white');

                $('#myOverlay').hide();

                $('#apri').click(function(){
                    $('#myOverlay').show('slow');
                    $('#myTopbar').hide('slow');
                });
                $('.chiudi').click(function(){
                    $('#myOverlay').hide('slow');
                    $('#myTopbar').show('slow');
                });
            });
        </script>
    </head>
    <body  class='has-navbar-fixed-top is-size-5 is-family-sans-serif has-text-weight-light'>


    <!--COPERTINA E SCHEDA ANAGRAFICA-->
        <div style='margin-top:-52px;background: white url('sfondo.png') no-repeat fixed;background-size: cover;' class='is-size-2'>

            <!--MENU'-->
                <!--TOPBAR-->
            <div style='background-color: rgb(26,32,75);font-weight:bold;display:block' class='backblue navbar' id='myTopbar'>
                <nav style='padding:20px;'>
                    <div class='level'>
                        <!-- Left side -->
                        <p class='level-left subtitle is-5 has-text-white has-text-weight-bold'>CHIARA FRANCO</p>

                        <!-- Right side -->
                        <p class='level-right has-text-right has-text-white has-text-weight-bold' id='apri'>☰</p>
                    </div>
                </nav>
            </div>

                <!--OVERLAY-->
            <div style='background-color:white;font-weight:bold;display:block' class='navbar is-fixed-top is-overlay' id='myOverlay'>
                <nav style='padding:50px;'>
                    <div class='level'>
                        <p class='level-left subtitle is-5'>
                            <strong>CHIARA FRANCO</strong>
                        </p>

                        <div class='level-item has-text-centered'>
                            <a href='https://www.pascal.edu.it/'>
                                <figure class='image is-96x96 is-text-centered'>
                                    <img id='logo' src='IMMAGINI/logoScuola.png'>
                                </figure>
                            </a>
                        </div>

                        <!-- Right side -->
                        <p class='level-right has-text-right chiudi'><strong>X</strong></p>
                    </div>
                    <div class='column is-variable has-text-centered'>
                        <p class='pt-6'><a href='index.html' class='chiudi'>HOME</a></p>
                    </div>
                </nav>
            </div>
        </div>

    <div style='height:55%' class='container m-6'>
        <article class='message is-link'>
            <div class='message-header'>
                <p>Message sent</p>
            </div>
            <div class='message-body'>
                <p>Thank you for contacting me. You're massege has been sent.</p>
                <p>I'll reply you as soon as possible.</p>
            </div>
        </article>
    </div>  
    

    <footer style='bottom:0' class='footer'>
        <div class='content has-text-centered'>
          <p>
            <strong>Bulma</strong> by <a href='https://jgthms.com'>Jeremy Thomas</a>. The source code is licensed
            <a href='http://opensource.org/licenses/mit-license.php'>MIT</a>. The website content
            is licensed <a href='http://creativecommons.org/licenses/by-nc-sa/4.0/'>CC BY NC SA 4.0</a>.
          </p>
        </div>
      </footer>
    </body>
</html>";
    print($html);
?>