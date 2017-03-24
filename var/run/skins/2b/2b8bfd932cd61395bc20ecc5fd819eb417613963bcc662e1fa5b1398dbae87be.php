<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.logged.account.twig */
class __TwigTemplate_7b47ef095dac7fe344eee754571e70beac935aee5c73ee6add47c3fefe732053 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-profile\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "")), "html", null, true);
        echo "\" class=\"profile\">
  \t<span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Details")), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.logged.account.twig";
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
/*  # @ListChild (list="layout.header.bar.links.logged", weight="200")*/
/*  #}*/
/* */
/* <li class="account-link-profile">*/
/*   <a href="{{ url('profile', '') }}" class="profile">*/
/*   	<span>{{ t('Details') }}</span>*/
/*   </a>*/
/* </li>*/
/* */
