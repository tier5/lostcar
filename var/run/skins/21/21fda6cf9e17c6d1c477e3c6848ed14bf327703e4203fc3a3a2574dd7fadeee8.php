<?php

/* /var/www/html/lostcar/skins/customer/order/parts/links.twig */
class __TwigTemplate_40fcc5e7462ea89497b2dcb973b6cef40ca4ee603239bcdf197eaf90bc29658e extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"links\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.links"))), "html", null, true);
        echo "
</ul>

<hr class=\"tiny\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/order/parts/links.twig";
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
/*  # Order buttons / links panel*/
/*  #*/
/*  # @ListChild (list="order.children", weight="20")*/
/*  #}*/
/* <ul class="links">*/
/*   {{ widget_list('order.links') }}*/
/* </ul>*/
/* */
/* <hr class="tiny" />*/
/* */
