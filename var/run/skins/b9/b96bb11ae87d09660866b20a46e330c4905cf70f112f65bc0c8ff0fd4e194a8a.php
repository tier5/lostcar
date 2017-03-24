<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/bottom_about/bottom.about.info.social.twig */
class __TwigTemplate_04af72c8302d2b3456f46bec419828b04bdf07bc7b0e73542de26ac7208c5285 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"list-inline social-media\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_twitter_link", array())) {
            // line 9
            echo "    <li> <a class=\"fa fa-twitter\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_twitter_link", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_facebook_link", array())) {
            // line 13
            echo "        <li> <a class=\"fa fa-facebook\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_facebook_link", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_googlep_link", array())) {
            // line 17
            echo "        <li> <a class=\"fa fa-google-plus\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_googlep_link", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_pinterest_link", array())) {
            // line 21
            echo "        <li> <a class=\"fa fa-pinterest\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_pinterest_link", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_instagram_link", array())) {
            // line 25
            echo "        <li> <a class=\"fa fa-instagram\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_instagram_link", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_email", array())) {
            // line 29
            echo "        <li> <a class=\"fa fa-envelope\" href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_email", array()), "html", null, true);
            echo "\"> </a> </li>
    ";
        }
        // line 31
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/bottom_about/bottom.about.info.social.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  80 => 29,  78 => 28,  75 => 27,  69 => 25,  67 => 24,  64 => 23,  58 => 21,  56 => 20,  53 => 19,  47 => 17,  45 => 16,  42 => 15,  36 => 13,  34 => 12,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  # @ListChild (list="store.info.footer", weight="400")*/
/*  # @ListChild (list="welcome.textinfo.block.container", weight="300")*/
/*  #}*/
/* */
/* <ul class="list-inline social-media">*/
/*     {% if this.config.JThemesStudio.The80sMod.typeC_twitter_link %}*/
/*     <li> <a class="fa fa-twitter" href="{{ this.config.JThemesStudio.The80sMod.typeC_twitter_link }}"> </a> </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.config.JThemesStudio.The80sMod.typeC_facebook_link %}*/
/*         <li> <a class="fa fa-facebook" href="{{ this.config.JThemesStudio.The80sMod.typeC_facebook_link }}"> </a> </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.config.JThemesStudio.The80sMod.typeC_googlep_link %}*/
/*         <li> <a class="fa fa-google-plus" href="{{ this.config.JThemesStudio.The80sMod.typeC_googlep_link }}"> </a> </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.config.JThemesStudio.The80sMod.typeC_pinterest_link %}*/
/*         <li> <a class="fa fa-pinterest" href="{{ this.config.JThemesStudio.The80sMod.typeC_pinterest_link }}"> </a> </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.config.JThemesStudio.The80sMod.typeC_instagram_link %}*/
/*         <li> <a class="fa fa-instagram" href="{{ this.config.JThemesStudio.The80sMod.typeC_instagram_link }}"> </a> </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.config.JThemesStudio.The80sMod.typeC_email %}*/
/*         <li> <a class="fa fa-envelope" href="mailto:{{ this.config.JThemesStudio.The80sMod.typeC_email }}"> </a> </li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
