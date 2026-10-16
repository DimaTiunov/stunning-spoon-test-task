<?php

/**
 * JSON: карточка промокода для сотрудника в бэкенде.
 * URL: promo/?module=backend&action=code&id=<id>
 */
class promoBackendCodeController extends waJsonController
{
    public function execute()
    {
        $id = waRequest::get('id', 0, 'int');

        $model = new promoCodeModel();
        $code = $model->getById($id);
        if (!$code) {
            throw new waException('Промокод не найден', 404);
        }

        $this->response = $code;
    }
}
