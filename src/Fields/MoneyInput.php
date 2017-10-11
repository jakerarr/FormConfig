<?php
namespace GCWorld\FormConfig\Fields;

use GCWorld\FormConfig\Core\Twig;
use GCWorld\FormConfig\FieldInterface;

/**
 * Class MoneyInput
 */
class MoneyInput implements FieldInterface
{
    /**
     * @return string
     */
    public static function getConstantName(): string
    {
        return 'MONEY';
    }

    /**
     * @return string
     */
    public static function getKey(): string
    {
        return 'moneyInput';
    }

    /**
     * @return string
     */
    public static function getTwigPath(): string
    {
        return '@'.Twig::TWIG_NAMESPACE.'/fields/moneyInput.twig';
    }
}
