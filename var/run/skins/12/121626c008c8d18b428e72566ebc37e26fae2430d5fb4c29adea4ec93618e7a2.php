<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/bottom_about/bottom.about.info.text.twig */
class __TwigTemplate_33e4d77e704ee177edeb30a2c49d11273445efdec5f3dfe6950e0e8d82a7e544 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_info_text", array())) {
            // line 8
            echo "    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "type2_bottom_info_text", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type2/bottom_about/bottom.about.info.text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.textinfo.block.container", weight="200")*/
/*  #}*/
/* */
/* {% if this.config.JThemesStudio.The80sMod.type2_bottom_info_text %}*/
/*     {{ this.config.JThemesStudio.The80sMod.type2_bottom_info_text|raw }}*/
/* {% endif %}*/
/* */
