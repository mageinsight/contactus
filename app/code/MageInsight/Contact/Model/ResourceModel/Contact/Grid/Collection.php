<?php

namespace MageInsight\Contact\Model\ResourceModel\Contact\Grid;

class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    protected function _initSelect()
    {
        parent::_initSelect();
        $this->addFilterToMap("contact_id", "main_table.contact_id");
        return $this;
    }
}
