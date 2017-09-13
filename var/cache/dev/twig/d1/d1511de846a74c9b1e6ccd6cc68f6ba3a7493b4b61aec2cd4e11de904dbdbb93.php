<?php

/* reuniaopessoa/edit.html.twig */
class __TwigTemplate_b30231c5015ab3c738bcf8758c24aea8e66d9e2546ecb5bca0fc1e49daaa0b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaopessoa/edit.html.twig", 1);
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
        $__internal_aa4cac1274dcd4410c5bb593c7030b9104d9dcf32a10e3c93e5c343b94662d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4cac1274dcd4410c5bb593c7030b9104d9dcf32a10e3c93e5c343b94662d73->enter($__internal_aa4cac1274dcd4410c5bb593c7030b9104d9dcf32a10e3c93e5c343b94662d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/edit.html.twig"));

        $__internal_2b96a71bc068c636d9ed6e93d0e06959ebb440ef26ded2fb48a9c909eb0372d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b96a71bc068c636d9ed6e93d0e06959ebb440ef26ded2fb48a9c909eb0372d8->enter($__internal_2b96a71bc068c636d9ed6e93d0e06959ebb440ef26ded2fb48a9c909eb0372d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4cac1274dcd4410c5bb593c7030b9104d9dcf32a10e3c93e5c343b94662d73->leave($__internal_aa4cac1274dcd4410c5bb593c7030b9104d9dcf32a10e3c93e5c343b94662d73_prof);

        
        $__internal_2b96a71bc068c636d9ed6e93d0e06959ebb440ef26ded2fb48a9c909eb0372d8->leave($__internal_2b96a71bc068c636d9ed6e93d0e06959ebb440ef26ded2fb48a9c909eb0372d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b4c17f05dd864f8b9319c78c0961ff6d0880a90a5b47c180275cbc4bcd96ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b4c17f05dd864f8b9319c78c0961ff6d0880a90a5b47c180275cbc4bcd96ea->enter($__internal_d7b4c17f05dd864f8b9319c78c0961ff6d0880a90a5b47c180275cbc4bcd96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2671686e3e7db6b56bdac841444989ec036e04678209dec33811ffe10b48939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2671686e3e7db6b56bdac841444989ec036e04678209dec33811ffe10b48939->enter($__internal_d2671686e3e7db6b56bdac841444989ec036e04678209dec33811ffe10b48939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2671686e3e7db6b56bdac841444989ec036e04678209dec33811ffe10b48939->leave($__internal_d2671686e3e7db6b56bdac841444989ec036e04678209dec33811ffe10b48939_prof);

        
        $__internal_d7b4c17f05dd864f8b9319c78c0961ff6d0880a90a5b47c180275cbc4bcd96ea->leave($__internal_d7b4c17f05dd864f8b9319c78c0961ff6d0880a90a5b47c180275cbc4bcd96ea_prof);

    }

    public function getTemplateName()
    {
        return "reuniaopessoa/edit.html.twig";
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
", "reuniaopessoa/edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaopessoa\\edit.html.twig");
    }
}
