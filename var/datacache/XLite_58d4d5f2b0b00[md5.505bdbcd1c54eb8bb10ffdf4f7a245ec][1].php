<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:278:"SELECT COUNT(DISTINCT x0_.id) AS sclr_0 FROM xc_reviews x0_ INNER JOIN xc_products x1_ ON x0_.product_id = x1_.product_id LEFT JOIN xc_profiles x2_ ON x0_.profile_id = x2_.profile_id WHERE x1_.product_id = ? AND (x0_.status = 1 OR x2_.profile_id = ?) AND x0_.review <> ? LIMIT 1";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":17:{s:7:"isMixed";b:0;s:8:"isSelect";b:1;s:8:"aliasMap";a:0:{}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:0:{}s:14:"scalarMappings";a:1:{s:6:"sclr_0";i:1;}s:12:"typeMappings";a:1:{s:6:"sclr_0";s:6:"string";}s:14:"entityMappings";a:0:{}s:12:"metaMappings";a:0:{}s:14:"columnOwnerMap";a:0:{}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:0:{}s:18:"isIdentifierColumn";a:0:{}s:17:"newObjectMappings";a:0:{}s:24:"metadataParameterMapping";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:3:{s:9:"productId";a:1:{i:0;i:0;}s:9:"profileId";a:1:{i:0;i:1;}s:4:"type";a:1:{i:0;i:2;}}}