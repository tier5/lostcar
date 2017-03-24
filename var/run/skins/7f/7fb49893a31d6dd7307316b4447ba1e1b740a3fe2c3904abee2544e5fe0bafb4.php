<?php

/* product/details/parts/attributes_modify/body.twig */
class __TwigTemplate_98eeb565192f619106e31675ca7fd8138455e8e553554588fb62bfd5c07e86e7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"attribute-values\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 6
            echo "    <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeCSSClass", array(0 => $context["attribute"]), "method"), "html", null, true);
            echo "\">
      ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["attribute"], "getWidgetClass", array(0 => $this->getAttribute($context["attribute"], "getType", array(), "method")), "method"), "attribute" => $context["attribute"], "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/attributes_modify/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  31 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product attributes */
/*  #}*/
/* <ul class="attribute-values">*/
/*   {% for attribute in this.getAttributes() %}*/
/*     <li class="{{ this.getAttributeCSSClass(attribute) }}">*/
/*       {{ widget(attribute.getWidgetClass(attribute.getType()), attribute=attribute, product=this.product) }}*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
