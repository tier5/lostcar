<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/head.companyAddress.phone.twig */
class __TwigTemplate_a9cf665ca14422ed85fd5680b1d6cc50e91376ed887b6be5d2a6e159d4153bb1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_phone", array())) {
            echo "<p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Phone")), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_phone", array()), "html", null, true);
            echo "</p>";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/head.companyAddress.phone.twig";
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
/*  # Invoice : header : Company address box : Phone and Fax*/
/*  #*/
/*  # @ListChild (list="invoice.subhead.companyAddress", weight="300")*/
/*  #}*/
/* */
/* {% if this.company.company_phone %}<p>{{ t('Phone') }}: {{ this.company.company_phone }}</p>{% endif %}*/
/* */
