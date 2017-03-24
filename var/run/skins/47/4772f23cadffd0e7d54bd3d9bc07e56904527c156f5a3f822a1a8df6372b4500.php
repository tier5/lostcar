<?php

/* form_field/inline/field.twig */
class __TwigTemplate_b3f87aba2b4415b0e1cc1e3feaee770b3574ee7054dfe21f07e4f404e33171e4 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFields", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 6
            echo "  <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldClassName", array(0 => $context["f"]), "method"), "html", null, true);
            echo "\">
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "widget", array()), "display", array(), "method"), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_field/inline/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Display field*/
/*  #}*/
/* */
/* {% for f in this.getFields() %}*/
/*   <div class="{{ this.getFieldClassName(f) }}">*/
/*     {{ f.widget.display() }}*/
/*   </div>*/
/* {% endfor %}*/
/* */
