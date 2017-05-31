<?php

namespace ESF\EspaceAbonneBundle\Form\DataTransformer;

use ESF\EspaceAbonneBundle\Entity\T_Formation_Universite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class FormationToNumberTransformer implements DataTransformerInterface
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Transforms an object (formation) to a string (number).
     *
     * @param  T_Formation_Universite|null $formation
     * @return string
     */
    public function transform($formation)
    {
        if (null === $formation) {
            return '';
        }

        return $formation->getId();
    }

    /**
     * Transforms a string (number) to an object (formation).
     *
     * @param  string $formationNumber
     * @return T_Formation_Universite|null
     * @throws TransformationFailedException if object (formation) is not found.
     */
    public function reverseTransform($formationNumber)
    {
        // no formation number? It's optional, so that's ok
        if (!$formationNumber) {
            return;
        }

        $formation = $this->em
        ->getRepository('ESFEspaceAbonneBundle:T_Formation_Universite')
            // query for the formation with this id
        ->find($formationNumber)
        ;

        if (null === $formation) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An formation with number "%s" does not exist!',
                $formationNumber
                ));
        }

        return $formation;
    }
}