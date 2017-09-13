<?php

/* :reuniaopessoa:new.html.twig */
class __TwigTemplate_1177fdff182aea931289fdbe184ab7d512f69afa850c03c84bcc8c5923511a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaopessoa:new.html.twig", 1);
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
        $__internal_100b758ce3aa5d16887a9f0e5bcb7836ad9a890f791371c78c7e3185d488c4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100b758ce3aa5d16887a9f0e5bcb7836ad9a890f791371c78c7e3185d488c4af->enter($__internal_100b758ce3aa5d16887a9f0e5bcb7836ad9a890f791371c78c7e3185d488c4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:new.html.twig"));

        $__internal_ca967b383fcac2df593d9d72c115a3ace1b78e19a8ea3f640e0dfa04674dba0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca967b383fcac2df593d9d72c115a3ace1b78e19a8ea3f640e0dfa04674dba0a->enter($__internal_ca967b383fcac2df593d9d72c115a3ace1b78e19a8ea3f640e0dfa04674dba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100b758ce3aa5d16887a9f0e5bcb7836ad9a890f791371c78c7e3185d488c4af->leave($__internal_100b758ce3aa5d16887a9f0e5bcb7836ad9a890f791371c78c7e3185d488c4af_prof);

        
        $__internal_ca967b383fcac2df593d9d72c115a3ace1b78e19a8ea3f640e0dfa04674dba0a->leave($__internal_ca967b383fcac2df593d9d72c115a3ace1b78e19a8ea3f640e0dfa04674dba0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55342276dcf8776017fe7cf70ce209884e40b78e42fe231c49ea2086be8d7d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55342276dcf8776017fe7cf70ce209884e40b78e42fe231c49ea2086be8d7d3e->enter($__internal_55342276dcf8776017fe7cf70ce209884e40b78e42fe231c49ea2086be8d7d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fcc36dfdea951eeba14343e4102eee46a5ba3d8c6699f2ba57f7a9322bc0069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcc36dfdea951eeba14343e4102eee46a5ba3d8c6699f2ba57f7a9322bc0069->enter($__internal_3fcc36dfdea951eeba14343e4102eee46a5ba3d8c6699f2ba57f7a9322bc0069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaopessoa - Novo</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_index");
        echo "\">Back to the list</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_3fcc36dfdea951eeba14343e4102eee46a5ba3d8c6699f2ba57f7a9322bc0069->leave($__internal_3fcc36dfdea951eeba14343e4102eee46a5ba3d8c6699f2ba57f7a9322bc0069_prof);

        
        $__internal_55342276dcf8776017fe7cf70ce209884e40b78e42fe231c49ea2086be8d7d3e->leave($__internal_55342276dcf8776017fe7cf70ce209884e40b78e42fe231c49ea2086be8d7d3e_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaopessoa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniaopessoa - Novo</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaopessoa_index') }}\">Back to the list</a></div>
    {{ form_end(form) }}


{% endblock %}
", ":reuniaopessoa:new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaopessoa/new.html.twig");
    }
}
