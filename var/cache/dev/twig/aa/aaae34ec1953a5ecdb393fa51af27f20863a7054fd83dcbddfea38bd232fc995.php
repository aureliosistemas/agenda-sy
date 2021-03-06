<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c64de55fb024aa5075f50c889b2650c6158c5ed6d452756674ca9d60c487c6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64de55fb024aa5075f50c889b2650c6158c5ed6d452756674ca9d60c487c6af->enter($__internal_c64de55fb024aa5075f50c889b2650c6158c5ed6d452756674ca9d60c487c6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e7f2ccb79763316c80b5863a9979b46c5e459bc30b0729b577e6dde6b15951e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2ccb79763316c80b5863a9979b46c5e459bc30b0729b577e6dde6b15951e7->enter($__internal_e7f2ccb79763316c80b5863a9979b46c5e459bc30b0729b577e6dde6b15951e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64de55fb024aa5075f50c889b2650c6158c5ed6d452756674ca9d60c487c6af->leave($__internal_c64de55fb024aa5075f50c889b2650c6158c5ed6d452756674ca9d60c487c6af_prof);

        
        $__internal_e7f2ccb79763316c80b5863a9979b46c5e459bc30b0729b577e6dde6b15951e7->leave($__internal_e7f2ccb79763316c80b5863a9979b46c5e459bc30b0729b577e6dde6b15951e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed3e88f02065553a244492bab89c99377264f86d7b5fc9b06a2ccf7cff316540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3e88f02065553a244492bab89c99377264f86d7b5fc9b06a2ccf7cff316540->enter($__internal_ed3e88f02065553a244492bab89c99377264f86d7b5fc9b06a2ccf7cff316540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abb13aa6456ee4ad92714bcecb6e6e004b1a865908753fcf8aaa1412dc78310b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb13aa6456ee4ad92714bcecb6e6e004b1a865908753fcf8aaa1412dc78310b->enter($__internal_abb13aa6456ee4ad92714bcecb6e6e004b1a865908753fcf8aaa1412dc78310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_abb13aa6456ee4ad92714bcecb6e6e004b1a865908753fcf8aaa1412dc78310b->leave($__internal_abb13aa6456ee4ad92714bcecb6e6e004b1a865908753fcf8aaa1412dc78310b_prof);

        
        $__internal_ed3e88f02065553a244492bab89c99377264f86d7b5fc9b06a2ccf7cff316540->leave($__internal_ed3e88f02065553a244492bab89c99377264f86d7b5fc9b06a2ccf7cff316540_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8300a8233261eec20de0331868038478d06eb35ec7db38ddc5828457eaf69b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8300a8233261eec20de0331868038478d06eb35ec7db38ddc5828457eaf69b28->enter($__internal_8300a8233261eec20de0331868038478d06eb35ec7db38ddc5828457eaf69b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00fa813a542e789a166044375758ccf20df5b34688e5f7edcb1acfa3cce10917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fa813a542e789a166044375758ccf20df5b34688e5f7edcb1acfa3cce10917->enter($__internal_00fa813a542e789a166044375758ccf20df5b34688e5f7edcb1acfa3cce10917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00fa813a542e789a166044375758ccf20df5b34688e5f7edcb1acfa3cce10917->leave($__internal_00fa813a542e789a166044375758ccf20df5b34688e5f7edcb1acfa3cce10917_prof);

        
        $__internal_8300a8233261eec20de0331868038478d06eb35ec7db38ddc5828457eaf69b28->leave($__internal_8300a8233261eec20de0331868038478d06eb35ec7db38ddc5828457eaf69b28_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b175ba11e4367c020503f2da9589f0c22992ef2be3ea138496eefd0dcae27d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b175ba11e4367c020503f2da9589f0c22992ef2be3ea138496eefd0dcae27d61->enter($__internal_b175ba11e4367c020503f2da9589f0c22992ef2be3ea138496eefd0dcae27d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fa263e7c0faa719c8f829d12f43edee668bd5af93831efc31c2d730653231d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa263e7c0faa719c8f829d12f43edee668bd5af93831efc31c2d730653231d0->enter($__internal_2fa263e7c0faa719c8f829d12f43edee668bd5af93831efc31c2d730653231d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2fa263e7c0faa719c8f829d12f43edee668bd5af93831efc31c2d730653231d0->leave($__internal_2fa263e7c0faa719c8f829d12f43edee668bd5af93831efc31c2d730653231d0_prof);

        
        $__internal_b175ba11e4367c020503f2da9589f0c22992ef2be3ea138496eefd0dcae27d61->leave($__internal_b175ba11e4367c020503f2da9589f0c22992ef2be3ea138496eefd0dcae27d61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
