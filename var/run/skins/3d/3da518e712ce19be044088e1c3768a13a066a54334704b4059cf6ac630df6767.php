<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.logged.logout.twig */
class __TwigTemplate_5bdace0fbb0b114678a17b75f0730f13841259ea26701ea6034ba93c4d798868 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "<li class=\"account-link-logoff\">
\t<a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "login", "logoff")), "html", null, true);
        echo "\" class=\"log-off\">
\t\t<span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Log out")), "html", null, true);
        echo "</span>
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.logged.logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  25 => 9,  22 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Log out link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="500")*/
/*  #}*/
/* */
/* {#<li class="separator"><hr /></li>#}*/
/* <li class="account-link-logoff">*/
/* 	<a href="{{ url('login', 'logoff') }}" class="log-off">*/
/* 		<span>{{ t('Log out') }}</span>*/
/* 	</a>*/
/* </li>*/
/* */
