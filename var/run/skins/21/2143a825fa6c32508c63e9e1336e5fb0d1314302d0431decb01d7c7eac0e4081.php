<?php

/* modules/CDev/Sale/form_model/type/sale.twig */
class __TwigTemplate_698415f9037175e111d1d7b7d3105e5b82a9bd8800e50199fd1d251ccfe9d24e extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'c_dev_sale_sale_widget' => array($this, 'block_c_dev_sale_sale_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('c_dev_sale_sale_widget', $context, $blocks);
    }

    public function block_c_dev_sale_sale_widget($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"input-group\">
        <div class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span v-if=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
        echo ".type=='sale_percent'\">%</span>
                <span v-if=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
        echo ".type=='sale_price'\">\$</span>
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"\" v-on:click.prevent=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
        echo ".type='sale_percent'\">%</a></li>
                <li><a href=\"\" v-on:click.prevent=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
        echo ".type='sale_price'\">\$</a></li>
            </ul>
        </div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'widget');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/form_model/type/sale.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  55 => 15,  49 => 12,  45 => 11,  38 => 7,  34 => 6,  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block c_dev_sale_sale_widget -%}*/
/*     <div class="input-group">*/
/*         <div class="input-group-btn">*/
/*             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                 <span v-if="{{ v_model }}.type=='sale_percent'">%</span>*/
/*                 <span v-if="{{ v_model }}.type=='sale_price'">$</span>*/
/*                 <span class="caret"></span>*/
/*             </button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="" v-on:click.prevent="{{ v_model }}.type='sale_percent'">%</a></li>*/
/*                 <li><a href="" v-on:click.prevent="{{ v_model }}.type='sale_price'">$</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         {{ form_widget(form.type) }}*/
/*         {{ form_widget(form.value) }}*/
/*     </div>*/
/* {%- endblock c_dev_sale_sale_widget %}*/
/* */
