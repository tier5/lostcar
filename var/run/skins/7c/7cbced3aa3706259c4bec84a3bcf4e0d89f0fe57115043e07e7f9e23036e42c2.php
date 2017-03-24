<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/select_address/add_button.twig */
class __TwigTemplate_4c835586ae7b378c613d3467fa7c504383912ae3f3aba2c7457a8cf5a35a1c07 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAddAddressButtonVisible", array(), "method")) {
            // line 8
            echo "<div class=\"add-new-address-button\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\AddAddressLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add new address")), "atype" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressType", array(), "method"), "saveAndApply" => true))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/select_address/add_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Add new address button*/
/*  #*/
/*  # @ListChild (list="select-address.after", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAddAddressButtonVisible() %}*/
/* <div class="add-new-address-button">*/
/*   {{ widget('XLite\\View\\Button\\AddAddressLink', label=t('Add new address'), atype=this.getAddressType(), saveAndApply=true) }}*/
/* </div>*/
/* {% endif %}*/
