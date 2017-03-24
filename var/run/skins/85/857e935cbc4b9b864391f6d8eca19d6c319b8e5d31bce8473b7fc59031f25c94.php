<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/Coupons/coupons/list/code.twig */
class __TwigTemplate_f29c754d5db79719f1f3ae5b21753e802f7b6d588342939914bbeffc0682e14b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "isExpired", array(), "method")) {
            // line 8
            echo "  <span class=\"expired-mark\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("expired")), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/Coupons/coupons/list/code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Code*/
/*  #*/
/*  # @ListChild (list="itemsList.coupons.cell.code")*/
/*  #}*/
/* */
/* {% if this.entity.isExpired() %}*/
/*   <span class="expired-mark">{{ t('expired') }}</span>*/
/* {% endif %}*/
/* */
