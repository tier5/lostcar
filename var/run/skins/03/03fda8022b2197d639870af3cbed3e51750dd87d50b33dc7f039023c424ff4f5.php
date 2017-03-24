<?php

/* /var/www/html/lostcar/skins/customer/common/order_status_wrapper.twig */
class __TwigTemplate_f4b57820b26b868cc2515f8e76a22df6a32133147610e7cf1ac73d8ec45b7bbd extends \XLite\Core\Templating\Twig\Template
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
<span class=\"order-status-wrapper ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCSSClass", array(), "method"), "html", null, true);
        echo "\">
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order_status.nowrapper"))), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/common/order_status_wrapper.twig";
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
/*  # Order status label. CSS Wrapper*/
/*  #*/
/*  # @ListChild (list="order_status.wrapper", weight="10")*/
/*  #}*/
/* */
/* <span class="order-status-wrapper {{ this.getCSSClass() }}">*/
/* {{ widget_list('order_status.nowrapper') }}*/
/* </span>*/
/* */
