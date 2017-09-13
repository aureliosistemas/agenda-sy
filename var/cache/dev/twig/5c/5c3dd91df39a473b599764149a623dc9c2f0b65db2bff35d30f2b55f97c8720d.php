<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_233d800d7777fb62a19837ddb0a218d4683dde226588c64b363e8ca04d4cb1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233d800d7777fb62a19837ddb0a218d4683dde226588c64b363e8ca04d4cb1c9->enter($__internal_233d800d7777fb62a19837ddb0a218d4683dde226588c64b363e8ca04d4cb1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_96db9bd3a301ba63e4a2caae45e4c6321b6c7659ad77359612949d1950ac2865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96db9bd3a301ba63e4a2caae45e4c6321b6c7659ad77359612949d1950ac2865->enter($__internal_96db9bd3a301ba63e4a2caae45e4c6321b6c7659ad77359612949d1950ac2865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233d800d7777fb62a19837ddb0a218d4683dde226588c64b363e8ca04d4cb1c9->leave($__internal_233d800d7777fb62a19837ddb0a218d4683dde226588c64b363e8ca04d4cb1c9_prof);

        
        $__internal_96db9bd3a301ba63e4a2caae45e4c6321b6c7659ad77359612949d1950ac2865->leave($__internal_96db9bd3a301ba63e4a2caae45e4c6321b6c7659ad77359612949d1950ac2865_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e975fef613aeda4c7a918519dcfce69345c9ea9733c44b2b67f81818dcb19cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e975fef613aeda4c7a918519dcfce69345c9ea9733c44b2b67f81818dcb19cf4->enter($__internal_e975fef613aeda4c7a918519dcfce69345c9ea9733c44b2b67f81818dcb19cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e53068a78625b3a1d308c6f729149bd1d08c102681a4e57a715d91c7fed7547e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53068a78625b3a1d308c6f729149bd1d08c102681a4e57a715d91c7fed7547e->enter($__internal_e53068a78625b3a1d308c6f729149bd1d08c102681a4e57a715d91c7fed7547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e53068a78625b3a1d308c6f729149bd1d08c102681a4e57a715d91c7fed7547e->leave($__internal_e53068a78625b3a1d308c6f729149bd1d08c102681a4e57a715d91c7fed7547e_prof);

        
        $__internal_e975fef613aeda4c7a918519dcfce69345c9ea9733c44b2b67f81818dcb19cf4->leave($__internal_e975fef613aeda4c7a918519dcfce69345c9ea9733c44b2b67f81818dcb19cf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_651e5948a94931a9badad6e36f3f8e4f972c12af460f6918a52c06136734ff43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651e5948a94931a9badad6e36f3f8e4f972c12af460f6918a52c06136734ff43->enter($__internal_651e5948a94931a9badad6e36f3f8e4f972c12af460f6918a52c06136734ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3912ba730cba564ca52741b21e107569225ca8b2ce019ce22b70a2308b09b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3912ba730cba564ca52741b21e107569225ca8b2ce019ce22b70a2308b09b4e->enter($__internal_c3912ba730cba564ca52741b21e107569225ca8b2ce019ce22b70a2308b09b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c3912ba730cba564ca52741b21e107569225ca8b2ce019ce22b70a2308b09b4e->leave($__internal_c3912ba730cba564ca52741b21e107569225ca8b2ce019ce22b70a2308b09b4e_prof);

        
        $__internal_651e5948a94931a9badad6e36f3f8e4f972c12af460f6918a52c06136734ff43->leave($__internal_651e5948a94931a9badad6e36f3f8e4f972c12af460f6918a52c06136734ff43_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
