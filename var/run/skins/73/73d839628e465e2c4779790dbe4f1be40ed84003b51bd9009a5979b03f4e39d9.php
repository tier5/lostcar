<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner4.twig */
class __TwigTemplate_d71af5a7803e6b85e9a6f0a3327ca2b9766f40a182cb901b1ba5d6cc6739e07d extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner4_link", array()) != "")) {
            // line 9
            echo "<a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner4_link", array()), "html", null, true);
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
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner4_text1", array()), "html", null, true);
        echo " </span>
    <span class=\"text\">";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner4_text2", array()), "html", null, true);
        echo "</span>

        ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner4_link", array()) != "")) {
            // line 18
            echo "</a>
";
        } else {
            // line 20
            echo "    </span>
";
        }
        // line 22
        echo "
";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  62 => 25,  60 => 24,  57 => 22,  53 => 20,  49 => 18,  47 => 17,  42 => 15,  38 => 14,  35 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.bottom.banners", weight="400")*/
/*  #}*/
/* */
/* */
/* {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner4_link != '' %}*/
/* <a href="{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner4_link }}">*/
/*     {% else %}*/
/*     <span>*/
/* {% endif %}*/
/* */
/*         <span class="h2"> {{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner4_text1 }} </span>*/
/*     <span class="text">{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner4_text2 }}</span>*/
/* */
/*         {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner4_link != '' %}*/
/* </a>*/
/* {% else %}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {#<a href="#">#}*/
/*     {#<span class="h2"> 04 </span>#}*/
/*     {#<span class="text"> shoes & bags </span>#}*/
/* {#</a>#}*/
/* */
/* */
