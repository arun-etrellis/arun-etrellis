<?php

namespace Ak\PluginBefore\Plugin\Model;

class ExampleAfter
	{
		public function aftergetName(\Magento\Catalog\Model\Product $subject, $result) {
			return $result . "Ak_PluginAfter + "; 
		}
	}