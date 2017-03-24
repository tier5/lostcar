<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/quicklook.info.twig */
class __TwigTemplate_f327abffdc66351edede0805657942bd3f16e945e21abd000af44aeebf8c89af extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"product-details-info product-info-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo " product-quicklook-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.quicklook.info"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/quicklook.info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details main block*/
/*  #*/
/*  # @ListChild (list="product.details.quicklook", weight="30")*/
/*  #}*/
/* <div class="product-details-info product-info-{{ this.product.getProductId() }} product-quicklook-info">*/
/*   {{ widget_list('product.details.quicklook.info') }}*/
/* </div>*/
/* */
