<?php

/* product/attributes/body.twig */
class __TwigTemplate_daebbb0e536f575072123c474d4fc77b5fd20d351ab0d6c61e14c575168179fa extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlockStyle", array(), "method"), "html", null, true);
        echo "\">
  <div class=\"header clearfix\">
    <span class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
        echo "</span>
    ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method")) {
            // line 9
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
            echo "
    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canAddAttributes", array(), "method")) {
            // line 12
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Dropdown\\AddAttribute", "listId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListId", array(), "method")))), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "  </div>
  <ul class=\"data lines\" id=\"list";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListId", array(), "method"), "html", null, true);
        echo "\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesList", array(), "method"));
        foreach ($context['_seq'] as $context["id"] => $context["a"]) {
            // line 17
            echo "      <li class=\"line clearfix attribute\">
        <div class=\"attribute-name\">
          ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "name", array()), "display", array(), "method"), "html", null, true);
            echo "
        </div>
        ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "value", array()), "display", array(), "method"), "html", null, true);
            echo "
        ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.attributes.actions", "item" => $context["a"], "itemId" => $context["id"]))), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesList", array(), "method")) {
            // line 26
            echo "      <li class=\"list-empty\">
        ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No attributes assigned")), "html", null, true);
            echo "
      </li>
    ";
        }
        // line 30
        echo "  </ul>
</div>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeGroups", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 33
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Product\\Details\\Admin\\Attributes", "group" => $context["group"]))), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "product/attributes/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  97 => 32,  93 => 30,  87 => 27,  84 => 26,  81 => 25,  72 => 22,  68 => 21,  63 => 19,  59 => 17,  55 => 16,  51 => 15,  48 => 14,  42 => 12,  39 => 11,  33 => 9,  31 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attributes*/
/*  #}*/
/* */
/* <div class="{{ this.getBlockStyle() }}">*/
/*   <div class="header clearfix">*/
/*     <span class="title">{{ this.getTitle() }}</span>*/
/*     {% if this.getTooltip() %}*/
/*       {{ widget('\\XLite\\View\\Tooltip', text=this.getTooltip(), isImageTag='true', className='help-icon') }}*/
/*     {% endif %}*/
/*     {% if this.canAddAttributes() %}*/
/*       {{ widget('\\XLite\\View\\Button\\Dropdown\\AddAttribute', listId=this.getListId()) }}*/
/*     {% endif %}*/
/*   </div>*/
/*   <ul class="data lines" id="list{{ this.getListId() }}">*/
/*     {% for id, a in this.getAttributesList() %}*/
/*       <li class="line clearfix attribute">*/
/*         <div class="attribute-name">*/
/*           {{ a.name.display() }}*/
/*         </div>*/
/*         {{ a.value.display() }}*/
/*         {{ widget_list('product.attributes.actions', item=a, itemId=id) }}*/
/*       </li>*/
/*     {% endfor %}*/
/*     {% if not this.getAttributesList() %}*/
/*       <li class="list-empty">*/
/*         {{ t('No attributes assigned') }}*/
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* {% for group in this.getAttributeGroups() %}*/
/*   {{ widget('XLite\\View\\Product\\Details\\Admin\\Attributes', group=group) }}*/
/* {% endfor %}*/
/* */
