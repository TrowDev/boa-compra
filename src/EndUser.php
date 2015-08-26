<?php namespace Benoth\BoaCompra;

/**
 * BoaCompra End User
 *
 * Based on documentation v2.48
 */
class EndUser
{
    /* End user email (max length 60) (REQUIRED) */
    protected $validator;

    /* End user email (max length 60) (REQUIRED) */
    protected $email;

    /* End User full name (max length 60) */
    protected $name;

    /* End User address number (max length 10) */
    protected $number;

    /* End User address (max length 60) */
    protected $street;

    /* End User suburb (max length 60) */
    protected $suburb;

    /* End User postal code (numbers only) (max length 8) */
    protected $zipcode;

    /* End User City (max length 60) (provides anti-fraud analysis and semi-transparent checkout) */
    protected $city;

    /* End User State (max length 30) (provides anti-fraud analysis and semi-transparent checkout) */
    protected $state;

    /* End User Country (max length 20) (provides anti-fraud analysis and semi-transparent checkout) */
    protected $country;

    /* End User Phone Number (max length 20) (provides anti-fraud analysis and semi-transparent checkout) */
    protected $phone;

    /* End User CPF (For Brazil only) (max length 20) (provides anti-fraud analysis and semi-transparent checkout) */
    protected $cpf;

    /* Default Language. Possible values pt_BR, es_ES, en_US, pt_PT, tr_TR */
    protected $language;

    /* Character or player login (max length 100) */
    protected $character;

    public function __construct($email)
    {
        $this->validator = new DataValidator();

        if (!$this->validator->nonEmptyEmail($email, 60)) {
            throw new \Exception('Invalid email address provided (must be valid and max length of 60)');
        }

        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getSubUrb()
    {
        return $this->suburb;
    }

    public function getZipcode()
    {
        return $this->zipcode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getCharacter()
    {
        return $this->character;
    }

    public function setName($name)
    {
        if (!$this->validator->nonEmptyString($name, 60)) {
            throw new \Exception('Invalid name. Must be a non-empty string with max length of 60');
        }

        $this->name = $name;

        return $this;
    }

    public function setNumber($number)
    {
        if (!$this->validator->nonEmptyString($number, 10)) {
            throw new \Exception('Invalid number. Must be a non-empty string with max length of 10');
        }

        $this->number = $number;

        return $this;
    }

    public function setStreet($street)
    {
        if (!$this->validator->nonEmptyString($street, 60)) {
            throw new \Exception('Invalid street. Must be a non-empty string with max length of 60');
        }

        $this->street = $street;

        return $this;
    }

    public function setSubUrb($suburb)
    {
        if (!$this->validator->nonEmptyString($suburb, 60)) {
            throw new \Exception('Invalid suburb. Must be a non-empty string with max length of 60');
        }

        $this->suburb = $suburb;

        return $this;
    }

    public function setZipcode($zipcode)
    {
        if (!$this->validator->nonEmptyInt($zipcode, 8)) {
            throw new \Exception('Invalid zipcode. Must be a non-empty string with only numbers, with max length of 8');
        }

        $this->zipcode = $zipcode;

        return $this;
    }

    public function setCity($city)
    {
        if (!$this->validator->nonEmptyString($city, 60)) {
            throw new \Exception('Invalid city. Must be a non-empty string with max length of 60');
        }

        $this->city = $city;

        return $this;
    }

    public function setState($state)
    {
        if (!$this->validator->nonEmptyString($state, 20)) {
            throw new \Exception('Invalid state. Must be a non-empty string with max length of 20');
        }

        $this->state = $state;

        return $this;
    }

    public function setCountry($country)
    {
        if (!$this->validator->nonEmptyString($country, 20)) {
            throw new \Exception('Invalid country. Must be a non-empty string with max length of 20');
        }

        $this->country = $country;

        return $this;
    }

    public function setPhone($phone)
    {
        if (!$this->validator->nonEmptyString($phone, 20)) {
            throw new \Exception('Invalid phone number. Must be a non-empty string with max length of 20');
        }

        $this->phone = $phone;

        return $this;
    }

    public function setCPF($cpf)
    {
        if (!$this->validator->nonEmptyString($cpf, 20)) {
            throw new \Exception('Invalid CPF. Must be a non-empty string with max length of 20');
        }

        $this->cpf = $cpf;

        return $this;
    }

    public function setLanguage($language)
    {
        if (!in_array($language, array('pt_BR', 'es_ES', 'en_US', 'pt_PT', 'tr_TR'))) {
            throw new \Exception('Invalid Language. Possible values are pt_BR, es_ES, en_US, pt_PT, tr_TR');
        }

        $this->language = $language;

        return $this;
    }

    public function setCharacter($character)
    {
        if (!$this->validator->nonEmptyString($character, 100)) {
            throw new \Exception('Invalid Character or player login. Must be a non-empty string (max length of 100)');
        }

        $this->character = $character;

        return $this;
    }
}
