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

class SubscriptionItems extends Api
{
    /**
     * Creates a new item an existing subscription.
     *
     * @param  string  $subscription
     * @param  string  $plan
     * @param  array  $parameters
     * @return array
     */
    public function create($subscription, $plan, array $parameters = [])
    {
        $parameters = array_merge($parameters, compact('plan', 'subscription'));

        return $this->_post('subscription_items', $parameters);
    }

    /**
     * Retrieves an existing subscription item.
     *
     * @param  string  $item
     * @return array
     */
    public function find($item)
    {
        return $this->_get("subscription_items/{$item}");
    }

    /**
     * Updates an existing subscription item.
     *
     * @param  string  $item
     * @param  array  $parameters
     * @return array
     */
    public function update($item, array $parameters = [])
    {
        return $this->_post("subscription_items/{$item}", $parameters);
    }

    /**
     * Deletes an existing subscription item.
     *
     * @param  string  $item
     * @return array
     */
    public function delete($item)
    {
        return $this->_delete("subscription_items/{$item}");
    }

    /**
     * Lists all subscription items.
     *
     * @param  string  $subscription
     * @param  array  $parameters
     * @return array
     */
    public function all($subscription, array $parameters = [])
    {
        $parameters = array_merge($parameters, compact('subscription'));

        return $this->_get('subscription_items', $parameters);
    }
}
