<?php

/* button/dropdown.twig */
class __TwigTemplate_5184ea9e0e07fb5a5bc37e777e6885b8d73e20d4210e8b270db45881e3d853e9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"btn-group btn-dropdown ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDropDirection", array(), "method"), "html", null, true);
        echo "\" role=\"group\">

  ";
        // line 6
        $context["showCaret"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShowCaret", array(), "method");
        // line 7
        echo "  ";
        $context["useCaretButton"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUseCaretButton", array(), "method");
        // line 8
        echo "
  <button type=\"button\"
          ";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasName", array(), "method")) {
            echo " name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "\"";
        }
        // line 11
        echo "          ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasValue", array(), "method")) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(), "method"), "html", null, true);
            echo "\"";
        }
        // line 12
        echo "          class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\"
          role=\"group\"
          ";
        // line 14
        if ( !(isset($context["useCaretButton"]) ? $context["useCaretButton"] : null)) {
            // line 15
            echo "    data-toggle=\"dropdown\"
    aria-haspopup=\"true\"
    aria-expanded=\"false\"
          ";
        }
        // line 18
        echo ">

    ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "

    ";
        // line 22
        $context["iconStyle"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method");
        // line 23
        echo "    ";
        if ((isset($context["iconStyle"]) ? $context["iconStyle"] : null)) {
            echo "<span><i class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["iconStyle"]) ? $context["iconStyle"] : null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 24
        echo "
    ";
        // line 25
        $context["buttonLabel"] = call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method")));
        // line 26
        echo "    ";
        if ((isset($context["buttonLabel"]) ? $context["buttonLabel"] : null)) {
            echo "<span>";
            echo (isset($context["buttonLabel"]) ? $context["buttonLabel"] : null);
            echo "</span>";
        }
        // line 27
        echo "
    ";
        // line 28
        if (((isset($context["showCaret"]) ? $context["showCaret"] : null) &&  !(isset($context["useCaretButton"]) ? $context["useCaretButton"] : null))) {
            // line 29
            echo "      <span class=\"caret\"></span>
    ";
        }
        // line 31
        echo "  </button>
  ";
        // line 32
        if ((isset($context["useCaretButton"]) ? $context["useCaretButton"] : null)) {
            // line 33
            echo "    <button
            type=\"button\"
            class=\"btn btn-default dropdown-toggle\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\">
      <span class=\"caret\"></span>
    </button>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method")) {
            // line 44
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 46
                echo "        <li>";
                echo $this->getAttribute($context["button"], "display", array(), "method");
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    </ul>
  ";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "button/dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  137 => 48,  128 => 46,  124 => 45,  121 => 44,  119 => 43,  116 => 42,  105 => 33,  103 => 32,  100 => 31,  96 => 29,  94 => 28,  91 => 27,  84 => 26,  82 => 25,  79 => 24,  72 => 23,  70 => 22,  65 => 20,  61 => 18,  55 => 15,  53 => 14,  47 => 12,  40 => 11,  34 => 10,  30 => 8,  27 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Dropdown button*/
/*  #}*/
/* <div class="btn-group btn-dropdown {{ this.getDropDirection() }}" role="group">*/
/* */
/*   {% set showCaret = this.getShowCaret() %}*/
/*   {% set useCaretButton = this.getUseCaretButton() %}*/
/* */
/*   <button type="button"*/
/*           {% if this.hasName() %} name="{{ this.getName() }}"{% endif %}*/
/*           {% if this.hasValue() %} value="{{ this.getValue() }}"{% endif %}*/
/*           class="{{ this.getClass() }}"*/
/*           role="group"*/
/*           {% if not useCaretButton %}*/
/*     data-toggle="dropdown"*/
/*     aria-haspopup="true"*/
/*     aria-expanded="false"*/
/*           {% endif %}>*/
/* */
/*     {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* */
/*     {% set iconStyle = this.getParam('icon-style') %}*/
/*     {% if iconStyle %}<span><i class="{{ iconStyle }}"></i></span>{% endif %}*/
/* */
/*     {% set buttonLabel = t(this.getButtonLabel()) %}*/
/*     {% if buttonLabel %}<span>{{ buttonLabel|raw }}</span>{% endif %}*/
/* */
/*     {% if showCaret and not useCaretButton %}*/
/*       <span class="caret"></span>*/
/*     {% endif %}*/
/*   </button>*/
/*   {% if useCaretButton %}*/
/*     <button*/
/*             type="button"*/
/*             class="btn btn-default dropdown-toggle"*/
/*             data-toggle="dropdown"*/
/*             aria-haspopup="true"*/
/*             aria-expanded="false">*/
/*       <span class="caret"></span>*/
/*     </button>*/
/*   {% endif %}*/
/* */
/*   {% if this.getAdditionalButtons() %}*/
/*     <ul class="dropdown-menu" role="menu">*/
/*       {% for button in this.getAdditionalButtons() %}*/
/*         <li>{{ button.display()|raw }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* </div>*/
/* */
