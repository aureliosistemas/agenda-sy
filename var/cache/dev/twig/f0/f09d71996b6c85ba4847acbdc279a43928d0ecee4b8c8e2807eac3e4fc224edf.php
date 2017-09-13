<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cf902a21c4c1433c9ea27b88cfa3e9140d354bcacd2d33cd74b9d7846d455b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_1e0f7bf8b1aa4c2228adb729076d94a28606cc1a16f19267d7b0d89d0a0ae68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0f7bf8b1aa4c2228adb729076d94a28606cc1a16f19267d7b0d89d0a0ae68c->enter($__internal_1e0f7bf8b1aa4c2228adb729076d94a28606cc1a16f19267d7b0d89d0a0ae68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c1e53f70818e001632e38637b68dfd0f6dfb0d21741282e27ad60f70b45534d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e53f70818e001632e38637b68dfd0f6dfb0d21741282e27ad60f70b45534d7->enter($__internal_c1e53f70818e001632e38637b68dfd0f6dfb0d21741282e27ad60f70b45534d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e0f7bf8b1aa4c2228adb729076d94a28606cc1a16f19267d7b0d89d0a0ae68c->leave($__internal_1e0f7bf8b1aa4c2228adb729076d94a28606cc1a16f19267d7b0d89d0a0ae68c_prof);

        
        $__internal_c1e53f70818e001632e38637b68dfd0f6dfb0d21741282e27ad60f70b45534d7->leave($__internal_c1e53f70818e001632e38637b68dfd0f6dfb0d21741282e27ad60f70b45534d7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ffcebe8654d0e3d8fe4bc928b93e84578c9e9a6913796d406f6b090af83bd5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcebe8654d0e3d8fe4bc928b93e84578c9e9a6913796d406f6b090af83bd5fe->enter($__internal_ffcebe8654d0e3d8fe4bc928b93e84578c9e9a6913796d406f6b090af83bd5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7fd173b4acc0c7a7f96d7848402b956320a11f39c14d0b0825edd2bcd053dac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd173b4acc0c7a7f96d7848402b956320a11f39c14d0b0825edd2bcd053dac1->enter($__internal_7fd173b4acc0c7a7f96d7848402b956320a11f39c14d0b0825edd2bcd053dac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7fd173b4acc0c7a7f96d7848402b956320a11f39c14d0b0825edd2bcd053dac1->leave($__internal_7fd173b4acc0c7a7f96d7848402b956320a11f39c14d0b0825edd2bcd053dac1_prof);

        
        $__internal_ffcebe8654d0e3d8fe4bc928b93e84578c9e9a6913796d406f6b090af83bd5fe->leave($__internal_ffcebe8654d0e3d8fe4bc928b93e84578c9e9a6913796d406f6b090af83bd5fe_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a457d17c010ec282e623c5b55dccc2262d6b446ab0326b1f9390cabda532ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a457d17c010ec282e623c5b55dccc2262d6b446ab0326b1f9390cabda532ab5->enter($__internal_9a457d17c010ec282e623c5b55dccc2262d6b446ab0326b1f9390cabda532ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2fc5c375b97421e2d8a4031910d29a2c14a51bb8d65f1c373961f4706cb12235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc5c375b97421e2d8a4031910d29a2c14a51bb8d65f1c373961f4706cb12235->enter($__internal_2fc5c375b97421e2d8a4031910d29a2c14a51bb8d65f1c373961f4706cb12235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2fc5c375b97421e2d8a4031910d29a2c14a51bb8d65f1c373961f4706cb12235->leave($__internal_2fc5c375b97421e2d8a4031910d29a2c14a51bb8d65f1c373961f4706cb12235_prof);

        
        $__internal_9a457d17c010ec282e623c5b55dccc2262d6b446ab0326b1f9390cabda532ab5->leave($__internal_9a457d17c010ec282e623c5b55dccc2262d6b446ab0326b1f9390cabda532ab5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
