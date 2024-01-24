<?php

namespace System\Handlers;

use System\Form\Data;
use System\Form\Validation\WebValidator;

/**
 * Trait AlbumFillAndValidate
 * @package System\Handlers
 */
trait WebFillAndValidate
{
    public function executePostHandler(): void
    {
        if (isset($_POST['submit'])) {
            //Set form data
            $this->formData = new Data($_POST);

            //Override object with new variables
            $this->web->name = $this->formData->getPostVar('name');
            $this->web->email = $this->formData->getPostVar('email');
            $this->web->startDate = $this->formData->getPostVar('startDate');
            $this->web->endDate = $this->formData->getPostVar('endDate');
            $this->web->message = $this->formData->getPostVar('message');

            //Actual validation
            $validator = new WebValidator($this->web);
            $validator->validate();
            $this->errors = $validator->getErrors();
        }
    }
}
