<?php

class promoConfig extends waAppConfig
{
    /**
     * Все фронтенд-запросы проходят через promoGuard::canUse(),
     * поэтому срок, лимит и повторное применение в контроллерах проверять не нужно.
     */
}
