<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/authorization/parts/field.links.twig */
class __TwigTemplate_3fa79fc5890fc99fa14bf23fc06d315d686e7a5f30e90304ffd60312bdf75429 extends \XLite\Core\Templating\Twig\Template
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
  <td>
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.links"))), "html", null, true);
        echo "
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/authorization/parts/field.links.twig";
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
/*  # Field : links*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="500")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>*/
/*     {{ widget_list('customer.signin.links') }}*/
/*   </td>*/
/* </tr>*/
/* */
/* */
