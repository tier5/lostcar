<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/footer/footer.additional.twig */
class __TwigTemplate_4de1475b5a08efabbddd73ed86126750096d8d2117dbbea04149a845facb4eae extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"thank-you\">";
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Thank you for your order FOOTER"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/footer/footer.additional.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Order customer note*/
/*  #*/
/*  # @ListChild (list="packing_slip.footer", weight="20")*/
/*  #}*/
/* <div class="thank-you">{{ t('Thank you for your order FOOTER')|raw }}</div>*/
/* */
