<?php

class Dever_Sales_Block_Adminhtml_Bulk_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
		
        parent::__construct();
        $this->setId('dever_sales_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
		
    }
	
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('dever_sales/bulk')->getCollection();
		
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('dever_sales');

        $this->addColumn('id',
            array(
                'header'=> $helper->__('Id'),
                'type' => 'text',
                'index' => 'id',
                'width' => '50px'
            ));

        $this->addColumn('customer_email',
            array(
                'header'=> $helper->__('Customer Email'),
                'type'  => 'text',
                'index' => 'customer_email'
            ));

        $this->addColumn('items',
            array(
                'header'=> $helper->__('Items'),
                'type'  => 'text',
                'index' => 'items'
            ));

        $this->addColumn('firstname',
            array(
                'header'=> $helper->__('Firstname'),
                'type'  => 'text',
                'index' => 'firstname'
            ));

        $this->addColumn('lastname',
            array(
                'header'=> $helper->__('Lastname'),
                'type'  => 'text',
                'index' => 'lastname'
            ));

        $this->addColumn('order_id',
            array(
                'header'=> $helper->__('Order Id'),
                'type'  => 'text',
                'index' => 'order_id'
            ));

        $this->addColumn('status', array(
            'header'    => $helper->__('Status'),
            'width'     => '50px',
            'align'     => 'left',
            'index'     => 'status',
            'type'      => 'options',
            'options'   => array(
                'pending'      => $helper->__('Pending'),
                'initiate'     => $helper->__('Initiate'),
				'complete'      => $helper->__('Complete'),
                'error'     => $helper->__('Error'),
            ),
        ));

        $this->addColumn('import_dtime',
            array(
                'header'    =>  $helper->__('Import Time'),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'import_dtime',
                'is_system' => true,
            ));
		
		$this->addColumn('timestamp',
            array(
                'header'    =>  $helper->__('Ordered Time'),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'timestamp',
                'is_system' => true,
            ));
			
        return parent::_prepareColumns();
    }
}