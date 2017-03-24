<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/store.text.twig */
class __TwigTemplate_3061045faba26f3516d9c4135842fc506e01c1fd7bd1feef5af46ad54e78db64 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_store_text", array())) {
            // line 7
            echo "<p>
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_store_text", array()), "html", null, true);
            echo "
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/store.text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  24 => 7,  22 => 6,  19 => 5,);
    }
}
/* {##*/
/*  # Header logo*/
/*  # @ListChild (list="store.info.footer", weight="200")*/
/*  #}*/
/* */
/* {% if this.config.JThemesStudio.The80sMod.typeC_store_text %}*/
/* <p>*/
/*     {{ this.config.JThemesStudio.The80sMod.typeC_store_text }}*/
/* </p>*/
/* {% endif %}*/
/* */
