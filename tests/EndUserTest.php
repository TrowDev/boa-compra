<?php

use Benoth\BoaCompra\EndUser;

class EndUserTest extends PHPUnit_Framework_TestCase
{
    protected $longString = 'qwerty0123456789qwerty0123456789qwerty0123456789qwerty0123456789qwerty0123456789qwerty0123456789qwerty0123456789qwerty0123456789';

    public function testGetters()
    {
        $email   = 'my-email@example.com';
        $endUser = new EndUser($email);

        $this->assertEquals(null,   $endUser->getName());
        $this->assertEquals(null,   $endUser->getNumber());
        $this->assertEquals(null,   $endUser->getStreet());
        $this->assertEquals(null,   $endUser->getSubUrb());
        $this->assertEquals(null,   $endUser->getZipcode());
        $this->assertEquals(null,   $endUser->getCity());
        $this->assertEquals(null,   $endUser->getState());
        $this->assertEquals(null,   $endUser->getCountry());
        $this->assertEquals(null,   $endUser->getPhone());
        $this->assertEquals(null,   $endUser->getCPF());
        $this->assertEquals(null,   $endUser->getLanguage());
        $this->assertEquals(null,   $endUser->getCharacter());
        $this->assertEquals($email, $endUser->getEmail());
    }

    public function testSetters()
    {
        $email     = 'my-email@example.com';
        $name      = 'My Name';
        $number    = '1200 E';
        $street    = 'California Blvd';
        $suburb    = 'California Institute of Technology';
        $zipcode   = '91125';
        $city      = 'Pasadena';
        $state     = 'California';
        $country   = 'United States';
        $phone     = '654789';
        $cpf       = 'CPF';
        $language  = 'en_US';
        $character = 'R0xx0R';

        $endUser = new EndUser($email);

        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setName($name));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setNumber($number));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setStreet($street));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setSubUrb($suburb));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setZipcode($zipcode));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setCity($city));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setState($state));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setCountry($country));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setPhone($phone));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setCPF($cpf));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setLanguage($language));
        $this->assertInstanceOf('Benoth\BoaCompra\EndUser', $endUser->setCharacter($character));

        $this->assertEquals($name,      $endUser->getName());
        $this->assertEquals($number,    $endUser->getNumber());
        $this->assertEquals($street,    $endUser->getStreet());
        $this->assertEquals($suburb,    $endUser->getSubUrb());
        $this->assertEquals($zipcode,   $endUser->getZipcode());
        $this->assertEquals($city,      $endUser->getCity());
        $this->assertEquals($state,     $endUser->getState());
        $this->assertEquals($country,   $endUser->getCountry());
        $this->assertEquals($phone,     $endUser->getPhone());
        $this->assertEquals($cpf,       $endUser->getCPF());
        $this->assertEquals($language,  $endUser->getLanguage());
        $this->assertEquals($character, $endUser->getCharacter());
        $this->assertEquals($email,     $endUser->getEmail());
    }

    public function testEmailExceptionFormat()
    {
        $this->setExpectedException('Exception', 'Invalid email address provided (must be valid and max length of 60)');

        $endUser = new EndUser('invalid-email-address');
    }

    public function testEmailExceptionLength()
    {
        $this->setExpectedException('Exception', 'Invalid email address provided (must be valid and max length of 60)');

        $endUser = new EndUser('very-very-very-very-very-very-very-very-long-email-address@example.com');
    }

    public function testNameException()
    {
        $this->setExpectedException('Exception', 'Invalid name. Must be a non-empty string with max length of 60');

        $endUser = new EndUser('example@example.com');
        $endUser->setName($this->longString);
    }

    public function testNumberException()
    {
        $this->setExpectedException('Exception', 'Invalid number. Must be a non-empty string with max length of 10');

        $endUser = new EndUser('example@example.com');
        $endUser->setNumber($this->longString);
    }

    public function testStreetException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setStreet($this->longString);
    }

    public function testSubUrbException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setSubUrb($this->longString);
    }

    public function testZipcodeException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setZipcode($this->longString);
    }

    public function testCityException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setCity($this->longString);
    }

    public function testStateException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setState($this->longString);
    }

    public function testCountryException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setCountry($this->longString);
    }

    public function testPhoneException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setPhone($this->longString);
    }

    public function testCPFException()
    {
        $this->setExpectedException('Exception');

        $endUser = new EndUser('example@example.com');
        $endUser->setCPF($this->longString);
    }

    public function testLanguageException()
    {
        $this->setExpectedException('Exception', 'Invalid Language. Possible values are pt_BR, es_ES, en_US, pt_PT, tr_TR');

        $endUser = new EndUser('example@example.com');
        $endUser->setLanguage($this->longString);
    }

    public function testCharacterException()
    {
        $this->setExpectedException('Exception', 'Invalid Character or player login. Must be a non-empty string (max length of 100)');

        $endUser = new EndUser('example@example.com');
        $endUser->setCharacter($this->longString);
    }
}
