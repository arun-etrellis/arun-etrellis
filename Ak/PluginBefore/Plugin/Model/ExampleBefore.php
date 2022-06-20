<?php

namespace Ak\PluginBefore\Plugin\Model;

class ExampleBefore
	{
		public function aftergetName(\Magento\Catalog\Model\Product $subject, $result) {
			return "Ak_PluginBefore + " . $result; 
		}
	}