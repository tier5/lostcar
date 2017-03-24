<?php

/* items_list/product/center/small_thumbnails/body.twig */
class __TwigTemplate_cb21286ab59b62aa0882b5f06aeeeb83f8d9e674e5f253ebd6b484a5d649c1e3 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "itemsList.product.cart"))), "html", null, true);
        echo "

<ul class=\"two-items-carousel\">
    ";
        // line 8
        $context["carouselItem"] = 1;
        // line 9
        echo "
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSideBarData", array(), "method"));
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
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 11
            echo "

    ";
            // line 13
            if ((($this->getAttribute($context["loop"], "index", array()) % 2 == 1) && ((isset($context["carouselItem"]) ? $context["carouselItem"] : null) == 1))) {
                // line 14
                echo "      <li>
        <ul class=\"list-body-sidebar products products-sidebar products-sidebar-small-thumbnails\">
        ";
                // line 16
                $context["carouselItem"] = 0;
                // line 17
                echo "    ";
            }
            // line 18
            echo "
          <li class=\"product-cell box-product item ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalItemClass", array(0 => $this->getAttribute($context["loop"], "index", array()), 1 => $this->getAttribute($context["loop"], "length", array())), "method"), "html", null, true);
            echo "\">

            ";
            // line 21
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductWidgetContent", array(0 => $context["product"]), "method");
            echo "

          </li>

    ";
            // line 25
            if (((($this->getAttribute($context["loop"], "index0", array()) % 2 == 1) || $this->getAttribute($context["loop"], "last", array())) && ((isset($context["carouselItem"]) ? $context["carouselItem"] : null) == 0))) {
                // line 26
                echo "        </ul>
      </li>
        ";
                // line 28
                $context["carouselItem"] = 1;
                // line 29
                echo "    ";
            }
            // line 30
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "items_list/product/center/small_thumbnails/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  91 => 30,  88 => 29,  86 => 28,  82 => 26,  80 => 25,  73 => 21,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  56 => 14,  54 => 13,  50 => 11,  33 => 10,  30 => 9,  28 => 8,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Products list (sidebar variant)*/
/*  #}*/
/* */
/* {{ widget_list('itemsList.product.cart') }}*/
/* */
/* <ul class="two-items-carousel">*/
/*     {% set carouselItem = 1 %}*/
/* */
/*   {% for i, product in this.getSideBarData() %}*/
/* */
/* */
/*     {% if loop.index is odd and carouselItem == 1 %}*/
/*       <li>*/
/*         <ul class="list-body-sidebar products products-sidebar products-sidebar-small-thumbnails">*/
/*         {% set carouselItem = 0 %}*/
/*     {% endif %}*/
/* */
/*           <li class="product-cell box-product item {{ this.getAdditionalItemClass(loop.index, loop.length) }}">*/
/* */
/*             {{ this.getProductWidgetContent(product)|raw }}*/
/* */
/*           </li>*/
/* */
/*     {% if (loop.index0 is odd or loop.last) and carouselItem == 0 %}*/
/*         </ul>*/
/*       </li>*/
/*         {% set carouselItem = 1 %}*/
/*     {% endif %}*/
/* */
/*   {% endfor %}*/
/* </ul>*/
/* */
/* */
