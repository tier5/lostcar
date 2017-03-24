<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/vertical.banner.container.twig */
class __TwigTemplate_9b84f77d0fa30646b75b266f6cbee8c02d364ca49ba3f8d0d47b7018ffa7e4a2 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"vertical-banner-container\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.small.banners.vertical"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/vertical.banner.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.small.banners.block", weight="200")*/
/*  #}*/
/* */
/* <div class="vertical-banner-container">*/
/*     {{ widget_list('welcome.small.banners.vertical') }}*/
/* </div>*/
