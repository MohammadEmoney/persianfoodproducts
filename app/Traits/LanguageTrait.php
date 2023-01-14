<?php

namespace App\Traits;

trait LanguageTrait
{
    public function getValueByLang($value, $field)
    {
        $pluralField = $field . 's';
        switch ($value) {
            case 'fa':
                return $this->pluralField->fa?->$value;
                break;
            case 'it':
                return $this->pluralField->it?->$value;
                break;

            default:
                $field->value;
                break;
        }
    }
}
