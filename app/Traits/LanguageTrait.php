<?php

namespace App\Traits;

trait LanguageTrait
{
    public function getValueByLang($field, $lang)
    {
        $pluralField = $field . 's';
        switch ($lang) {
            case 'fa':
                return $this->$pluralField?->fa;
                break;
            case 'it':
                return $this->$pluralField?->it;
                break;

            default:
                $this->$field;
                break;
        }
    }
}
