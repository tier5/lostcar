<?php

/* form_model/theme.twig */
class __TwigTemplate_0aea18ef1af9f462fc921244d2bddd5eff7d967c00ff4553c87b16dbd51c6d6c extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("twig_form/bootstrap_3_horizontal_layout.html.twig", "form_model/theme.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."twig_form/bootstrap_3_horizontal_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_wrapper' => array($this, 'block_form_input_wrapper'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'form_row_class' => array($this, 'block_form_row_class'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_errors' => array($this, 'block_form_errors'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_validation' => array($this, 'block_widget_validation'),
                'base_field_set_row' => array($this, 'block_base_field_set_row'),
                'base_field_set_label' => array($this, 'block_base_field_set_label'),
                'base_field_set_label_attributes' => array($this, 'block_base_field_set_label_attributes'),
                'base_composite_widget' => array($this, 'block_base_composite_widget'),
                'old_widget' => array($this, 'block_old_widget'),
                'switcher_widget' => array($this, 'block_switcher_widget'),
                'low_stock_notification_widget' => array($this, 'block_low_stock_notification_widget'),
                'datepicker_widget' => array($this, 'block_datepicker_widget'),
                'caption_widget' => array($this, 'block_caption_widget'),
                'symbol_widget' => array($this, 'block_symbol_widget'),
                'dimensions_widget' => array($this, 'block_dimensions_widget'),
                'clean_url_widget' => array($this, 'block_clean_url_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('form_end', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('form_input_wrapper', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('form_label', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('form_errors', $context, $blocks);
        // line 115
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 121
        $this->displayBlock('widget_validation', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('base_field_set_row', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('base_field_set_label', $context, $blocks);
        // line 159
        $this->displayBlock('base_field_set_label_attributes', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        $this->displayBlock('base_composite_widget', $context, $blocks);
        // line 178
        echo "
";
        // line 180
        $this->displayBlock('old_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 187
        $this->displayBlock('switcher_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 209
        $this->displayBlock('low_stock_notification_widget', $context, $blocks);
        // line 214
        echo "
";
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('datepicker_widget', $context, $blocks);
        // line 223
        echo "
";
        // line 225
        echo "
";
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('caption_widget', $context, $blocks);
        // line 231
        echo "
";
        // line 233
        echo "
";
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('symbol_widget', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 255
        $this->displayBlock('dimensions_widget', $context, $blocks);
        // line 263
        echo "
";
        // line 265
        $this->displayBlock('clean_url_widget', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        echo "<xlite-form-model inline-template :form=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["data_object"]) ? $context["data_object"] : null), "html", null, true);
        echo "\" :original=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["view_object"]) ? $context["view_object"] : null), "html", null, true);
        echo "\">";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 6
        echo "<validator name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">";
    }

    // line 9
    public function block_form_end($context, array $blocks = array())
    {
        // line 10
        echo "            </validator>
        </form>
    </xlite-form-model>
";
    }

    // line 15
    public function block_form_row($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        // line 18
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo " has-error";
        }
        echo "\"
        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["v_validators"]) ? $context["v_validators"] : null)) > 0)) {
            echo " v-bind:class=\"";
            echo "{";
            echo "'has-error': ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_validator"]) ? $context["v_validator"] : null), "html", null, true);
            echo ".invalid ";
            echo "}";
            echo "\" ";
        }
        // line 20
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["v_show"]) ? $context["v_show"] : null)) > 0)) {
            echo " v-show=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_show"]) ? $context["v_show"] : null), "html", null, true);
            echo "\" ";
        }
        // line 21
        echo "        >

            ";
        // line 23
        if ((isset($context["show_label_block"]) ? $context["show_label_block"] : null)) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        }
        // line 24
        echo "
            <div class=\"input-widget ";
        // line 25
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 26
        $this->displayBlock("form_input_wrapper", $context, $blocks);
        echo "
                <div class=\"help-wrapper\">
                    ";
        // line 28
        if ( !twig_test_empty((isset($context["help"]) ? $context["help"] : null))) {
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Tooltip", "text" => (isset($context["help"]) ? $context["help"] : null)))), "html", null, true);
        }
        // line 31
        echo "                </div>

                ";
        // line 33
        if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
            // line 34
            echo "                    <span class=\"help-block";
            // line 35
            if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
                echo " hide";
            }
            echo "\"
                            ";
            // line 36
            if ((twig_length_filter($this->env, (isset($context["v_validators"]) ? $context["v_validators"] : null)) > 0)) {
                echo " v-bind:class=\"";
                echo "{";
                echo "'hide': ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_validator"]) ? $context["v_validator"] : null), "html", null, true);
                echo ".invalid ";
                echo "}";
                echo "\" ";
            }
            // line 37
            echo "                    >";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</span>
                ";
        }
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 41
        echo "</div>

        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_form_input_wrapper($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"input-wrapper\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 50
        echo "</div>
";
    }

    // line 53
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo " has-error";
        }
        echo "\"
            ";
        // line 56
        if ((twig_length_filter($this->env, (isset($context["v_show"]) ? $context["v_show"] : null)) > 0)) {
            echo " v-show=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_show"]) ? $context["v_show"] : null), "html", null, true);
            echo "\" ";
        }
        // line 57
        echo "        >
            ";
        // line 58
        if ((isset($context["show_label_block"]) ? $context["show_label_block"] : null)) {
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        }
        // line 59
        echo "            <div class=\"input-widget ";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_row_class($context, array $blocks = array())
    {
        // line 68
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["form_row_class"]) ? $context["form_row_class"] : null), "html", null, true);
    }

    // line 71
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 72
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["input_grid"]) ? $context["input_grid"] : null), "html", null, true);
    }

    // line 75
    public function block_form_label($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "        <div class=\"control-label\">
            ";
        // line 78
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
            ";
        // line 79
        if ( !twig_test_empty((isset($context["label_description"]) ? $context["label_description"] : null))) {
            // line 80
            echo "                <span class=\"help-block\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["label_description"]) ? $context["label_description"] : null), "html", null, true);
            echo "</span>
            ";
        }
        // line 82
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_form_label_class($context, array $blocks = array())
    {
    }

    // line 89
    public function block_form_errors($context, array $blocks = array())
    {
        // line 90
        if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
            // line 91
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 92
                echo "<div class=\"alert alert-danger\">
                <ul class=\"list-unstyled\">";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 95
                    echo "<li v-xlite-backend-validator=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "</ul>
            </div>
        ";
            }
            // line 100
            echo "    ";
        } else {
            // line 101
            echo "        <div class=\"help-block\">
            <ul class=\"list-unstyled\">";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 104
                echo "<li v-xlite-backend-validator=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["v_validators"]) ? $context["v_validators"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["validator"]) {
                // line 107
                echo "<li v-if=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["validator"], "html", null, true);
                echo "\" v-text=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["validator"], "html", null, true);
                echo "\"></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['validator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "</ul>
        </div>
    ";
        }
    }

    // line 115
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 116
        if ( !twig_test_empty((isset($context["v_model"]) ? $context["v_model"] : null))) {
            echo "v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
            echo "\"";
        }
        // line 117
        echo "    ";
        $this->displayBlock("widget_validation", $context, $blocks);
        // line 118
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 121
    public function block_widget_validation($context, array $blocks = array())
    {
        // line 122
        if ( !twig_test_empty((isset($context["v_validate"]) ? $context["v_validate"] : null))) {
            // line 123
            echo "        initial=\"off\" v-validate:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_validate_path"]) ? $context["v_validate_path"] : null), "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_validate"]) ? $context["v_validate"] : null), "html", null, true);
            echo "\"
    ";
        }
        // line 125
        echo "    ";
        if ( !twig_test_empty((isset($context["v_validate_trigger"]) ? $context["v_validate_trigger"] : null))) {
            // line 126
            echo "        v-xlite-validate-trigger=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_validate_trigger"]) ? $context["v_validate_trigger"] : null), "html", null, true);
            echo "\"
    ";
        }
    }

    // line 132
    public function block_base_field_set_row($context, array $blocks = array())
    {
        // line 133
        echo "    <fieldset class=\"";
        if ((((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false)) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        <div ";
        // line 135
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </fieldset>
";
    }

    // line 142
    public function block_base_field_set_label($context, array $blocks = array())
    {
        // line 143
        echo "    <legend>
    ";
        // line 144
        if ( !twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 145
            echo "        <h2 ";
            $this->displayBlock("base_field_set_label_attributes", $context, $blocks);
            echo ">";
            // line 146
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            // line 147
            if ( !twig_test_empty((isset($context["help"]) ? $context["help"] : null))) {
                // line 148
                echo "<div class=\"help-wrapper\">
                ";
                // line 149
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Tooltip", "text" => (isset($context["help"]) ? $context["help"] : null)))), "html", null, true);
                echo "
            </div>";
            }
            // line 152
            echo "            ";
            if ((isset($context["collapse"]) ? $context["collapse"] : null)) {
                echo "<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>";
            }
            // line 153
            echo "        </h2>
        ";
            // line 154
            if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
                echo "<span class=\"help-block\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
                echo "</span>";
            }
            // line 155
            echo "    ";
        }
        // line 156
        echo "    </legend>
";
    }

    // line 159
    public function block_base_field_set_label_attributes($context, array $blocks = array())
    {
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["title_attr"]) ? $context["title_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 161
            echo " ";
            // line 162
            if (($context["attrvalue"] === true)) {
                // line 163
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 164
$context["attrvalue"] === false)) {
                // line 165
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 173
    public function block_base_composite_widget($context, array $blocks = array())
    {
        // line 174
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
        // line 175
        $this->displayBlock("form_widget_compound", $context, $blocks);
    }

    // line 180
    public function block_old_widget($context, array $blocks = array())
    {
        // line 181
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => (isset($context["fieldClass"]) ? $context["fieldClass"] : null), 1 => (isset($context["fieldOptions"]) ? $context["fieldOptions"] : null)))), "html", null, true);
    }

    // line 187
    public function block_switcher_widget($context, array $blocks = array())
    {
        // line 188
        echo "<div class=\"onoffswitch\">
        ";
        // line 189
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 190
            echo "            <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"/>
        ";
        } else {
            // line 192
            echo "            ";
            // line 193
            echo "        ";
        }
        // line 194
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
        <label for=\"";
        // line 195
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
            <div class=\"onoffswitch-inner\">
                <div class=\"on-caption\">";
        // line 197
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array((isset($context["on_caption"]) ? $context["on_caption"] : null))), "html", null, true);
        echo "</div>
                <div class=\"off-caption\">";
        // line 198
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array((isset($context["off_caption"]) ? $context["off_caption"] : null))), "html", null, true);
        echo "</div>
            </div>
            <span class=\"onoffswitch-switch\"></span>
        </label>
    </div>";
    }

    // line 209
    public function block_low_stock_notification_widget($context, array $blocks = array())
    {
        // line 210
        $this->displayBlock("switcher_widget", $context, $blocks);
    }

    // line 217
    public function block_datepicker_widget($context, array $blocks = array())
    {
        // line 218
        echo "<div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>";
        // line 220
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 221
        echo "</div>";
    }

    // line 228
    public function block_caption_widget($context, array $blocks = array())
    {
        // line 229
        echo "<div class=\"caption\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo "</div>";
    }

    // line 236
    public function block_symbol_widget($context, array $blocks = array())
    {
        // line 237
        if (((isset($context["left_symbol"]) ? $context["left_symbol"] : null) || (isset($context["right_symbol"]) ? $context["right_symbol"] : null))) {
            // line 238
            echo "    <div class=\"input-group\">
        ";
            // line 239
            if ( !twig_test_empty((isset($context["left_symbol"]) ? $context["left_symbol"] : null))) {
                // line 240
                echo "            <span class=\"input-group-addon\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["left_symbol"]) ? $context["left_symbol"] : null), "html", null, true);
                echo "</span>
        ";
            }
            // line 242
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 243
            if ( !twig_test_empty((isset($context["right_symbol"]) ? $context["right_symbol"] : null))) {
                // line 244
                echo "            <span class=\"input-group-addon\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["right_symbol"]) ? $context["right_symbol"] : null), "html", null, true);
                echo "</span>
        ";
            }
            // line 246
            echo "    </div>
    ";
        } else {
            // line 248
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 255
    public function block_dimensions_widget($context, array $blocks = array())
    {
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "length", array()), 'widget');
        echo "
    <span class=\"separator\">&#215;</span>
    ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "height", array()), 'widget');
        echo "
    <span class=\"separator\">&#215;</span>
    ";
        // line 260
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "width", array()), 'widget');
    }

    // line 265
    public function block_clean_url_widget($context, array $blocks = array())
    {
        // line 267
        echo "<div class=\"clean-url-result\"
         v-xlite-clean-url=\"";
        // line 268
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["v_model"]) ? $context["v_model"] : null), "html", null, true);
        echo "\"
         clean-url-template=\"";
        // line 269
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["cleanUrlTemplate"]) ? $context["cleanUrlTemplate"] : null), "html", null, true);
        echo "\"
         clean-url-saved-value=\"";
        // line 270
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["savedValue"]) ? $context["savedValue"] : null), "html", null, true);
        echo "\"
         clean-url-extension=\"";
        // line 271
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["extension"]) ? $context["extension"] : null), "html", null, true);
        echo "\">
    </div>

    ";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "clean_url", array()), 'row');
        echo "

    <div class=\"clean-url-result\">
        ";
        // line 277
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 278
            echo "            <div class=\"clean-url-disabled-info\">
                <i class=\"fa fa-exclamation-triangle\"></i>
                ";
            // line 280
            echo (isset($context["disabledComment"]) ? $context["disabledComment"] : null);
            echo "
            </div>
        ";
        }
        // line 283
        echo "    </div>

    ";
        // line 285
        if ((isset($context["hasForcibleConflict"]) ? $context["hasForcibleConflict"] : null)) {
            // line 286
            echo "    <div class=\"clean-url-result has-error\" v-show=\"!isCleanUrlAutogenerate()\">
        <div class=\"clean-url-force\">
            ";
            // line 288
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "force", array()), 'row');
            echo "
        </div>
        <div class=\"clean-url-force help-block\">
            ";
            // line 291
            echo (isset($context["errorMessage"]) ? $context["errorMessage"] : null);
            echo "
            ";
            // line 292
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ToolTip", "text" => (isset($context["resolveHint"]) ? $context["resolveHint"] : null), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Resolve the conflict")), "isImageTag" => "false", "className" => "help-icon"))), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 296
        echo "    ";
        if ((isset($context["hasUnForcibleConflict"]) ? $context["hasUnForcibleConflict"] : null)) {
            // line 297
            echo "    <div class=\"clean-url-result has-error\" v-show=\"!isCleanUrlAutogenerate()\">
        <div class=\"clean-url-force help-block\">
            ";
            // line 299
            echo (isset($context["errorMessage"]) ? $context["errorMessage"] : null);
            echo "
            ";
            // line 300
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ToolTip", "text" => (isset($context["resolveHint"]) ? $context["resolveHint"] : null), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Resolve the conflict")), "isImageTag" => "false", "className" => "help-icon"))), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 304
        echo "    <div class=\"clean-url-result\" v-show=\"!isCleanUrlAutogenerate()\">
        <div class=\"clean-url-result-info\">
            <span class=\"result-label\">";
        // line 306
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Result")), "html", null, true);
        echo ": </span>
            ";
        // line 307
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 308
            echo "                <span class=\"saved\" v-show=\"!isCleanURLChanged()\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["cleanUrl"]) ? $context["cleanUrl"] : null), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 310
            echo "                <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["cleanUrl"]) ? $context["cleanUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\" class=\"saved\" v-show=\"!isCleanURLChanged()\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["cleanUrl"]) ? $context["cleanUrl"] : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 312
        echo "            <span class=\"calculated\" v-show=\"isCleanURLChanged()\">";
        echo "{{{";
        echo "getCleanURLResult()";
        echo "}}}";
        echo "</span>
        </div>
    </div>
    <div class=\"clean-url-result\" v-show=\"isCleanUrlAutogenerate()\">
        <div class=\"clean-url-result-info\">";
        // line 316
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The clean URL will be generated automatically.")), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 319
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "autogenerate", array()), 'row');
    }

    public function getTemplateName()
    {
        return "form_model/theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  904 => 319,  898 => 316,  888 => 312,  880 => 310,  874 => 308,  872 => 307,  868 => 306,  864 => 304,  857 => 300,  853 => 299,  849 => 297,  846 => 296,  839 => 292,  835 => 291,  829 => 288,  825 => 286,  823 => 285,  819 => 283,  813 => 280,  809 => 278,  807 => 277,  801 => 274,  795 => 271,  791 => 270,  787 => 269,  783 => 268,  780 => 267,  777 => 265,  773 => 260,  768 => 258,  763 => 256,  760 => 255,  755 => 248,  751 => 246,  745 => 244,  743 => 243,  741 => 242,  735 => 240,  733 => 239,  730 => 238,  728 => 237,  725 => 236,  719 => 229,  716 => 228,  712 => 221,  710 => 220,  707 => 218,  704 => 217,  700 => 210,  697 => 209,  688 => 198,  684 => 197,  679 => 195,  666 => 194,  663 => 193,  661 => 192,  653 => 190,  651 => 189,  648 => 188,  645 => 187,  641 => 181,  638 => 180,  634 => 175,  632 => 174,  629 => 173,  617 => 165,  615 => 164,  610 => 163,  608 => 162,  606 => 161,  602 => 160,  599 => 159,  594 => 156,  591 => 155,  585 => 154,  582 => 153,  577 => 152,  572 => 149,  569 => 148,  567 => 147,  565 => 146,  561 => 145,  559 => 144,  556 => 143,  553 => 142,  545 => 137,  541 => 136,  537 => 135,  533 => 134,  526 => 133,  523 => 132,  515 => 126,  512 => 125,  504 => 123,  502 => 122,  499 => 121,  495 => 118,  492 => 117,  486 => 116,  483 => 115,  476 => 109,  466 => 107,  462 => 106,  452 => 104,  448 => 103,  445 => 101,  442 => 100,  437 => 97,  427 => 95,  423 => 94,  420 => 92,  417 => 91,  415 => 90,  412 => 89,  407 => 86,  401 => 82,  395 => 80,  393 => 79,  389 => 78,  386 => 77,  384 => 76,  381 => 75,  377 => 72,  374 => 71,  370 => 68,  367 => 67,  358 => 61,  354 => 60,  349 => 59,  343 => 58,  340 => 57,  334 => 56,  326 => 55,  324 => 54,  321 => 53,  316 => 50,  314 => 49,  312 => 48,  309 => 47,  301 => 41,  299 => 40,  293 => 37,  283 => 36,  277 => 35,  275 => 34,  273 => 33,  269 => 31,  266 => 29,  264 => 28,  259 => 26,  255 => 25,  252 => 24,  248 => 23,  244 => 21,  237 => 20,  227 => 19,  221 => 18,  218 => 17,  216 => 16,  213 => 15,  206 => 10,  203 => 9,  197 => 6,  195 => 5,  189 => 4,  186 => 3,  182 => 265,  179 => 263,  177 => 255,  174 => 253,  171 => 251,  169 => 236,  166 => 235,  163 => 233,  160 => 231,  158 => 228,  155 => 227,  152 => 225,  149 => 223,  147 => 217,  144 => 216,  141 => 214,  139 => 209,  136 => 206,  134 => 187,  131 => 184,  129 => 180,  126 => 178,  124 => 173,  121 => 171,  119 => 159,  117 => 142,  114 => 141,  112 => 132,  109 => 131,  107 => 121,  105 => 115,  103 => 89,  100 => 88,  98 => 86,  95 => 85,  93 => 75,  90 => 74,  88 => 71,  85 => 70,  83 => 67,  80 => 66,  78 => 53,  75 => 52,  73 => 47,  70 => 46,  68 => 15,  65 => 14,  63 => 9,  60 => 8,  58 => 3,  55 => 2,  14 => 1,);
    }
}
/* {% use "twig_form/bootstrap_3_horizontal_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     <xlite-form-model inline-template :form="{{ data_object }}" :original="{{ view_object }}">*/
/*         {{- parent() -}}*/
/*             <validator name="{{ name }}">*/
/* {%- endblock form_start %}*/
/* */
/* {% block form_end %}*/
/*             </validator>*/
/*         </form>*/
/*     </xlite-form-model>*/
/* {% endblock %}*/
/* */
/* {% block form_row -%}*/
/*     {% spaceless %}*/
/*         <div class="{{ block('form_row_class') }}*/
/*         {%- if (not compound or force_error|default(false)) and not valid %} has-error{% endif -%}"*/
/*         {% if v_validators|length > 0 %} v-bind:class="{{ '{' }}'has-error': {{ v_validator }}.invalid {{ '}' }}" {% endif %}*/
/*         {% if v_show|length > 0 %} v-show="{{ v_show }}" {% endif %}*/
/*         >*/
/* */
/*             {% if show_label_block %}{{- form_label(form) -}}{% endif %}*/
/* */
/*             <div class="input-widget {{ block('form_group_class') }}">*/
/*                 {{ block('form_input_wrapper') }}*/
/*                 <div class="help-wrapper">*/
/*                     {% if help is not empty -%}*/
/*                     {{ widget('XLite\\View\\Tooltip', text = help) }}*/
/*                     {%- endif %}*/
/*                 </div>*/
/* */
/*                 {% if description is not empty %}*/
/*                     <span class="help-block*/
/*                 {%- if (not compound or force_error|default(false)) and not valid %} hide{% endif -%}"*/
/*                             {% if v_validators|length > 0 %} v-bind:class="{{ '{' }}'hide': {{ v_validator }}.invalid {{ '}' }}" {% endif %}*/
/*                     >{{ description|raw }}</span>*/
/*                 {% endif %}*/
/* */
/*                 {{- form_errors(form) -}}*/
/*             </div>*/
/* */
/*         </div>*/
/*     {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block form_input_wrapper %}*/
/*     <div class="input-wrapper">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/*     {% spaceless %}*/
/*         <div class="{{ block('form_row_class') }}{% if not valid %} has-error{% endif %}"*/
/*             {% if v_show|length > 0 %} v-show="{{ v_show }}" {% endif %}*/
/*         >*/
/*             {% if show_label_block %}<div class="{{ block('form_label_class') }}"></div>{% endif %}*/
/*             <div class="input-widget {{ block('form_group_class') }}">*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block form_row_class -%}*/
/*     {{ form_row_class }}*/
/* {%- endblock form_row_class %}*/
/* */
/* {% block form_group_class -%}*/
/*     {{ input_grid }}*/
/* {%- endblock form_group_class %}*/
/* */
/* {% block form_label -%}*/
/*     {% spaceless %}*/
/*         <div class="control-label">*/
/*             {{ parent() }}*/
/*             {% if label_description is not empty %}*/
/*                 <span class="help-block">{{ label_description }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* {%- endblock form_label_class %}*/
/* */
/* {% block form_errors -%}*/
/*     {% if not form.parent %}*/
/*         {% if errors|length > 0 -%}*/
/*             <div class="alert alert-danger">*/
/*                 <ul class="list-unstyled">*/
/*                     {%- for error in errors -%}*/
/*                         <li v-xlite-backend-validator="{{ v_model }}">{{ error.message }}</li>*/
/*                     {%- endfor -%}*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         <div class="help-block">*/
/*             <ul class="list-unstyled">*/
/*                 {%- for error in errors -%}*/
/*                     <li v-xlite-backend-validator="{{ v_model }}">{{ error.message }}</li>*/
/*                 {%- endfor -%}*/
/*                 {%- for validator in v_validators -%}*/
/*                     <li v-if="{{ validator }}" v-text="{{ validator }}"></li>*/
/*                 {%- endfor -%}*/
/*             </ul>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {%- endblock form_errors %}*/
/* */
/* {%- block widget_attributes -%}*/
/*     {% if v_model is not empty %}v-model="{{ v_model }}"{% endif %}*/
/*     {{ block('widget_validation') }}*/
/*     {{- parent() -}}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_validation -%}*/
/*     {% if v_validate is not empty %}*/
/*         initial="off" v-validate:{{ v_validate_path }}="{{ v_validate }}"*/
/*     {% endif %}*/
/*     {% if v_validate_trigger is not empty %}*/
/*         v-xlite-validate-trigger="{{ v_validate_trigger }}"*/
/*     {% endif %}*/
/* {%- endblock widget_validation -%}*/
/* */
/* {# field set #}*/
/* */
/* {% block base_field_set_row %}*/
/*     <fieldset class="{% if force_error|default(false) and not valid %}has-error{% endif %}">*/
/*         {{ form_label(form) }}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*         </div>*/
/*     </fieldset>*/
/* {% endblock base_field_set_row %}*/
/* */
/* {% block base_field_set_label %}*/
/*     <legend>*/
/*     {% if label is not empty %}*/
/*         <h2 {{ block('base_field_set_label_attributes') }}>*/
/*             {{- label -}}*/
/*             {% if help is not empty -%}*/
/*             <div class="help-wrapper">*/
/*                 {{ widget('XLite\\View\\Tooltip', text = help) }}*/
/*             </div>*/
/*             {%- endif %}*/
/*             {% if collapse %}<i class="fa fa-chevron-down" aria-hidden="true"></i>{% endif %}*/
/*         </h2>*/
/*         {% if description is not empty %}<span class="help-block">{{ description }}</span>{% endif %}*/
/*     {% endif %}*/
/*     </legend>*/
/* {% endblock base_field_set_label %}*/
/* */
/* {%- block base_field_set_label_attributes -%}*/
/*     {%- for attrname, attrvalue in title_attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock base_field_set_label_attributes -%}*/
/* */
/* {# / field set #}*/
/* */
/* {# composite #}*/
/* {%- block base_composite_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*     {{ block('form_widget_compound') }}*/
/* {%- endblock base_composite_widget -%}*/
/* {# / composite #}*/
/* */
/* {# oldType #}*/
/* {% block old_widget -%}*/
/*     {{ widget(fieldClass, fieldOptions) }}*/
/* {%- endblock old_widget %}*/
/* {# /oldType #}*/
/* */
/* {# switcher #}*/
/* */
/* {%- block switcher_widget -%}*/
/*     <div class="onoffswitch">*/
/*         {% if disabled %}*/
/*             <input type="hidden" name="{{ full_name }}" value="{{ value }}"/>*/
/*         {% else %}*/
/*             {#<input type="hidden" name="{{ full_name }}" value="" />#}*/
/*         {% endif %}*/
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*         <label for="{{ id }}">*/
/*             <div class="onoffswitch-inner">*/
/*                 <div class="on-caption">{{ t(on_caption) }}</div>*/
/*                 <div class="off-caption">{{ t(off_caption) }}</div>*/
/*             </div>*/
/*             <span class="onoffswitch-switch"></span>*/
/*         </label>*/
/*     </div>*/
/* {%- endblock switcher_widget -%}*/
/* */
/* {# /switcher #}*/
/* */
/* {# low_stock_notification #}*/
/* */
/* {%- block low_stock_notification_widget -%}*/
/*     {{- block('switcher_widget') -}}*/
/* {%- endblock low_stock_notification_widget -%}*/
/* */
/* {# /low_stock_notification #}*/
/* */
/* {# datepicker #}*/
/* */
/* {% block datepicker_widget -%}*/
/*     <div class="input-group">*/
/*         <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>*/
/*         {{- block('form_widget_simple') -}}*/
/*     </div>*/
/* {%- endblock datepicker_widget %}*/
/* */
/* {# /datepicker #}*/
/* */
/* {# caption #}*/
/* */
/* {% block caption_widget -%}*/
/*     <div class="caption">{{ caption }}</div>*/
/* {%- endblock caption_widget %}*/
/* */
/* {# /caption #}*/
/* */
/* {# symbol #}*/
/* */
/* {% block symbol_widget -%}*/
/*     {% if left_symbol or right_symbol %}*/
/*     <div class="input-group">*/
/*         {% if left_symbol is not empty %}*/
/*             <span class="input-group-addon">{{ left_symbol }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if right_symbol is not empty %}*/
/*             <span class="input-group-addon">{{ right_symbol }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock symbol_widget %}*/
/* */
/* {# /symbol #}*/
/* */
/* {# dimenstion #}*/
/* {% block dimensions_widget -%}*/
/*     {{ form_widget(form.length) }}*/
/*     <span class="separator">&#215;</span>*/
/*     {{ form_widget(form.height) }}*/
/*     <span class="separator">&#215;</span>*/
/*     {{ form_widget(form.width) }}*/
/* {%- endblock dimensions_widget %}*/
/* {# /dimenstion #}*/
/* */
/* {# clean_url #}*/
/* {% block clean_url_widget -%}*/
/* */
/*     <div class="clean-url-result"*/
/*          v-xlite-clean-url="{{ v_model }}"*/
/*          clean-url-template="{{ cleanUrlTemplate }}"*/
/*          clean-url-saved-value="{{ savedValue }}"*/
/*          clean-url-extension="{{ extension }}">*/
/*     </div>*/
/* */
/*     {{ form_row(form.clean_url) }}*/
/* */
/*     <div class="clean-url-result">*/
/*         {% if disabled %}*/
/*             <div class="clean-url-disabled-info">*/
/*                 <i class="fa fa-exclamation-triangle"></i>*/
/*                 {{ disabledComment|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% if hasForcibleConflict %}*/
/*     <div class="clean-url-result has-error" v-show="!isCleanUrlAutogenerate()">*/
/*         <div class="clean-url-force">*/
/*             {{ form_row(form.force) }}*/
/*         </div>*/
/*         <div class="clean-url-force help-block">*/
/*             {{ errorMessage | raw }}*/
/*             {{ widget('XLite\\View\\ToolTip', text=resolveHint, caption=t('Resolve the conflict'), isImageTag='false', className='help-icon') }}*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if hasUnForcibleConflict %}*/
/*     <div class="clean-url-result has-error" v-show="!isCleanUrlAutogenerate()">*/
/*         <div class="clean-url-force help-block">*/
/*             {{ errorMessage | raw }}*/
/*             {{ widget('XLite\\View\\ToolTip', text=resolveHint, caption=t('Resolve the conflict'), isImageTag='false', className='help-icon') }}*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="clean-url-result" v-show="!isCleanUrlAutogenerate()">*/
/*         <div class="clean-url-result-info">*/
/*             <span class="result-label">{{ t('Result') }}: </span>*/
/*             {% if disabled %}*/
/*                 <span class="saved" v-show="!isCleanURLChanged()">{{ cleanUrl }}</span>*/
/*             {% else %}*/
/*                 <a href="{{ cleanUrl }}" target="_blank" class="saved" v-show="!isCleanURLChanged()">{{ cleanUrl }}</a>*/
/*             {% endif %}*/
/*             <span class="calculated" v-show="isCleanURLChanged()">{{ '{{{' }}getCleanURLResult(){{ '}}}' }}</span>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clean-url-result" v-show="isCleanUrlAutogenerate()">*/
/*         <div class="clean-url-result-info">{{ t('The clean URL will be generated automatically.') }}</div>*/
/*     </div>*/
/* */
/*     {{ form_row(form.autogenerate) }}*/
/* */
/* {%- endblock clean_url_widget %}*/
/* {# /clean_url #}*/
/* */
