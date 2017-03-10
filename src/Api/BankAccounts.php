<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    3.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Api;

class BankAccounts extends Sources
{
    /**
     * The source type.
     *
     * @var string
     */
    protected $sourceType = 'bank_account';

    /**
     * Verifies the given bank account.
     *
     * @param  string  $customer
     * @param  string  $bank
     * @param  array  $amounts
     * @param  string  $verificationMethod
     * @return array
     */
    public function verify($customer, $bank, array $amounts, $verificationMethod = null)
    {
        $parameters = [
            'amounts' => $amounts, 'verification_method' => $verificationMethod,
        ];

        return $this->_post("customers/{$customer}/sources/{$bank}/verify", $parameters);
    }
}
