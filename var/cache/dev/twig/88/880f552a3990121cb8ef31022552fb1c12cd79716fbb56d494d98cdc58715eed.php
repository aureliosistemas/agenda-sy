<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6428b4abae5d306971ded0d0883ca72b5878154f4977e15eabb1b37bde4c5bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ca24138395470ed689dea0c5f7c755552be604042b6594b6098c8b8ed6e093c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca24138395470ed689dea0c5f7c755552be604042b6594b6098c8b8ed6e093c->enter($__internal_1ca24138395470ed689dea0c5f7c755552be604042b6594b6098c8b8ed6e093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d8c7e155847cc2753db4dbc6845c88cb9a70a8d63255300efe3089d5385546d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c7e155847cc2753db4dbc6845c88cb9a70a8d63255300efe3089d5385546d1->enter($__internal_d8c7e155847cc2753db4dbc6845c88cb9a70a8d63255300efe3089d5385546d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca24138395470ed689dea0c5f7c755552be604042b6594b6098c8b8ed6e093c->leave($__internal_1ca24138395470ed689dea0c5f7c755552be604042b6594b6098c8b8ed6e093c_prof);

        
        $__internal_d8c7e155847cc2753db4dbc6845c88cb9a70a8d63255300efe3089d5385546d1->leave($__internal_d8c7e155847cc2753db4dbc6845c88cb9a70a8d63255300efe3089d5385546d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af7655798787b0518f0cc64e5f92a26278c8aab2b56c463aa08a71d2669f9b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7655798787b0518f0cc64e5f92a26278c8aab2b56c463aa08a71d2669f9b80->enter($__internal_af7655798787b0518f0cc64e5f92a26278c8aab2b56c463aa08a71d2669f9b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d98ee3a0e9143fefeca0c72b90ff032f90674f9e4ef1a2cc33b0ab935457767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d98ee3a0e9143fefeca0c72b90ff032f90674f9e4ef1a2cc33b0ab935457767->enter($__internal_1d98ee3a0e9143fefeca0c72b90ff032f90674f9e4ef1a2cc33b0ab935457767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1d98ee3a0e9143fefeca0c72b90ff032f90674f9e4ef1a2cc33b0ab935457767->leave($__internal_1d98ee3a0e9143fefeca0c72b90ff032f90674f9e4ef1a2cc33b0ab935457767_prof);

        
        $__internal_af7655798787b0518f0cc64e5f92a26278c8aab2b56c463aa08a71d2669f9b80->leave($__internal_af7655798787b0518f0cc64e5f92a26278c8aab2b56c463aa08a71d2669f9b80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
