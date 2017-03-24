<?php

/* items_list/body.twig */
class __TwigTemplate_31fbc819f120f89736e1ff8c595bb237e4b88c466f19ea767dc89007d612c4fd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasResults", array(), "method")) {
            // line 5
            echo "  <div class=\"widget items-list widgetclass-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetClass", array(), "method"), "html", null, true);
            echo " widgettarget-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetTarget", array(), "method"), "html", null, true);
            echo " sessioncell-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSessionCell", array(), "method"), "html", null, true);
            echo "\">
  
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsListParams", array(), "method")), "method"), "html", null, true);
            echo "
  
    ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "isVisible", array(), "method")) {
                // line 10
                echo "      <div class=\"table-pager pager-top ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "getCSSClasses", array(), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 12
            echo "  
    ";
            // line 13
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeaderVisible", array(), "method")) {
                // line 14
                echo "      <div class=\"list-header\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header", "type" => "inherited"))), "html", null, true);
                echo "</div>
    ";
            }
            // line 16
            echo "  
    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(            // line 17
(isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"), "items_list/body.twig", 17)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 18
            echo "  
    ";
            // line 19
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "isVisibleBottom", array(), "method")) {
                // line 20
                echo "      <div class=\"table-pager pager-bottom ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "getCSSClasses", array(), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "  
    ";
            // line 23
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFooterVisible", array(), "method")) {
                // line 24
                echo "      <div class=\"list-footer\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer", "type" => "inherited"))), "html", null, true);
                echo "</div>
    ";
            }
            // line 26
            echo "  
  </div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyListTemplateVisible", array(), "method")) {
            // line 31
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"), "items_list/body.twig", 31)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "items_list/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  102 => 30,  99 => 29,  94 => 26,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  73 => 19,  70 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  38 => 10,  36 => 9,  31 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* {% if this.hasResults() %}*/
/*   <div class="widget items-list widgetclass-{{ this.getWidgetClass() }} widgettarget-{{ this.getWidgetTarget() }} sessioncell-{{ this.getSessionCell() }}">*/
/*   */
/*     {{ this.displayCommentedData(this.getItemsListParams()) }}*/
/*   */
/*     {% if this.pager.isVisible() %}*/
/*       <div class="table-pager pager-top {{ this.pager.getCSSClasses() }}">{{ this.pager.display() }}</div>*/
/*     {% endif %}*/
/*   */
/*     {% if this.isHeaderVisible() %}*/
/*       <div class="list-header">{{ widget_list('header', type='inherited') }}</div>*/
/*     {% endif %}*/
/*   */
/*     {% include this.getPageBodyTemplate() %}*/
/*   */
/*     {% if this.pager.isVisibleBottom() %}*/
/*       <div class="table-pager pager-bottom {{ this.pager.getCSSClasses() }}">{{ this.pager.display() }}</div>*/
/*     {% endif %}*/
/*   */
/*     {% if this.isFooterVisible() %}*/
/*       <div class="list-footer">{{ widget_list('footer', type='inherited') }}</div>*/
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if this.isEmptyListTemplateVisible() %}*/
/*   {% include this.getEmptyListTemplate() %}*/
/* {% endif %}*/
/* */
