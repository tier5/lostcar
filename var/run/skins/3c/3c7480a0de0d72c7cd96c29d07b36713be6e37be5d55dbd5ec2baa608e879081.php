<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/info.block.twig */
class __TwigTemplate_91860037e7829edd38248a82e8317c5b121cb810bcff127422cea0b286869b80 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"info-block\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.bottom.info"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/info.block.twig";
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
/*  # @ListChild (list="welcome.small.banners.block", weight="300")*/
/*  #}*/
/* */
/* <div class="info-block">*/
/*     {{ widget_list('welcome.bottom.info') }}*/
/* </div>*/
