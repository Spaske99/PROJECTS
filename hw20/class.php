<?php
// CONTACT CLASS
class Contact {
    protected $phone;
    protected $email;

    public function setPhone(string $phone):void {
        $this->phone=$phone; 
    }
    
    public function getPhone():string {
        return $this->phone;
    }

    public function setEmail(string $email):void {
        $this->email=$email;
    }

    public function getEmail():string {
        return  $this->email;
    }

    public function contains(string $text = ""):bool {
        if(str_contains($this->phone, $text) || str_contains($this->email, $text)) {
            return true;
        }
        return false;
    }

    public function displayMe() {
        echo "Broj: " . $this->phone . "<br>";
        echo "Email: " . $this->email;
    }
}

// CUSTOMER CONTACT CLASS
class CustomerContact extends Contact{
    protected $firstName;
    protected $lastName;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    
    public function displayMe() {
        echo $this->firstName . " " . $this->lastName . "<br>";
        echo parent::displayMe() . "<br>";
    }
}

// BUSINESS CONTACT CLASS
class BusinessContact extends Contact{
    protected $address; 
    protected $companyName;

    public function setAddress($address) {
        $this->address=$address;
    }  
    public function setCompanyName($companyName) {
        $this->companyName=$companyName;
    }
    
    public function displayMe() {
        echo "Kompanija: " . $this->companyName . "<br>";
        echo  "Adresa: " . $this->address . "<br>";
        echo parent::displayMe() . "<br>";
    }
}

// CONTACT LIST CLASS
class ContactList extends Contact {
    protected $contacts = [];

    public function addContact(Contact $contact) {
        if($contact instanceof Contact || $contact instanceof BusinessContact) {
            $this->contacts[] = $contact;
        }   
    }

    public function listAllContacts() {
        foreach ($this->contacts as $key => $value) {
            echo $value->displayMe();
            echo "<br>";
        }
    }
}

$customer1 = new CustomerContact();
$customer1->setFirstName('Nenad');
$customer1->setLastName('Spasic');
$customer1->setEmail('nenad.spasic.99@gmail.com');
$customer1->setPhone('0600670650');

$customer2 = new CustomerContact();
$customer2->setFirstName('Sasa');
$customer2->setLastName('Spasic');
$customer2->setEmail('ssasa.68@gmail.com');
$customer2->setPhone('062670353');

$buss1 = new BusinessContact();
$buss1->setAddress('Nis');
$buss1->setCompanyName('SLWrap');
$buss1->setEmail('SLWrap@gmail.com');
$buss1->setPhone('0600670960');

$buss2 = new BusinessContact();
$buss2->setAddress('Beograd');
$buss2->setCompanyName('Fineboje');
$buss2->setEmail('Fineboje@gmail.com');
$buss2->setPhone('062670352');

$kontaktLista = new ContactList();
$kontaktLista->addContact($customer1);
$kontaktLista->addContact($customer2);
$kontaktLista->addContact($buss1);
$kontaktLista->addContact($buss2);

$kontaktLista->listAllContacts();

?>



