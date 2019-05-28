<?php
 session_start();
    $allowed_lang= array('en');
    $_SESSION['language'] = 'en';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }

  $lang = array(
    'en' => array(
        // Home 
        'greet'=> 'Hello! i\'m naji',
        'firstinfo'=>'Web Design/Web Developer',
        'cv' => ' Download CV',
        // About 
        'first' =>'>Hi, I\'m',
        'last' => 'Naji',
        'years' => 'A young man who has a great desire to learn new technologies,
                   that\'s why I\'m pursuing a course of study dedicated to web development and web design,
                   thus I would like to expand my knowledge in this area.',
        'skills' => 'My Skills',
        'web dev' => 'Web development',
        'web des' => 'Web design',
        'manage' => 'Managemant',
        'Education' => 'My Education',
        'bach' => 'Bachelor of physics science',
        'diploma' => 'diploma of technician specialized in business management.',
        'closure' => 'for more information download my cv or contact me directly.',    
        // Contact
        'call' => 'call',
        'address' => 'address',
        'name' => 'Name',
        'subject' => 'Subject',
        'Message' => 'Messages',
        // footer
        'copyright' => 'Copyright © YouCode 2018/2020 Made With Love All Rights Reserved.',
    ),
    ?>