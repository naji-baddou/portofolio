<?php
 session_start();
    $allowed_lang= array('fr');
    $_SESSION['language'] = 'fr';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }

  $lang = array(
    'fr' => array(
        // Home
        'greet'=> 'bonjour! je m\'appele naji',
        'firstinfo'=>'Web Design / Développeur Web',
        'cv' => 'Télécharger le CV',
        // About
        'first' =>'>salut, Je suis',
        'last' => 'Naji',
        'years' => 'Un jeune qui à une grande volonté d\'apprendre les nouvelles technologies, 
                    c’est pour cela je poursuis un cursus d\'apprentissage dédié spécialement à la programmation, 
                    et j\'aimerai bien élargir mes connaissances dans ce domaine.', 
        'skills' => 'Mes compétences',
        'web dev' => 'Développement web',
        'web des' => 'Création de sites web ',
        'manage' => 'La gestion',
        'Education' => 'Mon éducation',
        'bach' => 'baccalauréat en science physique',
        'diploma' => 'diplôme de technicien spécialisé en gestion des entreprises.',
        'closure' => 'pour plus d\'informations télécharger mon cv ou me contacter directement.',
        // Contact
        'call' => 'appel',
        'address' =>'adresse',
        'name' => 'le Nom',
        'subject' => 'Sujet',
        'Message' => 'Message',
        // footer
        'copyright' => 'Copyright © YouCode 2018/2020 Made With Love Tous droits réservés.',
       

    )
 );

?>