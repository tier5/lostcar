<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.caption.twig */
class __TwigTemplate_9af7d8631f90bca6ea2fd2eb4f20c6f5955f30c6493ce76b515d0349aa13d929 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCaption", array(), "method")) {
            // line 8
            echo "  <li class=\"social-login-caption\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCaption", array(), "method"), "html", null, true);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.caption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SocialLogin widget caption*/
/*  #*/
/*  # @ListChild (list="social.login.buttons", weight="1")*/
/*  #}*/
/* */
/* {% if this.getCaption() %}*/
/*   <li class="social-login-caption">{{ this.getCaption() }}</li>*/
/* {% endif %}*/
/* */
