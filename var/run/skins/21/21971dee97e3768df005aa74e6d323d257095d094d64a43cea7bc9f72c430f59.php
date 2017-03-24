<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner2.twig */
class __TwigTemplate_cde29f82d8f6d4479ae7f095bd7208e39f5270e7a0ab66de5cfa5b6b702e6bd0 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner2_link", array()) != "")) {
            // line 9
            echo "<a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner2_link", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 11
            echo "    <span>
";
        }
        // line 13
        echo "

        <span class=\"h2\"> ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner2_text1", array()), "html", null, true);
        echo " </span>
    <span class=\"text\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner2_text2", array()), "html", null, true);
        echo "</span>

";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner2_link", array()) != "")) {
            // line 19
            echo "</a>
";
        } else {
            // line 21
            echo "    </span>
";
        }
        // line 23
        echo "

";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  62 => 26,  58 => 23,  54 => 21,  50 => 19,  48 => 18,  43 => 16,  39 => 15,  35 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.bottom.banners", weight="200")*/
/*  #}*/
/* */
/* */
/* {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner2_link != '' %}*/
/* <a href="{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner2_link }}">*/
/*     {% else %}*/
/*     <span>*/
/* {% endif %}*/
/* */
/* */
/*         <span class="h2"> {{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner2_text1 }} </span>*/
/*     <span class="text">{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner2_text2 }}</span>*/
/* */
/* {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner2_link != '' %}*/
/* </a>*/
/* {% else %}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* */
/* {#<a href="#">#}*/
/*     {#<span class="h2">02</span>#}*/
/*     {#<span class="text">vintage</span>#}*/
/* {#</a>#}*/
/* */
