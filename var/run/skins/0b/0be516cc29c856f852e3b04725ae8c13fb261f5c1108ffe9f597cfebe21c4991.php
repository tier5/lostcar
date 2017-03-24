<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Paypal/login/signin/layout.header.bar.links.newby.twig */
class __TwigTemplate_96ca220bd97e09697ae852465dcc038c522d008945d491a2333e3ba0d004e5b9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"social-login paypal-login\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget", "buttonStyle" => "icon", "placement" => "signin"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Paypal/login/signin/layout.header.bar.links.newby.twig";
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
/* <li class="social-login paypal-login">*/
/*   {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget', buttonStyle='icon', placement='signin') }}*/
/* </li>*/
/* */
