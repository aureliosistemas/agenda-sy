<?php

/* :reuniao:edit.html.twig */
class __TwigTemplate_e07d48fcd2096ed7ad8cd23e9ff728f18c115fc30ee901c978314a93f98a859f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniao:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63956caa7917202225f61fdf9fcc0942049b3dc8c4992c954445f8a88e7cf84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63956caa7917202225f61fdf9fcc0942049b3dc8c4992c954445f8a88e7cf84b->enter($__internal_63956caa7917202225f61fdf9fcc0942049b3dc8c4992c954445f8a88e7cf84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:edit.html.twig"));

        $__internal_29dc32fadb52d3c04a008354385e7979af8e2ace725708c793004ec3144766bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dc32fadb52d3c04a008354385e7979af8e2ace725708c793004ec3144766bf->enter($__internal_29dc32fadb52d3c04a008354385e7979af8e2ace725708c793004ec3144766bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63956caa7917202225f61fdf9fcc0942049b3dc8c4992c954445f8a88e7cf84b->leave($__internal_63956caa7917202225f61fdf9fcc0942049b3dc8c4992c954445f8a88e7cf84b_prof);

        
        $__internal_29dc32fadb52d3c04a008354385e7979af8e2ace725708c793004ec3144766bf->leave($__internal_29dc32fadb52d3c04a008354385e7979af8e2ace725708c793004ec3144766bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7b1bb47e1b8d536e4640b25cdffb8e24293fb2dda74928f706cfffeba93ddfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b1bb47e1b8d536e4640b25cdffb8e24293fb2dda74928f706cfffeba93ddfc->enter($__internal_e7b1bb47e1b8d536e4640b25cdffb8e24293fb2dda74928f706cfffeba93ddfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d5ad5337ccbb3b8fe449fc323bb755979ae15240ea8c427baa8704855841fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5ad5337ccbb3b8fe449fc323bb755979ae15240ea8c427baa8704855841fb9->enter($__internal_8d5ad5337ccbb3b8fe449fc323bb755979ae15240ea8c427baa8704855841fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniao - Editar</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_show", array("id" => $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "id", array()))), "html", null, true);
        echo "\">Excluir</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "


";
        
        $__internal_8d5ad5337ccbb3b8fe449fc323bb755979ae15240ea8c427baa8704855841fb9->leave($__internal_8d5ad5337ccbb3b8fe449fc323bb755979ae15240ea8c427baa8704855841fb9_prof);

        
        $__internal_e7b1bb47e1b8d536e4640b25cdffb8e24293fb2dda74928f706cfffeba93ddfc->leave($__internal_e7b1bb47e1b8d536e4640b25cdffb8e24293fb2dda74928f706cfffeba93ddfc_prof);

    }

    public function getTemplateName()
    {
        return ":reuniao:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reuniao - Editar</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"{{ path('reuniao_show', { 'id': reuniao.id }) }}\">Excluir</a></div>
    {{ form_end(edit_form) }}


{% endblock %}
", ":reuniao:edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniao/edit.html.twig");
    }
}
