<?php

/* form_field/inline/view.twig */
class __TwigTemplate_c6a3fcdc75451e6df5fed3553d18beec67a5beaddc4f3cb1186b2d8335536b13 extends \XLite\Core\Templating\Twig\Template
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
            echo "  ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEscapeValue", array(), "method")) {
                // line 7
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewValue", array(0 => $context["f"]), "method"), "html", null, true);
                echo "
  ";
            } else {
                // line 9
                echo "    ";
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewValue", array(0 => $context["f"]), "method");
                echo "
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_field/inline/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Inline view*/
/*  #}*/
/* */
/* {% for f in this.getFields() %}*/
/*   {% if this.isEscapeValue() %}*/
/*     {{ this.getViewValue(f) }}*/
/*   {% else %}*/
/*     {{ this.getViewValue(f)|raw }}*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
