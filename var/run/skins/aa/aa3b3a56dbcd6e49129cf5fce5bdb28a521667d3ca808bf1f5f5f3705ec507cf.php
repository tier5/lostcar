<?php

/* /var/www/html/lostcar/skins/customer/authorization/parts/field.password.twig */
class __TwigTemplate_6ee38242a77ec1f59d400dde0574b94dcb437ed3bb78851760b7f2a42f6ea1a8 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"password-label\"><label for=\"login-password\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "html", null, true);
        echo ":</label></td>
  <td class=\"password-field field\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Password", "required" => "true", "fieldName" => "password", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "fieldOnly" => "true", "fieldId" => "login-password"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/authorization/parts/field.password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  23 => 9,  19 => 7,);
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
/*   <td class="password-label"><label for="login-password">{{ t('Password') }}:</label></td>*/
/*   <td class="password-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Password', required='true', fieldName='password', label=t('Password'), fieldOnly='true', fieldId='login-password') }}*/
/*   </td>*/
/* </tr>*/
/* */
