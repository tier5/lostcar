<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/locale/language.twig */
class __TwigTemplate_b3eb8404b820aa9130d8cc084630f43da11e2ff1754d7aa8ada50b8dd80a2c05 extends \XLite\Core\Templating\Twig\Template
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
<span class='language-indicator'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "code", array()), "html", null, true);
        echo "
</span>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/locale/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Country part*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.locale", weight="20")*/
/*  #}*/
/* */
/* <span class='language-indicator'>*/
/* 	{{ this.currentLanguage.code }}*/
/* </span>*/
