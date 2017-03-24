<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.amount.twig */
class __TwigTemplate_84f1351fac14edc921424733731d8098a378d5dfaa31321a31ac04a87847ea4d extends \XLite\Core\Templating\Twig\Template
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
<th>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Quantity")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form :: products :: amount*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.captions", weight="25")*/
/*  #}*/
/* */
/* <th>{{ t('Quantity') }}</th>*/
/* */
