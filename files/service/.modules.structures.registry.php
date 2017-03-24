# <?php if (!defined('LC_DS')) { die(); } ?>

Amazon\PayWithAmazon:
  tables: {  }
  columns: { profiles: { socialLoginProvider: 'socialLoginProvider VARCHAR(128) DEFAULT NULL', socialLoginId: 'socialLoginId VARCHAR(128) DEFAULT NULL' } }
  dependencies: {  }
XC\ESelectHPP:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\AuctionInc:
  tables: [product_auction_inc]
  columns: { shipping_methods: { onDemand: 'onDemand TINYINT(1) NOT NULL' }, orders: { auctionIncPackage: 'auctionIncPackage LONGTEXT DEFAULT NULL COMMENT ''(DC2Type:array)''' } }
  dependencies: {  }
XC\CustomProductTabs:
  tables: [product_tab_translations, product_tabs]
  columns: {  }
  dependencies: {  }
XC\UPS:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\NextPreviousProduct:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\SagePay:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\News:
  tables: [news_message_translations, news]
  columns: { clean_urls: { news_message_id: 'news_message_id INT UNSIGNED DEFAULT NULL' } }
  dependencies: {  }
XC\OgoneEcommerce:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\ThemeTweaker:
  tables: [theme_tweaker_template]
  columns: { view_lists: { list_override: 'list_override VARCHAR(255) NOT NULL', weight_override: 'weight_override INT NOT NULL', override_mode: 'override_mode INT NOT NULL' } }
  dependencies: {  }
XC\Upselling:
  tables: [upselling_products]
  columns: {  }
  dependencies: {  }
XC\NewsletterSubscriptions:
  tables: [newsletter_subscriptions_subscribers]
  columns: {  }
  dependencies: {  }
XC\CrispWhiteSkin:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\Sitemap:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\FroalaEditor:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\EPDQ:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\BulkEditing:
  tables: {  }
  columns: { products: { xcPendingBulkEdit: 'xcPendingBulkEdit TINYINT(1) NOT NULL' } }
  dependencies: {  }
XC\FastLaneCheckout:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\IdealPayments:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\Concierge:
  tables: {  }
  columns: { profiles: { conciergeUserId: 'conciergeUserId VARCHAR(128) DEFAULT NULL' } }
  dependencies: {  }
XC\UpdateInventory:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\FreeShipping:
  tables: {  }
  columns: { products: { freeShip: 'freeShip TINYINT(1) NOT NULL', freightFixedFee: 'freightFixedFee NUMERIC(14, 4) NOT NULL' }, shipping_methods: { free: 'free TINYINT(1) NOT NULL' } }
  dependencies: {  }
XC\MailChimp:
  tables: [mailchimp_lists, mailchimp_subscriptions, mailchimp_list_segments, segment_membership, segment_products, mailchimp_segment_subscriptions, mailchimp_list_group_name, mailchimp_profile_interests, mailchimp_store, mailchimp_list_group]
  columns: { products: { useAsSegmentCondition: 'useAsSegmentCondition TINYINT(1) NOT NULL' } }
  dependencies: {  }
XC\ProductFilter:
  tables: [category_class_links]
  columns: { attributes: { visible: 'visible TINYINT(1) DEFAULT ''1'' NOT NULL' }, categories: { useClasses: 'useClasses CHAR(1) NOT NULL' } }
  dependencies: {  }
XC\Stripe:
  tables: {  }
  columns: {  }
  dependencies: {  }
XC\Reviews:
  tables: [reviews]
  columns: {  }
  dependencies: {  }
XC\CanadaPost:
  tables: [capost_delivery_services, capost_returns, order_capost_office, order_capost_parcel_manifest_link_storage, order_capost_parcel_manifest_links, order_capost_parcel_manifests, order_capost_parcel_shipments_manifests, order_capost_parcel_items, order_capost_parcel_shipment, order_capost_parcel_shipment_tracking_options, order_capost_parcel_shipment_tracking_files, order_capost_parcel_shipment_tracking_events, order_capost_parcel_shipment_link_storage, order_capost_parcel_shipment_links, order_capost_parcel_shipment_tracking, order_capost_parcels, k, capost_delivery_service_options, capost_return_link_storage, capost_return_items, capost_return_links]
  columns: {  }
  dependencies: {  }
