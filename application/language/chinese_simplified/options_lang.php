<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$lang['options_cloudlog_options'] = 'Cloudlog 设置';
$lang['options_message1'] = '本设置是针对所有用户的全局设置，会覆盖对于单个用户的设置。';

$lang['options_appearance'] = '外观';
$lang['options_theme'] = '主题';
$lang['options_global_theme_choice_this_is_used_when_users_arent_logged_in'] = '全局主题选择，当用户未登录时使用。';
$lang['options_public_search_bar'] = '公共搜索栏';
$lang['options_this_allows_non_logged_in_users_to_access_the_search_functions'] = '允许未登录的用户访问搜索功能。';
$lang['options_dashboard_notification_banner'] = '仪表盘通知栏';
$lang['options_this_allows_to_disable_the_global_notification_banner_on_the_dashboard'] = '禁用仪表板上的全局通知横幅。';
$lang['options_dashboard_map'] = '仪表盘的地图';
$lang['options_this_allows_the_map_on_the_dashboard_to_be_disabled_or_placed_on_the_right'] = '允许禁用仪表板上的地图或将其放置在右侧。';
$lang['options_logbook_map'] = '日志地图';
$lang['options_this_allows_to_disable_the_map_in_the_logbook'] = '允许禁用日志中的地图。';
$lang['options_theme_changed_to'] = '主题更改为 ';
$lang['options_global_search_changed_to'] = '全局搜索更改为 ';
$lang['options_dashboard_banner_changed_to'] = '仪表板横幅更改为 ';
$lang['options_dashboard_map_changed_to'] = '仪表板地图更改为 ';
$lang['options_logbook_map_changed_to'] = '日志地图更改为 ';

$lang['options_radios'] = '电台';
$lang['options_radio_settings'] = '电台设置';
$lang['options_radio_timeout_warning'] = '电台超时警告';
$lang['options_the_radio_timeout_warning_is_used_on_the_qso_entry_panel_to_alert_you_to_radio_interface_disconnects'] = '在QSO输入面板上使用无线电超时警告，提醒您无线电接口断开。';
$lang['options_this_number_is_in_seconds'] = '此数字以秒为单位。';
$lang['options_radio_timeout_warning_changed_to'] = '无线电超时警告更改为 ';

$lang['options_email'] = '电子邮件';
$lang['options_outgoing_protocol'] = '传出协议';
$lang['options_smtp_encryption'] = 'SMTP加密';
$lang['options_email_address'] = '电子邮件地址';
$lang['options_email_sender_name'] = '发件人姓名';
$lang['options_smtp_host'] = 'SMTP 主机';
$lang['options_smtp_port'] = 'SMTP 端口';
$lang['options_smtp_username'] = 'SMTP 用户名';
$lang['options_smtp_password'] = 'SMTP 密码';
$lang['options_crlf'] = 'CRLF';
$lang['options_newline'] = '新行';
$lang['options_outgoing_email_protocol_changed_to'] = '传出电子邮件协议更改为 ';
$lang['options_smtp_encryption_changed_to'] = 'SMTP 加密更改为 ';
$lang['options_email_address_changed_to'] = '电子邮件地址更改为 ';
$lang['options_email_sender_name_changed_to'] = '发件人姓名更改为 ';
$lang['options_smtp_host_changed_to'] = 'SMTP 主机更改为 ';
$lang['options_smtp_port_changed_to'] = 'SMTP 端口更改为 ';
$lang['options_smtp_username_changed_to'] = 'SMTP 用户名更改为';
$lang['options_smtp_password_changed_to'] = 'SMTP 密码更改为';
$lang['options_email_crlf_changed_to'] = '电子邮件 CRLF 更改为';
$lang['options_email_newline_changed_to'] = '电子邮件新行更改为';

$lang['options_oqrs'] = 'OQRS设置';
$lang['options_global_text'] = '全局文本';
$lang['options_this_text_is_an_optional_text_that_can_be_displayed_on_top_of_the_oqrs_page'] = '该文本是一个可选文本，可以显示在OQRS页面的顶部。';
$lang['options_grouped_search'] = '分组搜索';
$lang['options_when_this_is_on_all_station_locations_with_oqrs_active_will_be_searched_at_once'] = '当此选项打开时，所有具有OQRS活动的电台位置将同时搜索。';
$lang['options_oqrs_options_have_been_saved'] = 'OQRS选项已保存';

$lang['options_save'] = '保存';
$lang['options_dxcluster_provider'] = 'Provider of DXClusterCache';
$lang['options_dxcluster_longtext'] = 'The Provider of the DXCluster-Cache. You can set up your own Cache with <a href="https://github.com/int2001/DXClusterAPI">DXClusterAPI</a> or use a public one';
$lang['options_dxcluster_hint'] = 'URL of the DXCluster-Cache. e.g. https://dxc.jo30.de/dxcache';
$lang['options_dxcluster_settings'] = 'DXCluster';
$lang['options_dxcache_url_changed_to'] = 'DXCluster Cache URL changed to ';
$lang['options_dxcluster_maxage'] = 'Maximum Age of spots taken care of';
$lang['options_dxcluster_maxage_hint'] = 'The Age in Minutes of spots, that will be taken care at bandplan/lookup';
$lang['options_dxcluster_decont'] = 'Show spots which are spotted from following continent';
$lang['options_dxcluster_maxage_changed_to']='Maximum age of spots changed to ';
$lang['options_dxcluster_decont_changed_to']='de continent changed to ';
$lang['options_dxcluster_decont_hint']='Only spots by spotters from this continent are shown';

$lang['options_save'] = 'Save';

// Bands

$lang['options_bands'] = "Bands";
$lang['options_bands_text_ln1'] = "Using the band list you can control which bands are shown when creating a new QSO.";
$lang['options_bands_text_ln2'] = "Active bands will be shown in the QSO 'Band' drop-down, while inactive bands will be hidden and cannot be selected.";
$lang['options_bands_create'] = "Create a band";
$lang['options_bands_edit'] = "Edit Band";
$lang['options_bands_activate_all'] = "Activate All";
$lang['options_bands_activateall_warning'] = "Warning! Are you sure you want to activate all bands?";
$lang['options_bands_deactivate_all'] = "Deactivate All";
$lang['options_bands_deactivateall_warning'] = "Warning! Are you sure you want to deactivate all bands?";
$lang['options_bands_ssb_qrg'] = "SSB QRG";
$lang['options_bands_ssb_qrg_hint'] = "Frequency for SSB QRG in band (must be in Hz)";
$lang['options_bands_data_qrg'] = "DATA QRG";
$lang['options_bands_data_qrg_hint'] = "Frequency for DATA QRG in band (must be in Hz)";
$lang['options_bands_cw_qrg'] = "CW QRG";
$lang['options_bands_cw_qrg_hint'] = "Frequency for CW QRG in band (must be in Hz)";

$lang['options_bands_name_band'] = "Name of Band (E.g. 20m)";
$lang['options_bands_name_bandgroup'] = "Name of bandgroup (E.g. hf, vhf, uhf, shf)";
$lang['options_bands_delete_warning'] = "Warning! Are you sure you want to delete the following band: ";

