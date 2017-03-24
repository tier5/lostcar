<?php

/* layout/type1/welcome_tabs.twig */
class __TwigTemplate_e8ac6e028d49366997d3bc2c38b1bd14a39243608bd9c59c2dd34c988f65ef63 extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method")) {
            // line 11
            echo "    <div class=\"container\">
        <div class=\"category-tabs product-details-tabs\">

            <div class=\"tabs\">
                <ul class=\"tabs primary\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
            foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                // line 17
                echo "                        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => $context["tab"]), "method"), "html", null, true);
                echo "\">
                            <a data-id=\"";
                // line 18
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["tab"], "name", array()))), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </ul>
            </div>

            <div class=\"tabs-container \">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 26
                echo "                    <div id=\"";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" class=\"tab-container hacky-container\" style=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabStyle", array(0 => $context["tab"]), "method"), "html", null, true);
                echo "\">
                        <a name=\"";
                // line 27
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\"></a>
                        ";
                // line 28
                if ($this->getAttribute($context["tab"], "template", array())) {
                    // line 29
                    echo "                            ";
                    $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tab"], "template", array()));                    list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                    if ($templateWrapperText) {
echo $templateWrapperStart;
}

                    $this->loadTemplate($this->getAttribute($context["tab"], "template", array()), "layout/type1/welcome_tabs.twig", 29)->display($context);
                    if ($templateWrapperText) {
                        echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                    }
                    // line 30
                    echo "
                        ";
                } else {
                    // line 32
                    echo "                            ";
                    if ($this->getAttribute($context["tab"], "widget", array())) {
                        // line 33
                        echo "                                ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "widget", array())))), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 35
                        echo "                                ";
                        if ($this->getAttribute($context["tab"], "list", array())) {
                            // line 36
                            echo "                                    ";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "list", array())))), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 38
                            echo "                                    ";
                            if ($this->getAttribute($context["tab"], "widgetObject", array())) {
                                // line 39
                                echo "                                        ";
                                echo $this->getAttribute($this->getAttribute($context["tab"], "widgetObject", array()), "display", array(), "method");
                                echo "
                                    ";
                            }
                            // line 41
                            echo "                                ";
                        }
                        // line 42
                        echo "                            ";
                    }
                    // line 43
                    echo "                        ";
                }
                // line 44
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  123 => 39,  120 => 38,  114 => 36,  111 => 35,  105 => 33,  102 => 32,  98 => 30,  87 => 29,  85 => 28,  81 => 27,  74 => 26,  57 => 25,  51 => 21,  40 => 18,  35 => 17,  31 => 16,  24 => 11,  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Welcome page tabs*/
/*  #*/
/*  # @author    Qualiteam software Ltd <info@x-cart.com>*/
/*  # @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved*/
/*  # @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement*/
/*  # @link      http://www.x-cart.com/*/
/*  #}*/
/* */
/* {% if this.getTabs()%}*/
/*     <div class="container">*/
/*         <div class="category-tabs product-details-tabs">*/
/* */
/*             <div class="tabs">*/
/*                 <ul class="tabs primary">*/
/*                     {% for index, tab in this.getTabs() %}*/
/*                         <li class="{{ this.getTabClass(tab) }}">*/
/*                             <a data-id="{{ tab.id|raw }}">{{ t(tab.name) }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="tabs-container ">*/
/*                 {% for tab in this.getTabs() %}*/
/*                     <div id="{{ tab.id|raw }}" class="tab-container hacky-container" style="{{ this.getTabStyle(tab) }}">*/
/*                         <a name="{{ tab.id|raw }}"></a>*/
/*                         {% if tab.template %}*/
/*                             {% include tab.template %}*/
/* */
/*                         {% else %}*/
/*                             {% if tab.widget %}*/
/*                                 {{ widget(tab.widget) }}*/
/*                             {% else %}*/
/*                                 {% if tab.list %}*/
/*                                     {{ widget_list(tab.list) }}*/
/*                                 {% else %}*/
/*                                     {% if tab.widgetObject %}*/
/*                                         {{ tab.widgetObject.display()|raw }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
