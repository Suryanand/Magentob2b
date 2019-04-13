<?php
/**
 * Created by PhpStorm.
 * User: prabu
 * Date: 04/09/16
 * Time: 12:09 PM
 */
class Dever_Sales_Block_Adminhtml_Bulk extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'dever_sales';
        $this->_controller = 'adminhtml_bulk';
        $this->_headerText = Mage::helper('dever_sales')->__('Upload Log');
		$this->_addButtonLabel = Mage::helper('dever_sales')->__('Add New File');
		$url = str_replace('index.php','',Mage::getBaseUrl('web', true));
        $downloadurl = $url.'customReport/orderUploadLog.php';
        $this->_addButton('add_new', array(
			'label'   => "Download Log",
			'onclick' => "setLocation('$downloadurl')"
		));
        parent::__construct();
		
    }
} 