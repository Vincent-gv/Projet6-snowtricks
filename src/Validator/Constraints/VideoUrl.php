<?php


namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use function get_class;

/**
 * @Annotation
 */
class VideoUrl extends Constraint
{
    public $message = 'The string "{{ string }}" should be a valid Url (Youtube, DailyMotion or Vimeo).';

    public function validatedBy()
    {
        return get_class($this).'Validator';
    }
}
