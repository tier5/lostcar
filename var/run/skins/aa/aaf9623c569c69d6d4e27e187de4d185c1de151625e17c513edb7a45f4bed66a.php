<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner1.twig */
class __TwigTemplate_c20e15e8fde5bcc7af4566f24c9266c9dfe96ce8513f38ffe9bef592dd961377 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner1_link", array()) != "")) {
            // line 9
            echo "<a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner1_link", array()), "html", null, true);
            echo "\">
";
        } else {
            // line 11
            echo "<span>
";
        }
        // line 13
        echo "

    <span class=\"h2\"> ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner1_text1", array()), "html", null, true);
        echo " </span>
    <span class=\"text\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner1_text2", array()), "html", null, true);
        echo " </span>

    ";
        // line 19
        echo "    ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner1_link", array()) != "")) {
            // line 21
            echo "</a>
";
        } else {
            // line 23
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/bottom_banners/banner1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  52 => 21,  50 => 20,  48 => 19,  43 => 16,  39 => 15,  35 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.bottom.banners", weight="100")*/
/*  #}*/
/* */
/* */
/* {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner1_link != '' %}*/
/* <a href="{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner1_link }}">*/
/* {% else %}*/
/* <span>*/
/* {% endif %}*/
/* */
/* */
/*     <span class="h2"> {{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner1_text1 }} </span>*/
/*     <span class="text">{{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner1_text2 }} </span>*/
/* */
/*     {#<span class="h2"> 01 </span>#}*/
/*     {#<span class="text"> men’s jeans </span>#}*/
/* {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner1_link != '' %}*/
/* </a>*/
/* {% else %}*/
/* </span>*/
/* {% endif %}*/
