<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/News/news_messages/list/parts/cell.brief.twig */
class __TwigTemplate_f0fad69538f852f851723dda1cbcc15eaf9e067b8982bd45d08a3e97e7a1571d extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/customer/modules/XC/News/news_messages/list/parts/cell.brief.twig";
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
/*  # @ListChild (list="itemsList.newsMessages.customer.center.row", weight="250")*/
/*  #}*/
/* */
/* <span class='brief'>{{ this.model.brief_description }}</span>*/
