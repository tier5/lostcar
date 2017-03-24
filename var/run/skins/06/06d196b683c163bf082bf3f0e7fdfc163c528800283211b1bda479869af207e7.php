<?php

/* /var/www/html/lostcar/skins/admin/order/history/parts/event_date.twig */
class __TwigTemplate_04b9ba826381a72fd0cf0735b1b624d1c51f650ed9461effa4ccc4efca04dd3a extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"date\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDate", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/history/parts/event_date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Order history event date*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details", weight="10")*/
/*  #}*/
/* <li class="date">{{ this.getDate(this.event) }}</li>*/
/* */
