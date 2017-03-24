<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/vartical.banner.twig */
class __TwigTemplate_bcfc876a54d810478d9aa2695ebe718c1d0fff3e94bedb1c08361bfec6a15890 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"vertical-block\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_image", array())) {
            // line 9
            echo "        <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_image", array()), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 11
        echo "
    <div class=\"text-content\">
        <div>
            <div>
                ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_text_link", array())) {
            // line 16
            echo "                    <h2>
                        ";
            // line 17
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_link", array())) {
                // line 18
                echo "                        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_link", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 20
            echo "                            ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_text_link", array()), "html", null, true);
            echo "
                        ";
            // line 21
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_vbanner_link", array())) {
                // line 22
                echo "                        </a>
                        ";
            }
            // line 24
            echo "                    </h2>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/small_banners/vartical.banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  61 => 24,  57 => 22,  55 => 21,  50 => 20,  44 => 18,  42 => 17,  39 => 16,  37 => 15,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.small.banners.vertical", weight="100")*/
/*  #}*/
/* */
/* <div class="vertical-block">*/
/*     {% if this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_image %}*/
/*         <img src="{{ this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_image }}" alt="" />*/
/*     {% endif %}*/
/* */
/*     <div class="text-content">*/
/*         <div>*/
/*             <div>*/
/*                 {% if this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_text_link %}*/
/*                     <h2>*/
/*                         {% if this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_link %}*/
/*                         <a href="{{ this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_link }}">*/
/*                         {% endif %}*/
/*                             {{ this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_text_link }}*/
/*                         {% if this.config.JThemesStudio.The80sMod.type2_bottom_vbanner_link %}*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </h2>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
