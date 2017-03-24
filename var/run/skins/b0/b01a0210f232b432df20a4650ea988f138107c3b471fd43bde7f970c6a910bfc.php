<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/page.tabs.attributes.twig */
class __TwigTemplate_2d33b79494621c44b34dd828a9d4abf1ff3a6d16d1cdaef11139e0eb46f4b3b9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"extra-fields\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.common.product-attributes.attributes"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/page.tabs.attributes.twig";
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
/*  # Product details attributes tab */
/*  #*/
/*  # @ListChild (list="product.details.page.tab.attributes", weight="10")*/
/*  #}*/
/* <ul class="extra-fields">*/
/*   {{ widget_list('product.details.common.product-attributes.attributes') }}*/
/* </ul>*/
/* */
