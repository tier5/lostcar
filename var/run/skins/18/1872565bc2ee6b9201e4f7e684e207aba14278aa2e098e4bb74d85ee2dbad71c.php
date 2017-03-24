<?php

/* /var/www/html/lostcar/skins/customer/checkout/success/parts/invoice.twig */
class __TwigTemplate_dd9803aa91883386c3ee4914ce2fa8c0b17b5f1c6c6100f58ed6721cc4fe35e2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Invoice", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrder", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/success/parts/invoice.twig";
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
/*  # Invoice*/
/*  #*/
/*  # @ListChild (list="checkout.success", weight="200")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Invoice', order=this.getOrder()) }}*/
/* */
