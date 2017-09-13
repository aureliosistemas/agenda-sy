<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44d7e6b28c60a6a482eb8f80b0c6073ce48d515fbed5c1af7026d8fe693e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c9531ccb2949627184662e8c8d6ff2feacfe1b5ff6f1df97696a257761a209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c9531ccb2949627184662e8c8d6ff2feacfe1b5ff6f1df97696a257761a209->enter($__internal_39c9531ccb2949627184662e8c8d6ff2feacfe1b5ff6f1df97696a257761a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1a85b8c82518f52b0f978db9e1a430e0ad739acada8028a0f583250dd0c6658d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a85b8c82518f52b0f978db9e1a430e0ad739acada8028a0f583250dd0c6658d->enter($__internal_1a85b8c82518f52b0f978db9e1a430e0ad739acada8028a0f583250dd0c6658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c9531ccb2949627184662e8c8d6ff2feacfe1b5ff6f1df97696a257761a209->leave($__internal_39c9531ccb2949627184662e8c8d6ff2feacfe1b5ff6f1df97696a257761a209_prof);

        
        $__internal_1a85b8c82518f52b0f978db9e1a430e0ad739acada8028a0f583250dd0c6658d->leave($__internal_1a85b8c82518f52b0f978db9e1a430e0ad739acada8028a0f583250dd0c6658d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fda5b3ab83f90a50a933d46bdf6b9469e3496e66a4b4e4031ea02bf367b66569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda5b3ab83f90a50a933d46bdf6b9469e3496e66a4b4e4031ea02bf367b66569->enter($__internal_fda5b3ab83f90a50a933d46bdf6b9469e3496e66a4b4e4031ea02bf367b66569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_32aff612c39381c36144da0ba1fe0f1b9602ceff7bf382fd09fa70df760bb09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aff612c39381c36144da0ba1fe0f1b9602ceff7bf382fd09fa70df760bb09e->enter($__internal_32aff612c39381c36144da0ba1fe0f1b9602ceff7bf382fd09fa70df760bb09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_32aff612c39381c36144da0ba1fe0f1b9602ceff7bf382fd09fa70df760bb09e->leave($__internal_32aff612c39381c36144da0ba1fe0f1b9602ceff7bf382fd09fa70df760bb09e_prof);

        
        $__internal_fda5b3ab83f90a50a933d46bdf6b9469e3496e66a4b4e4031ea02bf367b66569->leave($__internal_fda5b3ab83f90a50a933d46bdf6b9469e3496e66a4b4e4031ea02bf367b66569_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e0504223ff2d12399f9279e844ad74796c2cab44690a6966db2f0cbf47353d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0504223ff2d12399f9279e844ad74796c2cab44690a6966db2f0cbf47353d6->enter($__internal_8e0504223ff2d12399f9279e844ad74796c2cab44690a6966db2f0cbf47353d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_47d717f347f1d638425d74e99faf746dd284250d1890a993f66a1dce687e1539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d717f347f1d638425d74e99faf746dd284250d1890a993f66a1dce687e1539->enter($__internal_47d717f347f1d638425d74e99faf746dd284250d1890a993f66a1dce687e1539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_47d717f347f1d638425d74e99faf746dd284250d1890a993f66a1dce687e1539->leave($__internal_47d717f347f1d638425d74e99faf746dd284250d1890a993f66a1dce687e1539_prof);

        
        $__internal_8e0504223ff2d12399f9279e844ad74796c2cab44690a6966db2f0cbf47353d6->leave($__internal_8e0504223ff2d12399f9279e844ad74796c2cab44690a6966db2f0cbf47353d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
