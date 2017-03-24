<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/subscribe_banners/banner1.twig */
class __TwigTemplate_e8a1cf2a4c3849f105bc637cea5ebc0442c8596c98e93faf9b70745f19eca79a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subscribe-img\">
    ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_img", array()) != "")) {
            // line 9
            echo "    <img alt=\"\" src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_img", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_title", array()) != "")) {
            // line 15
            echo "                <h2>
                    ";
            // line 16
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_link", array()) != "")) {
                // line 17
                echo "                    <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_link", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 19
            echo "
                        ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_title", array()), "html", null, true);
            echo "

                    ";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_link", array()) != "")) {
                // line 23
                echo "                    </a>
                    ";
            }
            // line 25
            echo "                </h2>
                ";
        }
        // line 27
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_text", array()) != "")) {
            // line 28
            echo "                <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_text", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/subscribe_banners/banner1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  70 => 28,  67 => 27,  63 => 25,  59 => 23,  57 => 22,  52 => 20,  49 => 19,  43 => 17,  41 => 16,  38 => 15,  36 => 14,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="subscribe.banners", weight="100")*/
/*  #}*/
/* */
/* <div class="subscribe-img">*/
/*     {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner1_img != '' %}*/
/*     <img alt="" src="{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner1_img }}" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner1_title != '' %}*/
/*                 <h2>*/
/*                     {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner1_link != ''%}*/
/*                     <a href="{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner1_link }}">*/
/*                     {% endif %}*/
/* */
/*                         {{ this.config.JThemesStudio.The80sMod.type1_bottom_banner1_title }}*/
/* */
/*                     {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner1_link != ''%}*/
/*                     </a>*/
/*                     {% endif %}*/
/*                 </h2>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner1_text != '' %}*/
/*                 <p>{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner1_text }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
