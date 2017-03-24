<?php

/* /var/www/html/lostcar/skins/customer/layout/header/header.bar.links.newby.register.twig */
class __TwigTemplate_a807544e11acf3ba8e625f50325a72e194e7af2cb17bd242375d41abf6d06846 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-2 last\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("mode" => "register"))), "html", null, true);
        echo "\" class=\"register\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Register")), "html", null, true);
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/layout/header/header.bar.links.newby.register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Register*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", weight="200")*/
/*  #}*/
/* */
/* <li class="account-link-2 last">*/
/*   <a href="{{ url('profile', '', {'mode': 'register'}) }}" class="register">{{ t('Register') }}</a>*/
/* </li>*/
/* */
