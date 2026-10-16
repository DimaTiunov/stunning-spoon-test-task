<?php

/**
 * JSON: использования промокодов текущего клиента с поиском по примечанию.
 * URL: my/promo/list/?q=...
 */
class promoFrontendListController extends waJsonController
{
    public function execute()
    {
        $search = waRequest::get('q', '');

        $redemption_model = new promoRedemptionModel();
        $code_model = new promoCodeModel();

        $result = array();
        foreach ($redemption_model->getByContact(wa()->getUser()->getId(), $search) as $r) {
            $code = $code_model->getById($r['code_id']);
            $result[] = array(
                'id'       => $r['id'],
                'code'     => $code['code'],
                'note'     => $r['note'],
                'discount' => round($r['discount'], 2),
            );
        }

        $this->response = $result;
    }
}
