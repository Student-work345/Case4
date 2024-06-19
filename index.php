/*
The following copyright announcement can only be
appropriately modified or removed if the layout of
the site theme has been modified to distinguish
itself from the default Chainreaction-copyrighted
theme.
For more information please read the following
Frequently Asked Questions entry on the osCommerce
support site:
http://www.oscommerce.com/community.php/faq,26/q,50
Please leave this comment intact together with the
following copyright announcement.
*/
define('FOOTER_TEXT_BODY', '<center>
<span class="smallText">
<a href="http://kypi.ru" target="_blank"></a></a><br>
<a href="rss2_info.php"></a><br>
</span>
</center>');
require(DIR_WS_LANGUAGES . 'add_ccgvdc_russian.php');
/////////////////////////////////////////////////////////////////////
// HEADER.PHP
// Header Links
define('HEADER_LINKS_DEFAULT','Начало');
define('HEADER_LINKS_WHATS_NEW','Новинки');
define('HEADER_LINKS_SPECIALS','Скидки');
define('HEADER_LINKS_REVIEWS','Отзывы');
define('HEADER_LINKS_LOGIN','Войти');
define('HEADER_LINKS_LOGOFF','Выход');
define('HEADER_LINKS_PRODUCTS_ALL','Каталог');
define('HEADER_LINKS_ACCOUNT_INFO','Ваши данные');
define('HEADER_LINKS_CHECKOUT','Оформить заказ');
define('HEADER_LINKS_CART','Корзина');
define('HEADER_LINKS_DVD', 'Каталог товаров');
/////////////////////////////////////////////////////////////////////
// BOF: Lango added for print order mod
define('IMAGE_BUTTON_PRINT_ORDER', 'Версия для печати');
// EOF: Lango added for print order mod
// WebMakers.com Added: Attributes Sorter
require(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');
define('BOX_LOGINBOX_HEADING', 'Вход');
define('BOX_LOGINBOX_EMAIL', 'E-Mail:');
define('BOX_LOGINBOX_PASSWORD', 'Пароль:');
define('IMAGE_BUTTON_LOGIN', 'Войти');
define('BOX_HEADING_LOGIN_BOX_MY_ACCOUNT','Мои данные');
define('LOGIN_BOX_ACCOUNT_EDIT','Изменить данные');
define('LOGIN_BOX_ACCOUNT_HISTORY','История заказов');
define('LOGIN_BOX_ADDRESS_BOOK','Адресная книга');
define('LOGIN_BOX_PRODUCT_NOTIFICATIONS','Уведомления');
define('LOGIN_BOX_MY_ACCOUNT','Мои данные');
define('LOGIN_BOX_LOGOFF','Выход');
// VJ Guestbook for OSC v1.0 begin
define('BOX_INFORMATION_GUESTBOOK', 'Гостевая книга');
// VJ Guestbook for OSC v1.0 end
// VJ Guestbook for OSC v1.0 begin
define('GUESTBOOK_TEXT_MIN_LENGTH', '10'); //[TODO] move to config db table
define('JS_GUESTBOOK_TEXT', '* Поле \'Ваше сообщение\' должно содержать как минимум ' . GUESTBOOK_TEXT_MIN_LENGTH . ' символов.\n');
define('JS_GUESTBOOK_NAME', '* Вы должны заполнить поле \'Ваше имя\'.\n');
// VJ Guestbook for OSC v1.0 end
// VJ Guestbook for OSC v1.0 begin
define('TEXT_DISPLAY_NUMBER_OF_GUESTBOOK_ENTRIES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> записей)');
// VJ Guestbook for OSC v1.0 end
// VJ Guestbook for OSC v1.0 begin
define('IMAGE_BUTTON_SIGN_GUESTBOOK', 'Добавить запись');
// VJ Guestbook for OSC v1.0 end
// VJ Guestbook for OSC v1.0 begin
define('TEXT_GUESTBOOK_DATE_ADDED', 'Дата: %s');
define('TEXT_NO_GUESTBOOK_ENTRY', 'Пока нет ни одной записи в гостевой книге. Будьте первыми!');
// VJ Guestbook for OSC v1.0 end
define('DISCOUNT_HEADING', 'Скидки');
define('HELP', '<a href="http://web.icq.com/whitepages/message_me/1,,,00.icq?uin=' . STORE_OWNER_ICQ_NUMBER . '&action=message" target="_blank"><img src="http://status.icq.com/online.gif?icq=' . STORE_OWNER_ICQ_NUMBER . '&img=26" title="Статус ICQ" align="absmiddle" border="0">' . STORE_OWNER_ICQ_NUMBER . '</a>
<br>
');
define('ICQ', 'ICQ:<br>');
define('TEXT_MORE_INFO', 'Подробнее...');
// Article Manager
define('BOX_ALL_ARTICLES', 'Все статьи');
define('BOX_NEW_ARTICLES', 'Новые статьи');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> статей)');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES_NEW', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> новых статей)');
define('TABLE_HEADING_AUTHOR', 'Автор');
define('TABLE_HEADING_ABSTRACT', 'Резюме');
define('BOX_HEADING_AUTHORS', 'Авторы статей');
define('NAVBAR_TITLE_DEFAULT', 'Статьи');
define('TABLE_HEADING_INFO','Краткое описание');
//TotalB2B start
define('PRICES_LOGGED_IN_TEXT','Войдите в магазин, чтобы увидеть цены!');
//TotalB2B end
define('PRODUCTS_ORDER_QTY_TEXT','Количество: ');
define('PRODUCTS_ORDER_QTY_MIN_TEXT','<br>' . ' Минимум: ');
define('PRODUCTS_ORDER_QTY_MIN_TEXT_INFO','Минимум единиц для заказа: '); // order_detail.php
define('PRODUCTS_ORDER_QTY_MIN_TEXT_CART','Минимум единиц для заказа: '); // order_detail.php
define('PRODUCTS_ORDER_QTY_MIN_TEXT_CART_SHORT',' Минимум: '); // order_detail.php
define('PRODUCTS_ORDER_QTY_UNIT_TEXT',', Шаг: ');
define('PRODUCTS_ORDER_QTY_UNIT_TEXT_INFO','Шаг: '); // order_detail.php
define('PRODUCTS_ORDER_QTY_UNIT_TEXT_CART','Шаг: '); // order_detail.php
define('PRODUCTS_ORDER_QTY_UNIT_TEXT_CART_SHORT',' Шаг: '); // order_detail.php
define('ERROR_PRODUCTS_QUANTITY_ORDER_MIN_TEXT','');
define('ERROR_PRODUCTS_QUANTITY_INVALID','Вы пытаетесь положить в корзину неверное количество товара: ');
define('ERROR_PRODUCTS_QUANTITY_ORDER_UNITS_TEXT','');
define('ERROR_PRODUCTS_UNITS_INVALID','Вы пытаетесь положить в корзину неверное количество товара: ');
// Poll Box Text
define('_RESULTS', 'Результаты');
define('_VOTE', 'Голосовать');
define('_COMMENTS','Отзывов:');
define('_VOTES', 'Голосов:');
define('_NOPOLLS','Нет опросов');
define('_NOPOLLSCONTENT','На данный момент нет ни одного активного опроса, Вы можете посмотреть результаты всех проводившихся ранее опросов.<br><br><a href="pollbooth.php">['._POLLS.']');
define('IMAGE_BUTTON_PREVIOUS', 'Предыдущий товар');
define('IMAGE_BUTTON_NEXT', 'Следующий товар');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST', 'Вернуться к списку товаров');
define('PREV_NEXT_PRODUCT', 'Товар ');
define('PREV_NEXT_PRODUCT1', ' из ');
define('PREV_NEXT_CAT', ' категории ');
define('PREV_NEXT_MB', ' производителя ');
define('BOX_TEXT_DOWNLOAD', 'Ваши загрузки: ');
define('BOX_DOWNLOAD_DOWNLOAD', 'Загрузить файлы');
define('BOX_TEXT_DOWNLOAD_NOW', 'Загрузить');
// Русские названия боксов
define('BOX_HEADING_CATEGORIES', 'Продукция');
define('BOX_HEADING_INFORMATION', 'Информация');
define('BOX_HEADING_TEMPLATE_SELECT', 'Выбор дизайна');
define('BOX_HEADING_MANUFACTURERS', 'Производители');
define('BOX_HEADING_SPECIALS', 'Скидки');
define('BOX_HEADING_NEWSDESK_LATEST', 'Последние новости');
define('BOX_HEADING_SEARCH', 'Поиск');
define('BOX_HEADING_WHATS_NEW', 'Новинки');
define('BOX_HEADING_LANGUAGES', 'Язык');
define('BOX_HEADING_NEWSBOX', 'Новости');
define('BOX_HEADING_FEATURED', 'Рекомендуемые');
define('BOX_HEADING_SHOP_BY_PRICE', 'Сортировка по цене');
define('BOX_HEADING_NEWSDESK_CATEGORIES', 'Новости');
define('BOX_HEADING_ARTICLES', 'Статьи');
define('BOX_HEADING_AUTHORS', 'Авторы');
define('BOX_HEADING_LINKS', 'Обмен ссылками');
define('BOX_HEADING_SHOPPING_CART', 'Корзина');
define('BOX_HEADING_DOWNLOAD', 'Файлы');
define('BOX_HEADING_LOGIN', 'Вход');
define('HELP_HEADING', 'Консультант');
define('BOX_HEADING_WISHLIST', 'Отложенные товары');
define('BOX_HEADING_REVIEWS', 'Отзывы');
define('BOX_HEADING_CUSTOMER_ORDERS', 'История заказов');
define('BOX_HEADING_AFFILIATE', 'Заработай с нами');
define('BOX_HEADING_MANUFACTURER_INFO', 'Производитель');
define('BOX_HEADING_BESTSELLERS', 'Лучшие товары');
define('BOX_HEADING_TELL_A_FRIEND', 'Рассказать другу');
define('BOX_HEADING_NOTIFICATIONS', 'Уведомления');
define('BOX_HEADING_CURRENCIES', 'Валюта');
define('BOX_HEADING_FAQDESK_CATEGORIES', 'FAQ');
define('BOX_HEADING_FAQDESK_LATEST', 'Последние FAQ');
define('_POLLS', 'Опросы');
// Способы и стоимость доставки в корзине
define('SHIPPING_OPTIONS', 'Способы и стоимость доставки:');
if (strstr($PHP_SELF,'shopping_cart.php')) {
define('SHIPPING_OPTIONS_LOGIN', 'Пожалуйста, <a href="' . tep_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>войдите</u></a> в магазин, чтобы увидеть точную стоимость доставки Вашего заказа.');
} else {
define('SHIPPING_OPTIONS_LOGIN', 'Пожалуйста, войдите в магазин, чтобы увидеть способы и стоимость доставки Вашего заказа.');
}
define('SHIPPING_METHOD_TEXT','Способы доставки:');
define('SHIPPING_METHOD_RATES','Стоимость:');
define('SHIPPING_METHOD_TO','Адрес доставки: ');
define('SHIPPING_METHOD_TO_NOLOGIN', 'Адрес доставки: <a href="' . tep_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Войдите</u></a>');
define('SHIPPING_METHOD_FREE_TEXT','Бесплатная доставка');
define('SHIPPING_METHOD_ALL_DOWNLOADS','- Скачивания');
define('SHIPPING_METHOD_RECALCULATE','Рассчитать');
define('SHIPPING_METHOD_ZIP_REQUIRED','true');
define('SHIPPING_METHOD_ADDRESS','Адрес:');
define('SHIPPING_METHOD_QTY','Количество товара: ');
define('SHIPPING_METHOD_WEIGHT','Вес товара: ');
define('SHIPPING_METHOD_WEIGHT1',' кг.');
define('LOW_STOCK_TEXT1','Товар на складе заканчивается: ');
define('LOW_STOCK_TEXT2','Код товара: ');
define('LOW_STOCK_TEXT3','Текущее количество: ');
define('LOW_STOCK_TEXT4','Ссылка на товар: ');
define('LOW_STOCK_TEXT5','Текущее значение переменной Лимит количества товара на складе: ');
// wishlist box text in includes/boxes/wishlist.php
define('BOX_HEADING_CUSTOMER_WISHLIST', 'Отложенные товары');
define('TEXT_WISHLIST_COUNT', 'На данный момент отложено товаров: %s.');
define('BOX_TEXT_VIEW', 'Показать');
define('BOX_TEXT_HELP', 'Помощь');
define('BOX_WISHLIST_EMPTY', 'Нет отложенных товаров.');
define('BOX_TEXT_NO_ITEMS', 'Нет отложенных товаров.');
define('IMAGE_BUTTON_ADD_WISHLIST', 'Отложить');
define('TEXT_VERSION', 'Версия сборки: ');
define('TOTAL_QUERIES', 'Всего запросов: ');
define('TOTAL_TIME', 'Время исполнения: ');
// otf 1.71 defines needed for Product Option Type feature.
define('PRODUCTS_OPTIONS_TYPE_SELECT', 0);
define('PRODUCTS_OPTIONS_TYPE_TEXT', 1);
define('PRODUCTS_OPTIONS_TYPE_RADIO', 2);
define('PRODUCTS_OPTIONS_TYPE_CHECKBOX', 3);
define('PRODUCTS_OPTIONS_TYPE_TEXTAREA', 4);
define('TEXT_PREFIX', 'txt_');
define('PRODUCTS_OPTIONS_VALUE_TEXT_ID', 0); //Must match id for user defined "TEXT" value in db table TABLE_PRODUCTS_OPTIONS_VALUES
//include('includes/languages/english_support.php');
include('includes/languages/russian_newsdesk.php');
include('includes/languages/russian_faqdesk.php');
define('ENTRY_EXTRA_FIELDS_ERROR','Поле %s должно содержать как минимум %d символов');
define('CATEGORY_EXTRA_FIELDS', 'Дополнительная информация');
define('PRODUCT_EXTRA_FIELDS', 'Дополнительная информация о товаре');
define('TEXT_DISCOUNT', 'Ваша скидка: ');
define('NO_REVIEWS_TEXT', 'На данный момент нет ни одного отзыва.'); define('BOX_REVIEWS_HEADER_TEXT', 'Отзывы');
define('TEXT_VIEW_ALL_REVIEWS', 'Смотреть все отзывы');
define('ENTRY_CAPTCHA_ERROR', 'Вы неправильно указали код на картинке.');
?>
