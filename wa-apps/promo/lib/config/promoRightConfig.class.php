<?php

class promoRightConfig extends waRightConfig
{
    public function init()
    {
        // Сотрудник может просматривать промокоды в бэкенде
        $this->addItem('view_promo', 'Просмотр промокодов', 'checkbox');
    }
}
