<?php

return array(
    'promo_code' => array(
        'id'               => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'code'             => array('varchar', 64, 'null' => 0),
        'discount_percent' => array('int', 11, 'null' => 0, 'default' => '0'),
        'min_order'        => array('decimal', "15,2", 'null' => 0, 'default' => '0.00'),
        'max_uses'         => array('int', 11, 'null' => 0, 'default' => '1'),
        'used_count'       => array('int', 11, 'null' => 0, 'default' => '0'),
        'expire_datetime'  => array('datetime', 'null' => 0),
        ':keys'            => array(
            'PRIMARY' => 'id',
            'code'    => array('code', 'unique' => 1),
        ),
    ),
    'promo_redemption' => array(
        'id'              => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'code_id'         => array('int', 11, 'null' => 0),
        'contact_id'      => array('int', 11, 'null' => 0),
        'note'            => array('varchar', 255, 'null' => 0, 'default' => ''),
        'discount'        => array('decimal', "15,2", 'null' => 0, 'default' => '0.00'),
        'create_datetime' => array('datetime', 'null' => 0),
        ':keys'           => array(
            'PRIMARY'    => 'id',
            'contact_id' => 'contact_id',
            'code_id'    => 'code_id',
        ),
    ),
);
