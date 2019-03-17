<?php
require_once 'model/dataHandler.php';

class ContactsController
{
    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function handleRequest()
    {
        try {
            $directory = $_SERVER['PHP_SELF'];
            switch ($directory) {
                case '/school /webshop/index.php':
                    $this->collectCreateContact($_REQUEST);
                    break;
                case 'reads':
                    $this->collectReadContacts();
                    break;
                case 'read':
                    $this->collectReadContact($_REQUEST['id']);
                    break;
                case 'update':
                    $this->collectUpdateContact();
                    break;
                case 'delete':
                    $this->collectDeleteContact($_REQUEST['id']);
                    break;
                default:
                    $this->collectReadContacts();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }

    }

}
