<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/layout.header.bar.links.newby.twig */
class __TwigTemplate_79eb031b7be7386a31fb771df91c36cd0f34175ba6ad60150708f5e1e055b58b extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"social-login amazon-login\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget", "buttonStyle" => "icon", "placement" => "signin"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/layout.header.bar.links.newby.twig";
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
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", zone="customer", weight="101")*/
/*  #}*/
/* <li class="social-login amazon-login">*/
/*   {{ widget('XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget', buttonStyle='icon', placement='signin') }}*/
/* </li>*/
/* */
