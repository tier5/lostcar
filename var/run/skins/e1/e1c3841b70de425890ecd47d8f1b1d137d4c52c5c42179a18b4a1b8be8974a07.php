<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/common.loupe.twig */
class __TwigTemplate_50fea74db4eafc9da665490a33e44be5ed257adb1f4fddbe3e93f9fdb016e872 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLoupeVisible", array(), "method")) {
            // line 8
            echo "  <a href=\"javascript:void(0);\" class=\"loupe\">
    ";
            // line 9
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/zoom.svg"), "method");
            echo "
  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/common.loupe.twig";
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
/*  # Image loupe*/
/*  #*/
/*  # @ListChild (list="product.details.page.image", weight="15")*/
/*  #}*/
/* */
/* {% if this.isLoupeVisible() %}*/
/*   <a href="javascript:void(0);" class="loupe">*/
/*     {{ this.getSVGImage('images/zoom.svg')|raw }}*/
/*   </a>*/
/* {% endif %}*/
/* */
