<?php declare(strict_types=1);

namespace ApiGen\Annotation\Tests\AnnotationSubscriber\SeeAnnotationSubscriberSource;

final class PresentReturnedClass
{
    /**
     * @var string
     */
    public $someProperty;

    /**
     * @see $someProperty
     */
    public function someMethod(): void
    {
    }
}
