<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1512efe4b73c196ab5e4edaf58746962daa7aefbab2572077747e3601c0c19d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1512efe4b73c196ab5e4edaf58746962daa7aefbab2572077747e3601c0c19d5->enter($__internal_1512efe4b73c196ab5e4edaf58746962daa7aefbab2572077747e3601c0c19d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7b3cce8611d92dde829c23093cc4c1b8a05a10155b10ccb38459c056e45148a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3cce8611d92dde829c23093cc4c1b8a05a10155b10ccb38459c056e45148a1->enter($__internal_7b3cce8611d92dde829c23093cc4c1b8a05a10155b10ccb38459c056e45148a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1512efe4b73c196ab5e4edaf58746962daa7aefbab2572077747e3601c0c19d5->leave($__internal_1512efe4b73c196ab5e4edaf58746962daa7aefbab2572077747e3601c0c19d5_prof);

        
        $__internal_7b3cce8611d92dde829c23093cc4c1b8a05a10155b10ccb38459c056e45148a1->leave($__internal_7b3cce8611d92dde829c23093cc4c1b8a05a10155b10ccb38459c056e45148a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bac00b43ff1174b8cc4777001e502f0f6d478d7039f607c09ca1de2552d9aebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac00b43ff1174b8cc4777001e502f0f6d478d7039f607c09ca1de2552d9aebb->enter($__internal_bac00b43ff1174b8cc4777001e502f0f6d478d7039f607c09ca1de2552d9aebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95860ab3b00e3a054141e9069ab7cbd26a74ace94bfbd9ef92e73624b31a9f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95860ab3b00e3a054141e9069ab7cbd26a74ace94bfbd9ef92e73624b31a9f64->enter($__internal_95860ab3b00e3a054141e9069ab7cbd26a74ace94bfbd9ef92e73624b31a9f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95860ab3b00e3a054141e9069ab7cbd26a74ace94bfbd9ef92e73624b31a9f64->leave($__internal_95860ab3b00e3a054141e9069ab7cbd26a74ace94bfbd9ef92e73624b31a9f64_prof);

        
        $__internal_bac00b43ff1174b8cc4777001e502f0f6d478d7039f607c09ca1de2552d9aebb->leave($__internal_bac00b43ff1174b8cc4777001e502f0f6d478d7039f607c09ca1de2552d9aebb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1164f4190ca0380764a08820301d22d8024fb0bebc5e269fdb6740f0e5e8b80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1164f4190ca0380764a08820301d22d8024fb0bebc5e269fdb6740f0e5e8b80f->enter($__internal_1164f4190ca0380764a08820301d22d8024fb0bebc5e269fdb6740f0e5e8b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93541ed67b2c57c2ee63c507c884a4973add6f9cdc5c4c568a0ce85e512f35ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93541ed67b2c57c2ee63c507c884a4973add6f9cdc5c4c568a0ce85e512f35ed->enter($__internal_93541ed67b2c57c2ee63c507c884a4973add6f9cdc5c4c568a0ce85e512f35ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93541ed67b2c57c2ee63c507c884a4973add6f9cdc5c4c568a0ce85e512f35ed->leave($__internal_93541ed67b2c57c2ee63c507c884a4973add6f9cdc5c4c568a0ce85e512f35ed_prof);

        
        $__internal_1164f4190ca0380764a08820301d22d8024fb0bebc5e269fdb6740f0e5e8b80f->leave($__internal_1164f4190ca0380764a08820301d22d8024fb0bebc5e269fdb6740f0e5e8b80f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3195abf32007c2ff6d1520c7b4f31484105b52fa68b41e9a94cffc22f4ede462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3195abf32007c2ff6d1520c7b4f31484105b52fa68b41e9a94cffc22f4ede462->enter($__internal_3195abf32007c2ff6d1520c7b4f31484105b52fa68b41e9a94cffc22f4ede462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb5086533ed496cea557e0aecebfa2431921d39b9cd69124377982be105bbf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5086533ed496cea557e0aecebfa2431921d39b9cd69124377982be105bbf96->enter($__internal_eb5086533ed496cea557e0aecebfa2431921d39b9cd69124377982be105bbf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb5086533ed496cea557e0aecebfa2431921d39b9cd69124377982be105bbf96->leave($__internal_eb5086533ed496cea557e0aecebfa2431921d39b9cd69124377982be105bbf96_prof);

        
        $__internal_3195abf32007c2ff6d1520c7b4f31484105b52fa68b41e9a94cffc22f4ede462->leave($__internal_3195abf32007c2ff6d1520c7b4f31484105b52fa68b41e9a94cffc22f4ede462_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
