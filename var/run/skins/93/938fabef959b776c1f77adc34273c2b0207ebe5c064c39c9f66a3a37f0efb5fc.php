<?php

/* /var/www/html/lostcar/skins/customer/signin/signin_login_form.twig */
class __TwigTemplate_871aaf282ee235a4aeab7e1400a54ef5c53609011f0a7c9c5453eb40e023dd49 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Login\\Customer\\Main");        // line 7
        echo "<table class=\"login-form\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.signin.form"))), "html", null, true);
        echo "
</table>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/signin/signin_login_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="customer.checkout.signin", weight="10")*/
/*  #}*/
/* {% form '\\XLite\\View\\Form\\Login\\Customer\\Main' %}*/
/* <table class="login-form">*/
/*   {{ widget_list('checkout.signin.form') }}*/
/* </table>*/
/* {% endform %}*/
/* */
