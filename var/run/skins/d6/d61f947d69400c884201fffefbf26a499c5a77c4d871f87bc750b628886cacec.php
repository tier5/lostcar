<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/head.twig */
class __TwigTemplate_de5cc06210048d6eef9bc6260bd6ed111fe54b8c0e90055ec0bb6cf6641c4ebf extends \XLite\Core\Templating\Twig\Template
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
        echo "<table cellspacing=\"0\" class=\"header\">
  <tr>
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.head"))), "html", null, true);
        echo "
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice head*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="10")*/
/*  #}*/
/* <table cellspacing="0" class="header">*/
/*   <tr>*/
/*     {{ widget_list('invoice.head') }}*/
/*   </tr>*/
/* </table>*/
/* */
