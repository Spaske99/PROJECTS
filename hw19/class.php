<?php

class Contact {
    protected $phone;
    protected $email;
    protected $name;

    public function setPhone($phone) {
        $this->phone=$phone; 
    }
    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
        $this->email=$email;
    }

    public function getEmail() {
        return  $this->email;
    }

    public function contains($text = "") {
        if(str_contains($this->email, $text)) {
            echo "Mejl " . $this->email . " Sadrzi " . $text;
        }
        else{
            echo "Mejl " . $this->email . " Ne sadrzi" . $text;
        }
    }
}

class ContactList extends Contact {
    protected $contacts = [];

    public function addContact(Contact $contact) {
        if($contact instanceof Contact) {
            $this->contacts[] = $contact;
        }   
    }

    public function listAllContacts() {
        foreach ($this->contacts as $key => $value) {
            echo "Broj telefona kontakta je ". $value->phone . ", a mejl ". $value->email . ".<br>";
        }
    }
}

$contact1 = new Contact();
$contact1->setPhone('0600670650');
$contact1->setEmail('nenad.spasic.99@gmail.com');
$contact2 = new Contact();
$contact2->setPhone('062670353');
$contact2->setEmail('ssasa.68gmail.com');
$contact3 = new Contact();
$contact3->setPhone('0600670960');
$contact3->setEmail('tamara.s.spasic@gmail.com');

$contact1->contains('@');
echo "<br>";
$contact2->contains('@');
echo "<br>";
$contact3->contains('@');
echo "<br><br>";

$contactlist = new ContactList();
$contactlist->addContact($contact1);
$contactlist->addContact($contact2);
$contactlist->addContact($contact3);
$contactlist->listAllContacts();

?>



