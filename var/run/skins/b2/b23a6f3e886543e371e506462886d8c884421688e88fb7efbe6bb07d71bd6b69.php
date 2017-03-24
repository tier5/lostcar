<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/staff_note.twig */
class __TwigTemplate_1ecd5c30481e73d62e30529dba61ec7ee4b3a08879c5dfd7eec3b3d3f6412ae3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-note staff-note\">
  <div class=\"order-note-box\">
    <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Staff note")), "html", null, true);
        echo "</h2>
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "staffNote"), "method"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/staff_note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Order: Staff note*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="50")*/
/*  #}*/
/* */
/* <div class="order-note staff-note">*/
/*   <div class="order-note-box">*/
/*     <h2>{{ t('Staff note') }}</h2>*/
/*     {{ this.orderForm.displayComplexField('staffNote') }}*/
/*   </div>*/
/* </div>*/
/* */
