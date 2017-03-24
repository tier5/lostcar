<?php

/* form_model/sticky_panel/body.twig */
class __TwigTemplate_70d8ac98fc09357a157dfc49c4e5aa5f5ce39c8299997077eacb698870d59595 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<xlite-sticky-panel inline-template :changed=\"isChanged()\">
    <div class=\"panel-wrapper\">
        <div class=\"";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\">
            <div class=\"box\">
                ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 5
(isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "form_model/sticky_panel/body.twig", 5)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 6
        echo "            </div>
        </div>
    </div>
</xlite-sticky-panel>";
    }

    public function getTemplateName()
    {
        return "form_model/sticky_panel/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <xlite-sticky-panel inline-template :changed="isChanged()">*/
/*     <div class="panel-wrapper">*/
/*         <div class="{{ this.getClass() }}">*/
/*             <div class="box">*/
/*                 {% include this.getBody() %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </xlite-sticky-panel>*/
