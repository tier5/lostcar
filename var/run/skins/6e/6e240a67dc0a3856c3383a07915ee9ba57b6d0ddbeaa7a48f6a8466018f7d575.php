<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/product/details/parts/common.product-title-link.twig */
class __TwigTemplate_d43096c32321da3b775546ef69385bc682c13fd2e2c193f7fa75d6a66cea892c extends \XLite\Core\Templating\Twig\Template
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
        echo "<h1 class=\"fn title\">
  <a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()), "category_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "html", null, true);
        echo "
  </a>
</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/product/details/parts/common.product-title-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details title main block*/
/*  #*/
/*  # @ListChild (list="product.details.quicklook.info", weight="10")*/
/*  #}*/
/* <h1 class="fn title">*/
/*   <a href="{{ url('product', '', {'product_id': this.product.product_id, 'category_id': this.getCategoryId()}) }}">*/
/*     {{ this.product.name }}*/
/*   </a>*/
/* </h1>*/
/* */
