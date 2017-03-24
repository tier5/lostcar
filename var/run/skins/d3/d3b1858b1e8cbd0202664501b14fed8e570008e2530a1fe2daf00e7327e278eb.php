<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/welcome.favorite.banner.twig */
class __TwigTemplate_90ca06c80d4e080b9e499b41d0b30de751112a9b630f7e830a59d510e42c174a extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_enable", array())) {
            // line 8
            echo "<div class=\"favorite-banner box-hover\">
    ";
            // line 9
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_image", array())) {
                // line 10
                echo "    <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_image", array()), "html", null, true);
                echo "\" alt=\"\" />
    ";
            }
            // line 12
            echo "    <div class=\"banner-content\">
        <div class=\"text-middle\">
            <div class=\"tbl-cell\">
                ";
            // line 15
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_link_text", array()) != "")) {
                // line 16
                echo "                <h2>
                    <a href=\"";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_link", array()), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_link_text", array()), "html", null, true);
                echo "</a>
                </h2>
                ";
            }
            // line 20
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_text", array()) != "")) {
                // line 21
                echo "                    <p class=\"sub-detail\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_text", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 23
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_discount", array()) != "")) {
                // line 24
                echo "                    <p class=\"discount\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_favorite_banner_discount", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 26
            echo "            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/welcome.favorite.banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  65 => 24,  62 => 23,  56 => 21,  53 => 20,  45 => 17,  42 => 16,  40 => 15,  35 => 12,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.favorite.block", weight="200")*/
/*  #}*/
/* */
/* {% if this.config.JThemesStudio.The80sMod.type2_favorite_banner_enable %}*/
/* <div class="favorite-banner box-hover">*/
/*     {% if this.config.JThemesStudio.The80sMod.type2_favorite_banner_image %}*/
/*     <img src="{{ this.config.JThemesStudio.The80sMod.type2_favorite_banner_image }}" alt="" />*/
/*     {% endif %}*/
/*     <div class="banner-content">*/
/*         <div class="text-middle">*/
/*             <div class="tbl-cell">*/
/*                 {% if this.config.JThemesStudio.The80sMod.type2_favorite_banner_link_text != '' %}*/
/*                 <h2>*/
/*                     <a href="{{ this.config.JThemesStudio.The80sMod.type2_favorite_banner_link }}">{{ this.config.JThemesStudio.The80sMod.type2_favorite_banner_link_text }}</a>*/
/*                 </h2>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type2_favorite_banner_text != '' %}*/
/*                     <p class="sub-detail">{{ this.config.JThemesStudio.The80sMod.type2_favorite_banner_text }}</p>*/
/*                 {% endif %}*/
/*                 {% if this.config.JThemesStudio.The80sMod.type2_favorite_banner_discount != '' %}*/
/*                     <p class="discount">{{ this.config.JThemesStudio.The80sMod.type2_favorite_banner_discount }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
