<?php

/* items_list/module/manage/parts/columns/module-main-section/actions/main.twig */
class __TwigTemplate_d4731dbff797ada769bbef0ddeb75dc43be66d9f7d73900cb8a6d3239470db3a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "isSkinModule", array(), "method")) {
            // line 6
            echo "
  ";
            // line 7
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisabledHard", array(), "method") || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEnabledHard", array(), "method"))) {
                // line 8
                echo "
<div class=\"switcher disabled\">
  ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "isImageTag" => "true", "className" => "help-icon", "imageClass" => "warning fa fa-exclamation-circle", "helpId" => sprintf("moduleMessages%d", $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method")), "delay" => 800))), "html", null, true);
                echo "
</div>

  ";
            } else {
                // line 14
                echo "
    ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\ModuleSwitcher", "fieldId" => sprintf("switch%d", $this->getAttribute($this->getAttribute(                // line 17
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method")), "fieldName" => sprintf("switch[%d][new]", $this->getAttribute($this->getAttribute(                // line 18
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method")), "fieldOnly" => true, "value" => $this->getAttribute($this->getAttribute(                // line 20
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getEnabled", array(), "method"), "moduleId" => $this->getAttribute($this->getAttribute(                // line 21
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"), "attributes" => $this->getAttribute(                // line 22
(isset($context["this"]) ? $context["this"] : null), "getFieldAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "isReadOnly" => $this->getAttribute(                // line 23
(isset($context["this"]) ? $context["this"] : null), "isFieldDisabled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "helpId" => sprintf("moduleMessages%d", $this->getAttribute($this->getAttribute(                // line 24
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"))))), "html", null, true);
                // line 26
                echo "

  ";
            }
            // line 29
            echo "
<div class=\"separator\"></div>

";
        }
    }

    public function getTemplateName()
    {
        return "items_list/module/manage/parts/columns/module-main-section/actions/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  52 => 26,  50 => 24,  49 => 23,  48 => 22,  47 => 21,  46 => 20,  45 => 18,  44 => 17,  43 => 15,  40 => 14,  33 => 10,  29 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Modules actions list*/
/*  #}*/
/* */
/* {% if not this.module.isSkinModule() %}*/
/* */
/*   {% if this.isDisabledHard() or this.isEnabledHard() %}*/
/* */
/* <div class="switcher disabled">*/
/*   {{ widget('\\XLite\\View\\Tooltip', isImageTag='true', className='help-icon', imageClass='warning fa fa-exclamation-circle', helpId='moduleMessages%d'|format(this.module.getModuleId()), delay=800) }}*/
/* </div>*/
/* */
/*   {% else %}*/
/* */
/*     {{ widget(*/
/*         'XLite\\View\\FormField\\Input\\Checkbox\\ModuleSwitcher',*/
/*         fieldId='switch%d'|format(this.module.getModuleId()),*/
/*         fieldName='switch[%d][new]'|format(this.module.getModuleId()),*/
/*         fieldOnly=true,*/
/*         value=this.module.getEnabled(),*/
/*         moduleId=this.module.getModuleId(),*/
/*         attributes=this.getFieldAttributes(this.module),*/
/*         isReadOnly=this.isFieldDisabled(this.module),*/
/*         helpId='moduleMessages%d'|format(this.module.getModuleId())*/
/*       )*/
/*     }}*/
/* */
/*   {% endif %}*/
/* */
/* <div class="separator"></div>*/
/* */
/* {% endif %}*/
/* */
