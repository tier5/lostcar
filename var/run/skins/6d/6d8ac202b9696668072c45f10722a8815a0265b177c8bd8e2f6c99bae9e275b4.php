<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/link.create.twig */
class __TwigTemplate_bc67fb5ef97f9503634d605a81781f48d87dfc1233ad63a6c69d3649e397e7a9 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method") == "checkout")) {
            // line 8
            echo "    <a class=\"create-account-link\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "checkout", "", array("mode" => "register"))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Create account")), "html", null, true);
            echo "</a>
";
        } else {
            // line 10
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\Button\\CreateAccount"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/link.create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Link : create account*/
/*  #*/
/*  # @ListChild (list="customer.signin.links", weight="100")*/
/*  #}*/
/* */
/* {% if this.getTarget() == 'checkout' %}*/
/*     <a class="create-account-link" href="{{ url('checkout', '', {'mode': 'register'}) }}">{{ t('Create account') }}</a>*/
/* {% else %}*/
/*     {{ widget('XLite\\Module\\XC\\CrispWhiteSkin\\View\\Button\\CreateAccount') }}*/
/* {% endif %}*/
