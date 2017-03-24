<?php

/* /var/www/html/lostcar/skins/customer/layout/header/header.bar.links.logged.twig */
class __TwigTemplate_61e483bdd48a877e9eb9e0b3b8995cf805069d911245052f5e024f36665e9685 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method")) {
            // line 9
            echo "  <ul class=\"account-links\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.bar.links.logged"))), "html", null, true);
            echo "
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/layout/header/header.bar.links.logged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  # @ListChild (list="layout.responsive.account", weight="50")*/
/*  #}*/
/* */
/* {% if this.isLogged() %}*/
/*   <ul class="account-links">*/
/*     {{ widget_list('layout.header.bar.links.logged') }}*/
/*   </ul>*/
/* {% endif %}*/
/* */
