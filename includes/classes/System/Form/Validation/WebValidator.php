<?php

namespace System\Form\Validation;

use System\Databases\Objects\Web;

/**
 * Class AlbumValidator
 * @package System\Form\Validation
 */
class WebValidator implements Validator
{
    private array $errors = [];

    /**
     * AlbumValidator constructor.
     *
     * @param Album $album
     */
    public function __construct(private readonly Web $web)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->web->name == '') {
            $this->errors[] = 'Name cannot be empty';
        }
        if ($this->web->email == '') {
            $this->errors[] = 'Email cannot be empty';
        }
        if ($this->web->startDate == '') {
            $this->errors[] = 'Startdate cannot be empty';
        }
        if ($this->web->endDate == '') {
            $this->errors[] = 'Enddate cannot be empty';
        }
        if ($this->web->message == '') {
            $this->errors[] = 'Message cannot be empty';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
