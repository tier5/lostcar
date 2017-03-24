<?php

/* product/attributes/create_box.twig */
class __TwigTemplate_13de148eb45be2a75217eaf525364383a84adcf0c72b08be9fa75dae809f2d2d extends \XLite\Core\Templating\Twig\Template
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
<li class=\"create-tpl clearfix\" style=\"display:none\">
  <div class=\"attribute-name\">
   ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "newValue[NEW_ID][name]", "fieldOnly" => "true", "required" => "true", "attributes" => array("placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Attribute name")))))), "html", null, true);
        echo "
    <input type=\"hidden\" name=\"newValue[NEW_ID][listId]\" value=\"NEW_LIST_ID\" /> 
    <input type=\"hidden\" name=\"newValue[NEW_ID][type]\" value=\"NEW_TYPE\" /> 
  </div>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDefaultWidgets", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  <div class=\"actions\">
    ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Remove", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "style" => "delete"))), "html", null, true);
        echo "
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "product/attributes/create_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  44 => 14,  35 => 12,  31 => 11,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Create box*/
/*  #}*/
/* */
/* <li class="create-tpl clearfix" style="display:none">*/
/*   <div class="attribute-name">*/
/*    {{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='newValue[NEW_ID][name]', fieldOnly='true', required='true', attributes={'placeholder': t('Attribute name')}) }}*/
/*     <input type="hidden" name="newValue[NEW_ID][listId]" value="NEW_LIST_ID" /> */
/*     <input type="hidden" name="newValue[NEW_ID][type]" value="NEW_TYPE" /> */
/*   </div>*/
/*   {% for w in this.getDefaultWidgets() %}*/
/*     {{ w.display() }}*/
/*   {% endfor %}*/
/*   <div class="actions">*/
/*     {{ widget('XLite\\View\\Button\\Remove', label=t('Remove'), style='delete') }}*/
/*   </div>*/
/* </li>*/
/* */
