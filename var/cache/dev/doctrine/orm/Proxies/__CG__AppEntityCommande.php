<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \App\Entity\Commande implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'created_at' => [parent::class, 'created_at', null],
        "\0".parent::class."\0".'formedeboxe' => [parent::class, 'formedeboxe', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isPaid' => [parent::class, 'isPaid', null],
        "\0".parent::class."\0".'methode' => [parent::class, 'methode', null],
        "\0".parent::class."\0".'recapDetails' => [parent::class, 'recapDetails', null],
        "\0".parent::class."\0".'reference' => [parent::class, 'reference', null],
        "\0".parent::class."\0".'stripeSessionId' => [parent::class, 'stripeSessionId', null],
        "\0".parent::class."\0".'total' => [parent::class, 'total', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'adresse' => [parent::class, 'adresse', null],
        'created_at' => [parent::class, 'created_at', null],
        'formedeboxe' => [parent::class, 'formedeboxe', null],
        'id' => [parent::class, 'id', null],
        'isPaid' => [parent::class, 'isPaid', null],
        'methode' => [parent::class, 'methode', null],
        'recapDetails' => [parent::class, 'recapDetails', null],
        'reference' => [parent::class, 'reference', null],
        'stripeSessionId' => [parent::class, 'stripeSessionId', null],
        'total' => [parent::class, 'total', null],
        'user' => [parent::class, 'user', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
