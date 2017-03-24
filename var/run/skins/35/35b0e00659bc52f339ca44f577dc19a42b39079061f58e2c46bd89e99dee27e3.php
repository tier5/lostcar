<?php

/* /var/www/html/lostcar/skins/customer/authorization/parts/field.links.twig */
class __TwigTemplate_065b394a6d428204f50beb311f07ada14400cf70b22aac784ad1ecabb35b76f1 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td>&nbsp;</td>
  <td>
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.links"))), "html", null, true);
        echo "
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/authorization/parts/field.links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Field : links*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="500")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>&nbsp;</td>*/
/*   <td>*/
/*     {{ widget_list('customer.signin.links') }}*/
/*   </td>*/
/* </tr>*/
/* */
/* */
