<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:629:"SELECT x0_.id AS id_0, x0_.review AS review_1, x0_.rating AS rating_2, x0_.additionDate AS additionDate_3, x0_.reviewerName AS reviewerName_4, x0_.status AS status_5, x0_.ip AS ip_6, x0_.useForMeta AS useForMeta_7, x0_.isNew AS isNew_8, x0_.xcPendingExport AS xcPendingExport_9, x0_.profile_id AS profile_id_10, x0_.product_id AS product_id_11 FROM xc_reviews x0_ INNER JOIN xc_products x1_ ON x0_.product_id = x1_.product_id LEFT JOIN xc_profiles x2_ ON x0_.profile_id = x2_.profile_id WHERE x1_.product_id = ? AND (x0_.status = 1 OR x2_.profile_id = ?) AND x0_.review <> ? GROUP BY x0_.id ORDER BY x0_.additionDate DESC LIMIT 5";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":17:{s:7:"isMixed";b:0;s:8:"isSelect";b:1;s:8:"aliasMap";a:1:{s:1:"r";s:36:"XLite\Module\XC\Reviews\Model\Review";}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:10:{s:4:"id_0";s:2:"id";s:8:"review_1";s:6:"review";s:8:"rating_2";s:6:"rating";s:14:"additionDate_3";s:12:"additionDate";s:14:"reviewerName_4";s:12:"reviewerName";s:8:"status_5";s:6:"status";s:4:"ip_6";s:2:"ip";s:12:"useForMeta_7";s:10:"useForMeta";s:7:"isNew_8";s:5:"isNew";s:17:"xcPendingExport_9";s:15:"xcPendingExport";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:2:{s:13:"profile_id_10";s:7:"integer";s:13:"product_id_11";s:7:"integer";}s:14:"entityMappings";a:1:{s:1:"r";N;}s:12:"metaMappings";a:2:{s:13:"profile_id_10";s:10:"profile_id";s:13:"product_id_11";s:10:"product_id";}s:14:"columnOwnerMap";a:12:{s:4:"id_0";s:1:"r";s:8:"review_1";s:1:"r";s:8:"rating_2";s:1:"r";s:14:"additionDate_3";s:1:"r";s:14:"reviewerName_4";s:1:"r";s:8:"status_5";s:1:"r";s:4:"ip_6";s:1:"r";s:12:"useForMeta_7";s:1:"r";s:7:"isNew_8";s:1:"r";s:17:"xcPendingExport_9";s:1:"r";s:13:"profile_id_10";s:1:"r";s:13:"product_id_11";s:1:"r";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:10:{s:4:"id_0";s:36:"XLite\Module\XC\Reviews\Model\Review";s:8:"review_1";s:36:"XLite\Module\XC\Reviews\Model\Review";s:8:"rating_2";s:36:"XLite\Module\XC\Reviews\Model\Review";s:14:"additionDate_3";s:36:"XLite\Module\XC\Reviews\Model\Review";s:14:"reviewerName_4";s:36:"XLite\Module\XC\Reviews\Model\Review";s:8:"status_5";s:36:"XLite\Module\XC\Reviews\Model\Review";s:4:"ip_6";s:36:"XLite\Module\XC\Reviews\Model\Review";s:12:"useForMeta_7";s:36:"XLite\Module\XC\Reviews\Model\Review";s:7:"isNew_8";s:36:"XLite\Module\XC\Reviews\Model\Review";s:17:"xcPendingExport_9";s:36:"XLite\Module\XC\Reviews\Model\Review";}s:18:"isIdentifierColumn";a:0:{}s:17:"newObjectMappings";a:0:{}s:24:"metadataParameterMapping";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:3:{s:9:"productId";a:1:{i:0;i:0;}s:9:"profileId";a:1:{i:0;i:1;}s:4:"type";a:1:{i:0;i:2;}}}