<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":13:{s:19:"associationMappings";a:2:{s:14:"billingAddress";a:19:{s:9:"fieldName";s:14:"billingAddress";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:10:"address_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:8:"SET NULL";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:10:"address_id";}}s:7:"cascade";a:0:{}s:10:"inversedBy";N;s:12:"targetEntity";s:19:"XLite\Model\Address";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:69:"XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:10:"address_id";s:10:"address_id";}s:20:"joinColumnFieldNames";a:1:{s:10:"address_id";s:10:"address_id";}s:24:"targetToSourceKeyColumns";a:1:{s:10:"address_id";s:10:"address_id";}s:13:"orphanRemoval";b:0;}s:11:"transaction";a:19:{s:9:"fieldName";s:11:"transaction";s:12:"targetEntity";s:31:"XLite\Model\Payment\Transaction";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:14:"transaction_id";s:6:"unique";b:1;s:8:"nullable";b:1;s:8:"onDelete";s:7:"CASCADE";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:14:"transaction_id";}}s:8:"mappedBy";N;s:10:"inversedBy";s:8:"xpc_data";s:7:"cascade";a:0:{}s:13:"orphanRemoval";b:0;s:5:"fetch";i:2;s:4:"type";i:1;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:69:"XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:14:"transaction_id";s:14:"transaction_id";}s:20:"joinColumnFieldNames";a:1:{s:14:"transaction_id";s:14:"transaction_id";}s:24:"targetToSourceKeyColumns";a:1:{s:14:"transaction_id";s:14:"transaction_id";}}}s:11:"columnNames";a:5:{s:2:"id";s:2:"id";s:11:"card_number";s:11:"card_number";s:9:"card_type";s:9:"card_type";s:11:"card_expire";s:11:"card_expire";s:17:"use_for_recharges";s:17:"use_for_recharges";}s:13:"fieldMappings";a:5:{s:2:"id";a:10:{s:9:"fieldName";s:2:"id";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:8:"unsigned";b:1;}s:2:"id";b:1;s:10:"columnName";s:2:"id";}s:11:"card_number";a:8:{s:9:"fieldName";s:11:"card_number";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:11:"card_number";}s:9:"card_type";a:8:{s:9:"fieldName";s:9:"card_type";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:9:"card_type";}s:11:"card_expire";a:8:{s:9:"fieldName";s:11:"card_expire";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:11:"card_expire";}s:17:"use_for_recharges";a:9:{s:9:"fieldName";s:17:"use_for_recharges";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:1;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:5:"fixed";b:1;}s:10:"columnName";s:17:"use_for_recharges";}}s:10:"fieldNames";a:5:{s:2:"id";s:2:"id";s:11:"card_number";s:11:"card_number";s:9:"card_type";s:9:"card_type";s:11:"card_expire";s:11:"card_expire";s:17:"use_for_recharges";s:17:"use_for_recharges";}s:15:"embeddedClasses";a:0:{}s:10:"identifier";a:1:{i:0;s:2:"id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:69:"XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData";s:9:"namespace";s:50:"XLite\Module\CDev\XPaymentsConnector\Model\Payment";s:5:"table";a:2:{s:4:"name";s:31:"xc_xpc_payment_transaction_data";s:12:"originalName";s:28:"xpc_payment_transaction_data";}s:14:"rootEntityName";s:69:"XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:47:" Doctrine\ORM\Id\IdentityGenerator sequenceName";N;}s:13:"generatorType";i:4;}