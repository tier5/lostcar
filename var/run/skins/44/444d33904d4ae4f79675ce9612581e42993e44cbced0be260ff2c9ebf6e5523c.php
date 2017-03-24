<?php

/* /var/www/html/lostcar/skins/customer/layout/header/header.bar.links.newby.login.twig */
class __TwigTemplate_e918c2dfd044d23ff7fd5bd8d2af0548fd6926131a4907b0f332fb48463544f7 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-1 first\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\LoginLink"))), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/layout/header/header.bar.links.newby.login.twig";
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
/*  # Log in*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", weight="100")*/
/*  #}*/
/* */
/* <li class="account-link-1 first">{{ widget('XLite\\View\\LoginLink') }}</li>*/
/* */
