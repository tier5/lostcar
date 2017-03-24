<?php

/* /var/www/html/lostcar/skins/customer/header/parts/base.twig */
class __TwigTemplate_36cd6b122b60b3374f937791dc7cc7898930f8267950029f971b75a33f602231 extends \XLite\Core\Templating\Twig\Template
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
<base href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBaseShopURL", array(), "method"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/header/parts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # "Base" tag*/
/*  #*/
/*  # @ListChild (list="head", weight="1")*/
/*  #}*/
/* */
/* <base href="{{ this.getBaseShopURL() }}" />*/
/* */