CDev\Paypal:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\Bestsellers:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\USPS:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\UserPermissions:
  tables: {  }
  columns: { roles: { enabled: 'enabled TINYINT(1) NOT NULL' }, permissions: { enabled: 'enabled TINYINT(1) NOT NULL' } }
  dependencies: {  }
CDev\GoogleAnalytics:
  tables: {  }
  columns: { profiles: { gaClientId: 'gaClientId VARCHAR(255) NOT NULL' }, order_items: { categoryAdded: 'categoryAdded VARCHAR(255) DEFAULT NULL' } }
  dependencies: {  }
CDev\SocialLogin:
  tables: {  }
  columns: { profiles: { pictureUrl: 'pictureUrl VARCHAR(255) DEFAULT NULL' } }
  dependencies: {  }
CDev\XPaymentsConnector:
  tables: [xpc_payment_transaction_data, xpc_payment_fraud_check_data]
  columns: { orders: { fraud_status_xpc: 'fraud_status_xpc VARCHAR(255) NOT NULL', fraud_type_xpc: 'fraud_type_xpc VARCHAR(255) NOT NULL', fraud_check_transaction_id: 'fraud_check_transaction_id INT NOT NULL' }, profiles: { default_card_id: 'default_card_id INT UNSIGNED NOT NULL', pending_zero_auth: 'pending_zero_auth VARCHAR(255) NOT NULL', pending_zero_auth_txn_id: 'pending_zero_auth_txn_id VARCHAR(255) NOT NULL', pending_zero_auth_status: 'pending_zero_auth_status CHAR(1) NOT NULL', pending_zero_auth_interface: 'pending_zero_auth_interface VARCHAR(255) NOT NULL' }, order_items: { xpcFakeItem: 'xpcFakeItem TINYINT(1) NOT NULL' } }
  dependencies: {  }
CDev\Quantum:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\XMLSitemap:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\Moneybookers:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\SimpleCMS:
  tables: [pages, page_images, menu_quick_flags, menu_translations, page_translations, menus]
  columns: { clean_urls: { page_id: 'page_id INT UNSIGNED DEFAULT NULL' } }
  dependencies: {  }
CDev\ContactUs:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\SalesTax:
  tables: [sales_tax_rates, sales_taxes, sales_tax_translations]
  columns: {  }
  dependencies: {  }
CDev\VolumeDiscounts:
  tables: [volume_discounts]
  columns: {  }
  dependencies: {  }
CDev\TwoCheckout:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\ProductAdvisor:
  tables: [product_stats]
  columns: {  }
  dependencies: {  }
CDev\Sale:
  tables: {  }
  columns: { products: { participateSale: 'participateSale TINYINT(1) NOT NULL', discountType: 'discountType VARCHAR(32) NOT NULL', salePriceValue: 'salePriceValue NUMERIC(14, 4) NOT NULL' } }
  dependencies: {  }
CDev\FeaturedProducts:
  tables: [featured_products]
  columns: {  }
  dependencies: {  }
CDev\FedEx:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\GoSocial:
  tables: {  }
  columns: { pages: { ogMeta: 'ogMeta LONGTEXT NOT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' }, products: { ogMeta: 'ogMeta LONGTEXT NOT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, categories: { ogMeta: 'ogMeta LONGTEXT NOT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' } }
  dependencies: { CDev\SimpleCMS: { pages: { ogMeta: 'ogMeta LONGTEXT NOT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' } } }
CDev\AustraliaPost:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\AuthorizeNet:
  tables: {  }
  columns: {  }
  dependencies: {  }
CDev\Coupons:
  tables: [coupons, product_class_coupons, membership_coupons, coupon_categories, order_coupons]
  columns: {  }
  dependencies: {  }
QSL\FlyoutCategoriesMenu:
  tables: {  }
  columns: {  }
  dependencies: {  }
QSL\CloudSearch:
  tables: {  }
  columns: {  }
  dependencies: {  }
QSL\SpecialOffersBase:
  tables: [special_offer_type_translations, special_offer_images, special_offer_types, special_offer_translations, special_offers]
  columns: {  }
  dependencies: {  }
JThemesStudio\The80sMod:
  tables: [brands_logo_item, news_images, brands_logo_image]
  columns: {  }
  dependencies: {  }
XC\WebmasterKit:
  tables: {  }
  columns: {  }
  dependencies: {  }
