<?php
class Customer {
    public string $forename;
    public string $surname;
    public array $accounts; // Step 2

    public function __construct(string $forename, string $surname, array $accounts) {
        $this->forename = $forename; // Step 3
        $this->surname = $surname; // Step 4
        $this->accounts = $accounts;
    }

    public function getFullName(): string {
        return $this->forename . ' ' . $this->surname; // Step 5
    }
}