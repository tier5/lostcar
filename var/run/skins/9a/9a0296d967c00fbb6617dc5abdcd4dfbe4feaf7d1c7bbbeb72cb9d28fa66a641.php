<?php

/* search_panel/body.twig */
class __TwigTemplate_2e655ddd6ebbb03d852cbba48511e534b39c98ade7e16d107e80f222d1385435 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUseFilter", array(), "method")) {
            // line 6
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("search_panel/filters.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("search_panel/filters.twig", "search_panel/body.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 8
        echo "
<div class=\"title-margin\"></div>
";
        // line 10
        $this->startForm($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "class", array()), array("formTarget" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "target", array()), "formAction" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "action", array()), "formParams" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "params", array()), "className" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerClass", array(), "method"), "itemsList" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsList", array(), "method")));        // line 11
        echo "
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "before", "type" => "nested"))), "html", null, true);
        echo "

  <div class=\"search-conditions-box\">

    ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSearchPanelParams", array(), "method")), "method"), "html", null, true);
        echo "

    <ul class=\"search-conditions clear clearfix\">
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getConditions", array(), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["conditionWidget"]) {
            // line 20
            echo "        <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "-condition\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["conditionWidget"], "display", array(), "method"), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['conditionWidget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      <li class=\"actions\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActions", array(), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["action"]) {
            // line 24
            echo "          ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["action"], "display", array(), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "actions", "type" => "nested"))), "html", null, true);
        echo "
      </li>
      ";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "conditions", "type" => "nested"))), "html", null, true);
        echo "
    </ul>

    ";
        // line 31
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHiddenConditions", array(), "method")) {
            // line 32
            echo "      <span class=\"search-conditions-hr\">
        <hr noshade class=\"line1 search-conditions-hidden\">
        <hr noshade class=\"line2 search-conditions-hidden\">
      </span>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHiddenConditions", array(), "method")) {
            // line 39
            echo "      <ul class=\"search-conditions-hidden clear clearfix\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHiddenConditions", array(), "method"));
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
            foreach ($context['_seq'] as $context["name"] => $context["conditionWidget"]) {
                // line 41
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-condition ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRowClass", array(0 => $this->getAttribute($context["loop"], "index", array()), 1 => "odd", 2 => "even"), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["conditionWidget"], "display", array(), "method"), "html", null, true);
                echo "</li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['conditionWidget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "hiddenConditions", "type" => "nested"))), "html", null, true);
            echo "
      </ul>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHiddenConditions", array(), "method")) {
            // line 48
            echo "      <div class=\"arrow\"></div>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUseFilter", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canSaveFilter", array(), "method"))) {
            // line 52
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\SaveSearchFilter"))), "html", null, true);
            echo "
    ";
        }
        // line 54
        echo "
  </div>

  ";
        // line 57
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "after", "type" => "nested"))), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "search_panel/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 57,  182 => 54,  176 => 52,  174 => 51,  171 => 50,  167 => 48,  165 => 47,  162 => 46,  155 => 43,  134 => 41,  117 => 40,  114 => 39,  112 => 38,  109 => 37,  102 => 32,  100 => 31,  94 => 28,  88 => 26,  79 => 24,  75 => 23,  72 => 22,  61 => 20,  57 => 19,  51 => 16,  44 => 12,  41 => 11,  40 => 10,  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Base template*/
/*  #}*/
/* */
/* {% if this.isUseFilter() %}*/
/*   {% include 'search_panel/filters.twig' %}*/
/* {% endif %}*/
/* */
/* <div class="title-margin"></div>*/
/* {% form this.formOptions.class with { formTarget: this.formOptions.target, formAction: this.formOptions.action, formParams: this.formOptions.params, className: this.getContainerClass(), itemsList: this.getItemsList() } %}*/
/* */
/*   {{ widget_list('before', type='nested') }}*/
/* */
/*   <div class="search-conditions-box">*/
/* */
/*     {{ this.displayCommentedData(this.getSearchPanelParams()) }}*/
/* */
/*     <ul class="search-conditions clear clearfix">*/
/*       {% for name, conditionWidget in this.getConditions() %}*/
/*         <li class="{{ name }}-condition">{{ conditionWidget.display() }}</li>*/
/*       {% endfor %}*/
/*       <li class="actions">*/
/*         {% for name, action in this.getActions() %}*/
/*           {{ action.display() }}*/
/*         {% endfor %}*/
/*         {{ widget_list('actions', type='nested') }}*/
/*       </li>*/
/*       {{ widget_list('conditions', type='nested') }}*/
/*     </ul>*/
/* */
/*     {% if this.getHiddenConditions() %}*/
/*       <span class="search-conditions-hr">*/
/*         <hr noshade class="line1 search-conditions-hidden">*/
/*         <hr noshade class="line2 search-conditions-hidden">*/
/*       </span>*/
/*     {% endif %}*/
/* */
/*     {% if this.getHiddenConditions() %}*/
/*       <ul class="search-conditions-hidden clear clearfix">*/
/*         {% for name, conditionWidget in this.getHiddenConditions() %}*/
/*           <li class="{{ name }}-condition {{ this.getRowClass(loop.index, 'odd', 'even') }}">{{ conditionWidget.display() }}</li>*/
/*         {% endfor %}*/
/*         {{ widget_list('hiddenConditions', type='nested') }}*/
/*       </ul>*/
/*     {% endif %}*/
/* */
/*     {% if this.getHiddenConditions() %}*/
/*       <div class="arrow"></div>*/
/*     {% endif %}*/
/* */
/*     {% if this.isUseFilter() and this.canSaveFilter() %}*/
/*       {{ widget('\\XLite\\View\\Button\\SaveSearchFilter') }}*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* */
/*   {{ widget_list('after', type='nested') }}*/
/* */
/* {% endform %}*/
/* */
