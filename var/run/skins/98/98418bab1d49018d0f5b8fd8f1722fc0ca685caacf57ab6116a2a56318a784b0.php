<?php

/* form_field/file_uploader/multiple.twig */
class __TwigTemplate_a099354091bfcbae8a2f6f376c16df956020425331c40506829117010bd200f4 extends \XLite\Core\Templating\Twig\Template
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
<div";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataCode", array(), "method");
        echo " class=\"multiple-files\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFiles", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FileUploader", "object" => $context["object"], "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxHeight", array(), "method"), "isImage" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isImage", array(), "method"), "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "multiple" => "true", "isViaUrlAllowed" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViaUrlAllowed", array(), "method")))), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FileUploader", "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxHeight", array(), "method"), "isImage" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isImage", array(), "method"), "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "multiple" => "true", "isViaUrlAllowed" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViaUrlAllowed", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "form_field/file_uploader/multiple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # File upload template*/
/*  #}*/
/* */
/* <div{{ this.getDataCode()|raw }} class="multiple-files">*/
/* {% for object in this.getFiles() %}*/
/*   {{ widget('XLite\\View\\FileUploader', object=object, maxWidth=this.getMaxWidth(), maxHeight=this.getMaxHeight(), isImage=this.isImage(), fieldName=this.getName(), multiple='true', isViaUrlAllowed=this.isViaUrlAllowed()) }}*/
/* {% endfor %}*/
/*   {{ widget('XLite\\View\\FileUploader', maxWidth=this.getMaxWidth(), maxHeight=this.getMaxHeight(), isImage=this.isImage(), fieldName=this.getName(), multiple='true', isViaUrlAllowed=this.isViaUrlAllowed()) }}*/
/* </div>*/
/* */
