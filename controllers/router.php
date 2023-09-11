<?php

if (isset($_GET['page'])) {

    switch ($_GET['page']) {

        case 'login':
            require_once 'controllers/session/login.php';
            break;

        case 'logout':
            require_once 'controllers/session/logout.php';
            break;

        case 'contactlist':
            require_once 'controllers/pages/contact_list.php';
            break;

        case 'contactcard':
            require_once 'controllers/contact/contact_card.php';
            break;

        case 'createcontact':
            require_once 'controllers/contact/create_contact.php';
            break;

        case 'update':
            require_once 'controllers/contact/update_contact.php';
            break;

        case 'delete':
            require_once 'controllers/contact/delete_contact.php';
            break;

        case 'signup':
            require_once 'controllers/session/signup.php';
            break;

        case 'profil':
            require_once 'controllers/session/profil.php';
            break;

        default:
            require_once 'views/errors/fourofour.php';
            break;
    }
} else {
    require_once 'controllers/session/login.php';
}
