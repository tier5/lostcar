<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/field.password.twig */
class __TwigTemplate_26d8099375370a09880d537431a4c89606aa7ff13fb60b90142b7e33dfa3ea62 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"password-field field\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Password", "required" => "true", "fieldName" => "password", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "fieldOnly" => "false", "fieldId" => "login-password"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/field.password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Field : password*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="200")*/
/*  # @ListChild (list="customer.signin.popup.fields", weight="200")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="password-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Password', required='true', fieldName='password', label=t('Password'), fieldOnly='false', fieldId='login-password') }}*/
/*   </td>*/
/* </tr>*/
/* */
