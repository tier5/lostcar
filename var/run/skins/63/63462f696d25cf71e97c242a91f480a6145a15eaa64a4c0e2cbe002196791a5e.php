<?php

/* common/tabber.twig */
class __TwigTemplate_e33d7f7ee1db3d48ab7d683fe8478a0e9a9fe5a31411912a4db3aa85cce14b31 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabberPages", array(), "method")) {
            // line 5
            echo "  <div class=\"tabber tabbed-content-wrapper\">
    <div class=\"tabs-container\">
  
      ";
            // line 8
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTabsNavigationVisible", array(), "method")) {
                // line 9
                echo "        <div class=\"page-tabs\">
    
          <ul>
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabberPages", array(), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tabPage"]) {
                    // line 13
                    echo "              <li class=\"tab";
                    if ($this->getAttribute($context["tabPage"], "selected", array())) {
                        echo "-current";
                    }
                    echo " tabkey-";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tabPage"], "key", array()), "html", null, true);
                    echo "\">";
                    if ($this->getAttribute($context["tabPage"], "linkTemplate", array())) {
                        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tabPage"], "linkTemplate", array()));                        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                        if ($templateWrapperText) {
echo $templateWrapperStart;
}

                        $this->loadTemplate($this->getAttribute($context["tabPage"], "linkTemplate", array()), "common/tabber.twig", 13)->display($context);
                        if ($templateWrapperText) {
                            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                        }
                    } else {
                        echo "<a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tabPage"], "url", array()), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($context["tabPage"], "title", array());
                        echo "</a>";
                    }
                    echo "</li>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabPage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "          </ul>
          ";
                // line 16
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "page.tabs.after"), "method")) {
                    // line 17
                    echo "            <div class=\"list-after-tabs\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "page.tabs.after"))), "html", null, true);
                    echo "</div>
          ";
                }
                // line 19
                echo "    
        </div>
      ";
            }
            // line 22
            echo "  
      <div class=\"tab-content\">";
            // line 23
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyTemplate", array(), "method")) {
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyTemplate", array(), "method"));                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyTemplate", array(), "method"), "common/tabber.twig", 23)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
            }
            echo "</div>
  
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "common/tabber.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 23,  105 => 22,  100 => 19,  94 => 17,  92 => 16,  89 => 15,  50 => 13,  33 => 12,  28 => 9,  26 => 8,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Tabber template*/
/*  #}*/
/* {% if this.getTabberPages() %}*/
/*   <div class="tabber tabbed-content-wrapper">*/
/*     <div class="tabs-container">*/
/*   */
/*       {% if this.isTabsNavigationVisible() %}*/
/*         <div class="page-tabs">*/
/*     */
/*           <ul>*/
/*             {% for tabPage in this.getTabberPages() %}*/
/*               <li class="tab{% if tabPage.selected %}-current{% endif %} tabkey-{{  tabPage.key }}">{% if tabPage.linkTemplate %}{% include tabPage.linkTemplate %}{%  else %}<a href="{{ tabPage.url }}">{{ tabPage.title|raw }}</a>{% endif %}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*           {% if this.isViewListVisible('page.tabs.after') %}*/
/*             <div class="list-after-tabs">{{ widget_list('page.tabs.after') }}</div>*/
/*           {% endif %}*/
/*     */
/*         </div>*/
/*       {% endif %}*/
/*   */
/*       <div class="tab-content">{% if this.getBodyTemplate() %}{% include this.getBodyTemplate() %}{% endif %}</div>*/
/*   */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
