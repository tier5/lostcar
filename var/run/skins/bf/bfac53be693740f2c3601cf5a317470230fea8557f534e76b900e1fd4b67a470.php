<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/layout/header/header.bar.links.logged.orders.twig */
class __TwigTemplate_cd4ed03e52e605bf4ff1aad19501014873b3e2edb65aaee112e6358251593db2 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-orders\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order_list", "")), "html", null, true);
        echo "\" class=\"orders icon-orders\">
  \t<span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Orders list")), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/layout/header/header.bar.links.logged.orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="300")*/
/*  #}*/
/* */
/* <li class="account-link-orders">*/
/*   <a href="{{ url('order_list', '') }}" class="orders icon-orders">*/
/*   	<span>{{ t('Orders list') }}</span>*/
/*   </a>*/
/* </li>*/
/* */
