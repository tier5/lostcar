<?php

/* /var/www/html/lostcar/skins/admin/shipping/add_method/parts/rates.twig */
class __TwigTemplate_321b6fced16a1c3eb7efd7e4d9edfffe858b24ea1e61902dd46b8f23c91a66a2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ItemsList\\Model\\Shipping\\Markups"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/shipping/add_method/parts/rates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Rates list*/
/*  #*/
/*  # @ListChild (list="crud.shipping.offline.formFooter")*/
/*  #}*/
/* {{ widget('XLite\\View\\ItemsList\\Model\\Shipping\\Markups') }}*/
/* */
