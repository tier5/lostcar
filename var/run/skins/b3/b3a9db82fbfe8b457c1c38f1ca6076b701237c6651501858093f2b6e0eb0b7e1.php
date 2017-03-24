<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/subscribe_banners/banner2.twig */
class __TwigTemplate_8962364ce326ffe2a240514625614da99e148d9aa42f6f864607e09d62f43ac8 extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_img", array()) != "")) {
            // line 10
            echo "        <img alt=\"\" src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_img", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    <div class=\"info-content\">
        <div>
            <div>
                ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_title", array()) != "")) {
            // line 16
            echo "                    <h2>
                        ";
            // line 17
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_link", array()) != "")) {
                // line 18
                echo "                        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_link", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 20
            echo "
                            ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_title", array()), "html", null, true);
            echo "

                            ";
            // line 23
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_link", array()) != "")) {
                // line 24
                echo "                        </a>
                        ";
            }
            // line 26
            echo "                    </h2>
                ";
        }
        // line 28
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner2_text", array()) != "")) {
            // line 29
            echo "                    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_banner1_text", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 31
        echo "            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type1/subscribe_banners/banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  71 => 29,  68 => 28,  64 => 26,  60 => 24,  58 => 23,  53 => 21,  50 => 20,  44 => 18,  42 => 17,  39 => 16,  37 => 15,  32 => 12,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="subscribe.banners", weight="200")*/
/*  #}*/
/* */
/* */
/* <div class="subscribe-img">*/
/*     {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner2_img != '' %}*/
/*         <img alt="" src="{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner2_img }}" />*/
/*     {% endif %}*/
/*     <div class="info-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner2_title != '' %}*/
/*                     <h2>*/
/*                         {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner2_link != ''%}*/
/*                         <a href="{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner2_link }}">*/
/*                             {% endif %}*/
/* */
/*                             {{ this.config.JThemesStudio.The80sMod.type1_bottom_banner2_title }}*/
/* */
/*                             {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner2_link != ''%}*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </h2>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type1_bottom_banner2_text != '' %}*/
/*                     <p>{{ this.config.JThemesStudio.The80sMod.type1_bottom_banner1_text }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
