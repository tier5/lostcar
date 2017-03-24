<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/SocialLogin/parts/separator.after.twig */
class __TwigTemplate_c2ea2ce0e6ae5244189b1c6edeef5dd94094cb6955c6cd01c3afa3a7997d4efe extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSeparatorPosition", array(), "method") == "after")) {
            // line 8
            echo "<div class=\"or-separator\">
    <span class=\"or-separator-text\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSeparatorText", array(), "method"), "html", null, true);
            echo "</span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/SocialLogin/parts/separator.after.twig";
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
/*  # SocialLogin widget's following elements*/
/*  #*/
/*  # @ListChild (list="social.login", weight="9999")*/
/*  #}*/
/* */
/* {% if this.getSeparatorPosition() == 'after' %}*/
/* <div class="or-separator">*/
/*     <span class="or-separator-text">{{ this.getSeparatorText() }}</span>*/
/* </div>*/
/* {% endif %}*/
