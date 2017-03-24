<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/instagram.feed.twig */
class __TwigTemplate_16fa7bd2f781a1fd0d79500fbd5091b383df45acde6e87ed43a39284cb5b322d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_instagramm_feed_code", array())) {
            // line 9
            echo "    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_instagramm_feed_code", array());
            echo "
";
        }
        // line 11
        echo "<script async defer src=\"//platform.instagram.com/en_US/embeds.js\"></script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/instagram.feed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="store.instagram.footer", weight="30")*/
/*  #}*/
/* */
/* */
/* {% if this.config.JThemesStudio.The80sMod.typeC_instagramm_feed_code %}*/
/*     {{ this.config.JThemesStudio.The80sMod.typeC_instagramm_feed_code|raw }}*/
/* {% endif %}*/
/* <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>*/
