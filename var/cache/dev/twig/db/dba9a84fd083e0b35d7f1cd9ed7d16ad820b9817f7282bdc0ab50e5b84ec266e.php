<?php

/* reuniao/edit.html.twig */
class __TwigTemplate_8161891569f4dca5992da797f153bf5f1a486b44034f64b4bacae0f4638b9653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniao/edit.html.twig", 1);
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
        $__internal_429761071868d0dc2d3fcecbaaee98f70f78fa1171a43e4557165a189f207995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429761071868d0dc2d3fcecbaaee98f70f78fa1171a43e4557165a189f207995->enter($__internal_429761071868d0dc2d3fcecbaaee98f70f78fa1171a43e4557165a189f207995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/edit.html.twig"));

        $__internal_279a676d0c1fab06b318f726e729ee83ad10f83bd27175633518e3e3c062b76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279a676d0c1fab06b318f726e729ee83ad10f83bd27175633518e3e3c062b76f->enter($__internal_279a676d0c1fab06b318f726e729ee83ad10f83bd27175633518e3e3c062b76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429761071868d0dc2d3fcecbaaee98f70f78fa1171a43e4557165a189f207995->leave($__internal_429761071868d0dc2d3fcecbaaee98f70f78fa1171a43e4557165a189f207995_prof);

        
        $__internal_279a676d0c1fab06b318f726e729ee83ad10f83bd27175633518e3e3c062b76f->leave($__internal_279a676d0c1fab06b318f726e729ee83ad10f83bd27175633518e3e3c062b76f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_337ea6d8b3910a31af2419b413dc7ec28bcb88683ac3d4f3bb5005c1deaea304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337ea6d8b3910a31af2419b413dc7ec28bcb88683ac3d4f3bb5005c1deaea304->enter($__internal_337ea6d8b3910a31af2419b413dc7ec28bcb88683ac3d4f3bb5005c1deaea304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83f06247539f64312d8d17542800e7b64743750b4005d6d8d4ea55cbbfefcace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f06247539f64312d8d17542800e7b64743750b4005d6d8d4ea55cbbfefcace->enter($__internal_83f06247539f64312d8d17542800e7b64743750b4005d6d8d4ea55cbbfefcace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reunião - Editar</h1>
    <hr/>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <hr/>
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
            <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Voltar</a>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "


";
        
        $__internal_83f06247539f64312d8d17542800e7b64743750b4005d6d8d4ea55cbbfefcace->leave($__internal_83f06247539f64312d8d17542800e7b64743750b4005d6d8d4ea55cbbfefcace_prof);

        
        $__internal_337ea6d8b3910a31af2419b413dc7ec28bcb88683ac3d4f3bb5005c1deaea304->leave($__internal_337ea6d8b3910a31af2419b413dc7ec28bcb88683ac3d4f3bb5005c1deaea304_prof);

    }

    public function getTemplateName()
    {
        return "reuniao/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  64 => 11,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reunião - Editar</h1>
    <hr/>
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <hr/>
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Voltar</a>
    {{ form_end(edit_form) }}


{% endblock %}
", "reuniao/edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniao\\edit.html.twig");
    }
}
