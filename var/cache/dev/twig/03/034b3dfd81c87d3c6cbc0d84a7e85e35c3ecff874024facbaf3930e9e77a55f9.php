<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4656c9009b430c2181b796a97001b687a84439e17f5699f0cfc2f50c616adaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4656c9009b430c2181b796a97001b687a84439e17f5699f0cfc2f50c616adaec->enter($__internal_4656c9009b430c2181b796a97001b687a84439e17f5699f0cfc2f50c616adaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3a7b369c34957c850b2608ca547e3b32427c93d528ff33fafc49036839033760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7b369c34957c850b2608ca547e3b32427c93d528ff33fafc49036839033760->enter($__internal_3a7b369c34957c850b2608ca547e3b32427c93d528ff33fafc49036839033760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4656c9009b430c2181b796a97001b687a84439e17f5699f0cfc2f50c616adaec->leave($__internal_4656c9009b430c2181b796a97001b687a84439e17f5699f0cfc2f50c616adaec_prof);

        
        $__internal_3a7b369c34957c850b2608ca547e3b32427c93d528ff33fafc49036839033760->leave($__internal_3a7b369c34957c850b2608ca547e3b32427c93d528ff33fafc49036839033760_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50f6ce4781f0f5e715da60c615f9931d88071d825c2b94fd5fc5a0e0b84d5f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f6ce4781f0f5e715da60c615f9931d88071d825c2b94fd5fc5a0e0b84d5f51->enter($__internal_50f6ce4781f0f5e715da60c615f9931d88071d825c2b94fd5fc5a0e0b84d5f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce0b33f2d2e6b28beb6edcf38cf775188cee3c78e88b1cf4ecd0c8696cff4955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b33f2d2e6b28beb6edcf38cf775188cee3c78e88b1cf4ecd0c8696cff4955->enter($__internal_ce0b33f2d2e6b28beb6edcf38cf775188cee3c78e88b1cf4ecd0c8696cff4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ce0b33f2d2e6b28beb6edcf38cf775188cee3c78e88b1cf4ecd0c8696cff4955->leave($__internal_ce0b33f2d2e6b28beb6edcf38cf775188cee3c78e88b1cf4ecd0c8696cff4955_prof);

        
        $__internal_50f6ce4781f0f5e715da60c615f9931d88071d825c2b94fd5fc5a0e0b84d5f51->leave($__internal_50f6ce4781f0f5e715da60c615f9931d88071d825c2b94fd5fc5a0e0b84d5f51_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd21884752adbb41a798b52865551e1e73144464fced7a5cfde4ba8640e7fd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd21884752adbb41a798b52865551e1e73144464fced7a5cfde4ba8640e7fd14->enter($__internal_fd21884752adbb41a798b52865551e1e73144464fced7a5cfde4ba8640e7fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aead26d640f54058e5cb2ba577c47285eb11f610927abd7d3083527a1016eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aead26d640f54058e5cb2ba577c47285eb11f610927abd7d3083527a1016eed->enter($__internal_5aead26d640f54058e5cb2ba577c47285eb11f610927abd7d3083527a1016eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5aead26d640f54058e5cb2ba577c47285eb11f610927abd7d3083527a1016eed->leave($__internal_5aead26d640f54058e5cb2ba577c47285eb11f610927abd7d3083527a1016eed_prof);

        
        $__internal_fd21884752adbb41a798b52865551e1e73144464fced7a5cfde4ba8640e7fd14->leave($__internal_fd21884752adbb41a798b52865551e1e73144464fced7a5cfde4ba8640e7fd14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
