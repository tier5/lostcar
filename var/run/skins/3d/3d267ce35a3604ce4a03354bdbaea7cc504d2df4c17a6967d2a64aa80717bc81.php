<?php

/* /var/www/html/lostcar/skins/customer/common/surcharge_parts/surcharge.twig */
class __TwigTemplate_b2a6337d1aaea95a1c14fb0fe3fab3a978a56f97b6086bfe0b411f01c622d797 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"surcharge-cell\">";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPriceHTML", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurcharge", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrency", array(), "method"), 2 => 1), "method");
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/common/surcharge_parts/surcharge.twig";
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
/*  # Surcharge value*/
/*  #*/
/*  # @ListChild (list="surcharge.common", weight="100")*/
/*  #}*/
/* */
/* <span class="surcharge-cell">{{ this.formatPriceHTML(this.getSurcharge(), this.getCurrency(), 1)|raw }}</span>*/
/* */
