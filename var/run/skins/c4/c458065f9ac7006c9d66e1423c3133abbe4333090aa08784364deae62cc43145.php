<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/price.twig */
class __TwigTemplate_d62000907b4ed27b41410c5e90b08d0e890064625f8dbbd5cab1cd9d9ffad614 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"price\">
    ";
            // line 9
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFree", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                // line 10
                echo "      <div class=\"paid\">
        <span class=\"currency\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getPrice", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "</span>
        ";
                // line 12
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPurchased", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                    // line 13
                    echo "          <span class=\"purchased\">(";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Purchased")), "html", null, true);
                    echo ")</span>
        ";
                }
                // line 15
                echo "      </div>
    ";
            }
            // line 17
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  44 => 15,  38 => 13,  36 => 12,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="100")*/
/*  #}*/
/* */
/* {% if this.showPrice(this.module) %}*/
/*   <div class="price">*/
/*     {% if not this.isFree(this.module) %}*/
/*       <div class="paid">*/
/*         <span class="currency">{{ this.formatPrice(this.module.getPrice(), this.module.getCurrency()) }}</span>*/
/*         {% if this.isPurchased(this.module) %}*/
/*           <span class="purchased">({{ t('Purchased') }})</span>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
