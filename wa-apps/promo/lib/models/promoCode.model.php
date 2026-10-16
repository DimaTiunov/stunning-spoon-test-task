<?php

class promoCodeModel extends waModel
{
    protected $table = 'promo_code';

    /**
     * @param string $code
     * @return array|null
     */
    public function getByCode($code)
    {
        $sql = "SELECT * FROM {$this->table} WHERE code = '".$code."'";
        return $this->query($sql)->fetchAssoc();
    }
}
