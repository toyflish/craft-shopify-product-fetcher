<?php

namespace shopify\variables;


class ShopifyVariables
{
	public function getProducts($options = array())
	{
		return \shopify\Shopify::getInstance()->service->getProducts($options);
	}

	public function getProductById($options = array())
	{
		return \shopify\Shopify::getInstance()->service->getProductById($options);
	}

	public function getCustomerCart() 
	{
		return \shopify\Shopify::getInstance()->service->getCustomerCart();
	}

	public function getSettings() 
	{
        return \shopify\Shopify::getInstance()->getSettings();
	}
}