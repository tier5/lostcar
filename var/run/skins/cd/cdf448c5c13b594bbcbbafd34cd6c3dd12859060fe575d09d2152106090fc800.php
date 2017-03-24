<?php

/* authorization/authorization.twig */
class __TwigTemplate_b769ee813cefa68de0cef732b21e4572554bc5cd478d1c9e5f8d33888c466e21 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin"))), "html", null, true);
        echo "

";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Login\\Customer\\Main");        // line 8
        echo "
<table class=\"login-form\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.fields"))), "html", null, true);
        echo "
</table>

";
        $this->endForm();        // line 14
        echo "
";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.signin.after"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "authorization/authorization.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  32 => 10,  28 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Login*/
/*  #}*/
/* */
/* {{ widget_list('customer.signin') }}*/
/* */
/* {% form '\\XLite\\View\\Form\\Login\\Customer\\Main' %}*/
/* */
/* <table class="login-form">*/
/*   {{ widget_list('customer.signin.fields') }}*/
/* </table>*/
/* */
/* {% endform %}*/
/* */
/* {{ widget_list('customer.signin.after') }}*/
/* */
