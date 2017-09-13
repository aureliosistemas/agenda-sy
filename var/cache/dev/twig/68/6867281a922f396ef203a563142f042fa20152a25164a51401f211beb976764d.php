<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_23db68b5400227a6773be226a5f26235345eb97923a7c9cf6e14490851c325c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23db68b5400227a6773be226a5f26235345eb97923a7c9cf6e14490851c325c6->enter($__internal_23db68b5400227a6773be226a5f26235345eb97923a7c9cf6e14490851c325c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_78594a40f45297e68ca5bd685e373195acf992d3392d7828925ea0b666f3f48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78594a40f45297e68ca5bd685e373195acf992d3392d7828925ea0b666f3f48b->enter($__internal_78594a40f45297e68ca5bd685e373195acf992d3392d7828925ea0b666f3f48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23db68b5400227a6773be226a5f26235345eb97923a7c9cf6e14490851c325c6->leave($__internal_23db68b5400227a6773be226a5f26235345eb97923a7c9cf6e14490851c325c6_prof);

        
        $__internal_78594a40f45297e68ca5bd685e373195acf992d3392d7828925ea0b666f3f48b->leave($__internal_78594a40f45297e68ca5bd685e373195acf992d3392d7828925ea0b666f3f48b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aed47a3903a8eaa06ec4be89173ed23c129080e06874fa7d019b518986f683d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aed47a3903a8eaa06ec4be89173ed23c129080e06874fa7d019b518986f683d->enter($__internal_8aed47a3903a8eaa06ec4be89173ed23c129080e06874fa7d019b518986f683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23f23509ed351da4381725f821b600ba1ea8149189f1ab093f9be7e95bb7d389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f23509ed351da4381725f821b600ba1ea8149189f1ab093f9be7e95bb7d389->enter($__internal_23f23509ed351da4381725f821b600ba1ea8149189f1ab093f9be7e95bb7d389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_23f23509ed351da4381725f821b600ba1ea8149189f1ab093f9be7e95bb7d389->leave($__internal_23f23509ed351da4381725f821b600ba1ea8149189f1ab093f9be7e95bb7d389_prof);

        
        $__internal_8aed47a3903a8eaa06ec4be89173ed23c129080e06874fa7d019b518986f683d->leave($__internal_8aed47a3903a8eaa06ec4be89173ed23c129080e06874fa7d019b518986f683d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c9e3a4a4b85b28c16993800b75036eaef5ad35109af1447d410ff8d5b84d0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9e3a4a4b85b28c16993800b75036eaef5ad35109af1447d410ff8d5b84d0a5->enter($__internal_4c9e3a4a4b85b28c16993800b75036eaef5ad35109af1447d410ff8d5b84d0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58ae8fc695e3914d47c111656b4c4c02ed9b5d0b7644c1a0bfc3d10006b5e3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ae8fc695e3914d47c111656b4c4c02ed9b5d0b7644c1a0bfc3d10006b5e3b6->enter($__internal_58ae8fc695e3914d47c111656b4c4c02ed9b5d0b7644c1a0bfc3d10006b5e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_58ae8fc695e3914d47c111656b4c4c02ed9b5d0b7644c1a0bfc3d10006b5e3b6->leave($__internal_58ae8fc695e3914d47c111656b4c4c02ed9b5d0b7644c1a0bfc3d10006b5e3b6_prof);

        
        $__internal_4c9e3a4a4b85b28c16993800b75036eaef5ad35109af1447d410ff8d5b84d0a5->leave($__internal_4c9e3a4a4b85b28c16993800b75036eaef5ad35109af1447d410ff8d5b84d0a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
