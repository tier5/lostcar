<?php

/* form_model/body.twig */
class __TwigTemplate_99c8d3e1b5390a655f3db409577eaaf314d04d984c1870211fb8a6db3467d7b4 extends \XLite\Core\Templating\Twig\Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormView", array(), "method");
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormThemeFiles", array(), "method"));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "v-on:submit" => "onSubmit")));
        echo "

";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "before", "type" => "inherited"))), "html", null, true);
        echo "

";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "after", "type" => "inherited"))), "html", null, true);
        echo "

";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buttonPanel", array()), "display", array(), "method"), "html", null, true);
        echo "

";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer", "type" => "inherited"))), "html", null, true);
        echo "

";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "form_model/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  54 => 15,  49 => 13,  44 => 11,  39 => 9,  34 => 7,  29 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% set form = this.getFormView() %}*/
/* {% form_theme form with this.getFormThemeFiles() %}*/
/* */
/* {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'v-on:submit': 'onSubmit'}}) }}*/
/* */
/* {{ widget_list('before', type='inherited') }}*/
/* */
/* {{ form_widget(form) }}*/
/* */
/* {{ widget_list('after', type='inherited') }}*/
/* */
/* {{ this.buttonPanel.display() }}*/
/* */
/* {{ widget_list('footer', type='inherited') }}*/
/* */
/* {{ form_end(form) }}*/
/* */
