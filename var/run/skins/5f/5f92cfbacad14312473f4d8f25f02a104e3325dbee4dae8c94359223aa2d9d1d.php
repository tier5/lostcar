<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/CDev/SocialLogin/parts/separator.after.twig */
class __TwigTemplate_cf58675630680dc46c19d8d34752562b14cb8c2e6b99968807baebaac6bcb343 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/CDev/SocialLogin/parts/separator.after.twig";
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
