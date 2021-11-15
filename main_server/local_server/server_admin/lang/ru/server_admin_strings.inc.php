<?php
/***********************************************************************/
/** \file   server_admin_strings.inc.php
 * \brief  The strings displayed in the server administration console (Russian)
 *
 * This file is part of the Basic Meeting List Toolbox (BMLT).
 *
 * Find out more at: https://bmlt.app
 *
 * BMLT is free software: you can redistribute it and/or modify
 * it under the terms of the MIT License.
 *
 * BMLT is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT License for more details.
 *
 * You should have received a copy of the MIT License along with this code.
 * If not, see <https://opensource.org/licenses/MIT>. */

defined('BMLT_EXEC') or die('Cannot Execute Directly');    // Makes sure that this file is in the correct context.

$comdef_server_admin_strings = array('server_admin_disclosure' => 'Администрирование сервера',
    'server_admin_naws_spreadsheet_label' => 'Обновленный список World ID:', // TODO: was changed to "Updated World Committee Codes Spreadsheet"
    'update_world_ids_button_text' => 'Обновление World ID собраний', // TODO: was changed to "'Update World Committee Codes"
    'update_world_ids_from_spreadsheet_dropdown_text' => 'Обновление World ID из таблицы NAWS', // TODO: was changed to "Update World Committee Codes (Group IDs from NAWS) from NAWS Spreadsheet"
    'server_admin_error_no_world_ids_updated' => 'Не найдено обновлений World ID . Это может быть связано с тем, что у вашего пользователя нет прав на обновление отправленных собраний.',
    'server_admin_error_required_spreadsheet_column' => 'Обязательный столбец не существует в электронной таблице: ',
    'server_admin_error_bmlt_id_not_integer' => 'Предоставленный bmlt_id не является целым числом: ',
    'server_admin_error_could_not_create_reader' => 'Не удалось создать reader для файла: ',
    'server_admin_error_no_files_uploaded' => 'Файлы не были загружены.',
    'server_admin_error_service_bodies_already_exist' => 'Сервисные органы со следующими  World ID уже существуют: ',
    'server_admin_error_meetings_already_exist' => 'Собрания со следующими World ID уже существуют: ',
    'server_admin_ui_num_meetings_updated' => 'Количество обновленных собраний: ',
    'server_admin_ui_num_meetings_not_updated' => 'Номера собраний, которые не нуждались в обновлении: ',
    'server_admin_ui_warning' => 'ПРЕДУПРЕЖДЕНИЕ',
    'server_admin_ui_errors' => 'Ошибка(и)',
    'server_admin_ui_deleted_meetings_marked' => 'Number of deleted meetings marked so that they won\'t appear in future NAWS exports: ',
    // TODO: re-translate this string (English version has been updated)
    // 'server_admin_ui_problem_meetings' => 'Собрания были найдены в таблице, которой не было в базе данных. Это могло произойти, если собрание удалено или не опубликовано.  Не достающие ID собраний : ',
    'server_admin_ui_problem_meetings' => 'meetings were found in the spreadsheet that couldn\'t be updated. Problem meeting IDs: ',
    'server_admin_ui_service_bodies_created' => 'Созданы сервисные органы: ',
    'server_admin_ui_meetings_created' => 'Собрания созданы: ',
    'server_admin_ui_users_created' => 'Пользователи создали: ',
    'server_admin_ui_refresh_ui_text' => 'Выйдите, а затем войдите снова, чтобы увидеть новые сервисные органы, пользователей и собрания.',
    'import_service_bodies_and_meetings_button_text' => 'Импорт собраний и органов обслуживания',
    'import_service_bodies_and_meetings_dropdown_text' => 'Импорт органов обслуживания и собраний из экспорта NAWS',
    'server_admin_naws_import_spreadsheet_label' => 'NAWS импортированные таблицы :',
    'server_admin_naws_import_initially_publish' => 'Initialize imported meetings to \'published\': ',
    'server_admin_naws_import_explanation' => 'Uncheck the box to initialize imported meetings to \'unpublished\'. (This is useful if many of the new meetings will need to be edited or deleted, and you don\'t want them showing up in the meantime.)',
    'account_disclosure' => 'Мой аккаунт',
    'account_name_label' => 'Имя аккаунта:',
    'account_login_label' => 'Мой логин:',
    'account_type_label' => 'Меня зовут:',
    'account_type_1' => 'Администратор сервера',
    'account_type_2' => 'Администратор орагана обслуживания',
    'ServerMapsURL' => 'https://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
    'account_type_4' => 'Жалкий Неудачник который даже не должен был иметь доступ к этой странице - Автор этого программного обеспечения - упырь!',
    'account_type_5' => 'Наблюдатель органа обслуживания:',
    'change_password_label' => 'Изменить мой пароль на:',
    'change_password_default_text' => 'Оставь это в покое, если не хочешь менять свой пароль',
    'account_email_label' => 'Мой электронный адрес:',
    'email_address_default_text' => 'Введите адрес электронной почты',
    'account_description_label' => 'Мое описание:',
    'account_description_default_text' => 'Введите описание',
    'account_change_button_text' => 'Изменить настройки моей учетной записи',
    'account_change_fader_success_text' => 'Информация об учетной записи была успешно изменена',
    'account_change_fader_failure_text' => 'Информация об учетной записи не была изменена',
    'meeting_editor_disclosure' => 'Редактор собраний',
    'meeting_editor_already_editing_confirm' => 'Вы в настоящее время редактируете другое собрание. Вы хотите потерять все изменения в этом собрании?',
    'meeting_change_fader_success_text' => 'Собрание успешно изменено',
    'meeting_change_fader_failure_text' => 'Собрание не было изменено',
    'meeting_change_fader_success_delete_text' => 'Собрание успешно удалено',
    'meeting_change_fader_fail_delete_text' => 'Собрание не было удалено',
    'meeting_change_fader_success_add_text' => 'Новое собрание успешно добавлено',
    'meeting_change_fader_fail_add_text' => 'Новое собрание не было добавлено',
    'meeting_text_input_label' => 'Поиск текста:',
    'access_service_body_label' => 'У меня есть доступ к:',
    'meeting_text_input_default_text' => 'Введите текст для поиска',
    'meeting_text_location_label' => 'Это местоположение или почтовый индекс',
    'meeting_search_weekdays_label' => 'Поиск выбранных будней:',
    'meeting_search_weekdays_names' => array('ВСЕ', 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'),
    'meeting_search_service_bodies_label' => 'Поиск в выбранных органах обслуживания:',
    'meeting_search_start_time_label' => 'Поиск по времени начала собрания:',
    'meeting_search_start_time_all_label' => 'Любое время',
    'meeting_search_start_time_morn_label' => 'Утро',
    'meeting_search_start_time_aft_label' => 'Днем',
    'meeting_search_start_time_eve_label' => 'Вечер',
    'meeting_search_no_results_text' => 'Собрания не найдены',
    'meeting_editor_tab_specifier_text' => 'Поиск собраний',
    'meeting_editor_tab_editor_text' => 'Редактировать собрания',   // TODO: change to 'Edit Or Create Meetings'
    'meeting_editor_create_new_text' => 'Создать новое собрание',
    'meeting_editor_location_map_link' => 'Карта местности',
    'meeting_editor_screen_match_ll_button' => 'Установите долготу и широту в адрес',
    'meeting_editor_screen_default_text_prompt' => 'Введите текст или число',
    'meeting_is_published' => 'Собрание опубликовано',
    'meeting_unpublished_note' => 'Примечание. Отмена публикации собрания означает временное закрытие. Если эта встреча закрыта навсегда, пожалуйста, удалите ее.',
    'meeting_editor_screen_meeting_name_label' => 'Название Собрания:',
    'meeting_editor_screen_meeting_name_prompt' => 'Введите название собрания',
    'meeting_editor_screen_meeting_weekday_label' => 'Будни:',
    'meeting_editor_screen_meeting_start_label' => 'Начало времени собрания:',
    'meeting_editor_screen_meeting_time_zone_label' => 'Meeting Time Zone:',
    'meeting_editor_screen_meeting_am_label' => '00:00 - 12:00',
    'meeting_editor_screen_meeting_pm_label' => '12:00 - 00:00',
    'meeting_editor_screen_meeting_noon_label' => 'Полдень',
    'meeting_editor_screen_meeting_midnight_label' => 'полночь',
    'meeting_editor_screen_meeting_duration_label' => 'Продолжительность:',
    'meeting_editor_screen_meeting_oe_label' => 'Открыто-закрыто',
    'meeting_editor_screen_meeting_cc_label' => 'Код мирового комитета:',
    'meeting_editor_screen_meeting_cc_advice' => 'Normally leave this field alone (see documentation).',  // TODO: translate
    'meeting_editor_screen_meeting_contact_label' => 'Контактный E-mail собрания',
    'meeting_editor_screen_meeting_contact_prompt' => 'Введите адрес электронной почты для контакта только для этого собрания',
    'meeting_editor_screen_meeting_sb_label' => 'Орган обслуживания:',
    'meeting_editor_screen_meeting_sb_default_value' => 'Нет выбранного органа обслуживания',
    'meeting_editor_screen_meeting_longitude_label' => 'Долгота:',
    'meeting_editor_screen_meeting_longitude_prompt' => 'Введите долготу',
    'meeting_editor_screen_meeting_latitude_label' => 'Широта',
    'meeting_editor_screen_meeting_latitude_prompt' => 'Введите широту',
    'meeting_editor_screen_meeting_location_label' => 'Расположение:',
    'meeting_editor_screen_meeting_location_prompt' => 'Введите название местоположения (например, название здания)',
    'meeting_editor_screen_meeting_info_label' => 'Дополнительная информация:',
    'meeting_editor_screen_meeting_info_prompt' => 'Введите любую дополнительную информацию о местоположении',
    'meeting_editor_screen_meeting_street_label' => 'Адрес улицы:',
    'meeting_editor_screen_meeting_street_prompt' => 'Введите адрес улицы',
    'meeting_editor_screen_meeting_neighborhood_label' => 'Окрестности:',
    'meeting_editor_screen_meeting_neighborhood_prompt' => 'Войдите в Район (Не Город или Подраздел Города)',
    'meeting_editor_screen_meeting_borough_label' => 'Район / Город Подраздел:',
    'meeting_editor_screen_meeting_borough_prompt' => 'Введите район или городской край (не соседний)',
    'meeting_editor_screen_meeting_city_label' => 'Город:',
    'meeting_editor_screen_meeting_city_prompt' => 'Название города (Не округ или городской округ)',
    'meeting_editor_screen_meeting_county_label' => 'Страна\республика:',
    'meeting_editor_screen_meeting_county_prompt' => 'Введите название страны или республики',
    'meeting_editor_screen_meeting_state_label' => 'Край\область',
    'meeting_editor_screen_meeting_state_prompt' => 'Введите название края или области',
    'meeting_editor_screen_meeting_zip_label' => 'Индекс / Почтовый индекс:',
    'meeting_editor_screen_meeting_zip_prompt' => 'Почтовый индекс',
    'meeting_editor_screen_meeting_nation_label' => 'Нация:',
    'meeting_editor_screen_meeting_nation_prompt' => 'Введите название нации',
    'meeting_editor_screen_meeting_comments_label' => 'Комментарии:',
    'meeting_editor_screen_meeting_train_lines_label' => 'Линии поезда:',
    'meeting_editor_screen_meeting_bus_lines_label' => 'Автобусные линии:',
    'meeting_editor_screen_meeting_phone_meeting_number_label' => 'Телефонный номер для набора номера:',
    'meeting_editor_screen_meeting_phone_meeting_number_prompt' => 'Введите телефонный номер для телефона или виртуального собрания',
    'meeting_editor_screen_meeting_virtual_meeting_link_label' => 'Ссылка на виртуальную встречу:',
    'meeting_editor_screen_meeting_virtual_meeting_link_prompt' => 'Введите ссылку для виртуальной встречи',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_label' => 'Virtual Meeting Additional Information:',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_prompt' => 'Enter any additional information for joining the virtual meeting, including directly from the app. For example, if the meeting uses Zoom, "Zoom ID: 456 033 8613, Passcode: 1953" would be appropriate.',
    'meeting_editor_screen_meeting_venue_type' => 'Venue Type:',
    'meeting_editor_screen_meeting_venue_type_inperson' => 'In-Person',
    'meeting_editor_screen_meeting_venue_type_virtual' => 'Virtual',
    'meeting_editor_screen_meeting_venue_type_virtualTC' => 'Virtual (temporarily replacing an in-person)',
    'meeting_editor_screen_meeting_venue_type_hybrid' => 'Hybrid (both in-person and virtual)',
    'meeting_editor_screen_meeting_venue_type_validation' => 'You must select a venue type.',
    'meeting_editor_screen_meeting_virtual_info_missing' => 'Virtual or hybrid meetings must have a Virtual Meeting Link, a Phone Meeting Dial-in Number, or Virtual Meeting Additional Information',
    'meeting_editor_screen_meeting_location_warning' => 'Meeting should have a location (at least a city/town and state/province, or a zip/postal code).',
    'meeting_editor_screen_meeting_address_warning' => 'In-person or hybrid meetings should have a street address.',
    'meeting_editor_screen_meeting_url_validation' => 'Virtual Meeting Link is not a valid URL.',
    'meeting_editor_screen_meeting_url_or_phone_warning' => 'Virtual or hybrid meetings should have either a Virtual Meeting Link or a Phone Meeting Dial-in Number',
    'meeting_editor_screen_meeting_additional_warning' => 'Please also fill in Virtual Meeting Additional Information if there is a Virtual Meeting Link.',
    'meeting_editor_screen_in_person_virtual_info_warning' => 'In-person meetings shouldn\'t have any virtual meeting information.',
    'meeting_editor_screen_meeting_virtual_location_info_warning' => 'Virtual meetings shouldn\'t have a location name or address.',
    'meeting_editor_screen_meeting_validation_warning' => 'There are warnings.  Are you sure you want to save anyway?  If not, press \'cancel\' and go to the Location tab to see the warnings in place and address them.',
    'meeting_editor_screen_meeting_validation_failed' => 'Unable to save due to input errors.  Please go to the Location tab to address them, and then retry saving.  Errors: ',
    'meeting_editor_screen_meeting_validation_warnings' => 'Input warnings shown on the Location tab: ',
    'meeting_editor_screen_meeting_contact_name_1_label' => 'Имя Контакта 1 :',
    'meeting_editor_screen_meeting_contact_email_1_label' => 'Электронная почта Контакта 1 :',
    'meeting_editor_screen_meeting_contact_phone_1_label' => 'Телефон Контакта 1 :',
    'meeting_editor_screen_meeting_contact_name_2_label' => 'Имя Контакта 2 :',
    'meeting_editor_screen_meeting_contact_email_2_label' => 'Электронная почта Контакта 2:',
    'meeting_editor_screen_meeting_contact_phone_2_label' => 'Телефон Контакта 2:',
    'meeting_editor_screen_meeting_publish_search_prompt' => 'Искать:',
    'meeting_editor_screen_meeting_publish_search_pub' => 'Только опубликованные Собрания',
    'meeting_editor_screen_meeting_publish_search_unpub' => 'Только неопубликованные Собрания',
    'meeting_editor_screen_meeting_visibility_advice' => 'Собрания которые не отображаются в обычном поиске.',
    'meeting_editor_screen_meeting_publish_search_all' => 'Все Собрания',
    'meeting_editor_screen_meeting_create_button' => 'Создать новое Собрание',
    'meeting_editor_screen_delete_button' => 'Удалить это Собрание',
    'meeting_editor_screen_delete_button_confirm' => 'Вы уверены, что хотите удалить это Собрание?',
    'meeting_editor_screen_cancel_button' => 'Отменить',
    'logout' => 'Выход',
    'meeting_editor_screen_cancel_confirm' => 'Вы уверены, что хотите отменить редактирование этого Собрания и потерять все изменения??',
    'meeting_lookup_failed' => 'Не удалось найти адрес.',
    'meeting_lookup_failed_not_enough_address_info' => 'Недостаточно информации действительного адреса для поиска.',
    'meeting_create_button_name' => 'Сохранить это как новое Собрание',
    'meeting_saved_as_a_copy' => 'Сохранить это Собрание как копию (Создает новое собрание)',
    'meeting_save_buttonName' => 'Сохранить изменения для этого Собрания',
    'meeting_editor_tab_bar_basic_tab_text' => 'Основной',
    'meeting_editor_tab_bar_location_tab_text' => 'Локация',
    'meeting_editor_tab_bar_format_tab_text' => 'Формат',
    'meeting_editor_tab_bar_other_tab_text' => 'Другое',
    'meeting_editor_tab_bar_history_tab_text' => 'История',
    'meeting_editor_result_count_format' => '%% Собраний найдено',
    'meeting_id_label' => 'ID Собрания:',
    'meeting_editor_default_zoom' => '13',
    'meeting_editor_default_weekday' => '2',
    'meeting_editor_default_start_time' => '20:30:00',
    'login_banner' => 'Панель инструментов основного списка Собраний',
    'login_underbanner' => 'Консоль администрирования корневого сервера',
    'login' => 'Login ID',
    'password' => 'Пароль',
    'button' => 'Логин',
    'cookie' => 'Вы должны включить куки для администрирования этого сервера.',
    'noscript' => 'Вы не можете администрировать этот сайт без JavaScript.',
    'title' => 'Пожалуйста, войдите, чтобы администрировать сервер.',
    'edit_Meeting_object_not_found' => 'ОШИБКА: Собрание не найдено.',
    'edit_Meeting_object_not_changed' => 'ОШИБКА: Собрание не изменилось.',
    'edit_Meeting_auth_failure' => 'Вы не авторизованы для редактирования этого Собрания.',
    'not_auth_1' => 'НЕ РАЗРЕШЕНО',
    'not_auth_2' => 'Вы не авторизованы для администрирования этого сервера.',
    'not_auth_3' => 'Возникла проблема с именем пользователя или паролем, которые вы ввели.',
    'email_format_bad' => 'Введенный вами адрес электронной почты был отформатирован неправильно.',
    'history_header_format' => '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
    'history_no_history_available_text' => '<h1 class="bmlt_admin_no_history_available_h1">Нет истории для этой встречи</h1>',
    'service_body_editor_disclosure' => 'Администрация органа обслуживания',
    'service_body_change_fader_success_text' => 'Орган ослуживания был успешно изменен',
    'service_body_change_fader_fail_text' => 'Не удалось изменить орган обслуживания',
    'service_body_editor_screen_sb_id_label' => 'ID:',
    'service_body_editor_screen_sb_name_label' => 'Имя:',
    'service_body_name_default_prompt_text' => 'Введите название этого органа обслуживания',
    'service_body_parent_popup_label' => 'Локальный комитет обслуживания:',
    'service_body_parent_popup_no_parent_option' => 'Без родителей (Верхний уровень)',
    'service_body_editor_screen_sb_admin_user_label' => 'Основной администратор:',
    'service_body_editor_screen_sb_admin_description_label' => 'Описание:',
    'service_body_description_default_prompt_text' => 'Введите описание этого органа обслуживания',
    'service_body_editor_screen_sb_admin_email_label' => 'Contact Email:',
    'service_body_email_default_prompt_text' => 'Введите контактный адрес электронной почты для этого органа обслуживания',
    'service_body_editor_screen_sb_admin_uri_label' => 'URL веб сайта:',
    'service_body_uri_default_prompt_text' => 'Введите URL веб-сайта для этого Органа обслуживания',
    'service_body_editor_screen_sb_admin_full_editor_label' => 'Редактирование полного списка собраний:',
    'service_body_editor_screen_sb_admin_full_editor_desc' => 'Эти пользователи могут редактировать любые собрания в этом Органе обслуживания.',
    'service_body_editor_screen_sb_admin_editor_label' => 'Редактор основного списка собраний:',
    'service_body_editor_screen_sb_admin_editor_desc' => 'Эти пользователи могут редактировать любые собрания в этом Органе обслуживания, но только если они не опубликованы.',
    'service_body_editor_screen_sb_admin_observer_label' => 'Наблюдатели:',
    'service_body_editor_screen_sb_admin_observer_desc' => 'Эти пользователи могут видеть скрытую информацию (например, адреса электронной почты), но не могут ничего редактировать.',
    'service_body_dirty_confirm_text' => 'Вы внесли изменения в этот Органа обслуживания. Вы хотите потерять свои изменения?',
    'service_body_save_button' => 'Сохранить эти изменения Органа обслуживания',
    'service_body_create_button' => 'Создать Орган обслуживания',
    'service_body_delete_button' => 'Удалить Орган обслуживания',
    'service_body_delete_perm_checkbox' => 'Удалить этот Орган обслуживания навсегда',
    'service_body_delete_button_confirm' => 'Вы уверены, что хотите удалить этот Орган обслуживания? Перед выполнением этой функции убедитесь, что все собрания удалены или переданы другому органу обслуживания.',
    'service_body_delete_button_confirm_perm' => 'Этот Орган обслуживания будет удален навсегда!',
    'service_body_change_fader_create_success_text' => 'Орган обслуживания был успешно создан',
    'service_body_change_fader_create_fail_text' => 'Не удалось создать Орган обслуживания',
    'service_body_change_fader_delete_success_text' => 'Орган обслуживания успешно удален',
    'service_body_change_fader_delete_fail_text' => 'Не удалось удалить Орган обслуживания',
    'service_body_change_fader_fail_no_data_text' => 'Не удалось изменить Орган обслуживания, Потому что не было предоставлено данных',
    'service_body_change_fader_fail_cant_find_sb_text' => 'Не удалось изменить Орган обслуживания, так как он небыли найден',
    'service_body_change_fader_fail_cant_update_text' => 'Не удалось изменить Орган обслуживания, Поскольку он не был обновлен',
    'service_body_change_fader_fail_bad_hierarchy' => 'Не удалось изменить Орган обслуживания, Поскольку выбранный владелец Органа обслуживания находится под этим сервисным органом, And Cannot Be Used',
    'service_body_cancel_button' => 'Восстановить в оригинал',
    'service_body_editor_type_label' => 'Тип Органа обслуживания:',
    'service_body_editor_type_c_comdef_service_body__GRP__' => 'Группа',
    'service_body_editor_type_c_comdef_service_body__COP__' => 'Co-Op',
    'service_body_editor_type_c_comdef_service_body__ASC__' => 'Комитет по территориальному обслуживанию',
    'service_body_editor_type_c_comdef_service_body__RSC__' => 'Конференция по Региональному обслуживанию',
    'service_body_editor_type_c_comdef_service_body__WSC__' => 'Всемирная Конференция по обслуживанию',
    'service_body_editor_type_c_comdef_service_body__MAS__' => 'Метро Площадь',
    'service_body_editor_type_c_comdef_service_body__ZFM__' => 'Зональный форум',
    'service_body_editor_type_c_comdef_service_body__GSU__' => 'Групповое подразделение обслуживания',
    'service_body_editor_type_c_comdef_service_body__LSU__' => 'Локальная служба',
    'service_body_editor_screen_helpline_label' => 'Телефон доверия:',
    'service_body_editor_screen_helpline_prompt' => 'Введите номер телефона горячей линии',
    'service_body_editor_uri_naws_format_text' => 'Получить собрания для этого органа обслуживания в NAWS-Совместимом файле',
    'edit_Meeting_meeting_id' => 'ID Собрания:',
    'service_body_editor_create_new_sb_option' => 'Создать новый Орган обслуживания',
    'service_body_editor_screen_world_cc_label' => 'Код Мирового Комитета:',
    'service_body_editor_screen_world_cc_prompt' => 'Введите код Мирового комитета',
    'user_editor_disclosure' => 'Администрирование пользователя',
    'user_editor_create_new_user_option' => 'Создать нового пользователя',
    'user_editor_screen_sb_id_label' => 'ID:',
    'user_editor_account_login_label' => 'Логин пользователя:',
    'user_editor_login_default_text' => 'Ввести Логин пользователя',
    'user_editor_account_type_label' => 'Пользователь это:',
    'user_editor_user_owner_label' => 'Принадлежит: ',
    'user_editor_account_type_1' => 'Администраторский сервер',
    'user_editor_account_type_2' => 'Админ Органа обслуживания',
    'user_editor_account_type_3' => 'Редактор Органа обслуживания',
    'user_editor_account_type_5' => 'Наблюдатель органа обслуживания',
    'user_editor_account_type_4' => 'Инвалидный пользователь',
    'user_editor_account_name_label' => 'Имя пользователя:',
    'user_editor_name_default_text' => 'Введите имя пользователя',
    'user_editor_account_description_label' => 'Описание:',
    'user_editor_description_default_text' => 'Введите описание пользователя',
    'user_editor_account_email_label' => 'Email:',
    'user_editor_email_default_text' => 'Введите Email пользователя',
    'user_change_fader_success_text' => 'Пользователь был успешно изменен',
    'user_change_fader_fail_text' => 'Не удалось изменить пользователя',
    'user_change_fader_create_success_text' => 'Пользователь был успешно создан',
    'user_change_fader_create_fail_text' => 'Не удалось создать пользователя',
    'user_change_fader_create_fail_already_exists' => 'Логин для пользователя, которого вы пытаетесь создать, уже существует.',
    'user_change_fader_delete_success_text' => 'Пользователь был успешно удален',
    'user_change_fader_delete_fail_text' => 'Ошибка удаления пользователя',
    'user_save_button' => 'Сохранить изменения для этого пользователя',
    'user_create_button' => 'Создать нового пользователя',
    'user_cancel_button' => 'Восстановить оригинал',
    'user_delete_button' => 'Удалить пользователя',
    'user_delete_perm_checkbox' => 'Удалить этого пользователя навсегда',
    'user_password_label' => 'Изменить пароль:',
    'user_new_password_label' => 'Установить пароль:',
    'user_password_default_text' => 'Оставьте это, если вы не хотите сменить пароль',
    'user_new_password_default_text' => 'Вы должны ввести пароль для нового пользователя',
    'user_dirty_confirm_text' => 'Вы внесли изменения в этого пользователя. Хотите потерять свои изменения?',
    'user_delete_button_confirm' => 'Вы уверены, что хотите удалить этого пользователя?',
    'user_delete_button_confirm_perm' => 'Этот пользователь будет удален навсегда!',
    'user_create_password_alert_text' => 'Новые пользователи должны иметь пароль. Вы не указали пароль для этого пользователя.',
    'user_change_fader_fail_no_data_text' => 'Не удалось изменить пользователя, поскольку данные не были предоставлены',
    'user_change_fader_fail_cant_find_sb_text' => 'Не удалось изменить пользователя, поскольку пользователь не найден',
    'user_change_fader_fail_cant_update_text' => 'Не удалось изменить пользователя, поскольку пользователь не был обновлен',
    'format_editor_disclosure' => 'Формат администрирования',
    'format_change_fader_change_success_text' => 'Формат был успешно изменен',
    'format_change_fader_change_fail_text' => 'Ошибка изменения формата',
    'format_change_fader_create_success_text' => 'Формат был успешно создан',
    'format_change_fader_create_fail_text' => 'Формат Создать не удалось',
    'format_change_fader_delete_success_text' => 'Формат был успешно удален',
    'format_change_fader_delete_fail_text' => 'Ошибка удаления формата',
    'format_change_fader_fail_no_data_text' => 'Не удалось изменить формат, поскольку не было предоставлено данных',
    'format_change_fader_fail_cant_find_sb_text' => 'Ошибка изменения формата, поскольку формат не найден',
    'format_change_fader_fail_cant_update_text' => 'Ошибка изменения формата, поскольку формат не был обновлен',
    'format_editor_name_default_text' => 'Введите очень краткое описание',
    'format_editor_description_default_text' => 'Введите более подробное описание',
    'format_editor_create_format_button_text' => 'Создать новый формат',
    'format_editor_cancel_create_format_button_text' => 'Отменить',
    'format_editor_create_this_format_button_text' => 'Создать формат',
    'format_editor_change_format_button_text' => 'Изменить формат',
    'format_editor_delete_format_button_text' => 'Удалить формат',
    'format_editor_reset_format_button_text' => 'Восстановить оригинал',
    'need_refresh_message_fader_text' => 'Вы должны обновить эту страницу перед использованием этого раздела',
    'need_refresh_message_alert_text' => 'Поскольку вы внесли изменения в Администрирование сервера, Администрирование тела службы, Администрирование пользователей или Администрирование формата, информация, отображаемая в этом разделе, может быть более неточной, поэтому необходимо обновить страницу. Самый простой способ сделать это - выйти, а затем снова войти.',
    'format_editor_delete_button_confirm' => 'Вы уверены, что хотите удалить этот формат?',
    'format_editor_delete_button_confirm_perm' => 'Этот формат будет удален навсегда!',
    'format_editor_missing_key' => 'This format should have an entry for every language (at least a key).',   // TODO: translate
    'format_editor_reserved_key' => 'This key is reserved for a venue type format - please use something different.',       // TODO: translate
    'min_password_length_string' => 'Пароль слишком короткий! Длина должна быть не менее % d символов!',
    'AJAX_Auth_Failure' => 'Авторизация не удалась для этой операции. Может быть проблема с конфигурацией сервера.',
    'Maps_API_Key_Warning' => 'Возникла проблема с ключом API Google Maps.',
    'Maps_API_Key_Not_Set' => 'Ключ API Google Maps не установлен.',
    'Observer_Link_Text' => 'Meeting Browser',
    'Data_Transfer_Link_Text' => 'Импорт данных собрания (ПРЕДУПРЕЖДЕНИЕ: заменяет текущие данные!)',
    'MapsURL' => 'https://maps.google.com/maps?q=##LAT##,##LONG##+(##NAME##)&amp;ll=##LAT##,##LONG##',
    'hidden_value' => 'Невозможно отобразить данные - Несанкционированно',
    'Value_Prompts' => array(
        'id_bigint' => 'ID собрания',
        'worldid_mixed' => 'World Services ID',
        'service_body' => 'Орган обслуживания',
        'service_bodies' => 'Органы обслуживания',
        'weekdays' => 'Будние дни',
        'weekday' => 'Собрание собирается каждый',
        'start_time' => 'Собрание начинается в',
        'duration_time' => 'Встреча длится',
        'location' => 'Местоположение',
        'duration_time_hour' => 'Час',
        'duration_time_hours' => 'Часы',
        'duration_time_minute' => 'Минута',
        'duration_time_minutes' => 'Минуты',
        'lang_enum' => 'Язык',
        'formats' => 'Форматы',
        'distance' => 'Расстояние от центра',
        'generic' => 'Собрание НА',
        'close_title' => 'Закрыть это окно сведений о собрании',
        'close_text' => 'Закрыть окно',
        'map_alt' => 'Собрание на карте',
        'map' => 'Посмотреть карту',
        'title_checkbox_unpub_meeting' => 'Эта встреча не опубликована. Это не видно при регулярных поисках.',
        'title_checkbox_copy_meeting' => 'Эта встреча является дубликатом другой встречи. Это также не опубликовано. Её не видно при регулярных поисках.'
    ),
    'world_format_codes_prompt' => 'NAWS формат:',
    'world_format_codes' => array(
        '' => 'Нет',
        'OPEN' => 'Открыть',
        'CLOSED' => 'Закрыть',
        'WCHR' => 'Доступно для инвалидов',
        'BEG' => 'Новичок',
        'BT' => 'Основной текст',
        'CAN' => 'искусственное освещение',
        'CPT' => '12 Концепций',
        'CW' => 'Добро пожаловать детям',
        'DISC' => 'Обсуждение/Участие',
        'GL' => 'Гей / Лесбиянка',
        'IP' => 'IP Обучение',
        'IW' => 'Это работает как и почему',
        'JFT' => 'Только сегодня',
        'LC' => 'Жить чистым',
        'LIT' => 'Изучение литературы',
        'M' => 'Мужчины',
        'MED' => 'Медитация',
        'NS' => 'Не курить',
        'QA' => 'Вопросы и ответы',
        'RA' => 'Ограниченный доступ',
        'S-D' => 'Speaker/Discussion', // TODO translate
        'SMOK' => 'Курение',
        'SPK' => 'Спикер',
        'STEP' => 'Шаг',
        'SWG' => 'Изучение работы по шагам',
        'TOP' => 'Тема',
        'TRAD' => 'Традиции',
        'VAR' => 'Формат Варьируется',
        'W' => 'Женщины',
        'Y' => 'Молодые люди',
        'LANG' => 'Альтернативные языки',
        'GP' => 'Руководящие принципы',
        'NC' => 'Без детей',
        'CH' => 'Закрытые праздники',
        'VM' => 'Virtual', // TODO translate
        'HYBR' => 'Virtual and In-Person', // TODO translate
        'TC' => 'Temporarily Closed Facility' // TODO translate
    ),
    'format_type_prompt' => 'Тип формата:',
    'format_type_codes' => array(
        '' => 'нет',
        'FC1' => 'Формат собрания (Спикерская, Изучение БТ, И так далее.)',
        'FC2' => 'Код местоположения (Доступно для инвалидов, Ограниченная парковка, и т.д.)',
        'FC3' => 'Общие потребности и ограничения (Мужское собрание, ЛГБТ, Без детей и т. Д.)',
        'O' => 'Посещаемость независимыми (Открыто, Закрыто)',
        'LANG' => 'Язык',
        'ALERT' => 'Формат должен быть особенно заметным (чистота и т. Д.)',
    ),

    'cookie_monster' => 'Этот сайт использует куки для хранения вашего предпочтительного языка.',
    'main_prompts' => array(
        'id_bigint' => 'ID',
        'worldid_mixed' => 'World ID',
        'shared_group_id_bigint' => 'неиспользуемый',
        'service_body_bigint' => 'Service Body ID',
        'weekday_tinyint' => 'Weekday',
        'venue_type' => 'Venue Type',
        'start_time' => 'Время начала',
        'duration_time' => 'Продолжительность',
        'time_zone' => 'Time Zone',
        'formats' => 'Форматы',
        'lang_enum' => 'Язык',
        'longitude' => 'Долгота',
        'latitude' => 'Широта',
        'published' => 'Опубликовано',
        'email_contact' => 'e-mail контакт',
    ),
    'check_all' => 'проверить все',
    'uncheck_all' => 'Снять все',
    'automatically_calculated_on_save' => 'Автоматически рассчитывается при сохранении.'
);

$email_contact_strings = array(
    'meeting_contact_form_subject_format' => "[Список контактов собраний] %",
    'meeting_contact_message_format' => "%s\n--\nЭто сообщение касается встречи, названной \"%s\", которые встречаются в %s, on %s.\nСсылка браузера: %s\nEdit Link: %s\nIt было отправлено непосредственно с веб-сервера списка собраний, а отправитель не знает ваш адрес электронной почты.\nПожалуйста, имейте в виду, что ответ откроет ваш адрес электронной почты.\nЕсли вы используете \"Ответить всем\", и есть несколько получателей электронной почты, вы можете выставлять адреса электронной почты других людей.\nПожалуйста, уважайте конфиденциальность и анонимность людей; включая оригинального отправителя этого сообщения."
);

$change_type_strings = array(
    '__THE_MEETING_WAS_CHANGED__' => 'Собрание изменено.',
    '__THE_MEETING_WAS_CREATED__' => 'Собрание создано.',
    '__THE_MEETING_WAS_DELETED__' => 'Собрание удалено.',
    '__THE_MEETING_WAS_ROLLED_BACK__' => 'Собрание откатилось до прошлой версии.',

    '__THE_FORMAT_WAS_CHANGED__' => 'Формат был изменен.',
    '__THE_FORMAT_WAS_CREATED__' => 'Формат был создан.',
    '__THE_FORMAT_WAS_DELETED__' => 'Формат был удален.',
    '__THE_FORMAT_WAS_ROLLED_BACK__' => 'Формат откатился до прошлой версии.',

    '__THE_SERVICE_BODY_WAS_CHANGED__' => 'Сервисное обслуживание изменено.',
    '__THE_SERVICE_BODY_WAS_CREATED__' => 'Сервисное обслуживание создано.',
    '__THE_SERVICE_BODY_WAS_DELETED__' => 'Сервисное обслуживание удалено.',
    '__THE_SERVICE_BODY_WAS_ROLLED_BACK__' => 'Сервисное обслуживание откатилось до прошлой версии.',

    '__THE_USER_WAS_CHANGED__' => 'Пользователь изменен.',
    '__THE_USER_WAS_CREATED__' => 'Пользователь создан.',
    '__THE_USER_WAS_DELETED__' => 'Пользователь удален.',
    '__THE_USER_WAS_ROLLED_BACK__' => 'Пользователь откатился до предыдущей версии.',

    '__BY__' => 'от',
    '__FOR__' => 'для'
);

$detailed_change_strings = array(
    'was_changed_from' => 'был изменен с',
    'to' => 'to',
    'was_changed' => 'был изменен',
    'was_added_as' => 'был добавлен как',
    'was_deleted' => 'был удален',
    'was_published' => 'Собрание было опубликовано',
    'was_unpublished' => 'Собрание было неопубликовано',
    'formats_prompt' => 'Формат собрания',
    'duration_time' => 'Продолжительность встречи',
    'start_time' => 'Время начала встречи',
    'longitude' => 'Долгота собрания',
    'latitude' => 'Широта собрания',
    'sb_prompt' => 'Собрания изменено следующим органом обслуживания',
    'id_bigint' => 'ID собрания',
    'lang_enum' => 'Язык собрания',
    'worldid_mixed' => 'Общий Group ID',  // TODO: translate The World Committee Code
    'weekday_tinyint' => 'День недели, в которую собирается собрание',
    'non_existent_service_body' => 'Сервисный орган больше не существует',
);

defined('_END_CHANGE_REPORT') or define('_END_CHANGE_REPORT', '.');
