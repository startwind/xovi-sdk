<?php

namespace unit\Service;

use AbstractTestCase;
use Xovi\Sdk\Services\AddressBook\AddressBookService;

include_once __DIR__ . '/../AbstractTestCase.php';

class AddressBookTest extends AbstractTestCase
{
    public function testServiceCreation(): void
    {
        $service = $this->getService();
        $this->assertInstanceOf(AddressBookService::class, $service);
    }

    public function testAddPerson()
    {
        $personId = $this->getService()->addPerson('Nils', 'Langner');
        $this->assertEquals(32, strlen($personId));
    }

    private function getService(): AddressBookService
    {
        return $this->getClient()->getAddressBookService();
    }

    public function testGetOrganisations()
    {
        $result = $this->getService()->getOrganisations();
        $this->assertIsArray($result);
    }

    public function testGetPersons()
    {
        $result = $this->getService()->getPersons();
        $this->assertIsArray($result);

        $this->assertGreaterThan(1, count($result));

        $this->assertEquals('Nils', $result[0]->getFirstname());
        $this->assertEquals('Langner', $result[0]->getLastname());
    }
}
