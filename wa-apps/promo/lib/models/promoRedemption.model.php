<?php

class promoRedemptionModel extends waModel
{
    protected $table = 'promo_redemption';

    /**
     * Использования клиента с поиском по примечанию.
     *
     * @param int $contact_id
     * @param string $search
     * @return array
     */
    public function getByContact($contact_id, $search = '')
    {
        $sql = "SELECT * FROM {$this->table}
                WHERE contact_id = ".(int) $contact_id;

        if ($search) {
            $sql .= " AND note LIKE '%".$search."%'";
        }

        $sql .= " ORDER BY id DESC";

        return $this->query($sql)->fetchAll();
    }
}
