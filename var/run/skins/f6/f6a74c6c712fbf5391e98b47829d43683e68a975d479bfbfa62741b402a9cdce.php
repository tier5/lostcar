<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/top_news_messages/list/parts/cell.date.twig */
class __TwigTemplate_215c007e3a2e7bd38a8c0d9e355b0438fd422472cc59ae8fd708fb675be17e0f extends \XLite\Core\Templating\Twig\Template
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
        $context["date"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "date", array()), 1 => "%e %b, %Y"), "method");
        // line 8
        echo "<span class=\"date\"><span class=\"day\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "d"), "html", null, true);
        echo "</span><span class=\"month\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "M"), "html", null, true);
        echo "</span></span>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/top_news_messages/list/parts/cell.date.twig";
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
/*  # News messages :: date cell*/
/*  #*/
/*  # @ListChild (list="itemsList.newsMessages.customer.top.row", weight="100")*/
/*  #}*/
/* */
/* {% set date = this.formatDate(this.model.date, "%e %b, %Y") %}*/
/* <span class="date"><span class="day">{{ date|date("d") }}</span><span class="month">{{ date|date("M") }}</span></span>*/
/* */
/* */
