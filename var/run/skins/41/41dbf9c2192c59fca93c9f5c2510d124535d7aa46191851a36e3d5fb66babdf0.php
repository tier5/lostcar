<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/top_banners/banner2.twig */
class __TwigTemplate_101dfb6aa36d7e819a47cab9ab78acceff1504e3e5fd665d2821e2b03511e0ea extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_image", array()) != "")) {
            // line 10
            echo "        <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 12
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_title", array()) != "")) {
            // line 16
            echo "                    <h2> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_title", array()), "html", null, true);
            echo " </h2>
                ";
        }
        // line 18
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_text", array()) != "")) {
            // line 19
            echo "                    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_text", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 21
        echo "
                ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_button_link", array()) != "")) {
            // line 23
            echo "
                    <div>
                        <a href=\"";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_button_link", array()), "html", null, true);
            echo "\" class=\"btn btn-white\">
                            ";
            // line 26
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner2_button_text", array()), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/top_banners/banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  67 => 26,  63 => 25,  59 => 23,  57 => 22,  54 => 21,  48 => 19,  45 => 18,  39 => 16,  37 => 15,  32 => 12,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.top.banners.container.type3", weight="200")*/
/*  #}*/
/* */
/* */
/* <div class="info-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type3_top_banner2_image != '' %}*/
/*         <img src="{{ this.config.JThemesStudio.The80sMod.type3_top_banner2_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner2_title != '' %}*/
/*                     <h2> {{ this.config.JThemesStudio.The80sMod.type3_top_banner2_title }} </h2>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner2_text != '' %}*/
/*                     <p>{{ this.config.JThemesStudio.The80sMod.type3_top_banner2_text }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner2_button_link != '' %}*/
/* */
/*                     <div>*/
/*                         <a href="{{ this.config.JThemesStudio.The80sMod.type3_top_banner2_button_link }}" class="btn btn-white">*/
/*                             {{ this.config.JThemesStudio.The80sMod.type3_top_banner2_button_text }}*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
