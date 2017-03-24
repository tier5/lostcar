<?php

/* /var/www/html/lostcar/skins/customer/signin/parts_login_form/email.twig */
class __TwigTemplate_871c59b434c529ce0a35a966e3652b620ad1a14830acb223aa14f5272d61c7e1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"email-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "login", array()), "required" => "true", "fieldName" => "login", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "true", "fieldId" => "login-email"))), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/signin/parts_login_form/email.twig";
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
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="checkout.signin.form", weight="10")*/
/*  #}*/
/* <tr><td class="email-field">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.login, required='true', fieldName='login', placeholder=t('Email'), label=t('Email'), fieldOnly='true', fieldId='login-email') }}*/
/* </td></tr>*/
/* */
