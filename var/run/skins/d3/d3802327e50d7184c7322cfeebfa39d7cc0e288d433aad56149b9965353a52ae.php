<?php

/* common/tabs2.twig */
class __TwigTemplate_fc92cb4aa801f3506b915663d665e589d2f34abe82122577018b43a8b85cb35f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"tabs2-tabbed-content-wrapper\">
  <div class=\"tabs2-tabs-container\">
    <div class=\"tabs2-page-tabs\">

      <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tabPage"]) {
            // line 11
            echo "          <li class=\"tab";
            if ($this->getAttribute($context["tabPage"], "selected", array())) {
                echo "-current";
            }
            echo "\">
            ";
            // line 12
            if ( !$this->getAttribute($context["tabPage"], "selected", array())) {
                // line 13
                echo "              <a href=\"";
                echo $this->getAttribute($context["tabPage"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["tabPage"], "title", array());
                echo "</a>
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["tabPage"], "selected", array())) {
                // line 16
                echo "              <div>";
                echo $this->getAttribute($context["tabPage"], "title", array());
                echo "</div>
            ";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["tabPage"], "selected", array())) {
                // line 19
                echo "              <div class=\"footer\"></div>
            ";
            }
            // line 21
            echo "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </ul>

    </div>
    <div class=\"clear\"></div>

    <div class=\"tab-content\">
      ";
        // line 29
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTemplateOnlyTab", array(), "method")) {
            // line 30
            echo "        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabTemplate", array(), "method"), "common/tabs2.twig", 30)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 31
            echo "      ";
        }
        // line 32
        echo "      ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isWidgetOnlyTab", array(), "method")) {
            // line 33
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("widget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabWidget", array(), "method")))), "html", null, true);
            echo "
      ";
        }
        // line 35
        echo "      ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFullWidgetTab", array(), "method")) {
            // line 36
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("widget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabWidget", array(), "method"), "template" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabTemplate", array(), "method")))), "html", null, true);
            echo "
      ";
        }
        // line 38
        echo "      ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCommonTab", array(), "method")) {
            // line 39
            echo "        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageTemplate", array(), "method"), "common/tabs2.twig", 39)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 40
            echo "      ";
        }
        // line 41
        echo "    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/tabs2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  127 => 40,  116 => 39,  113 => 38,  107 => 36,  104 => 35,  98 => 33,  95 => 32,  92 => 31,  81 => 30,  79 => 29,  71 => 23,  64 => 21,  60 => 19,  57 => 18,  51 => 16,  48 => 15,  40 => 13,  38 => 12,  31 => 11,  27 => 10,  19 => 4,);
    }
}
/* {##*/
/*  # 2-level tabber template*/
/*  #}*/
/* */
/* <div class="tabs2-tabbed-content-wrapper">*/
/*   <div class="tabs2-tabs-container">*/
/*     <div class="tabs2-page-tabs">*/
/* */
/*       <ul>*/
/*         {% for tabPage in this.getTabs() %}*/
/*           <li class="tab{% if tabPage.selected %}-current{% endif %}">*/
/*             {% if not tabPage.selected %}*/
/*               <a href="{{ tabPage.url|raw }}">{{ tabPage.title|raw }}</a>*/
/*             {% endif %}*/
/*             {% if tabPage.selected %}*/
/*               <div>{{ tabPage.title|raw }}</div>*/
/*             {% endif %}*/
/*             {% if tabPage.selected %}*/
/*               <div class="footer"></div>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/* */
/*     </div>*/
/*     <div class="clear"></div>*/
/* */
/*     <div class="tab-content">*/
/*       {% if this.isTemplateOnlyTab() %}*/
/*         {% include this.getTabTemplate() %}*/
/*       {% endif %}*/
/*       {% if this.isWidgetOnlyTab() %}*/
/*         {{ widget(widget=this.getTabWidget()) }}*/
/*       {% endif %}*/
/*       {% if this.isFullWidgetTab() %}*/
/*         {{ widget(widget=this.getTabWidget(), template=this.getTabTemplate()) }}*/
/*       {% endif %}*/
/*       {% if this.isCommonTab() %}*/
/*         {% include this.getPageTemplate() %}*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
