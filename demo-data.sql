-- Тестовые данные. Контакты 1 и 2 — клиенты.

INSERT INTO promo_code (id, code, discount_percent, min_order, max_uses, used_count, expire_datetime) VALUES
(1, 'WELCOME10', 10, 1000.00, 100, 0, '2030-01-01 00:00:00'),
(2, 'OLD2020', 15, 0.00, 10, 0, '2020-12-31 23:59:59'),
(3, 'LAST1', 20, 0.00, 1, 0, '2030-01-01 00:00:00');

INSERT INTO promo_redemption (id, code_id, contact_id, note, discount, create_datetime) VALUES
(1, 1, 1, 'Первый заказ', 150.50, NOW()),
(2, 3, 2, '<img src=x onerror="alert(document.cookie)">', 99.99, NOW());
