<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/addresses/addresses.twig */
class __TwigTemplate_a739e43b0366ac1d03642ec4b19c9c09ead0ca9d87f599f95fa02f219ac56aef extends \XLite\Core\Templating\Twig\Template
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
<table cellspacing=\"0\" class=\"address\">
  <tr>
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.addresses"))), "html", null, true);
        echo "
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/addresses/addresses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="packing_slip.base", weight="20")*/
/*  #}*/
/* */
/* <table cellspacing="0" class="address">*/
/*   <tr>*/
/*     {{ widget_list('packing_slip.addresses') }}*/
/*   </tr>*/
/* </table>*/
/* */
