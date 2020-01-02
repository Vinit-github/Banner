<?php 

namespace Xlab\Banner\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {

	const XML_PATH_XLAB_BANNER = 'xlab/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function isEnabled($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_XLAB_BANNER .'general/'. $code, $storeId);
	}


}