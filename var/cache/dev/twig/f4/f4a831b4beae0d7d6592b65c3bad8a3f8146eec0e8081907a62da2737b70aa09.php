<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_87223e9c8bd82fc991314747128e953c67de005606ba2a655e90be3eec3f770d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75704abd82d6a5709c921f9ae63e0314b3592f21a000ba1b1ba7f5a319f6b8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75704abd82d6a5709c921f9ae63e0314b3592f21a000ba1b1ba7f5a319f6b8a8->enter($__internal_75704abd82d6a5709c921f9ae63e0314b3592f21a000ba1b1ba7f5a319f6b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_3ef0a09e4f17d13325b0f7d972206670252410dc4df418978ed4857409a83664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef0a09e4f17d13325b0f7d972206670252410dc4df418978ed4857409a83664->enter($__internal_3ef0a09e4f17d13325b0f7d972206670252410dc4df418978ed4857409a83664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_75704abd82d6a5709c921f9ae63e0314b3592f21a000ba1b1ba7f5a319f6b8a8->leave($__internal_75704abd82d6a5709c921f9ae63e0314b3592f21a000ba1b1ba7f5a319f6b8a8_prof);

        
        $__internal_3ef0a09e4f17d13325b0f7d972206670252410dc4df418978ed4857409a83664->leave($__internal_3ef0a09e4f17d13325b0f7d972206670252410dc4df418978ed4857409a83664_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a92140792141f6d88a896f5f05d0033fadad38ffb1395165e9996a7b8a4b2303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92140792141f6d88a896f5f05d0033fadad38ffb1395165e9996a7b8a4b2303->enter($__internal_a92140792141f6d88a896f5f05d0033fadad38ffb1395165e9996a7b8a4b2303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c1c82cbc71ee8012cfc2df90442c2da644dc8779bc378c6caf2f98d129b1a7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c82cbc71ee8012cfc2df90442c2da644dc8779bc378c6caf2f98d129b1a7eb->enter($__internal_c1c82cbc71ee8012cfc2df90442c2da644dc8779bc378c6caf2f98d129b1a7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c1c82cbc71ee8012cfc2df90442c2da644dc8779bc378c6caf2f98d129b1a7eb->leave($__internal_c1c82cbc71ee8012cfc2df90442c2da644dc8779bc378c6caf2f98d129b1a7eb_prof);

        
        $__internal_a92140792141f6d88a896f5f05d0033fadad38ffb1395165e9996a7b8a4b2303->leave($__internal_a92140792141f6d88a896f5f05d0033fadad38ffb1395165e9996a7b8a4b2303_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_45c7d73d14e178dc43d6b1f1b52f8ce69c29d3af129c260a3b255c7ee85a223d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c7d73d14e178dc43d6b1f1b52f8ce69c29d3af129c260a3b255c7ee85a223d->enter($__internal_45c7d73d14e178dc43d6b1f1b52f8ce69c29d3af129c260a3b255c7ee85a223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_91066c3e85d736c6f3b4c1ac87ba750000e9714ebeca58448b22fa6b908264fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91066c3e85d736c6f3b4c1ac87ba750000e9714ebeca58448b22fa6b908264fb->enter($__internal_91066c3e85d736c6f3b4c1ac87ba750000e9714ebeca58448b22fa6b908264fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_91066c3e85d736c6f3b4c1ac87ba750000e9714ebeca58448b22fa6b908264fb->leave($__internal_91066c3e85d736c6f3b4c1ac87ba750000e9714ebeca58448b22fa6b908264fb_prof);

        
        $__internal_45c7d73d14e178dc43d6b1f1b52f8ce69c29d3af129c260a3b255c7ee85a223d->leave($__internal_45c7d73d14e178dc43d6b1f1b52f8ce69c29d3af129c260a3b255c7ee85a223d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2a2e1273d7a0a0d2ca0a6d7be5d6d5762e518990f294b7e90333e44cde4a03ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2e1273d7a0a0d2ca0a6d7be5d6d5762e518990f294b7e90333e44cde4a03ed->enter($__internal_2a2e1273d7a0a0d2ca0a6d7be5d6d5762e518990f294b7e90333e44cde4a03ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_11647e35178d8501f0effd9ddfa255ecd8f4a7f4b36ca86ad106f0aeea10cf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11647e35178d8501f0effd9ddfa255ecd8f4a7f4b36ca86ad106f0aeea10cf73->enter($__internal_11647e35178d8501f0effd9ddfa255ecd8f4a7f4b36ca86ad106f0aeea10cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_11647e35178d8501f0effd9ddfa255ecd8f4a7f4b36ca86ad106f0aeea10cf73->leave($__internal_11647e35178d8501f0effd9ddfa255ecd8f4a7f4b36ca86ad106f0aeea10cf73_prof);

        
        $__internal_2a2e1273d7a0a0d2ca0a6d7be5d6d5762e518990f294b7e90333e44cde4a03ed->leave($__internal_2a2e1273d7a0a0d2ca0a6d7be5d6d5762e518990f294b7e90333e44cde4a03ed_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9a2797decec7211e8893ce5e371c4ddbd08bb66dba25691f7c280d3b705b11fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2797decec7211e8893ce5e371c4ddbd08bb66dba25691f7c280d3b705b11fd->enter($__internal_9a2797decec7211e8893ce5e371c4ddbd08bb66dba25691f7c280d3b705b11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ad33d7ffd04c235e1dde968ab5522699afe52209cee96bb82274f028706526be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad33d7ffd04c235e1dde968ab5522699afe52209cee96bb82274f028706526be->enter($__internal_ad33d7ffd04c235e1dde968ab5522699afe52209cee96bb82274f028706526be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_cd1e609428e8748f40b85d08020d56d15760ad09f962f03819acdd1e4489b865 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_7c27d02f31fe486043564fa03b62b5f4ef08f7bcce7e52852593f88cc0888507 = "{{") && ('' === $__internal_7c27d02f31fe486043564fa03b62b5f4ef08f7bcce7e52852593f88cc0888507 || 0 === strpos($__internal_cd1e609428e8748f40b85d08020d56d15760ad09f962f03819acdd1e4489b865, $__internal_7c27d02f31fe486043564fa03b62b5f4ef08f7bcce7e52852593f88cc0888507)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_ad33d7ffd04c235e1dde968ab5522699afe52209cee96bb82274f028706526be->leave($__internal_ad33d7ffd04c235e1dde968ab5522699afe52209cee96bb82274f028706526be_prof);

        
        $__internal_9a2797decec7211e8893ce5e371c4ddbd08bb66dba25691f7c280d3b705b11fd->leave($__internal_9a2797decec7211e8893ce5e371c4ddbd08bb66dba25691f7c280d3b705b11fd_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_009906cf991ae01a4b85fc096383ce3a2cc67512007f106691996020694e8a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009906cf991ae01a4b85fc096383ce3a2cc67512007f106691996020694e8a13->enter($__internal_009906cf991ae01a4b85fc096383ce3a2cc67512007f106691996020694e8a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6a988fdf7edb0fe0c4d53213247ad33dff4e63004f828ef0d500c0b051cf4b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a988fdf7edb0fe0c4d53213247ad33dff4e63004f828ef0d500c0b051cf4b6e->enter($__internal_6a988fdf7edb0fe0c4d53213247ad33dff4e63004f828ef0d500c0b051cf4b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6a988fdf7edb0fe0c4d53213247ad33dff4e63004f828ef0d500c0b051cf4b6e->leave($__internal_6a988fdf7edb0fe0c4d53213247ad33dff4e63004f828ef0d500c0b051cf4b6e_prof);

        
        $__internal_009906cf991ae01a4b85fc096383ce3a2cc67512007f106691996020694e8a13->leave($__internal_009906cf991ae01a4b85fc096383ce3a2cc67512007f106691996020694e8a13_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0024a64a325e29d605f85a691dc6b188d2274ce62781d9dba809e78b44484c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0024a64a325e29d605f85a691dc6b188d2274ce62781d9dba809e78b44484c5a->enter($__internal_0024a64a325e29d605f85a691dc6b188d2274ce62781d9dba809e78b44484c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_22659452931ce77003cb9b773f9044c1938fea6356fac7814f51059e14503db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22659452931ce77003cb9b773f9044c1938fea6356fac7814f51059e14503db3->enter($__internal_22659452931ce77003cb9b773f9044c1938fea6356fac7814f51059e14503db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_22659452931ce77003cb9b773f9044c1938fea6356fac7814f51059e14503db3->leave($__internal_22659452931ce77003cb9b773f9044c1938fea6356fac7814f51059e14503db3_prof);

        
        $__internal_0024a64a325e29d605f85a691dc6b188d2274ce62781d9dba809e78b44484c5a->leave($__internal_0024a64a325e29d605f85a691dc6b188d2274ce62781d9dba809e78b44484c5a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_95a808ffa7414a5113e60bc97570c7e2910394614771719d7ef51d6e37523ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a808ffa7414a5113e60bc97570c7e2910394614771719d7ef51d6e37523ecd->enter($__internal_95a808ffa7414a5113e60bc97570c7e2910394614771719d7ef51d6e37523ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f7521d9454f64daa42faa42fabf4e6aea3842a44c28b83a6486fd5d939dc7fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7521d9454f64daa42faa42fabf4e6aea3842a44c28b83a6486fd5d939dc7fa6->enter($__internal_f7521d9454f64daa42faa42fabf4e6aea3842a44c28b83a6486fd5d939dc7fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_f7521d9454f64daa42faa42fabf4e6aea3842a44c28b83a6486fd5d939dc7fa6->leave($__internal_f7521d9454f64daa42faa42fabf4e6aea3842a44c28b83a6486fd5d939dc7fa6_prof);

        
        $__internal_95a808ffa7414a5113e60bc97570c7e2910394614771719d7ef51d6e37523ecd->leave($__internal_95a808ffa7414a5113e60bc97570c7e2910394614771719d7ef51d6e37523ecd_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_765471623900ac938cb8349661b05cc415bbc356d6c7de27f7cd48b76d65cdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765471623900ac938cb8349661b05cc415bbc356d6c7de27f7cd48b76d65cdb0->enter($__internal_765471623900ac938cb8349661b05cc415bbc356d6c7de27f7cd48b76d65cdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_06e26b306d8349795de12165143d73c006551511a47a0605120d9f73d1b22eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e26b306d8349795de12165143d73c006551511a47a0605120d9f73d1b22eac->enter($__internal_06e26b306d8349795de12165143d73c006551511a47a0605120d9f73d1b22eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_06e26b306d8349795de12165143d73c006551511a47a0605120d9f73d1b22eac->leave($__internal_06e26b306d8349795de12165143d73c006551511a47a0605120d9f73d1b22eac_prof);

        
        $__internal_765471623900ac938cb8349661b05cc415bbc356d6c7de27f7cd48b76d65cdb0->leave($__internal_765471623900ac938cb8349661b05cc415bbc356d6c7de27f7cd48b76d65cdb0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0e4581bf0193bd81e5fb129cd2a127caa2d64f7fa6b88dc335300e36fa630517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4581bf0193bd81e5fb129cd2a127caa2d64f7fa6b88dc335300e36fa630517->enter($__internal_0e4581bf0193bd81e5fb129cd2a127caa2d64f7fa6b88dc335300e36fa630517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4692b4327db2fe9c84f691af34eb7db2b14634d9e6bc316ab708a8cf5ce8d279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4692b4327db2fe9c84f691af34eb7db2b14634d9e6bc316ab708a8cf5ce8d279->enter($__internal_4692b4327db2fe9c84f691af34eb7db2b14634d9e6bc316ab708a8cf5ce8d279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_4692b4327db2fe9c84f691af34eb7db2b14634d9e6bc316ab708a8cf5ce8d279->leave($__internal_4692b4327db2fe9c84f691af34eb7db2b14634d9e6bc316ab708a8cf5ce8d279_prof);

        
        $__internal_0e4581bf0193bd81e5fb129cd2a127caa2d64f7fa6b88dc335300e36fa630517->leave($__internal_0e4581bf0193bd81e5fb129cd2a127caa2d64f7fa6b88dc335300e36fa630517_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4f82668b097589eb79f4b3f4c07fdb0baf6faaadab1d46a3de24230079c9c64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f82668b097589eb79f4b3f4c07fdb0baf6faaadab1d46a3de24230079c9c64b->enter($__internal_4f82668b097589eb79f4b3f4c07fdb0baf6faaadab1d46a3de24230079c9c64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cfa1b24a5db537f013627e4f06d3c2d44c17d93ea6fff2ab681de85016a8f803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa1b24a5db537f013627e4f06d3c2d44c17d93ea6fff2ab681de85016a8f803->enter($__internal_cfa1b24a5db537f013627e4f06d3c2d44c17d93ea6fff2ab681de85016a8f803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_cfa1b24a5db537f013627e4f06d3c2d44c17d93ea6fff2ab681de85016a8f803->leave($__internal_cfa1b24a5db537f013627e4f06d3c2d44c17d93ea6fff2ab681de85016a8f803_prof);

        
        $__internal_4f82668b097589eb79f4b3f4c07fdb0baf6faaadab1d46a3de24230079c9c64b->leave($__internal_4f82668b097589eb79f4b3f4c07fdb0baf6faaadab1d46a3de24230079c9c64b_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1dd19f182e830f2ea2562612ce690b3fa97e57b2abcda8d2b46b18fd37309a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd19f182e830f2ea2562612ce690b3fa97e57b2abcda8d2b46b18fd37309a62->enter($__internal_1dd19f182e830f2ea2562612ce690b3fa97e57b2abcda8d2b46b18fd37309a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d7e41f2444ce015bec147c65ed14bf0b09851ecf3d674f9a228258934a7ac867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e41f2444ce015bec147c65ed14bf0b09851ecf3d674f9a228258934a7ac867->enter($__internal_d7e41f2444ce015bec147c65ed14bf0b09851ecf3d674f9a228258934a7ac867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_d7e41f2444ce015bec147c65ed14bf0b09851ecf3d674f9a228258934a7ac867->leave($__internal_d7e41f2444ce015bec147c65ed14bf0b09851ecf3d674f9a228258934a7ac867_prof);

        
        $__internal_1dd19f182e830f2ea2562612ce690b3fa97e57b2abcda8d2b46b18fd37309a62->leave($__internal_1dd19f182e830f2ea2562612ce690b3fa97e57b2abcda8d2b46b18fd37309a62_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_462255dc6b253ae9ee9cbb7e502116a418444af42abfa8806bf0dbbc74a16179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462255dc6b253ae9ee9cbb7e502116a418444af42abfa8806bf0dbbc74a16179->enter($__internal_462255dc6b253ae9ee9cbb7e502116a418444af42abfa8806bf0dbbc74a16179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_222845c4462ba1006ebe98d43050a6804d8a76a1dd6a7f32931fde2680a6b659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222845c4462ba1006ebe98d43050a6804d8a76a1dd6a7f32931fde2680a6b659->enter($__internal_222845c4462ba1006ebe98d43050a6804d8a76a1dd6a7f32931fde2680a6b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_222845c4462ba1006ebe98d43050a6804d8a76a1dd6a7f32931fde2680a6b659->leave($__internal_222845c4462ba1006ebe98d43050a6804d8a76a1dd6a7f32931fde2680a6b659_prof);

        
        $__internal_462255dc6b253ae9ee9cbb7e502116a418444af42abfa8806bf0dbbc74a16179->leave($__internal_462255dc6b253ae9ee9cbb7e502116a418444af42abfa8806bf0dbbc74a16179_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0a7a2c34d605bbf3d5ee1f3671433b483fd0fa8f4ac017e394e22a4e7a68f428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7a2c34d605bbf3d5ee1f3671433b483fd0fa8f4ac017e394e22a4e7a68f428->enter($__internal_0a7a2c34d605bbf3d5ee1f3671433b483fd0fa8f4ac017e394e22a4e7a68f428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4d09a466f7dd9db8e5325d8a124b40021cf778354af09fbb7ebfbc26cfae6c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d09a466f7dd9db8e5325d8a124b40021cf778354af09fbb7ebfbc26cfae6c6c->enter($__internal_4d09a466f7dd9db8e5325d8a124b40021cf778354af09fbb7ebfbc26cfae6c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_4d09a466f7dd9db8e5325d8a124b40021cf778354af09fbb7ebfbc26cfae6c6c->leave($__internal_4d09a466f7dd9db8e5325d8a124b40021cf778354af09fbb7ebfbc26cfae6c6c_prof);

        
        $__internal_0a7a2c34d605bbf3d5ee1f3671433b483fd0fa8f4ac017e394e22a4e7a68f428->leave($__internal_0a7a2c34d605bbf3d5ee1f3671433b483fd0fa8f4ac017e394e22a4e7a68f428_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_57c3a93f9e7d8a283a5fc2866cedcb7bf6cebd0f50fdde12c3feff3a6573f6f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c3a93f9e7d8a283a5fc2866cedcb7bf6cebd0f50fdde12c3feff3a6573f6f9->enter($__internal_57c3a93f9e7d8a283a5fc2866cedcb7bf6cebd0f50fdde12c3feff3a6573f6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5c12b9e7fe39cc63ef51228a7938a4cb0eed6fe7e1a79942fff05e907afa99ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c12b9e7fe39cc63ef51228a7938a4cb0eed6fe7e1a79942fff05e907afa99ac->enter($__internal_5c12b9e7fe39cc63ef51228a7938a4cb0eed6fe7e1a79942fff05e907afa99ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5c12b9e7fe39cc63ef51228a7938a4cb0eed6fe7e1a79942fff05e907afa99ac->leave($__internal_5c12b9e7fe39cc63ef51228a7938a4cb0eed6fe7e1a79942fff05e907afa99ac_prof);

        
        $__internal_57c3a93f9e7d8a283a5fc2866cedcb7bf6cebd0f50fdde12c3feff3a6573f6f9->leave($__internal_57c3a93f9e7d8a283a5fc2866cedcb7bf6cebd0f50fdde12c3feff3a6573f6f9_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_04edd4d767858fc63108a53b94552a7d47b2b7dda724cb1fb82d212e6dc73821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04edd4d767858fc63108a53b94552a7d47b2b7dda724cb1fb82d212e6dc73821->enter($__internal_04edd4d767858fc63108a53b94552a7d47b2b7dda724cb1fb82d212e6dc73821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_92013fcaaa5e7bb05b775e1c6d7cd2b5602a9d38863b8db3247b54d5005b1aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92013fcaaa5e7bb05b775e1c6d7cd2b5602a9d38863b8db3247b54d5005b1aca->enter($__internal_92013fcaaa5e7bb05b775e1c6d7cd2b5602a9d38863b8db3247b54d5005b1aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_92013fcaaa5e7bb05b775e1c6d7cd2b5602a9d38863b8db3247b54d5005b1aca->leave($__internal_92013fcaaa5e7bb05b775e1c6d7cd2b5602a9d38863b8db3247b54d5005b1aca_prof);

        
        $__internal_04edd4d767858fc63108a53b94552a7d47b2b7dda724cb1fb82d212e6dc73821->leave($__internal_04edd4d767858fc63108a53b94552a7d47b2b7dda724cb1fb82d212e6dc73821_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5f922111ef0f049fe672f5f719e76e8c48b21030a1e7db3c5c0a0c7e7dc047fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f922111ef0f049fe672f5f719e76e8c48b21030a1e7db3c5c0a0c7e7dc047fd->enter($__internal_5f922111ef0f049fe672f5f719e76e8c48b21030a1e7db3c5c0a0c7e7dc047fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_42307eb144ce5877e67c36537a6eedea5ce48c87bcdbf989d6a82feba425ee29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42307eb144ce5877e67c36537a6eedea5ce48c87bcdbf989d6a82feba425ee29->enter($__internal_42307eb144ce5877e67c36537a6eedea5ce48c87bcdbf989d6a82feba425ee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42307eb144ce5877e67c36537a6eedea5ce48c87bcdbf989d6a82feba425ee29->leave($__internal_42307eb144ce5877e67c36537a6eedea5ce48c87bcdbf989d6a82feba425ee29_prof);

        
        $__internal_5f922111ef0f049fe672f5f719e76e8c48b21030a1e7db3c5c0a0c7e7dc047fd->leave($__internal_5f922111ef0f049fe672f5f719e76e8c48b21030a1e7db3c5c0a0c7e7dc047fd_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_fee28af1acfe27f68aeddc0a7d2b50712a008ace1863ce4861c285a8ba42d5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee28af1acfe27f68aeddc0a7d2b50712a008ace1863ce4861c285a8ba42d5ab->enter($__internal_fee28af1acfe27f68aeddc0a7d2b50712a008ace1863ce4861c285a8ba42d5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1a1c875ac8fb797c14625cb65f2ae0b15caf3ea4c9d8a89e516398e603d9fb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1c875ac8fb797c14625cb65f2ae0b15caf3ea4c9d8a89e516398e603d9fb57->enter($__internal_1a1c875ac8fb797c14625cb65f2ae0b15caf3ea4c9d8a89e516398e603d9fb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1a1c875ac8fb797c14625cb65f2ae0b15caf3ea4c9d8a89e516398e603d9fb57->leave($__internal_1a1c875ac8fb797c14625cb65f2ae0b15caf3ea4c9d8a89e516398e603d9fb57_prof);

        
        $__internal_fee28af1acfe27f68aeddc0a7d2b50712a008ace1863ce4861c285a8ba42d5ab->leave($__internal_fee28af1acfe27f68aeddc0a7d2b50712a008ace1863ce4861c285a8ba42d5ab_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5a4155d86a4459fa7918b5028e25f4a437b43f6abf7816a5ba9649a91dfd8943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4155d86a4459fa7918b5028e25f4a437b43f6abf7816a5ba9649a91dfd8943->enter($__internal_5a4155d86a4459fa7918b5028e25f4a437b43f6abf7816a5ba9649a91dfd8943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f0784e905053b675c96ce440c7701e6beea3ae025199490b70e3b5372bf2969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0784e905053b675c96ce440c7701e6beea3ae025199490b70e3b5372bf2969->enter($__internal_6f0784e905053b675c96ce440c7701e6beea3ae025199490b70e3b5372bf2969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_6f0784e905053b675c96ce440c7701e6beea3ae025199490b70e3b5372bf2969->leave($__internal_6f0784e905053b675c96ce440c7701e6beea3ae025199490b70e3b5372bf2969_prof);

        
        $__internal_5a4155d86a4459fa7918b5028e25f4a437b43f6abf7816a5ba9649a91dfd8943->leave($__internal_5a4155d86a4459fa7918b5028e25f4a437b43f6abf7816a5ba9649a91dfd8943_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_edf3d4d46b6b7ad61e827bf51a455436c60deaf3e26f046841c1eca6d99bad0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf3d4d46b6b7ad61e827bf51a455436c60deaf3e26f046841c1eca6d99bad0d->enter($__internal_edf3d4d46b6b7ad61e827bf51a455436c60deaf3e26f046841c1eca6d99bad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7248cef9c381c3904cc727a25f9d9c9e10341b54e32b59cb98824340ea6f33a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7248cef9c381c3904cc727a25f9d9c9e10341b54e32b59cb98824340ea6f33a1->enter($__internal_7248cef9c381c3904cc727a25f9d9c9e10341b54e32b59cb98824340ea6f33a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_7248cef9c381c3904cc727a25f9d9c9e10341b54e32b59cb98824340ea6f33a1->leave($__internal_7248cef9c381c3904cc727a25f9d9c9e10341b54e32b59cb98824340ea6f33a1_prof);

        
        $__internal_edf3d4d46b6b7ad61e827bf51a455436c60deaf3e26f046841c1eca6d99bad0d->leave($__internal_edf3d4d46b6b7ad61e827bf51a455436c60deaf3e26f046841c1eca6d99bad0d_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0c84fd64d84bbb9155361b5ec71b518291ca11b03c1c48314c31d6ca7c467554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c84fd64d84bbb9155361b5ec71b518291ca11b03c1c48314c31d6ca7c467554->enter($__internal_0c84fd64d84bbb9155361b5ec71b518291ca11b03c1c48314c31d6ca7c467554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_db126ced43b5d10b2ddbb5d92a75e10e5b20c5631f5ad51786101e215da65817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db126ced43b5d10b2ddbb5d92a75e10e5b20c5631f5ad51786101e215da65817->enter($__internal_db126ced43b5d10b2ddbb5d92a75e10e5b20c5631f5ad51786101e215da65817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_db126ced43b5d10b2ddbb5d92a75e10e5b20c5631f5ad51786101e215da65817->leave($__internal_db126ced43b5d10b2ddbb5d92a75e10e5b20c5631f5ad51786101e215da65817_prof);

        
        $__internal_0c84fd64d84bbb9155361b5ec71b518291ca11b03c1c48314c31d6ca7c467554->leave($__internal_0c84fd64d84bbb9155361b5ec71b518291ca11b03c1c48314c31d6ca7c467554_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_46f4c1f2d811402207e4590b35081b30832a73b59b08946937f6f95302884637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f4c1f2d811402207e4590b35081b30832a73b59b08946937f6f95302884637->enter($__internal_46f4c1f2d811402207e4590b35081b30832a73b59b08946937f6f95302884637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_cf74daa0d1d34e303254b378d587103fcc34197be9a58577f80e9b8a869363c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf74daa0d1d34e303254b378d587103fcc34197be9a58577f80e9b8a869363c0->enter($__internal_cf74daa0d1d34e303254b378d587103fcc34197be9a58577f80e9b8a869363c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cf74daa0d1d34e303254b378d587103fcc34197be9a58577f80e9b8a869363c0->leave($__internal_cf74daa0d1d34e303254b378d587103fcc34197be9a58577f80e9b8a869363c0_prof);

        
        $__internal_46f4c1f2d811402207e4590b35081b30832a73b59b08946937f6f95302884637->leave($__internal_46f4c1f2d811402207e4590b35081b30832a73b59b08946937f6f95302884637_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d9a07b22bac86a6d33db1d6be5db3bccdf21c00fa96cd3f1b95289c7d749227c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a07b22bac86a6d33db1d6be5db3bccdf21c00fa96cd3f1b95289c7d749227c->enter($__internal_d9a07b22bac86a6d33db1d6be5db3bccdf21c00fa96cd3f1b95289c7d749227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_62dd4e15ac34b14cf4ce5ade1edf040714cc0b0a3261f537c531a96cc7a63192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dd4e15ac34b14cf4ce5ade1edf040714cc0b0a3261f537c531a96cc7a63192->enter($__internal_62dd4e15ac34b14cf4ce5ade1edf040714cc0b0a3261f537c531a96cc7a63192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_62dd4e15ac34b14cf4ce5ade1edf040714cc0b0a3261f537c531a96cc7a63192->leave($__internal_62dd4e15ac34b14cf4ce5ade1edf040714cc0b0a3261f537c531a96cc7a63192_prof);

        
        $__internal_d9a07b22bac86a6d33db1d6be5db3bccdf21c00fa96cd3f1b95289c7d749227c->leave($__internal_d9a07b22bac86a6d33db1d6be5db3bccdf21c00fa96cd3f1b95289c7d749227c_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b0529ed90a86182b5b92620037a8431ead939500869c6ac995f1041c0cd1249f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0529ed90a86182b5b92620037a8431ead939500869c6ac995f1041c0cd1249f->enter($__internal_b0529ed90a86182b5b92620037a8431ead939500869c6ac995f1041c0cd1249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_227a879bc3fd2ea3f410fd7902703edd165f132a7156ba9ce3830dc766988765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227a879bc3fd2ea3f410fd7902703edd165f132a7156ba9ce3830dc766988765->enter($__internal_227a879bc3fd2ea3f410fd7902703edd165f132a7156ba9ce3830dc766988765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_227a879bc3fd2ea3f410fd7902703edd165f132a7156ba9ce3830dc766988765->leave($__internal_227a879bc3fd2ea3f410fd7902703edd165f132a7156ba9ce3830dc766988765_prof);

        
        $__internal_b0529ed90a86182b5b92620037a8431ead939500869c6ac995f1041c0cd1249f->leave($__internal_b0529ed90a86182b5b92620037a8431ead939500869c6ac995f1041c0cd1249f_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_dd8302b3a6d0a7822ca3338a8cf3d00664ae618d60e6f36dd2f1b7ba8acd6a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8302b3a6d0a7822ca3338a8cf3d00664ae618d60e6f36dd2f1b7ba8acd6a1f->enter($__internal_dd8302b3a6d0a7822ca3338a8cf3d00664ae618d60e6f36dd2f1b7ba8acd6a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ea13a24330d6639662fe4d3cbdde29ec2cd9bc88311c277089552d9699f77f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea13a24330d6639662fe4d3cbdde29ec2cd9bc88311c277089552d9699f77f43->enter($__internal_ea13a24330d6639662fe4d3cbdde29ec2cd9bc88311c277089552d9699f77f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ea13a24330d6639662fe4d3cbdde29ec2cd9bc88311c277089552d9699f77f43->leave($__internal_ea13a24330d6639662fe4d3cbdde29ec2cd9bc88311c277089552d9699f77f43_prof);

        
        $__internal_dd8302b3a6d0a7822ca3338a8cf3d00664ae618d60e6f36dd2f1b7ba8acd6a1f->leave($__internal_dd8302b3a6d0a7822ca3338a8cf3d00664ae618d60e6f36dd2f1b7ba8acd6a1f_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_85fdc66f0365e14615cd09c211f57995076ac38462b4e34f08cac501b86bb906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fdc66f0365e14615cd09c211f57995076ac38462b4e34f08cac501b86bb906->enter($__internal_85fdc66f0365e14615cd09c211f57995076ac38462b4e34f08cac501b86bb906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_337be354437765d1e94631839899f767255254805f7b3b31ea982b593166d66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337be354437765d1e94631839899f767255254805f7b3b31ea982b593166d66a->enter($__internal_337be354437765d1e94631839899f767255254805f7b3b31ea982b593166d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_337be354437765d1e94631839899f767255254805f7b3b31ea982b593166d66a->leave($__internal_337be354437765d1e94631839899f767255254805f7b3b31ea982b593166d66a_prof);

        
        $__internal_85fdc66f0365e14615cd09c211f57995076ac38462b4e34f08cac501b86bb906->leave($__internal_85fdc66f0365e14615cd09c211f57995076ac38462b4e34f08cac501b86bb906_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7a80491a3a4b00abca994b37b62a06426f7e2f25b47e7b57878ce3c7daa42a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a80491a3a4b00abca994b37b62a06426f7e2f25b47e7b57878ce3c7daa42a71->enter($__internal_7a80491a3a4b00abca994b37b62a06426f7e2f25b47e7b57878ce3c7daa42a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4df7b75b8ce5be405463600e3d6b73d0db88b0c6cc054b902ffda17473fa2707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df7b75b8ce5be405463600e3d6b73d0db88b0c6cc054b902ffda17473fa2707->enter($__internal_4df7b75b8ce5be405463600e3d6b73d0db88b0c6cc054b902ffda17473fa2707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_4df7b75b8ce5be405463600e3d6b73d0db88b0c6cc054b902ffda17473fa2707->leave($__internal_4df7b75b8ce5be405463600e3d6b73d0db88b0c6cc054b902ffda17473fa2707_prof);

        
        $__internal_7a80491a3a4b00abca994b37b62a06426f7e2f25b47e7b57878ce3c7daa42a71->leave($__internal_7a80491a3a4b00abca994b37b62a06426f7e2f25b47e7b57878ce3c7daa42a71_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ad8a7ce2c705f208d64cf694d68cbfd5634dbd45a8a13589ac0bad3cc74d1060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8a7ce2c705f208d64cf694d68cbfd5634dbd45a8a13589ac0bad3cc74d1060->enter($__internal_ad8a7ce2c705f208d64cf694d68cbfd5634dbd45a8a13589ac0bad3cc74d1060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_faa3b2cf483bb3e28d7c963d8cc0ae514b369d19371776e6a11e8bd05a02357d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa3b2cf483bb3e28d7c963d8cc0ae514b369d19371776e6a11e8bd05a02357d->enter($__internal_faa3b2cf483bb3e28d7c963d8cc0ae514b369d19371776e6a11e8bd05a02357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_faa3b2cf483bb3e28d7c963d8cc0ae514b369d19371776e6a11e8bd05a02357d->leave($__internal_faa3b2cf483bb3e28d7c963d8cc0ae514b369d19371776e6a11e8bd05a02357d_prof);

        
        $__internal_ad8a7ce2c705f208d64cf694d68cbfd5634dbd45a8a13589ac0bad3cc74d1060->leave($__internal_ad8a7ce2c705f208d64cf694d68cbfd5634dbd45a8a13589ac0bad3cc74d1060_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
