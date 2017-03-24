<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/title.twig */
class __TwigTemplate_165d9b5dafdd7fb51f0c44cf5a01e6c91863e6e4f1cc40fc1b0600faa5368e71 extends \XLite\Core\Templating\Twig\Template
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
<h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order X", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderNumber", array(), "method")))), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/title.twig";
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
/*  # Order : title*/
/*  #*/
/*  # @ListChild (list="order.title.row", weight="100")*/
/*  #}*/
/* */
/* <h1>{{ t('Order X', {'id': this.order.getOrderNumber()}) }}</h1>*/
/* */
