<?php

/**
 * Страница «Мои промокоды» в личном кабинете.
 * URL: my/promo/
 */
class promoFrontendMyPromoAction extends waViewAction
{
    public function execute()
    {
        $model = new promoRedemptionModel();
        $this->view->assign('redemptions', $model->getByContact(wa()->getUser()->getId()));
    }
}
