<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/horizontal.banner2.twig */
class __TwigTemplate_46563578a5ecbe6d57955035b38e0e3c989c446b06d32a9893bbbaff2fc93152 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"horizontal-block\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_image", array())) {
            // line 9
            echo "        <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 11
        echo "    <div class=\"text-content\">
        <div>
            <div>
                ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_text_link", array()) != "")) {
            // line 15
            echo "                    <h2>

                        ";
            // line 17
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_link", array()) != "")) {
                // line 18
                echo "                        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_link", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 20
            echo "                            ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_text_link", array()), "html", null, true);
            echo "
                            ";
            // line 21
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_link", array()) != "")) {
                // line 22
                echo "                        </a>
                        ";
            }
            // line 24
            echo "                    </h2>
                ";
        }
        // line 26
        echo "
                ";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_text", array()) != "")) {
            // line 28
            echo "                    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_hbanner2_text", array()), "html", null, true);
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
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/horizontal.banner2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  70 => 28,  68 => 27,  65 => 26,  61 => 24,  57 => 22,  55 => 21,  50 => 20,  44 => 18,  42 => 17,  38 => 15,  36 => 14,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.small.banners.horizontal", weight="200")*/
/*  #}*/
/* */
/* <div class="horizontal-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_image %}*/
/*         <img src="{{ this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="text-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_text_link != '' %}*/
/*                     <h2>*/
/* */
/*                         {% if this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_link != '' %}*/
/*                         <a href="{{ this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_link }}">*/
/*                             {% endif %}*/
/*                             {{ this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_text_link }}*/
/*                             {% if this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_link != '' %}*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </h2>*/
/*                 {% endif %}*/
/* */
/*                 {% if this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_text != '' %}*/
/*                     <p>{{ this.config.JThemesStudio.The80sMod.type2_bottom_hbanner2_text }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
