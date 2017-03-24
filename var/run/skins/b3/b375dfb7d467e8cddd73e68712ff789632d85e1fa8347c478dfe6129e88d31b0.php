<?php

/* /var/www/html/lostcar/skins/admin/header/parts/favicon.twig */
class __TwigTemplate_07426d22a456b9d7485740ca4a90d73cc52268f732cf144327432e061fc08d4e extends \XLite\Core\Templating\Twig\Template
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
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFavicon", array(), "method"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
<link rel=\"icon\"              sizes=\"192x192\"   href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\"/>
<link rel=\"apple-touch-icon\"  sizes=\"192x192\"   href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/header/parts/favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="80")*/
/*  #}*/
/* */
/* <link rel="shortcut icon" href="{{ this.getFavicon() }}" type="image/x-icon" />*/
/* <link rel="icon"              sizes="192x192"   href="{{ this.getAppleIcon() }}"/>*/
/* <link rel="apple-touch-icon"  sizes="192x192"   href="{{ this.getAppleIcon() }}">*/
/* */
