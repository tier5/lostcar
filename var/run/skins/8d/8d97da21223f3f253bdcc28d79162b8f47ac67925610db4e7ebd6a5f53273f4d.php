<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/layout/header/header_settings/login.twig */
class __TwigTemplate_271e11b7fb9449c40ff6f1c20a518c9400af2f58b583948fe3ff03491546b938 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAccountLinksVisible", array(), "method")) {
            // line 9
            echo "<ul class=\"sign-in_block\">
\t<li class=\"account-link-sign_in\">
\t    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PopupLogin", "label" => "Sign in / sign up"))), "html", null, true);
            echo "
\t</li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/layout/header/header_settings/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Log in link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="400")*/
/*  # @ListChild (list="layout.header.right.settings", weight="400")*/
/*  #}*/
/* */
/* {% if this.isAccountLinksVisible() %}*/
/* <ul class="sign-in_block">*/
/* 	<li class="account-link-sign_in">*/
/* 	    {{ widget('XLite\\View\\Button\\PopupLogin', label='Sign in / sign up') }}*/
/* 	</li>*/
/* </ul>*/
/* {% endif %}*/
/* */
