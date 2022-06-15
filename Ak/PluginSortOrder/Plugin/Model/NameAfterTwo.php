<?php
	
	namespace Ak\PluginSortOrder\Plugin\Model;

	class NameAfterTwo
	{
		public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			return $result." + after plugin 2"; 
		}
	}