<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/top_banners/banner2.twig */
class __TwigTemplate_249a8fe79453b13bc854cf0e2470f355197992a808fba21789791c230a0623d9 extends \XLite\Core\Templating\Twig\Template
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


<div class=\"info-block\">
    ";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_image", array()) != "")) {
            // line 11
            echo "        <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 13
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_text1", array()) != "")) {
            // line 17
            echo "                    <h2> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_text1", array()), "html", null, true);
            echo " </h2>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_text2", array()) != "")) {
            // line 21
            echo "                    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_text2", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_link", array()) != "")) {
            // line 25
            echo "                    <div> <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_link", array()), "html", null, true);
            echo "\" class=\"btn btn-white\"> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner2_button", array()), "html", null, true);
            echo " </a></div>
                ";
        }
        // line 27
        echo "            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/top_banners/banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  62 => 25,  60 => 24,  57 => 23,  51 => 21,  49 => 20,  46 => 19,  40 => 17,  38 => 16,  33 => 13,  27 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.top.banners.container", weight="200")*/
/*  #}*/
/* */
/* */
/* */
/* <div class="info-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type1_top_banner2_image != '' %}*/
/*         <img src="{{ this.config.JThemesStudio.The80sMod.type1_top_banner2_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner2_text1 != '' %}*/
/*                     <h2> {{ this.config.JThemesStudio.The80sMod.type1_top_banner2_text1 }} </h2>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner2_text2 != '' %}*/
/*                     <p>{{ this.config.JThemesStudio.The80sMod.type1_top_banner2_text2 }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner2_link != '' %}*/
/*                     <div> <a href="{{ this.config.JThemesStudio.The80sMod.type1_top_banner2_link }}" class="btn btn-white"> {{ this.config.JThemesStudio.The80sMod.type1_top_banner2_button }} </a></div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
