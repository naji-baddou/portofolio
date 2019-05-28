<?php
 session_start();
    $allowed_lang= array('en','fr');
    // $_SESSION['language'] = 'en';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }
    
    if(!isset($_SESSION['lang']))
    {
            if(isset($_GET['lang']) )
            {
                $_SESSION['language'] = $_GET['lang'];

                if($_GET['lang'] == 'fr')
                {
                    $frselecetd = "selected='selected' ";
                    $enselecetd = "";
                }
                else
                {   
                    $frselecetd = " ";
                    $enselecetd = "selected='selected' ";
                }
            }
            else
            { 
                $frselecetd = " ";
                $enselecetd = "selected='selected' ";
            }
    }
    else{
           
        $frselecetd = " ";
        $enselecetd = "selected='selected' ";
    }

  $lang = array(
    'en' => array(
        // Home 
        'greet'=> 'Hello! i\'m naji',
        'firstinfo'=>'Web Design/Web Developer',
        'cv' => ' Download My Cv',
        // About 
        'first' =>'>Hi, I\'m',
        'last' => 'Naji',
        'about' => 'A young man who has a great desire to learn new technologies,
                   that\'s why I\'m pursuing a course of study dedicated to web development and web design,
                   thus I would like to expand my knowledge in this area.',
        'me' => 'I\'m a Front-End Developer and UX/UI designer, with practical experience in small project management,
                 devoted to functional programming..',
        'skills' => 'SKILLS ASSESSMENT',
        'web dev' => 'Web development',
        'web des' => 'Web design',
        'manage' => 'Managemant',
        'Education' => 'My Education',
        'bach' => 'Bachelor of physics science',
        'diploma' => 'diploma of technician specialized in business management.',
          
        // Services 
        'what ido' => 'what I can do',
        'my' => 'My',
        'services' => ' Services', 
        'web design' =>' Web Design',
        'design' => 'i can manage creating a simple web design based on your thoughts',
        'web development' => 'Web Development',
        'web text' =>' develop a website well organized, well developed  ',
        'responsive' => 'Responsive Design',
        'web responsive' =>'fully responsive website that changes in response to the type of the visitor device.',
        'clean' => 'Clean Code',
        'code' => ' a website have a clean code well commented and easy to understand',
        'custom' =>'Custom Support',
        'support' =>'custom support is very important, as we work with agile method that means we are flexible to get your opinions and happilly your changes within the work',
        'branding' =>'Branding',
        'branding text' => ' the Brand strategy is important for the website to be good, but also to give you a clue about the context of the website',
        // Contact
        'call' => 'call',
        'address' => 'address',
        'name' => 'Name',
        'subject' => 'Subject',
        'Message' => 'Messages',
        // footer
        'copyright' => 'Copyright © YouCode 2018/2020 Made With Love All Rights Reserved.',
    ),
    'fr' => array(
        // Home
        'greet'=> 'bonjour! je suis naji',
        'firstinfo'=>'Web Design / Développeur Web',
        'cv' => 'Télécharger mon CV',
        // About
        'first' =>'>salut, Je suis',
        'last' => 'Naji',
        'about' => 'Un jeune qui à une grande volonté d\'apprendre les nouvelles technologies, 
                    c’est pour cela je poursuis un cursus d\'apprentissage dédié spécialement à la programmation, 
                    et j\'aimerai bien élargir mes connaissances dans ce domaine.',
        'me' => 'Je suis un développeur Front-End et un concepteur UX / UI, 
                avec une expérience pratique de la gestion de petits projets consacrée à la programmation fonctionnelle.',
        'skills' => 'ÉVALUATION DES COMPÉTENCES',
        'web dev' => 'Développement web',
        'web des' => 'Création de sites web ',
        'manage' => 'La gestion',
        'Education' => 'Mon éducation',
        'bach' => 'baccalauréat en science physique',
        'diploma' => 'diplôme de technicien spécialisé en gestion des entreprises.',
        
        // Services
        'what ido' => 'Qu\'est-ce que je peux faire',
        'my' => 'Mes',
        'services' => ' Services',
        'web design' =>'création de sites web', 
        'design' =>'je peux gérer la création d\'un design web simple basé sur vos pensées',
         'web development' =>'développement web',
         'web text' => 'développer un site web bien organisé, bien développé',
         'responsive' => 'Conception sensible',
        'web responsive' =>'Site Web entièrement réactif qui change en fonction du type de dispositif visiteur.',
        'clean' => 'Clean Code',
        'code' => 'un site web a un code propre bien commenté et facile à comprendre',
        'custom' =>'Support personnalisé',
        'support' =>'le support personnalisé est très important, car nous travaillons avec une méthode agile, ce qui signifie que nous sommes flexibles pour obtenir vos opinions et vos changements dans le travail.',
        'branding' => 'la stratégie de marque',
        'branding text' => 'La stratégie de marque est importante pour que le site Web soit efficace, mais également pour vous donner un indice sur le contexte du site Web',

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

