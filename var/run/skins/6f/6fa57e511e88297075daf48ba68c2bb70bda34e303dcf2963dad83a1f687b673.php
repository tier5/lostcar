<?php

/* items_list/module/pager/body.twig */
class __TwigTemplate_0a178b3ac4476781f52c981e3693c711fa2b9e9ce5b64399e305f2a2f302ef72 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div class=\"addons-pager-found-title\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPagerTitle", array(), "method"), "html", null, true);
        echo "</div>

";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagesListVisible", array(), "method") || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageVisible", array(), "method"))) {
            // line 8
            echo "  <div class=\"addons-pager-list-wrapper\">
  
    <div class=\"addons-pager-list-container\">
  
      ";
            // line 12
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagesListVisible", array(), "method")) {
                // line 13
                echo "        <ul class=\"pagination grid-list addons-pager-list\">
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPages", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 15
                    echo "            <li class=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "classes", array()), "html", null, true);
                    echo "\">
              ";
                    // line 16
                    if ($this->getAttribute($context["page"], "href", array())) {
                        // line 17
                        echo "                <a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "href", array()), "html", null, true);
                        echo "\" class=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "page", array()), "html", null, true);
                        echo "\" title=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "title", array()))), "html", null, true);
                        echo "\" data-text=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "text", array()))), "html", null, true);
                        echo "\">";
                        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "text", array())));
                        echo "</a>
              ";
                    }
                    // line 19
                    echo "              ";
                    if ( !$this->getAttribute($context["page"], "href", array())) {
                        // line 20
                        echo "                <span class=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "page", array()), "html", null, true);
                        echo "\" title=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "title", array()))), "html", null, true);
                        echo "\">";
                        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "text", array())));
                        echo "</span>
              ";
                    }
                    // line 22
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        </ul>
      ";
            }
            // line 26
            echo "  
      ";
            // line 27
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageVisible", array(), "method")) {
                // line 28
                echo "        <div class=\"items-per-page-wrapper\">
          <span>";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Items per page")), "html", null, true);
                echo ":</span>
          <select name=\"itemsPerPage\" class=\"page-length not-significant\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPageRanges", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
                    // line 32
                    echo "              <option value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRangeSelected", array(0 => $context["range"]), "method")) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "          </select>
        </div>
      ";
            }
            // line 37
            echo "  
    </div>
  
  </div>
";
        }
        // line 42
        echo "
<div class=\"addons-pager-buttons\">
  ";
        // line 44
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons", "type" => "inherited"))), "html", null, true);
        echo "
</div>

<div class=\"addons-pager-bottom-title\">";
        // line 47
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPagerBottomTitle", array(), "method");
        echo "</div>

";
        // line 49
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "tail", "type" => "inherited"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/module/pager/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  143 => 47,  137 => 44,  133 => 42,  126 => 37,  121 => 34,  106 => 32,  102 => 31,  97 => 29,  94 => 28,  92 => 27,  89 => 26,  85 => 24,  78 => 22,  68 => 20,  65 => 19,  51 => 17,  49 => 16,  44 => 15,  40 => 14,  37 => 13,  35 => 12,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Pager*/
/*  #}*/
/* */
/* <div class="addons-pager-found-title">{{ this.getPagerTitle() }}</div>*/
/* */
/* {% if this.isPagesListVisible() or this.isItemsPerPageVisible() %}*/
/*   <div class="addons-pager-list-wrapper">*/
/*   */
/*     <div class="addons-pager-list-container">*/
/*   */
/*       {% if this.isPagesListVisible() %}*/
/*         <ul class="pagination grid-list addons-pager-list">*/
/*           {% for page in this.getPages() %}*/
/*             <li class="{{ page.classes }}">*/
/*               {% if page.href %}*/
/*                 <a href="{{ page.href }}" class="{{ page.page }}" title="{{ t(page.title) }}" data-text="{{ t(page.text) }}">{{ t(page.text)|raw }}</a>*/
/*               {% endif %}*/
/*               {% if not page.href %}*/
/*                 <span class="{{ page.page }}" title="{{ t(page.title) }}">{{ t(page.text)|raw }}</span>*/
/*               {% endif %}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/*   */
/*       {% if this.isItemsPerPageVisible() %}*/
/*         <div class="items-per-page-wrapper">*/
/*           <span>{{ t('Items per page') }}:</span>*/
/*           <select name="itemsPerPage" class="page-length not-significant">*/
/*             {% for range in this.getItemsPerPageRanges() %}*/
/*               <option value="{{ range }}" {% if this.isRangeSelected(range) %} selected="selected" {% endif %}>{{ range }}</option>*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       {% endif %}*/
/*   */
/*     </div>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* <div class="addons-pager-buttons">*/
/*   {{ widget_list('buttons', type='inherited') }}*/
/* </div>*/
/* */
/* <div class="addons-pager-bottom-title">{{ this.getPagerBottomTitle()|raw }}</div>*/
/* */
/* {{ widget_list('tail', type='inherited') }}*/
/* */
