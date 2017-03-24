<?php

/* layout/type1/home.slideshow.twig */
class __TwigTemplate_852027a8d92ef61a2cfc8e4decff924acc83701428f2ec420e621db7e4d888ad extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"home-text-banner pagination-rotator\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_welcome_carousel_bg", array()) != "")) {
            echo " style=\"background-image: url(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_welcome_carousel_bg", array()), "html", null, true);
            echo ");\" ";
        }
        echo ">
    <div class=\"container\">
        <div class=\"text-slider\">
            ";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_welcome_carousel_code", array());
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/home.slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  19 => 1,);
    }
}
/* <div class="home-text-banner pagination-rotator" {% if this.config.JThemesStudio.The80sMod.type1_welcome_carousel_bg != '' %} style="background-image: url({{ this.config.JThemesStudio.The80sMod.type1_welcome_carousel_bg }});" {% endif %}>*/
/*     <div class="container">*/
/*         <div class="text-slider">*/
/*             {{ this.config.JThemesStudio.The80sMod.type1_welcome_carousel_code|raw }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
