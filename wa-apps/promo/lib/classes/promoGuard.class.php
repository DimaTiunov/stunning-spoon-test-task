<?php

/**
 * Проверка: можно ли клиенту применить промокод.
 */
class promoGuard
{
    /**
     * @param array $code
     * @param int $contact_id
     * @return bool
     */
    public static function canUse($code, $contact_id)
    {
        // TODO: срок, лимит и повторное применение
        return true;
    }
}
