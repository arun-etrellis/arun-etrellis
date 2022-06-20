<?php

namespace Ak\PluginBefore\Plugin\Model;

class ExamplePlugin
	{
		public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			return "Ak_PluginBefore + " . $result; 
		}
	}