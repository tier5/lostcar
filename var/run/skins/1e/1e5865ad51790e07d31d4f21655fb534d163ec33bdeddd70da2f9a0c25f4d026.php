<?php

/* /var/www/html/lostcar/skins/admin/settings/clean_view_cache.twig */
class __TwigTemplate_02e83b0aea11b200b280b1e20c2686f6e40e9742c1d189fe18469e360f759eae extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/settings/clean_view_cache.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
/* {##*/
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.settings.footer", zone="admin", weight="200")*/
/*  #}*/
/* {#*/
/* <div IF="page=#Performance#" class="clean-widgets-cache">*/
/*   <widget*/
/*     class="\XLite\View\Button\Regular"*/
/*     style="clean-widgets-cache"*/
/*     label="Clean widgets cache"*/
/*     jsCode="self.location='{buildURL(#css_js_performance#,#clean_view_cache#)}'" />*/
/*   <widget*/
/*     class="\XLite\View\Tooltip"*/
/*     id="clean-widgets-cache-help-text"*/
/*     text="{t(#Clean widgets cache help text#):h}"*/
/*     isImageTag=true*/
/*     className="help-icon" />*/
/* </div>*/
/* #}*/
