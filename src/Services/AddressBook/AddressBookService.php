<?php

namespace Xovi\Sdk\Services\AddressBook;

use Xovi\Sdk\Services\AddressBook\Result\PersonResult;
use Xovi\Sdk\Services\Service;

class AddressBookService extends Service
{
    protected const SERVICE = 'addressbook';

    private const METHOD_GET_ORGANISATIONS = 'getOrganisations';
    private const METHOD_GET_PERSONS = 'getPersons';
    private const METHOD_ADD_PERSON = 'addPerson';

    public function getOrganisations(): array
    {
        $result = $this->call(self::METHOD_GET_ORGANISATIONS);
        return $result;
    }

    /**
     * @return PersonResult[]
     */
    public function getPersons(): array
    {
        $result = $this->call(self::METHOD_GET_PERSONS);

        $persons = [];

        foreach ($result as $person) {
            $persons[] = PersonResult::fromArray($person);
        }

        return $persons;
    }


    public function addPerson(string $firstname, string $lastname, array $personaFields = []): string
    {
        $result = $this->callPost(self::METHOD_ADD_PERSON, ['firstname' => $firstname, 'lastname' => $lastname]);
        return $result['hash'];
    }
}
