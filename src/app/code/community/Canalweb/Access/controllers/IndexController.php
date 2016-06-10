<?php
class Canalweb_Access_IndexController extends Mage_Core_Controller_Front_Action
{

    public function rewritingAction()
    {
        $block = $this->getLayout()->createBlock('core/template');
        $block->setTemplate('access/rewriting.phtml');
        echo $block->toHtml();
    }

}
