<?php

/* /var/www/html/lostcar/skins/customer/signin/parts_login_form/button.twig */
class __TwigTemplate_89d90a215168db90e995d20ddbc3ab10e74eb0f7754d936611afddd1a3d6f9bf extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"sign-in-button\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign in"))))), "html", null, true);
        echo "
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.popup.links"))), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/signin/parts_login_form/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="checkout.signin.form", weight="30")*/
/*  #}*/
/* <tr><td class="sign-in-button">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Sign in')) }}*/
/*   {{ widget_list('customer.signin.popup.links') }}*/
/* </td></tr>*/
/* */
