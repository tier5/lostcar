<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/head.companyAddress.fax.twig */
class __TwigTemplate_336899e0c729bf672ebe80111a5616d77e16127db81f55349a84044f1affa1ba extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_fax", array())) {
            echo "<p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Fax")), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_fax", array()), "html", null, true);
            echo "</p>";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/head.companyAddress.fax.twig";
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
/*  # @ListChild (list="invoice.subhead.companyAddress", weight="400")*/
/*  #}*/
/* */
/* {% if this.company.company_fax %}<p>{{ t('Fax') }}: {{ this.company.company_fax }}</p>{% endif %}*/
/* */
