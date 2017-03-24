<?php

/* /var/www/html/lostcar/skins/admin/items_list/model/table/countries/parts/cell.states.twig */
class __TwigTemplate_cea4a457843d75051af67d71eca830a4d32d90a0884306c76a9d7ae2c901fa11 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "hasStates", array(), "method")) {
            // line 8
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "states", "", array("country_code" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCode", array(), "method")))), "html", null, true);
            echo "\" class=\"country-states\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Click to edit states")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit states (X)", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getStatesCount", array(), "method")))), "html", null, true);
            echo "</a>
";
        }
        // line 10
        echo "
";
        // line 11
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "hasStates", array(), "method")) {
            // line 12
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "states", "", array("country_code" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCode", array(), "method")))), "html", null, true);
            echo "\" class=\"country-states no-states\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Click to add states")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add states")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/model/table/countries/parts/cell.states.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  37 => 11,  34 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Subcategories count link*/
/*  #*/
/*  # @ListChild (list="itemsList.country.cell.states", weight="100")*/
/*  #}*/
/* */
/* {% if this.entity.hasStates() %}*/
/*   <a href="{{ url('states', '', {'country_code': this.entity.getCode()}) }}" class="country-states" title="{{ t('Click to edit states') }}">{{ t('Edit states (X)', {'count': this.entity.getStatesCount()}) }}</a>*/
/* {% endif %}*/
/* */
/* {% if not this.entity.hasStates() %}*/
/*   <a href="{{ url('states', '', {'country_code': this.entity.getCode()}) }}" class="country-states no-states" title="{{ t('Click to add states') }}">{{ t('Add states') }}</a>*/
/* {% endif %}*/
/* */
