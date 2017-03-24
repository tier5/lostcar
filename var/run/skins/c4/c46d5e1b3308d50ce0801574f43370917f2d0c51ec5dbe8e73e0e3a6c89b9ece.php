<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/top_banners/banner1.twig */
class __TwigTemplate_d9c85ab0b2bae0c9d7f366c710940560f8b7138d1bfb49abfa26fff83a1d9525 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_image", array()) != "")) {
            // line 9
            echo "    <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 11
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_text1", array()) != "")) {
            // line 15
            echo "                <h2> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_text1", array()), "html", null, true);
            echo " </h2>
                ";
        }
        // line 17
        echo "
                ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_text2", array()) != "")) {
            // line 19
            echo "                <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_text2", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 21
        echo "
                ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_link", array()) != "")) {
            // line 23
            echo "                <div> <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_link", array()), "html", null, true);
            echo "\" class=\"btn btn-white\"> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_top_banner1_button", array()), "html", null, true);
            echo " </a></div>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/top_banners/banner1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  60 => 23,  58 => 22,  55 => 21,  49 => 19,  47 => 18,  44 => 17,  38 => 15,  36 => 14,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.top.banners.container", weight="100")*/
/*  #}*/
/* */
/* <div class="info-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type1_top_banner1_image != '' %}*/
/*     <img src="{{ this.config.JThemesStudio.The80sMod.type1_top_banner1_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner1_text1 != '' %}*/
/*                 <h2> {{ this.config.JThemesStudio.The80sMod.type1_top_banner1_text1 }} </h2>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner1_text2 != '' %}*/
/*                 <p>{{ this.config.JThemesStudio.The80sMod.type1_top_banner1_text2 }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type1_top_banner1_link != '' %}*/
/*                 <div> <a href="{{ this.config.JThemesStudio.The80sMod.type1_top_banner1_link }}" class="btn btn-white"> {{ this.config.JThemesStudio.The80sMod.type1_top_banner1_button }} </a></div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
