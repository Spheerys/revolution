<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Будь ласка, зв\'яжіться з адміністратором сайту і сповістіть його про це повідомлення!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'Налаштування контексту allow_tags_in_post включене поза межами `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Налаштування контексту allow_tags_in_post у Вашій установці увімкнене поза межами контексту mgr. MODX рекомендує вимкнути це налаштування, якщо Вам не потрібно явно дозволяти користувачам надсилати теги MODX, числові об\'єкти або HTML-теги через метод POST у формах на Вашому сайті. Як правило, це повинно бути вимкнене скрізь окрім контексту mgr.';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'Системне налаштування allow_tags_in_post увімкнене';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Системне налаштування allow_tags_in_post увімкнене у Вашій установці. MODX рекомендує вимкнути це налаштування, якщо Вам не потрібно явно дозволяти користувачам надсилати теги MODX, числові об\'єкти або HTML-теги через метод POST у формах на Вашому сайті. Для деяких контекстів бажано, щоб цей параметр було увімкнено у їх налаштуваннях контексту.';
$_lang['configcheck_cache'] = 'Каталог кешу не доступний для запису';
$_lang['configcheck_cache_msg'] = 'MODX не може записувати у каталог кешу. MODX буде працювати як і очікувалося, але без функції кешування. Щоб вирішити цю проблему, зробіть каталог /_cache/ доступним для запису.';
$_lang['configcheck_configinc'] = 'Конфігураційний файл досі доступний для запису!';
$_lang['configcheck_configinc_msg'] = 'Ваш сайт вразливий для хакерів, які можуть нанести йому серйозну шкоду. Будь ласка, зробіть Ваш конфігураційний файл доступним лише для читання! Якщо Ви не є адміністратором сайту, будь ласка, зв\'яжіться з адміністратором і сповістіть його про це повідомлення! Файл знаходиться у [[+path]]';
$_lang['configcheck_default_msg'] = 'Було знайдено невідоме попередження. Це дивно.';
$_lang['configcheck_errorpage_unavailable'] = 'Сторінка помилки 404 "Документ не знайдений" недоступна.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Це означає, що сторінка помилки 404 "Документ не знайдено" не доступна для відвідувачів Вашого сайту. Це може призвести до виникнення умов для рекурсивного зациклювання та появи числених помилок у логах Вашого сайту. Переконайтеся, що цій сторінці не призначено жодних груп веб-користувачів.';
$_lang['configcheck_errorpage_unpublished'] = 'Сторінка помилки 404 "Документ не знайдений", що вказана у налаштуваннях системи, не опублікована або не існує.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Це означає, що сторінка 404 помилки "Документ не знайдений" недоступна для відвідувачів сайту. Опублікуйте цю сторінку або переконайтеся, що її ідентифікатор правильно вказаний у налаштуваннях системи.';
$_lang['configcheck_htaccess'] = 'Каталог ядра у відкритому доступі ';
$_lang['configcheck_htaccess_msg'] = 'MODX detected that your core folder is (partially) accessible to the public.
<strong>This is not recommended and a security risk.</strong>
If your MODX installation is running on a Apache webserver
you should at least set up the .htaccess file inside the core folder <em>[[+fileLocation]]</em>.
This can be easily done by renaming the existing ht.access example file there to .htaccess.
<p>There are other methods and webservers you may use, please read the <a href="https://docs.modx.com/3.x/en/getting-started/maintenance/securing-modx">Hardening MODX Guide</a>
for further information about securing your site.</p>
If you setup everything correctly, browsing e.g. to the <a href="[[+checkUrl]]" target="_blank">Changelog</a>
should give you a 403 (permission denied) or better a 404 (not found). If you can see the changelog
there in the browser, something is still wrong and you need to reconfigure or call an expert to solve this.';
$_lang['configcheck_images'] = 'Каталог зображень недоступний для запису';
$_lang['configcheck_images_msg'] = 'Каталог зображень недоступний для запису або не існує. Це означає, що функції управління зображеннями не працюватимуть!';
$_lang['configcheck_installer'] = 'Каталог з програмою установки не був видалений';
$_lang['configcheck_installer_msg'] = 'The setup/ directory contains the installer for MODX. Just imagine what might happen if an evil person finds this folder and runs the installer! They probably won\'t get too far, because they\'ll need to enter some user information for the database, but it\'s still best to delete this folder from your server. It is located at: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Неправильна кількість записів у мовному файлі';
$_lang['configcheck_lang_difference_msg'] = 'Кількість записів у вибраній мові відрізняється від кількості записів у мові за замовчуванням. Хоча це не обов\'язково може бути проблемою, але це привід для оновлення мовних файлів.';
$_lang['configcheck_notok'] = 'У налаштуванні системи присутні помилки: ';
$_lang['configcheck_ok'] = 'Перевірка пройшла успішно — попереджень немає.';
$_lang['configcheck_phpversion'] = 'Версія PHP застаріла ';
$_lang['configcheck_phpversion_msg'] = 'Ваша версія PHP [[+phpversion]] більше не підтримується спільнотою PHP-розробників. Це означає, що оновлення безпеки недоступні. Також є ймовірність, що MODX або додаткові пакети вже зараз або в найближчому майбутньому більше не будуть підтримувати цю версію. Будь ласка, поновіть середу принаймні до PHP [[+phprequired]] якомога швидше для забезпечення безпеки вашого сайту. ';
$_lang['configcheck_register_globals'] = '"register_globals" встановлено в ON у Вашому конфігураційному файлі php.ini';
$_lang['configcheck_register_globals_msg'] = 'Ця конфігурація робить Ваш сайт значно більш вразливим до нападів Cross SIte Scripting (XSS). Зв\'яжіться з представниками Вашого хостингу і дізнайтеся, як можна усунути цю проблему.';
$_lang['configcheck_title'] = 'Перевірка конфігурації';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Сторінка помилка 403 "Доступ заборонено" не опублікована або не існує.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Це означає, що сторінка "Доступ заборонено" не доступна для відвідувачів Вашого сайту або не існує. Це може призвести до виникнення умов для рекурсивного зациклювання та появи числених помилок у логах Вашого сайту. Переконайтеся, що цій сторінці не призначено жодних груп веб-користувачів.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Сторінка помилки 403 "Доступ заборонено", вказана у налаштуваннях системи, не опублікована.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Це означає, що сторінка "Доступ заборонено" не доступна для широкого загалу. Опублікуйте цю сторінку або перевірте, чи вірно вказано її ідентифікатор у налаштуваннях системи.';
$_lang['configcheck_warning'] = 'Попередження щодо конфігурації:';
$_lang['configcheck_what'] = 'Що це означає?';
