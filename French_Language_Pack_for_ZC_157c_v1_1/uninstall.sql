DELETE FROM configuration WHERE configuration_key LIKE 'FRENCH_LANGUAGE_PACK_%';
DELETE FROM configuration_group WHERE configuration_group_title = 'French Language Pack Settings' LIMIT 1;
DELETE FROM admin_pages WHERE page_key IN ('configFrenchLanguagePack');