<?php
namespace XLite\Module\XC\News\Model;
/**
 * NewsMessage
 *
 * @Entity
 * @Table  (name="news",
 *      indexes={
 *          @Index (name="enabled", columns={"enabled"}),
 *      }
 * )
 * @HasLifecycleCallbacks
 */
class NewsMessage extends \XLite\Module\JThemesStudio\The80sMod\Model\News\NewsMessage {}