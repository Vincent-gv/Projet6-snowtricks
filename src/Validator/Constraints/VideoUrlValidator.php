<?php

namespace App\Validator\Constraints;

use App\Service\VideoPlatformService;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @Annotation
 */
class VideoUrlValidator extends ConstraintValidator
{
    /**
     * @var VideoPlatformService
     */
    private $videoPlatformService;

    public function __construct(VideoPlatformService $videoPlatformService)
    {
        $this->videoPlatformService = $videoPlatformService;
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof VideoUrl) {
            throw new UnexpectedTypeException($constraint, VideoUrl::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {
            throw new UnexpectedValueException($value, 'string');
        }

        if (!$this->videoPlatformService->verify($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
