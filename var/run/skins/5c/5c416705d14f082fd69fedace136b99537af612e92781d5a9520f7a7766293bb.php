<?php

/* /var/www/html/lostcar/skins/customer/pager/parts/items_total.twig */
class __TwigTemplate_ffdc8949d2a8151b62eb863bfd681ceb8fd7021471f4d98bc5305d4bb6a48238 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"pager-items-total\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Items")), "html", null, true);
            echo ":
    ";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("BEGIN - END of TOTAL", array("begin" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBeginRecordNumber", array(), "method"), "end" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEndRecordNumber", array(), "method"), "total" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsTotal", array(), "method"))));
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageSelectorVisible", array(), "method")) {
                echo "<span>,
      <input type=\"text\" value=\"";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPage", array(), "method"), "html", null, true);
                echo "\" class=\"page-length validate[custom[integer],min[";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPageMin", array(), "method"), "html", null, true);
                echo "],max[";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPageMax", array(), "method"), "html", null, true);
                echo "]]\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Items per page")), "html", null, true);
                echo "\" />
      ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("per page")), "html", null, true);
                echo "</span>";
            }
            // line 13
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/pager/parts/items_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  36 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Products list items total*/
/*  #*/
/*  # @ListChild (list="pager.itemsTotal", weight="20")*/
/*  #}*/
/* */
/* {% if this.isItemsPerPageVisible() %}*/
/*   <div class="pager-items-total">*/
/*     {{ t('Items') }}:*/
/*     {{ t('BEGIN - END of TOTAL', {'begin': this.getBeginRecordNumber(), 'end': this.getEndRecordNumber(), 'total': this.getItemsTotal()})|raw }}{% if this.isItemsPerPageSelectorVisible() %}<span>,*/
/*       <input type="text" value="{{ this.getItemsPerPage() }}" class="page-length validate[custom[integer],min[{{ this.getItemsPerPageMin() }}],max[{{ this.getItemsPerPageMax() }}]]" title="{{ t('Items per page') }}" />*/
/*       {{ t('per page') }}</span>{% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
