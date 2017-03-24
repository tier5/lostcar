<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.before.twig */
class __TwigTemplate_057a40e29f8ce830f9d004a1566c66f68a3f9a571a7966616cc063011c4522ab extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTextBefore", array(), "method")) {
            // line 8
            echo "  <div class=\"social-login-note note-before\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTextBefore", array(), "method"), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.before.twig";
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
/*  # SocialLogin widget's preceding elements*/
/*  #*/
/*  # @ListChild (list="social.login", weight="50")*/
/*  #}*/
/* */
/* {% if this.getTextBefore() %}*/
/*   <div class="social-login-note note-before">*/
/*     {{ this.getTextBefore() }}*/
/*   </div>*/
/* {% endif %}*/
/* */
