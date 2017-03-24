<?php

/* /var/www/html/lostcar/skins/admin/order/history/parts/event.twig */
class __TwigTemplate_7641d1c7858d2660137c60d097447f92734970f34fef8f61a61ab3229b9949cc extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "block", array()));
        foreach ($context['_seq'] as $context["index"] => $context["event"]) {
            // line 7
            echo "  <li class=\"event\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.history.base.events.details.info", "event" => $context["event"]))), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/history/parts/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  23 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event*/
/*  #*/
/*  # @ListChild (list="order.history.base.events", weight="20")*/
/*  #}*/
/* {% for index, event in this.block %}*/
/*   <li class="event">*/
/*     {{ widget_list('order.history.base.events.details.info', event=event) }}*/
/*   </li>*/
/* {% endfor %}*/
/* */
