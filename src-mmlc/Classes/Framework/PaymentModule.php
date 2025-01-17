<?php

/**
 * Stripe integration for modified
 *
 * You can find informations about system classes and development at:
 * https://docs.module-loader.de
 *
 * @author  Robin Wieschendorf <mail@robinwieschendorf.de>
 * @author  Jay Trees <stripe@grandels.email>
 * @link    https://github.com/RobinTheHood/modified-stripe/
 *
 * @phpcs:disable PSR1.Methods.CamelCapsMethodName
 */

declare(strict_types=1);

namespace RobinTheHood\Stripe\Classes\Framework;

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

/**
 * In this class we have outsourced everything that is not for a specific modified PaymentModule. The methods in
 * this class can be useful for all kinds of PaymentModule classes.
 *
 * In addition, this class implements all methods that a payment module requires. This has the advantage that we
 * don't have to implement all the methods when we inherit from this PaymentModule class. We can only implement what
 * we need in a specific modified PaymentModule.
 *
 * The class also implements the PaymentModuleInterface interface. This isn't technically necessary, but is good OOP
 * style.
 */
class PaymentModule extends StdModule implements PaymentModuleInterface
{
    /**
     * Internal helper function used in install(). This simplifies using modifieds setFunction to configure settings.
     * //NOTE: Can eventually be replaced with a method from a newer StdModule.
     *
     * @param string $function A base64 encodes string of a calllable function
     *
     * @return string
     *
     * @see payment_rth_stripe::install
     */
    public static function setFunction($function, $value, $option): string
    {
        return call_user_func(base64_decode($function), $value, $option);
    }

    public function addKeys(array $keys): void
    {
        foreach ($keys as $key) {
            $this->addKey($key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function update_status(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function pre_confirmation_check(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function selection(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function confirmation(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function process_button(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function before_process(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function payment_action(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function before_send_order(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function after_process(): void
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function success(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function get_error(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function iframeAction(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function javascript_validation(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function create_paypal_link()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function info()
    {
        return;
    }
}
