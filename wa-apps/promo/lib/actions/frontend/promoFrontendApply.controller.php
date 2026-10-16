<?php

/**
 * JSON: применение промокода клиентом.
 * URL: my/promo/apply/ (POST: code, note)
 *
 * Срок, лимит и повторное применение проверяет promoGuard::canUse().
 */
class promoFrontendApplyController extends waJsonController
{
    public function execute()
    {
        // берём только нужные поля, как в новых версиях фреймворка
        $input = waRequest::only(array('code', 'note'));

        $code_model = new promoCodeModel();
        $code = $code_model->getByCode($input['code']);
        if (!$code) {
            throw new waException('Промокод не найден', 404);
        }

        $contact_id = wa()->getUser()->getId();
        if (!promoGuard::canUse($code, $contact_id)) {
            throw new waException('Промокод недоступен', 403);
        }

        $redemption_model = new promoRedemptionModel();
        $data = waRequest::post();
        $data['code_id'] = $code['id'];
        $data['contact_id'] = $contact_id;
        $data['create_datetime'] = date('Y-m-d H:i:s');
        $id = $redemption_model->insert($data);

        $code_model->updateById($code['id'], array('used_count' => $code['used_count'] + 1));

        $this->response = $redemption_model->getById($id);
    }
}
