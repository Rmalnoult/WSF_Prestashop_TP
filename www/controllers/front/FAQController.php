<?php

class FAQControllerCore extends FrontController
{
    public function init()
    {
        parent::init();

        $questions = [
            'Est ce que tous vos articles sont en stock ?' => 'Les articles les plus vendus sont en stock.',
            'Je ne trouve pas la réponse à mes questions, comment faire ?' => 'Cliquez sur contact et envoyez nous un mail.',
        ];
        $this->context->smarty->assign([
            'questions' => $questions,
        ]);


    }
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate(_PS_THEME_DIR_.'faq.tpl');
    }
}
