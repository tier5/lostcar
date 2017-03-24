<?php

/* /var/www/html/lostcar/skins/admin/product/inventory/inv_track_amount.twig */
class __TwigTemplate_30a094e06b5d835c238cc082fc3ea813655f6f9402e20342d5766a4395eddeaf extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Quantity in stock")), "html", null, true);
        echo "</td>
  <td>
    <input type=\"text\" name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "amount"), "method"), "html", null, true);
        echo "\" size=\"18\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAmount", array(), "method"), "html", null, true);
        echo "\" />
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/product/inventory/inv_track_amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="20")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>{{ t('Quantity in stock') }}</td>*/
/*   <td>*/
/*     <input type="text" name="{{ this.getNamePostedData('amount') }}" size="18" value="{{ this.product.getAmount() }}" />*/
/*   </td>*/
/* </tr>*/
/* */
