<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.product-added.twig */
class __TwigTemplate_8e044b2c94cfe02ae9ca0de85518a95e2ae62ac00898357a368f4d3b1468d753 extends \XLite\Core\Templating\Twig\Template
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
        echo "<p class=\"product-added-note\">
  <i class=\"fa fa-check-square\"></i>
  ";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("This product has been added to your bag", array("href" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")))));
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.product-added.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Product details buttons block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons-added", weight="5")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added", weight="5")*/
/*  #}*/
/* <p class="product-added-note">*/
/*   <i class="fa fa-check-square"></i>*/
/*   {{ t('This product has been added to your bag', {'href': url('cart')})|raw }}*/
/* </p>*/
/* */
