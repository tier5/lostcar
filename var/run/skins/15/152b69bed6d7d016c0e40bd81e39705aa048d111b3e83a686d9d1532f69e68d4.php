<?php

/* /var/www/html/lostcar/skins/admin/order/history/parts/event_details_action.twig */
class __TwigTemplate_0ce2f4fd5961e96aaaabc4364d06a58a68a6ed8227c5fcb4524093773edd3269 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayDetails", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method")) {
            // line 7
            echo "  <li class=\"details\">
    <div class=\"action\">
      <i data-interval=\"0\" data-toggle=\"collapse\" id=\"event-";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "-action\" data-target=\".event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "\" class=\"fa fa-plus-square-o\"></i>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/history/parts/event_details_action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event date*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details", weight="20")*/
/*  #}*/
/* {% if this.isDisplayDetails(this.event) %}*/
/*   <li class="details">*/
/*     <div class="action">*/
/*       <i data-interval="0" data-toggle="collapse" id="event-{{ this.event.eventId }}-action" data-target=".event-{{ this.event.eventId }}" class="fa fa-plus-square-o"></i>*/
/*     </div>*/
/*   </li>*/
/* {% endif %}*/
/* */
