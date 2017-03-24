<?php

/* /var/www/html/lostcar/skins/customer/order/parts/link.print.twig */
class __TwigTemplate_a6447c27e4a65619c312463d8389b072408eb6625250cb6094d7edf10613ce21 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"print\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PrintInvoice"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/order/parts/link.print.twig";
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
/*  # Print invoice button wrapper*/
/*  #*/
/*  # @ListChild (list="order.links", weight="100")*/
/*  #}*/
/* <li class="print">*/
/*   {{ widget('XLite\\View\\Button\\PrintInvoice') }}*/
/* </li>*/
/* */
