<?php

/* top_links/node.twig */
class __TwigTemplate_0bce60f09ad4f6cc4e53a01a038d05def2b4826aa215febe663d218025b5a43d extends \XLite\Core\Templating\Twig\Template
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
<li ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 6
(isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"), "top_links/node.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasChildren", array(), "method")) {
            // line 9
            echo "    <div class=\"box\">
      <div class=\"arr\"></div>
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChildren", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["child"], "display", array(), "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListName", array(), "method")))), "html", null, true);
            echo "
      </ul>
    </div>
  ";
        }
        // line 19
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "top_links/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  59 => 15,  50 => 13,  46 => 12,  41 => 9,  39 => 8,  36 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Top links node*/
/*  #}*/
/* */
/* <li {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   {% include this.getLinkTemplate() %}*/
/* */
/*   {% if this.hasChildren() %}*/
/*     <div class="box">*/
/*       <div class="arr"></div>*/
/*       <ul>*/
/*         {% for child in this.getChildren() %}*/
/*           {{ child.display() }}*/
/*         {% endfor %}*/
/*         {{ widget_list(this.getListName()) }}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* </li>*/
/* */
