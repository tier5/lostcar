<?php die(1); ?>
Mar 23 20:10:44 XLite [error] Send mail FAILED: Could not instantiate mail function.
2017-03-23 14:40:44	Could not instantiate mail function.
Runtime id: 3b31fdaa0b83cd08aae0f9944fd0852a;
Server API: apache2handler; IP: 127.0.0.1;
Request method: POST;
URI: /lostcar/admin.php;
Backtrace:
	file <compiled classes repository>/classes/XLite/View/MailerAbstract.php : 407
	file <compiled classes repository>/classes/XLite/Core/MailerAbstract.php : 1479
	file <compiled classes repository>/classes/XLite/Core/MailerAbstract.php : 385
	file <compiled classes repository>/classes/XLite/Controller/Admin/RecoverPassword.php : 121
	file <compiled classes repository>/classes/XLite/Controller/Admin/RecoverPassword.php : 55
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 1536
	file <compiled classes repository>/classes/XLite/Controller/Admin/AAdminAbstract.php : 266
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 1555
	file <compiled classes repository>/classes/XLite/Module/XC/MailChimp/Controller/AController.php : 21
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 544
	file <compiled classes repository>/classes/XLite/Module/QSL/CloudSearch/Controller/AController.php : 28
	file <compiled classes repository>/classes/XLite/Controller/Admin/AAdminAbstract.php : 161
	file <compiled classes repository>/classes/XLiteAbstract.php : 635
	file <compiled classes repository>/classes/XLiteAbstract.php : 664
	file <compiled classes repository>/classes/XLite/Module/XC/MailChimp/XLite.php : 21
	file <compiled classes repository>/classes/XLite/Module/XC/Concierge/XLite.php : 43
	file <X-Cart root>/admin.php : 18

Mar 23 20:20:41 XLite [error] Send mail FAILED: Could not instantiate mail function.
2017-03-23 14:50:41	Could not instantiate mail function.
Runtime id: bd8e132e1e072b21018a6054a8011d9c;
Server API: apache2handler; IP: 127.0.0.1;
Request method: POST;
URI: /lostcar/?;
Backtrace:
	file <compiled classes repository>/classes/XLite/View/MailerAbstract.php : 407
	file <compiled classes repository>/classes/XLite/Core/MailerAbstract.php : 1479
	file <compiled classes repository>/classes/XLite/Core/MailerAbstract.php : 153
	file <compiled classes repository>/classes/XLite/Core/MailerAbstract.php : 96
	file <compiled classes repository>/classes/XLite/Controller/Customer/ProfileAbstract.php : 251
	file <compiled classes repository>/classes/XLite/Module/XC/MailChimp/Controller/Customer/Profile.php : 25
	file <compiled classes repository>/classes/XLite/Controller/Customer/ProfileAbstract.php : 208
	file <compiled classes repository>/classes/XLite/Controller/Customer/ProfileAbstract.php : 185
	file <compiled classes repository>/classes/XLite/Controller/Customer/ProfileAbstract.php : 297
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 1536
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 1555
	file <compiled classes repository>/classes/XLite/Module/XC/MailChimp/Controller/AController.php : 21
	file <compiled classes repository>/classes/XLite/Controller/AControllerAbstract.php : 544
	file <compiled classes repository>/classes/XLite/Module/QSL/CloudSearch/Controller/AController.php : 28
	file <compiled classes repository>/classes/XLite/Controller/Customer/ACustomerAbstract.php : 346
	file <compiled classes repository>/classes/XLite/Controller/Customer/ProfileAbstract.php : 44
	file <compiled classes repository>/classes/XLiteAbstract.php : 635
	file <compiled classes repository>/classes/XLiteAbstract.php : 664
	file <compiled classes repository>/classes/XLite/Module/XC/MailChimp/XLite.php : 21
	file <compiled classes repository>/classes/XLite/Module/XC/Concierge/XLite.php : 43
	file <compiled classes repository>/classes/XLiteAbstract.php : 680
	file <X-Cart root>/cart.php : 16
	file <X-Cart root>/index.php : 9

