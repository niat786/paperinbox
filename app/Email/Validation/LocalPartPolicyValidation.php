<?php

namespace App\Email\Validation;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Validation\EmailValidation;

class LocalPartPolicyValidation implements EmailValidation
{
    private ?InvalidEmail $error = null;

    /** @var array<int,string> */
    private array $warnings = [];

    public function isValid(string $email, EmailLexer $emailLexer): bool
    {
        $at = strrpos($email, '@');
        if ($at === false) {
            $this->setError('Missing "@"');

            return false;
        }

        $local = substr($email, 0, $at);
        if ($local === '') {
            $this->setError('Empty local part');

            return false;
        }

        // Allowed characters: letters, digits, . _ % + -
        if (! preg_match('/^[A-Za-z0-9._%+\-]+$/', $local)) {
            $this->setError('Invalid characters in local part');

            return false;
        }

        if ($local[0] === '.' || substr($local, -1) === '.') {
            $this->setError('Local part starts or ends with a dot');

            return false;
        }

        if (strpos($local, '..') !== false) {
            $this->setError('Consecutive dots in local part');

            return false;
        }

        if (strlen($local) > 64) {
            $this->setError('Local part exceeds 64 characters');

            return false;
        }

        return true;
    }

    public function getError(): ?InvalidEmail
    {
        return $this->error;
    }

    public function getWarnings(): array
    {
        return $this->warnings;
    }

    private function setError(string $message): void
    {
        $this->warnings[] = $message;
        $this->error = null;
    }
}
