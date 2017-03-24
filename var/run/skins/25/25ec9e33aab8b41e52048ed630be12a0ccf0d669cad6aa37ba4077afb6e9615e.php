<?php

/* layout/type1/welcome.big.banners.block.twig */
class __TwigTemplate_4f884bd3a5e7d5eb96fe27029344dd2887c2013467450a4b788396775b38d6f0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"bottom-banners clearfix\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner_image", array()) != "")) {
            echo " style=\"background-image: url(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type1_bottom_big_banner_image", array()), "html", null, true);
            echo ");\" ";
        }
        echo "\">
    ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.bottom.banners"))), "html", null, true);
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome.big.banners.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }
}
/* <div class="bottom-banners clearfix" {% if this.config.JThemesStudio.The80sMod.type1_bottom_big_banner_image != '' %} style="background-image: url({{ this.config.JThemesStudio.The80sMod.type1_bottom_big_banner_image }});" {% endif %}">*/
/*     {{ widget_list('welcome.bottom.banners') }}*/
/* </div>*/
/* */
/* */
/* */
