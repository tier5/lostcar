<?php

/* items_list/model/table_content.twig */
class __TwigTemplate_d502de488cd45fbe11b2f77b72e6918cea80362d63a9e53efeb43d52e65801f1 extends \XLite\Core\Templating\Twig\Template
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
<a name=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAnchorName", array(), "method"), "html", null, true);
        echo "\" class=\"list-anchor\"></a>
<div ";
        // line 6
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributesAsString", array(), "method");
        echo ">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsListParams", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeaderVisible", array(), "method")) {
            // line 9
            echo "    <div class=\"list-header\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.before", "type" => "inherited"))), "html", null, true);
            echo "
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopActions", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 12
                echo "        <div class=\"button-container\">";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($context["tpl"]);                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 12)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header", "type" => "inherited"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPageBodyVisible", array(), "method")) {
            // line 19
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"), "items_list/model/table_content.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 20
            echo "  ";
        }
        // line 21
        echo "  ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPageBodyVisible", array(), "method")) {
            // line 22
            echo "    <div class=\"no-items\">
      ";
            // line 23
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayBlankItemsListDescription", array(), "method")) {
                // line 24
                echo "        ";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlankListTemplate", array(), "method"));                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlankListTemplate", array(), "method"), "items_list/model/table_content.twig", 24)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                // line 25
                echo "      ";
            } elseif ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyListTemplateVisible", array(), "method")) {
                // line 26
                echo "        ";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"));                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"), "items_list/model/table_content.twig", 26)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                // line 27
                echo "      ";
            }
            // line 28
            echo "    </div>
  ";
        }
        // line 30
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagerVisible", array(), "method")) {
            // line 31
            echo "    <div class=\"table-pager\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFooterVisible", array(), "method")) {
            // line 35
            echo "    <div class=\"list-footer\">
      ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBottomActions", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 37
                echo "        <div class=\"button-container\">";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($context["tpl"]);                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 37)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer", "type" => "inherited"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 42
        echo "
</div>

";
        // line 45
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPanelVisible", array(), "method")) {
            // line 46
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPanelClass", array(), "method")))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 46,  222 => 45,  217 => 42,  210 => 39,  185 => 37,  168 => 36,  165 => 35,  163 => 34,  160 => 33,  154 => 31,  151 => 30,  147 => 28,  144 => 27,  133 => 26,  130 => 25,  119 => 24,  117 => 23,  114 => 22,  111 => 21,  108 => 20,  97 => 19,  95 => 18,  92 => 17,  85 => 14,  60 => 12,  43 => 11,  39 => 10,  36 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Table model list*/
/*  #}*/
/* */
/* <a name="{{ this.getAnchorName() }}" class="list-anchor"></a>*/
/* <div {{ this.getContainerAttributesAsString()|raw }}>*/
/*   {{ this.displayCommentedData(this.getItemsListParams()) }}*/
/*   {% if this.isHeaderVisible() %}*/
/*     <div class="list-header">*/
/*       {{ widget_list('header.before', type='inherited') }}*/
/*       {% for tpl in this.getTopActions() %}*/
/*         <div class="button-container">{% include tpl %}</div>*/
/*       {% endfor %}*/
/*       {{ widget_list('header', type='inherited') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if this.isPageBodyVisible() %}*/
/*     {% include this.getPageBodyTemplate() %}*/
/*   {% endif %}*/
/*   {% if not this.isPageBodyVisible() %}*/
/*     <div class="no-items">*/
/*       {% if this.isDisplayBlankItemsListDescription() %}*/
/*         {% include this.getBlankListTemplate() %}*/
/*       {% elseif this.isEmptyListTemplateVisible() %}*/
/*         {% include this.getEmptyListTemplate() %}*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if this.isPagerVisible() %}*/
/*     <div class="table-pager">{{ this.pager.display() }}</div>*/
/*   {% endif %}*/
/* */
/*   {% if this.isFooterVisible() %}*/
/*     <div class="list-footer">*/
/*       {% for tpl in this.getBottomActions() %}*/
/*         <div class="button-container">{% include tpl %}</div>*/
/*       {% endfor %}*/
/*       {{ widget_list('footer', type='inherited') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
/* {% if this.isPanelVisible() %}*/
/*   {{ widget(this.getPanelClass()) }}*/
/* {% endif %}*/
/* */
