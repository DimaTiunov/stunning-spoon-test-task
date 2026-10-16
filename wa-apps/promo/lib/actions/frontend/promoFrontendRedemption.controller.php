<?php

/**
 * JSON: карточка использования промокода.
 * URL: my/promo/<id>/
 *
 * Доступ проверяется в promoGuard (см. promoConfig).
 */
class promoFrontendRedemptionController extends waJsonController
{
    public function execute()
    {
        $id = waRequest::param('id', 0, 'int');

        $model = new promoRedemptionModel();
        $row = $model->getById($id);
        if (!$row) {
            throw new waException('Не найдено', 404);
        }

        $this->response = $row;
    }
}
