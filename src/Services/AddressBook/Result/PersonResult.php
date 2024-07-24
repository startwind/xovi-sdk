<?php

namespace Xovi\Sdk\Services\AddressBook\Result;

class PersonResult
{
    private string $hash;
    private string $assignedOrganisationHash;
    private array $labels;
    private array $projects;
    private string $honorific;
    private string $firstname;
    private string $lastname;
    private string $function;
    private string $birthday;
    private string $costumerNumber;
    private string $description;
    private string $email;
    private string $email2;
    private string $phoneWork;
    private string $phonePrivate;
    private string $phoneMobile;
    private string $fax;
    private string $facebook;
    private string $twitter;
    private string $xing;
    private string $linkedin;

    public function __construct(
        string $hash,
        string $assignedOrganisationHash,
        array  $labels,
        array  $projects, string $honorific, string $firstname, string $lastname, string $function, string $birthday, string $costumerNumber, string $description, string $email, string $email2, string $phoneWork, string $phonePrivate, string $phoneMobile, string $fax, string $facebook, string $twitter, string $xing, string $linkedin)
    {
        $this->hash = $hash;
        $this->assignedOrganisationHash = $assignedOrganisationHash;
        $this->labels = $labels;
        $this->projects = $projects;
        $this->honorific = $honorific;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->function = $function;
        $this->birthday = $birthday;
        $this->costumerNumber = $costumerNumber;
        $this->description = $description;
        $this->email = $email;
        $this->email2 = $email2;
        $this->phoneWork = $phoneWork;
        $this->phonePrivate = $phonePrivate;
        $this->phoneMobile = $phoneMobile;
        $this->fax = $fax;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->xing = $xing;
        $this->linkedin = $linkedin;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getAssignedOrganisationHash(): string
    {
        return $this->assignedOrganisationHash;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function getProjects(): string
    {
        return $this->projects;
    }

    public function getHonorific(): string
    {
        return $this->honorific;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFunction(): string
    {
        return $this->function;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function getCostumerNumber(): string
    {
        return $this->costumerNumber;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEmail2(): string
    {
        return $this->email2;
    }

    public function getPhoneWork(): string
    {
        return $this->phoneWork;
    }

    public function getPhonePrivate(): string
    {
        return $this->phonePrivate;
    }

    public function getPhoneMobile(): string
    {
        return $this->phoneMobile;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function getFacebook(): string
    {
        return $this->facebook;
    }

    public function getTwitter(): string
    {
        return $this->twitter;
    }

    public function getXing(): string
    {
        return $this->xing;
    }

    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    public static function fromArray(array $array): self
    {
        if (!$array['assignedOrganisationHash']) {
            $array['assignedOrganisationHash'] = '';
        }

        if (!$array['labels']) {
            $array['labels'] = [];
        }

        return new self(
            $array['hash'],
            $array['assignedOrganisationHash'],
            $array['labels'],
            $array['projects'],
            $array['honorific'],
            $array['firstname'],
            $array['lastname'],
            $array['function'],
            $array['birthday'],
            $array['costumerNumber'],
            $array['description'],
            $array['email'],
            $array['email2'],
            $array['phoneWork'],
            $array['phonePrivate'],
            $array['phoneMobile'],
            $array['fax'],
            $array['facebook'],
            $array['twitter'],
            $array['xing'],
            $array['linkedin']
        );
    }
}
