<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/layout/header/locale/country.twig */
class __TwigTemplate_6e57ce697c9c3d8951176bb87f7c4389860632c5b330e1e36a76bdb5f914f26f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCountry", array(), "method")) {
            // line 8
            echo "<span class='country-indicator'>
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCountry", array(), "method"), "getCountry", array(), "method"), "html", null, true);
            echo "
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/layout/header/locale/country.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Country part*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.locale", weight="10")*/
/*  #}*/
/* */
/* {% if this.getCurrentCountry() %}*/
/* <span class='country-indicator'>*/
/*     {{ this.getCurrentCountry().getCountry() }}*/
/* </span>*/
/* {% endif %}*/
