<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/Sale/sale_discount_types/parts/percent.twig */
class __TwigTemplate_8ed73a32d8b3ec384c4c4002004075a4acbe591ad39fec4f07d648cb1a5430a0 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
 <ul class=\"sale-discount sale-discount-percent\">
   <li class=\"discount-type\">
     <input
         id=\"sale-price-percent-off\"
         type=\"radio\"
         name=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "discountType"), "method"), "html", null, true);
        echo "\"
         value=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT"), "html", null, true);
        echo "\"
         ";
        // line 14
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "discountType"), "method") == twig_constant("XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT"))) {
            echo "checked=\"checked\"";
        }
        echo " />
     <label for=\"sale-price-percent-off\">
      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Percent off")), "html", null, true);
        echo "
     </label>
   </li>
   <li class=\"sale-price-value\">
     ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text\\Symbol", "fieldOnly" => "true", "mouseWheelIcon" => "false", "symbol" => "%", "fieldId" => ("sale-price-value-" . twig_constant("XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT")), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPercentOffValue", array(), "method")))), "html", null, true);
        echo "
   </li>
 </ul>

 <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/Sale/sale_discount_types/parts/percent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  42 => 16,  35 => 14,  31 => 13,  27 => 12,  19 => 6,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="sale_discount_types", weight="20")*/
/*  #}*/
/* */
/*  <ul class="sale-discount sale-discount-percent">*/
/*    <li class="discount-type">*/
/*      <input*/
/*          id="sale-price-percent-off"*/
/*          type="radio"*/
/*          name="{{ this.getNamePostedData('discountType') }}"*/
/*          value="{{ constant('XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT') }}"*/
/*          {% if this.getParam('discountType') == constant('XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT') %}checked="checked"{% endif %} />*/
/*      <label for="sale-price-percent-off">*/
/*       {{ t('Percent off') }}*/
/*      </label>*/
/*    </li>*/
/*    <li class="sale-price-value">*/
/*      {{ widget('\\XLite\\View\\FormField\\Input\\Text\\Symbol', fieldOnly='true', mouseWheelIcon='false', symbol='%', fieldId='sale-price-value-' ~ constant('XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT'), value=this.getPercentOffValue()) }}*/
/*    </li>*/
/*  </ul>*/
/* */
/*  <div class="clear"></div>*/
/* */
