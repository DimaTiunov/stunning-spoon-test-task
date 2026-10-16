# Promo: промокоды для Webasyst

Учебное приложение для собеседования: клиент в личном кабинете применяет промокод, сотрудник смотрит промокоды в бэкенде.

## Структура

```
wa-apps/promo/
├── lib/
│   ├── config/        app.php, db.php, routing.php, права, конфиг приложения
│   ├── models/        promoCodeModel, promoRedemptionModel
│   ├── classes/       promoGuard
│   └── actions/
│       ├── frontend/  личный кабинет: список, применение, карточка
│       └── backend/   карточка промокода для сотрудника
├── templates/         Smarty-шаблон «Мои промокоды»
└── js/promo.js        поиск (jQuery)
```

## Маршруты личного кабинета

| URL | Обработчик |
|---|---|
| `my/promo/` | `promoFrontendMyPromoAction`, страница «Мои промокоды» |
| `my/promo/list/?q=` | `promoFrontendListController`, JSON-список использований с поиском |
| `my/promo/<id>/` | `promoFrontendRedemptionController`, JSON-карточка использования |
| `my/promo/apply/` | `promoFrontendApplyController`, применение кода (POST: `code`, `note`) |

Бэкенд: `promo/?module=backend&action=code&id=<id>`.

## Фреймворк

Исходники Webasyst: https://github.com/webasyst/webasyst-framework

## Задание

См. [TASK.md](TASK.md).
