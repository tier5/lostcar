<?php

/* model/form/content.twig */
class __TwigTemplate_0ea07d1b9028f93c2dfc172a0fc749982f462e45eebe2e5cbbe3b26bfc57363a extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormFieldsForDisplay", array(), "method"));
        foreach ($context['_seq'] as $context["section"] => $context["data"]) {
            // line 9
            echo "  <fieldset>
    ";
            // line 10
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowSectionHeader", array(0 => $context["section"]), "method")) {
                // line 11
                echo "    <legend>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "sectionParamWidget", array()), "display", array(), "method"), "html", null, true);
                echo "</legend>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSectionCollapsible", array(0 => $context["section"]), "method")) {
                // line 15
                echo "    <div class=\"";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSectionCollapsed", array(0 => $context["section"]), "method")) {
                    echo "collapse";
                }
                echo "\" id=\"section-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\" aria-expanded=\"true\">
    ";
            } else {
                // line 17
                echo "    <div>
    ";
            }
            // line 19
            echo "    <ul class=\"table ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "-table\">
      ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "sectionParamFields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 21
                echo "        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemClass", array(0 => $this->getAttribute($context["loop"], "index", array()), 1 => $this->getAttribute($context["loop"], "length", array()), 2 => $context["field"]), "method"), "html", null, true);
                echo "\">
          ";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldCommentedData", array(0 => $context["field"]), "method")), "method"), "html", null, true);
                echo "
          ";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "display", array(), "method"), "html", null, true);
                echo "
          ";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayViewSubList", array(0 => "field", 1 => array("section" => $context["section"], "field" => $context["field"])), "method"), "html", null, true);
                echo "
        </li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </ul>
    </div>

  </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "form.content"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/form/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  121 => 32,  111 => 27,  94 => 24,  90 => 23,  86 => 22,  81 => 21,  64 => 20,  59 => 19,  55 => 17,  45 => 15,  43 => 14,  40 => 13,  34 => 11,  32 => 10,  29 => 9,  25 => 8,  22 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Form content*/
/*  #}*/
/* */
/* {# TODO (FlexyCompiler) - improve the approach to access array fields #}*/
/* {# TODO (FlexyCompiler) - add the ability to use constants #}*/
/* */
/* {% for section, data in this.getFormFieldsForDisplay() %}*/
/*   <fieldset>*/
/*     {% if this.isShowSectionHeader(section) %}*/
/*     <legend>{{ data.sectionParamWidget.display() }}</legend>*/
/*     {% endif %}*/
/* */
/*     {% if this.isSectionCollapsible(section) %}*/
/*     <div class="{% if this.isSectionCollapsed(section) %}collapse{% endif %}" id="section-{{ section }}" aria-expanded="true">*/
/*     {% else %}*/
/*     <div>*/
/*     {% endif %}*/
/*     <ul class="table {{ section }}-table">*/
/*       {% for field in data.sectionParamFields %}*/
/*         <li class="{{ this.getItemClass(loop.index, loop.length, field) }}">*/
/*           {{ this.displayCommentedData(this.getFieldCommentedData(field)) }}*/
/*           {{ field.display() }}*/
/*           {{ this.displayViewSubList('field', {'section': section, 'field': field}) }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/* {% endfor %}*/
/* */
/* {# @todo: remove (see \XLite\Module\CDev\Wholesale\View\MinimumQuantity) #}*/
/* {{ widget_list('form.content') }}*/
/* */
