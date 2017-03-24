<?php

/* /var/www/html/lostcar/skins/customer/header/parts/link_favicon.twig */
class __TwigTemplate_d057a9ef9e19824f0793f5e5a99c0d0669b47a1fbcaf5716362bf14686cd5b22 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayFavicon", array(), "method")) {
            // line 8
            echo "  <link rel=\"shortcut icon\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFavicon", array(), "method"), "html", null, true);
            echo "\" type=\"image/x-icon\" />
";
        }
        // line 10
        echo "
<link rel=\"icon\"              sizes=\"192x192\"   href=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\"/>
<link rel=\"apple-touch-icon\"  sizes=\"192x192\"   href=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/header/parts/link_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1000")*/
/*  #}*/
/* */
/* {% if this.displayFavicon() %}*/
/*   <link rel="shortcut icon" href="{{ this.getFavicon() }}" type="image/x-icon" />*/
/* {% endif %}*/
/* */
/* <link rel="icon"              sizes="192x192"   href="{{ this.getAppleIcon() }}"/>*/
/* <link rel="apple-touch-icon"  sizes="192x192"   href="{{ this.getAppleIcon() }}">*/
/* */
