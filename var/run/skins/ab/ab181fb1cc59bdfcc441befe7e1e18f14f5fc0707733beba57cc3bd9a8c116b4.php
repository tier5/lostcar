<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.product-title.twig */
class __TwigTemplate_3768bc406f4db3624f802582810a881794ff298d8a8d0db1409c4137baf50c2f extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<h1 class=\"fn title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.product-title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }
}
/* {##*/
/*  # Product details title main block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="10")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="10")*/
/*  #}*/
/* <h1 class="fn title">{{ this.product.name }}</h1>*/
/* */
