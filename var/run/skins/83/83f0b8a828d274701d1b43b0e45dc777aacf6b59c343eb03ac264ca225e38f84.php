<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/top_banners/banner1.twig */
class __TwigTemplate_e8e46da31375cff57ed8faa9015f8e35b5cf5aac6893e447653dc9cdb9dc2dad extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_image", array()) != "")) {
            // line 9
            echo "        <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 11
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_title", array()) != "")) {
            // line 15
            echo "                <h2> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_title", array()), "html", null, true);
            echo " </h2>
                ";
        }
        // line 17
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_text", array()) != "")) {
            // line 18
            echo "                    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_text", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 20
        echo "
                ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_button_link", array()) != "")) {
            // line 22
            echo "
                <div>
                    <a href=\"";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_button_link", array()), "html", null, true);
            echo "\" class=\"btn btn-white\">
                        ";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type3_top_banner1_button_text", array()), "html", null, true);
            echo "
                    </a>
                </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/top_banners/banner1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  66 => 25,  62 => 24,  58 => 22,  56 => 21,  53 => 20,  47 => 18,  44 => 17,  38 => 15,  36 => 14,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.top.banners.container.type3", weight="100")*/
/*  #}*/
/* */
/* <div class="info-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type3_top_banner1_image != '' %}*/
/*         <img src="{{ this.config.JThemesStudio.The80sMod.type3_top_banner1_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner1_title != '' %}*/
/*                 <h2> {{ this.config.JThemesStudio.The80sMod.type3_top_banner1_title }} </h2>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner1_text != '' %}*/
/*                     <p>{{ this.config.JThemesStudio.The80sMod.type3_top_banner1_text }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type3_top_banner1_button_link != '' %}*/
/* */
/*                 <div>*/
/*                     <a href="{{ this.config.JThemesStudio.The80sMod.type3_top_banner1_button_link }}" class="btn btn-white">*/
/*                         {{ this.config.JThemesStudio.The80sMod.type3_top_banner1_button_text }}*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
