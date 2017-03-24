<?php

/* items_list/product/parts/common.quicklook-button.twig */
class __TwigTemplate_eb979978246a3cfa268e511a9993a6345e0eca154ba42c36bc49917c1e34dac6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isQuickLookEnabled", array(), "method")) {
            // line 5
            echo "  <div class=\"quicklook\">
    <a
            href=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
            echo "\"
            class=\"quicklook-link quicklook-link-";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()), "html", null, true);
            echo " quicklook-link-category-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array()), "html", null, true);
            echo "\">
      <div class=\"quicklook-view\"></div>
    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.quicklook-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  25 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Overlapping box*/
/*  #}*/
/* {% if this.isQuickLookEnabled() %}*/
/*   <div class="quicklook">*/
/*     <a*/
/*             href="{{ this.getProductURL(this.categoryId) }}"*/
/*             class="quicklook-link quicklook-link-{{ this.product.product_id }} quicklook-link-category-{{ this.categoryId }}">*/
/*       <div class="quicklook-view"></div>*/
/*     </a>*/
/*   </div>*/
/* {% endif %}*/
/* */
