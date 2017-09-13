<?php

/* :reuniaopessoa:edit.html.twig */
class __TwigTemplate_e653e92003a0557baa35c150acb99abad9cd984ac3ec34ed288f626e153c6bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaopessoa:edit.html.twig", 1);
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
        $__internal_1783e814e2afcba194255479ba39cbee1bd3490e07c0781be341f066892c6efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1783e814e2afcba194255479ba39cbee1bd3490e07c0781be341f066892c6efe->enter($__internal_1783e814e2afcba194255479ba39cbee1bd3490e07c0781be341f066892c6efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:edit.html.twig"));

        $__internal_f7d7df8c5f0f61380955169cf97431065f8b16a3fc6acc50ce575c99e853b3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7df8c5f0f61380955169cf97431065f8b16a3fc6acc50ce575c99e853b3f8->enter($__internal_f7d7df8c5f0f61380955169cf97431065f8b16a3fc6acc50ce575c99e853b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1783e814e2afcba194255479ba39cbee1bd3490e07c0781be341f066892c6efe->leave($__internal_1783e814e2afcba194255479ba39cbee1bd3490e07c0781be341f066892c6efe_prof);

        
        $__internal_f7d7df8c5f0f61380955169cf97431065f8b16a3fc6acc50ce575c99e853b3f8->leave($__internal_f7d7df8c5f0f61380955169cf97431065f8b16a3fc6acc50ce575c99e853b3f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22daa95d038a8aa943712ca0b7f1d05483a2c19013127feac731c4ebbf9b1e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22daa95d038a8aa943712ca0b7f1d05483a2c19013127feac731c4ebbf9b1e67->enter($__internal_22daa95d038a8aa943712ca0b7f1d05483a2c19013127feac731c4ebbf9b1e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59bb1dfa11dff4b13a1e89075356d926275f3eb51ba32e8f66c05fa4b2bf09de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bb1dfa11dff4b13a1e89075356d926275f3eb51ba32e8f66c05fa4b2bf09de->enter($__internal_59bb1dfa11dff4b13a1e89075356d926275f3eb51ba32e8f66c05fa4b2bf09de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaopessoa - Editar</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_index");
        echo "\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_show", array("id" => $this->getAttribute(($context["reuniaoPessoa"] ?? $this->getContext($context, "reuniaoPessoa")), "id", array()))), "html", null, true);
        echo "\">Excluir</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "


";
        
        $__internal_59bb1dfa11dff4b13a1e89075356d926275f3eb51ba32e8f66c05fa4b2bf09de->leave($__internal_59bb1dfa11dff4b13a1e89075356d926275f3eb51ba32e8f66c05fa4b2bf09de_prof);

        
        $__internal_22daa95d038a8aa943712ca0b7f1d05483a2c19013127feac731c4ebbf9b1e67->leave($__internal_22daa95d038a8aa943712ca0b7f1d05483a2c19013127feac731c4ebbf9b1e67_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaopessoa:edit.html.twig";
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
    <h1>Reuniaopessoa - Editar</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaopessoa_index') }}\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"{{ path('reuniaopessoa_show', { 'id': reuniaoPessoa.id }) }}\">Excluir</a></div>
    {{ form_end(edit_form) }}


{% endblock %}
", ":reuniaopessoa:edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaopessoa/edit.html.twig");
    }
}
