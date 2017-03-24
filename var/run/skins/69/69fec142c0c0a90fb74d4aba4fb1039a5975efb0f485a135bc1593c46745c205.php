<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.checkout.logos.twig */
class __TwigTemplate_f85c650ab8b4c909ddf50b5db31bb2b42a870a32ec0e0c8909a81ff877bf8fbd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method")) {
            // line 8
            echo "  <div class=\"header_bar-checkout_logos\">
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.checkout.logos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  #}*/
/* */
/* {% if this.isCheckoutLayout() %}*/
/*   <div class="header_bar-checkout_logos">*/
/*   </div>*/
/* {% endif %}*/
