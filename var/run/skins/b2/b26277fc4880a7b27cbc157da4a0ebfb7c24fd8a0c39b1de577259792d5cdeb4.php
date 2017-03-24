<?php

/* model/form_content.twig */
class __TwigTemplate_2ff2d2fbcd006214d326e627e8f6c70204e1560612a344060eb671d47f2d92a0 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "header", 1 => "content", 2 => "footer"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 3
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormTemplate", array(0 => $context["file"]), "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormTemplate", array(0 => $context["file"]), "method")), "model/form_content.twig", 3)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "model/form_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for file in ['header', 'content', 'footer'] %}*/
/*   {% include this.getDir() ~ '/' ~ this.getFormTemplate(file) %}*/
/* {% endfor %}*/
/* */
