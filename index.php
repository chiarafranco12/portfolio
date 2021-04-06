<?php
    include("connessione.php");
    $sql = "";
    $anno1 = $anno2 = $anno3 = "";
    if (!array_key_exists('annoALL',$_POST) && !array_key_exists('anno1',$_POST) && !array_key_exists('anno2',$_POST) && !array_key_exists('anno3',$_POST)) $anno1 = $anno2 = $anno3 = "%";
    if (!array_key_exists('annoALL',$_POST)) {
        if (array_key_exists('anno1',$_POST)) $anno1 = $_POST['anno1'];
        if (array_key_exists('anno2',$_POST)) $anno2 = $_POST['anno2'];
        if (array_key_exists('anno3',$_POST)) $anno3 = $_POST['anno3'];
    }
    else $anno1 = $anno2 = $anno3 = "%";
    
    $sql = "SELECT * 
            FROM Esperienza
            WHERE anno LIKE '$anno1'
            OR anno LIKE '$anno2'
            OR anno LIKE '$anno3';";
    $esperienze = eseguiquery($sql);

    $html =  "
    <html>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='IMMAGINI/favicon.png' rel='icon' type='icon/png'>
            <title>Chiara Franco</title>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'/>
            <link href='stylesheet.scss' rel='stylesheet' type='text/css'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
            <!--<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>-->
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
            <script src='jssheet.js'></script>
            
        </head>
        <body  class='has-navbar-fixed-top is-size-5 is-family-sans-serif has-text-weight-light'>
    
    
        <!--COPERTINA E SCHEDA ANAGRAFICA-->
            <div class='is-size-2' id='primaCopertina'>
    
                <!--MENU'-->
                    <!--TOPBAR-->
                <div style='background-color:transparent; font-weight:bold;display:block' class='navbar' id='myTopbar'>
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
                <div style='background-color:white;font-weight:bold;display:none' class='navbar is-fixed-top is-overlay' id='myOverlay'>
                    <nav style='padding:50px;'>
                        <div class='columns'>
                            <div class='column is-one-quarter'>
                                <p class='subtitle is-5'>
                                    <strong>CHIARA FRANCO</strong>
                                </p>
                            </div>
                            
                            <div class='column has-text-centered'>
                                <a href='https://www.pascal.edu.it/'>
                                    <figure class='image is-96x96'>
                                        <img id='logo' src='IMMAGINI/logoScuola.png'>
                                    </figure>
                                </a>
                            </div>
    
                            <!-- Right side -->
                            <div class='column is-one-quarter'>
                                <p class='has-text-right chiudi'><strong>X</strong></p>
                            </div>
                        </div>
                        <div class='column is-variable has-text-centered'>
                            <p class='pt-6'><a href='#experiences' class='chiudi'>ESPERIENZE</a></p>
                            <p class='pt-6'><a href='#skills' class='chiudi'>COMPETENZE TRASVERSALI</a></p>
                            <p class='pt-6'><a href='#expertises' class='chiudi'>INFORMATICA</a></p>
                            <p class='pt-6'><a href='#contactMe' class='chiudi'>CONTATTAMI</a></p>
                        </div>
                    </nav>
                </div>
    
    
                <div class='mt-5 columns is-centered animate__animated animate__slideInUp  animate__fadeIn'>
                    <div class='pb-6 column is-two-thirds is-centered backblue boxradius'>
                        <div class='columns'>
                            <div class='column is-half p-0 animate__animated animate__fadeIn animate__delay-1s'>
                                <figure class='image'>
                                    <img style='border-top-right-radius:0px' class='' src='IMMAGINI/io.png'>
                                </figure>
                            </div>
                            <div style='background-color: rgb(241,241,241); color:rgb(26,32,75); height:578px; border-top-right-radius:10px' class='p-6 column is-half is-size-4' id='schedaMia'>
                                <p class='is-size-5'>Chiara Franco</p>
                                <p class='is-size-5'>STUDENTESSA di INFORMATICA</p>
                                <p class='pt-3 has-text-weight-bold is-size-5'>Email:</p>
                                <p class='is-size-5'>chiara.franco12@gmail.com</p>
                                <p class='pt-3 has-text-weight-bold is-size-5'>Data di Nascita:</p>
                                <p class='is-size-5'>10 Agosto 2002</p>
                                <p class='pt-3 has-text-weight-bold is-size-5'>Luogo di Nascita:</p>
                                <p class='is-size-5'>Roma</p>
                                <p class='pt-3 has-text-weight-bold is-size-5'>Istituto:</p>
                                <p class='is-size-5'>I.I.S. Blaise Pascal</p>
                                <p class='pt-3 has-text-weight-bold is-size-5'>Classe:</p>
                                <p class='is-size-5'>5°D</p>
                            </div>
                            <!--<div id='sotto'></div>-->
                        </div>
                    </div>
                </div>
            </div>
    
            <div class='section has-text-centered' style='background-color:rgb(241, 241, 241);' id='presentazione'>
                <p class='is-size-2' style='color:rgb(26,32,75);'>Ciao! Sono Chiara</p>
                <p>
                    Sono una studentessa dell'istituto Blaise Pascal di Reggio Emilia, dell'indirizzo Informatico. Di seguito sono presentate tutte le attività
                    Extra-Scolastiche alle quali ho partecipato a partire dal 2019.
                </p>
            </div>
    
            
            <!--ALL MY EXPERIENCES-->
            <div class='section m-6'>
                <p id='experiences' class='is-size-2 has-text-centered' style='color:rgb(26,32,75);'>Le Mie Esperienze</p>
                
                Seleziona Anno:
                <form action='index.php#experiences' method='post'>
                    <input type='checkbox' name='annoALL' value='ALL' id='selectAll'> ALL
                    <input type='checkbox' name='anno1' value='2018-19' class='ml-6'> 2018-19
                    <input type='checkbox' name='anno2' value='2019-20' class='ml-6'> 2019-20
                    <input type='checkbox' name='anno3' value='2020-21' class='ml-6'> 2020-21
                    <input type='submit' name='invia' value='Filtra' class='button ml-6'>
                </form>
                
                <div class='columns'>";

                $cont = 0;
                $col1 = $col2 = $col3 = $col4 = "<div class='column'>";
                foreach($esperienze as $e){
                    $cont += 1;
                    $contenuto = "
                    <div class='boxradius container p-0'>
                        <a href='{$e['pagina']}' target='_self'>
                            <figure class='image is-square'>
                                <img src='{$e['immagine']}'>
                            </figure>
                            <div class='data boxradius'>
                                <div class='scritta'>
                                    {$e['descrizione']}
                                </div>
                            </div>
                        </a>
                    </div>";
                    if ($cont%4 == 0) {
                        $col4 .= $contenuto;
                        $cont = 0;
                    }
                    else if ($cont%3 == 0) $col3 .= $contenuto;
                    else if ($cont%2 == 0) $col2 .= $contenuto;
                    else $col1 .= $contenuto;
                }
                $col1 .= "</div>";
                $col2 .= "</div>";
                $col3 .= "</div>";
                $col4 .= "</div></div></div>";

                $html .= $col1 . $col2 . $col3 . $col4;
            $html .= "
            <!--SKILLS-->
            <div id='skills' class='section p-6'  style='color:rgb(26,32,75); background-color:rgb(255, 212, 85);'>
                <p class='is-size-2 has-text-centered'>Competenze Trasversali</p>
                <hr class='hr'>
                <div class='columns is-3  has-text-centered'>
                    <div class='column is-half'>
                        <p>Comunicazione - Efficiente</p>
                        <progress class='progress is-primary' value='80' max='100'></progress>
                        
                        <p>Team Work - Collaborativo</p>
                        <progress class='progress is-primary' value='75' max='100'></progress>
                    </div>
                    <div class='column is-half'>
                        <p>Problem Solving - Avanzato</p>
                        <progress class='progress is-primary' value='95' max='100'></progress>
    
                        <p>Inglese - Proficient</p>
                        <progress class='progress is-primary' value='85' max='100'></progress>
                    </div>
                </div>
            </div>
    
            <!--EXPERTISES-->
            <div class='section expertise'>
                <div class='text-white is-size-2 has-text-centered'>
                    <h1 id='expertises' class='display-4'>Conoscenze Informatiche</h1>
                    <p class='lead mb-0'>Le mie competenze in ambito informatico</p>
                </div>
    
                <div class='columns container py-5'>
                    <div class='column is-one-third'>
                        <div class='mb-4 animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                              <h2 class='h6 font-weight-bold text-center mb-4'>Microsoft Office</h2>
                      
                              <progress class='progress is-link' value='80' max='100'></progress>
                      
                              <!-- info -->
                              <div class='row text-center mt-4'>
                                <p>Ho competenze nell'utilizzo dei prodotti Microsoft Office: Word, Power Point, ExCel, Access.</p>
                              </div>
                            </div>
                        </div>
                        
                        <div class='mb-4 animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                            <h2 class='h6 font-weight-bold text-center mb-4'>Javascript e JQuery</h2>
                    
                            <progress id='progress2' class='progress is-danger' value='95' max='100'></progress>
                    
                            <!-- info-->
                            <div class='row text-center mt-4'>
                                <p>So creare siti web dinamici con l'utilizzo di JavaScript e JQuery.</p>
                            </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='column is-one-third'>
                        <div class='mb-4 exp-card animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                            <h2 class='h6 font-weight-bold text-center mb-4'>C++</h2>
                    
                            <progress id='progress1' class='progress is-warning' value='90' max='100'></progress>
                    
                            <!-- info -->
                            <div class='row text-center mt-4'>
                                <p>Ho le competenze per codificare in linguaggio C++ ad un livello avanzato.</p>
                            </div>
                            </div>
                        </div>
        
                        <div class='mb-4 animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                              <h2 class='h6 font-weight-bold text-center mb-4'>PHP e SQL</h2>
                      
                              <progress class='progress is-info' value='80' max='100'></progress>
                      
                              <!-- info -->
                              <div class='row text-center mt-4'>
                                <p>Sono in grado di lavorare a programmi lato server connessi a database con l'utilizzo di PHP e SQL.</p>
                              </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='column is-one-third'>
                        <div class='mb-4 animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                              <h2 class='h6 font-weight-bold text-center mb-4'>Java</h2>
                      
                              <progress class='progress is-primary' value='60' max='100'></progress>
                      
                              <!-- info -->
                              <div class='row text-center mt-4'>
                                <p>Posseggo conoscenze approfondite del linguaggio Java. So creare interfacce grafiche attraverso l'IDE netbeans.</p>
                              </div>
                            </div>
                        </div>
                        
                        <div class='mb-4 animate__animated'>
                            <div class='bg-white rounded-lg p-5 shadow'>
                              <h2 class='h6 font-weight-bold text-center mb-4'>HTML e CSS</h2>
                      
                              <progress class='progress is-success' value='80' max='100'></progress>
                      
                              <!-- info -->
                              <div class='row text-center mt-4'>
                                <p>Sono in grado di adoperare i linguaggi HTML e CSS per creare siti web statici.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    
            <!--CONTACT ME-->
        <div id='contactMe' class='section p-6' style='color:rgb(26,32,75); background-color:rgb(241, 241, 241);'>
            <p class='is-size-2 has-text-centered'>Contattami</h1>
            <hr class='hr'>
            
            <div class='columns'>
              <div class='column is-one-fifth'>
              </div>
      
                
                <div class='column is-one-third pr-6'>
                    <form method='POST' action='inviaForm.php'>
                        <div class='field is-horizontal'>
                            <div class='field-body'>
                                <div class='field'>
                                    <p class='control is-expanded has-icons-left'>
                                        <input class='input is-primary' type='text' placeholder='Nome' name='name'>
                                        <span class='icon is-small is-left'>
                                        <i class='fas fa-user'></i>
                                        </span>
                                    </p>
                                </div>
                                <div class='field'>
                                    <p class='control is-expanded has-icons-left'>
                                        <input class='input is-primary' type='text' placeholder='Cognome' name='surname'>
                                        <span class='icon is-small is-left'>
                                        <i class='fas fa-user'></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='field is-horizontal'>
                            <div class='field-body'>
                                <div class='field'>
                                    <p class='control is-expanded has-icons-left has-icons-right'>
                                        <input class='input is-primary' type='email' placeholder='Email' name='email'>
                                        <span class='icon is-small is-left'>
                                        <i class='fas fa-envelope'></i>
                                        </span>
                                        <span class='icon is-small is-right'>
                                        <i class='fas fa-check'></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='field is-horizontal'>
                            <div class='field-body'>
                                <div class='field'>            
                                    <p class='control is-expanded'>
                                        <input class='input is-primary' type='tel' placeholder='Il tuo numero di Telefono' name='phone'>
                                        <span class='icon is-small is-left'>
                                        <i class='fas fa-envelope'></i>
                                        </span>
                                        <span class='icon is-small is-right'>
                                        <i class='fas fa-check'></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='field is-horizontal'>
                            <div class='field-body'>
                                <div class='field is-expanded'>
                                <div class='field has-addons'>
                                    <p class='control is-expanded'>
                                    <textarea cols='40' rows='6' class='textarea is-primary' placeholder='Come posso aiutarti' name='message'></textarea>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class='field is-horizontal'>
                            <div class='field-body'>
                                <div class='field'>
                                <div class='control'>
                                    <button class='button is-primary' name='sentButton'>Invia Messaggio</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>   
                
                <div class='column is-one-third'>
                    <p class='is-size-5'>Chiara Franco</p>
                    <p class='is-size-5'>STUDENTESSA di INFORMATICA</p>
                    <br>
                    <p class='has-text-weight-bold is-size-5'>Telefono:</p>
                    <p class='is-size-5'>123-456-7890</p>
                    <br>
                    <p class='has-text-weight-bold is-size-5'>Email:</p>
                    <p class='is-size-5'>chiara.franco12@gmail.com</p>
                </div>
            </div>
        </div>
    
        <footer class='footer'>
            <div id='includedContentIndex'></div>
        
            <div class='content has-text-centered'>
                <div class='columns'>
                    <div class='column'>
                        <div>
                            <p class='is-size-4'>Progetti Principali:</p>
                        </div>
                        <div>
                            <a href='ASL3/MontaSmonta.html'>
                                <p>Monta Smonta</p>
                            </a>
                        </div>
                        <div>
                            <a href='ASL3/EnergyWay.html'>
                                <p>Energy Way</p>
                            </a>
                        </div>
                        <div>
                            <a href='ASL3/ErreviSystem.html'>
                                <p>Errevi System</p>
                            </a>
                        </div>
                        <div>
                            <a href='ASL3/Webranking.html'>
                                <p>Webranking</p>
                            </a>
                        </div>
                    </div>
                    <div class='column'>
                        <div></div>
                        <div><a href='ASL3/KatanaCa.html'>
                            <p>KatanaCà</p>
                        </a></div>
                        <div><a href='ASL3/Tiwi.html'>
                            <p>Tiwi</p>
                        </a></div>
                        <div><a href='ASL3/DaVinci.html'>
                            <p>Da Vinci</p>
                        </a></div>
                        <div><a href='ASL3/LegoLeague.html'>
                            <p>First Lego League</p>
                        </a></div>
                        
                    </div>
                    <div class='column'>
                        <div><a href='ASL3/Hackathon.html'>
                            <p>Hackathon</p>
                        </a></div>
                        <div><a href='ASL3/PythonParma.html'>
                            <p>Python</p>
                        </a></div>
                        <div><a href='ASL3/PythonParma.html'>
                            <p>PCTO</p>
                        </a></div>
                    </div>
                </div>
            </div>
            </footer>
        </body>
    </html>
    ";
    print($html);
?>


