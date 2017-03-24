<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FreeShipping/free_ship.label.twig */
class __TwigTemplate_feb20b95deacc1e3ee10790c66b9ecc4c6bb400451796f7cd9f27a89be60eb23 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\FreeShipping\\View\\Product\\Details\\Label", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FreeShipping/free_ship.label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product stock*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="19")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="19")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\XC\\FreeShipping\\View\\Product\\Details\\Label', product=this.product) }}*/
/* */
