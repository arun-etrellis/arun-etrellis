<?php

namespace Ak\PluginAfter\Plugin\Model;

class ExamplePlugin
	{
		public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			return $result . " + Ak_PluginAfter"; 
		}
	}