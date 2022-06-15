<?php
	
	namespace Ak\PluginSortOrder\Plugin\Model;

	class NameBeforOne
	{
		public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			return "befor plugin 1 + ". $result; 
		}
	}