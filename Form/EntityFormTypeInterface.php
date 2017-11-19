<?php

namespace Infinite\FormBundle\Form;

/**
 * Interface EntityFormTypeInterface
 *
 * @package   Infinite\FormBundle\Form\EventListener
 * @author    Andraž Jalovec <andraz.jalovec@gmail.com>
 */
interface EntityFormTypeInterface
{
    /**
     * @return string
     */
    public function getFormType();
}
