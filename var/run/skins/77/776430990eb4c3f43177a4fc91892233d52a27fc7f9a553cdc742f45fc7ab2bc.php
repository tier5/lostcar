<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.twig */
class __TwigTemplate_1b0526d52cd39617efbcd9471351a7d6c6a7eede5441b8ab4edcb789138f4241 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAccountLinksVisible", array(), "method") &&  !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method"))) {
            // line 8
            echo "  <div class=\"header_bar-sign_in\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PopupLogin", "label" => "Sign in / sign up"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/header.bar.links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAccountLinksVisible() and not this.isCheckoutLayout() %}*/
/*   <div class="header_bar-sign_in">*/
/*     {{ widget('XLite\\View\\Button\\PopupLogin', label='Sign in / sign up') }}*/
/*   </div>*/
/* {% endif %}*/
