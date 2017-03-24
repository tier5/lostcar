<?php

/* product/details/parts/attribute.twig */
class __TwigTemplate_9cbeb26a157e38e2e6e7c8d4ec73c1230f8fd2a3058955fe102b3ce0f9646de3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeGroup", array(), "method")) {
            // line 5
            echo "<li><div class=\"head-h3\"><span class=\"title-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
            echo "</span><span class=\"line\"></span></div>
  <ul>
";
        }
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttrList", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 9
            echo "  <li>
    <div><strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
            echo "</strong></div>
    <span class=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "class", array()), "html", null, true);
            echo "\">";
            echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["a"], "value", array()), "html", null, true));
            echo "</span>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeGroup", array(), "method")) {
            // line 15
            echo "  </ul>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  50 => 14,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attribute*/
/*  #}*/
/* {% if this.getAttributeGroup() %}*/
/* <li><div class="head-h3"><span class="title-text">{{ this.getTitle() }}</span><span class="line"></span></div>*/
/*   <ul>*/
/* {% endif %}*/
/* {% for a in this.getAttrList() %}*/
/*   <li>*/
/*     <div><strong>{{ a.name }}</strong></div>*/
/*     <span class="{{ a.class }}">{{ a.value|nl2br }}</span>*/
/*   </li>*/
/* {% endfor %}*/
/* {% if this.getAttributeGroup() %}*/
/*   </ul>*/
/* </li>*/
/* {% endif %}*/
/* */
