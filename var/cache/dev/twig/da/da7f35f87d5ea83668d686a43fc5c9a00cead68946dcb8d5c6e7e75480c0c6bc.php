<?php

/* :reuniaodia:new.html.twig */
class __TwigTemplate_057734e08ebf2060b3d18beed4c950c2103b24b7bf559ae9afb9173408fdc751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaodia:new.html.twig", 1);
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
        $__internal_414bcf6113a12f515cfb60771e404e264286c7d415d5ff91576ccbe5ac9444a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414bcf6113a12f515cfb60771e404e264286c7d415d5ff91576ccbe5ac9444a0->enter($__internal_414bcf6113a12f515cfb60771e404e264286c7d415d5ff91576ccbe5ac9444a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:new.html.twig"));

        $__internal_17a02dd0044316f80119b2324d0706dd1d58a74df9bcbc213d44be1a4d586225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a02dd0044316f80119b2324d0706dd1d58a74df9bcbc213d44be1a4d586225->enter($__internal_17a02dd0044316f80119b2324d0706dd1d58a74df9bcbc213d44be1a4d586225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_414bcf6113a12f515cfb60771e404e264286c7d415d5ff91576ccbe5ac9444a0->leave($__internal_414bcf6113a12f515cfb60771e404e264286c7d415d5ff91576ccbe5ac9444a0_prof);

        
        $__internal_17a02dd0044316f80119b2324d0706dd1d58a74df9bcbc213d44be1a4d586225->leave($__internal_17a02dd0044316f80119b2324d0706dd1d58a74df9bcbc213d44be1a4d586225_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3f37e08ddfcf397c5f3149d63a5fac224aa10de794befe9b85b8f015af31037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f37e08ddfcf397c5f3149d63a5fac224aa10de794befe9b85b8f015af31037->enter($__internal_f3f37e08ddfcf397c5f3149d63a5fac224aa10de794befe9b85b8f015af31037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79e4001342b80d4162c59a61a1dc101e97709bf1639041cfa25d982b0700a8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e4001342b80d4162c59a61a1dc101e97709bf1639041cfa25d982b0700a8f4->enter($__internal_79e4001342b80d4162c59a61a1dc101e97709bf1639041cfa25d982b0700a8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaodium - Novo</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index");
        echo "\">Back to the list</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_79e4001342b80d4162c59a61a1dc101e97709bf1639041cfa25d982b0700a8f4->leave($__internal_79e4001342b80d4162c59a61a1dc101e97709bf1639041cfa25d982b0700a8f4_prof);

        
        $__internal_f3f37e08ddfcf397c5f3149d63a5fac224aa10de794befe9b85b8f015af31037->leave($__internal_f3f37e08ddfcf397c5f3149d63a5fac224aa10de794befe9b85b8f015af31037_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaodia:new.html.twig";
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
    <h1>Reuniaodium - Novo</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaodia_index') }}\">Back to the list</a></div>
    {{ form_end(form) }}


{% endblock %}
", ":reuniaodia:new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaodia/new.html.twig");
    }
}
