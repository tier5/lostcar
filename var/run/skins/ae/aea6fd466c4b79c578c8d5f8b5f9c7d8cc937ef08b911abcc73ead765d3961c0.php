<?php

/* /var/www/html/lostcar/skins/customer/authorization/parts/field.button.twig */
class __TwigTemplate_2b01bc2f12e0a6cf87cbb53cc0f8a0833c36f52575519e64230b423320d6724a extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<tr>
    <td>&nbsp;</td>
    <td>
        ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign in"))))), "html", null, true);
        echo "
        ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.popup.links"))), "html", null, true);
        echo "
    </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/authorization/parts/field.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 12,  25 => 11,  19 => 7,);
    }
}
/* {##*/
/*  # Field : button*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="400")*/
/*  # @ListChild (list="customer.signin.popup.fields", weight="400")*/
/*  #}*/
/* */
/* <tr>*/
/*     <td>&nbsp;</td>*/
/*     <td>*/
/*         {{ widget('\\XLite\\View\\Button\\Submit', label=t('Sign in')) }}*/
/*         {{ widget_list('customer.signin.popup.links') }}*/
/*     </td>*/
/* </tr>*/
/* */
/* */
