<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:1332:"SELECT x0_.moduleID AS moduleID_0, x0_.name AS name_1, x0_.author AS author_2, x0_.authorEmail AS authorEmail_3, x0_.enabled AS enabled_4, x0_.installed AS installed_5, x0_.yamlLoaded AS yamlLoaded_6, x0_.date AS date_7, x0_.rating AS rating_8, x0_.votes AS votes_9, x0_.downloads AS downloads_10, x0_.price AS price_11, x0_.currency AS currency_12, x0_.majorVersion AS majorVersion_13, x0_.minorVersion AS minorVersion_14, x0_.build AS build_15, x0_.minorRequiredCoreVersion AS minorRequiredCoreVersion_16, x0_.revisionDate AS revisionDate_17, x0_.packSize AS packSize_18, x0_.xcnPlan AS xcnPlan_19, x0_.moduleName AS moduleName_20, x0_.authorName AS authorName_21, x0_.description AS description_22, x0_.iconURL AS iconURL_23, x0_.pageURL AS pageURL_24, x0_.authorPageURL AS authorPageURL_25, x0_.dependencies AS dependencies_26, x0_.tags AS tags_27, x0_.fromMarketplace AS fromMarketplace_28, x0_.isLanding AS isLanding_29, x0_.landingPosition AS landingPosition_30, x0_.isSystem AS isSystem_31, x0_.hasLicense AS hasLicense_32, x0_.editionState AS editionState_33, x0_.editions AS editions_34, x0_.xbProductId AS xbProductId_35, x0_.isSkin AS isSkin_36, x0_.private AS private_37 FROM xc_modules x0_ WHERE x0_.installed = ? AND x0_.isSystem = ? AND (x0_.moduleName LIKE ? OR x0_.description LIKE ?) GROUP BY x0_.name, x0_.author";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":17:{s:7:"isMixed";b:0;s:8:"isSelect";b:1;s:8:"aliasMap";a:1:{s:1:"m";s:18:"XLite\Model\Module";}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:38:{s:10:"moduleID_0";s:8:"moduleID";s:6:"name_1";s:4:"name";s:8:"author_2";s:6:"author";s:13:"authorEmail_3";s:11:"authorEmail";s:9:"enabled_4";s:7:"enabled";s:11:"installed_5";s:9:"installed";s:12:"yamlLoaded_6";s:10:"yamlLoaded";s:6:"date_7";s:4:"date";s:8:"rating_8";s:6:"rating";s:7:"votes_9";s:5:"votes";s:12:"downloads_10";s:9:"downloads";s:8:"price_11";s:5:"price";s:11:"currency_12";s:8:"currency";s:15:"majorVersion_13";s:12:"majorVersion";s:15:"minorVersion_14";s:12:"minorVersion";s:8:"build_15";s:5:"build";s:27:"minorRequiredCoreVersion_16";s:24:"minorRequiredCoreVersion";s:15:"revisionDate_17";s:12:"revisionDate";s:11:"packSize_18";s:8:"packSize";s:10:"xcnPlan_19";s:7:"xcnPlan";s:13:"moduleName_20";s:10:"moduleName";s:13:"authorName_21";s:10:"authorName";s:14:"description_22";s:11:"description";s:10:"iconURL_23";s:7:"iconURL";s:10:"pageURL_24";s:7:"pageURL";s:16:"authorPageURL_25";s:13:"authorPageURL";s:15:"dependencies_26";s:12:"dependencies";s:7:"tags_27";s:4:"tags";s:18:"fromMarketplace_28";s:15:"fromMarketplace";s:12:"isLanding_29";s:9:"isLanding";s:18:"landingPosition_30";s:15:"landingPosition";s:11:"isSystem_31";s:8:"isSystem";s:13:"hasLicense_32";s:10:"hasLicense";s:15:"editionState_33";s:12:"editionState";s:11:"editions_34";s:8:"editions";s:14:"xbProductId_35";s:11:"xbProductId";s:9:"isSkin_36";s:6:"isSkin";s:10:"private_37";s:7:"private";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:0:{}s:14:"entityMappings";a:1:{s:1:"m";N;}s:12:"metaMappings";a:0:{}s:14:"columnOwnerMap";a:38:{s:10:"moduleID_0";s:1:"m";s:6:"name_1";s:1:"m";s:8:"author_2";s:1:"m";s:13:"authorEmail_3";s:1:"m";s:9:"enabled_4";s:1:"m";s:11:"installed_5";s:1:"m";s:12:"yamlLoaded_6";s:1:"m";s:6:"date_7";s:1:"m";s:8:"rating_8";s:1:"m";s:7:"votes_9";s:1:"m";s:12:"downloads_10";s:1:"m";s:8:"price_11";s:1:"m";s:11:"currency_12";s:1:"m";s:15:"majorVersion_13";s:1:"m";s:15:"minorVersion_14";s:1:"m";s:8:"build_15";s:1:"m";s:27:"minorRequiredCoreVersion_16";s:1:"m";s:15:"revisionDate_17";s:1:"m";s:11:"packSize_18";s:1:"m";s:10:"xcnPlan_19";s:1:"m";s:13:"moduleName_20";s:1:"m";s:13:"authorName_21";s:1:"m";s:14:"description_22";s:1:"m";s:10:"iconURL_23";s:1:"m";s:10:"pageURL_24";s:1:"m";s:16:"authorPageURL_25";s:1:"m";s:15:"dependencies_26";s:1:"m";s:7:"tags_27";s:1:"m";s:18:"fromMarketplace_28";s:1:"m";s:12:"isLanding_29";s:1:"m";s:18:"landingPosition_30";s:1:"m";s:11:"isSystem_31";s:1:"m";s:13:"hasLicense_32";s:1:"m";s:15:"editionState_33";s:1:"m";s:11:"editions_34";s:1:"m";s:14:"xbProductId_35";s:1:"m";s:9:"isSkin_36";s:1:"m";s:10:"private_37";s:1:"m";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:38:{s:10:"moduleID_0";s:18:"XLite\Model\Module";s:6:"name_1";s:18:"XLite\Model\Module";s:8:"author_2";s:18:"XLite\Model\Module";s:13:"authorEmail_3";s:18:"XLite\Model\Module";s:9:"enabled_4";s:18:"XLite\Model\Module";s:11:"installed_5";s:18:"XLite\Model\Module";s:12:"yamlLoaded_6";s:18:"XLite\Model\Module";s:6:"date_7";s:18:"XLite\Model\Module";s:8:"rating_8";s:18:"XLite\Model\Module";s:7:"votes_9";s:18:"XLite\Model\Module";s:12:"downloads_10";s:18:"XLite\Model\Module";s:8:"price_11";s:18:"XLite\Model\Module";s:11:"currency_12";s:18:"XLite\Model\Module";s:15:"majorVersion_13";s:18:"XLite\Model\Module";s:15:"minorVersion_14";s:18:"XLite\Model\Module";s:8:"build_15";s:18:"XLite\Model\Module";s:27:"minorRequiredCoreVersion_16";s:18:"XLite\Model\Module";s:15:"revisionDate_17";s:18:"XLite\Model\Module";s:11:"packSize_18";s:18:"XLite\Model\Module";s:10:"xcnPlan_19";s:18:"XLite\Model\Module";s:13:"moduleName_20";s:18:"XLite\Model\Module";s:13:"authorName_21";s:18:"XLite\Model\Module";s:14:"description_22";s:18:"XLite\Model\Module";s:10:"iconURL_23";s:18:"XLite\Model\Module";s:10:"pageURL_24";s:18:"XLite\Model\Module";s:16:"authorPageURL_25";s:18:"XLite\Model\Module";s:15:"dependencies_26";s:18:"XLite\Model\Module";s:7:"tags_27";s:18:"XLite\Model\Module";s:18:"fromMarketplace_28";s:18:"XLite\Model\Module";s:12:"isLanding_29";s:18:"XLite\Model\Module";s:18:"landingPosition_30";s:18:"XLite\Model\Module";s:11:"isSystem_31";s:18:"XLite\Model\Module";s:13:"hasLicense_32";s:18:"XLite\Model\Module";s:15:"editionState_33";s:18:"XLite\Model\Module";s:11:"editions_34";s:18:"XLite\Model\Module";s:14:"xbProductId_35";s:18:"XLite\Model\Module";s:9:"isSkin_36";s:18:"XLite\Model\Module";s:10:"private_37";s:18:"XLite\Model\Module";}s:18:"isIdentifierColumn";a:0:{}s:17:"newObjectMappings";a:0:{}s:24:"metadataParameterMapping";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:3:{s:9:"installed";a:1:{i:0;i:0;}s:8:"isSystem";a:1:{i:0;i:1;}s:5:"word0";a:2:{i:0;i:2;i:1;i:3;}}}