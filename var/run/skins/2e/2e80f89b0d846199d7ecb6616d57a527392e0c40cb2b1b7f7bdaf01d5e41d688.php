<?php

/* /var/www/html/lostcar/skins/admin/order/history/parts/event_description.twig */
class __TwigTemplate_baffb37b12df057a51f9e349ef32f175d4f52accf0a6cc682746799ea654fa88 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"description\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/history/parts/event_description.twig";
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
/*  # @ListChild (list="order.history.base.events.details", weight="30")*/
/*  #}*/
/* <li class="description">{{ this.getDescription(this.event) }}</li>*/
/* */
