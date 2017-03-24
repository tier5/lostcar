<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.brief.twig */
class __TwigTemplate_a619504d4655bc294835dcf89adacfb55620bf0fadd287ad9b68fb70a9eb9874 extends \XLite\Core\Templating\Twig\Template
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
<span class='brief'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "brief_description", array()), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.brief.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # News messages :: date cell*/
/*  #*/
/*  # @ListChild (list="itemsList.newsMessages.customer.top.wcrow", weight="250")*/
/*  #}*/
/* */
/* <span class='brief'>{{ this.model.brief_description }}</span>*/
