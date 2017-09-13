<?php

/* :reuniaodia:edit.html.twig */
class __TwigTemplate_317a429c3951b291c4516387b3c1a6f657b9244c3cd9db7bf86f2e2fff98b7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaodia:edit.html.twig", 1);
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
        $__internal_8d3c3a4de445870e26108eb014b9675d273d5c1258b623124b0ad24202fd26ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3c3a4de445870e26108eb014b9675d273d5c1258b623124b0ad24202fd26ea->enter($__internal_8d3c3a4de445870e26108eb014b9675d273d5c1258b623124b0ad24202fd26ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:edit.html.twig"));

        $__internal_f8241aeab98b3d9b9f6a964f933218b1c7157afef50c34a15a294dbebd59b17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8241aeab98b3d9b9f6a964f933218b1c7157afef50c34a15a294dbebd59b17b->enter($__internal_f8241aeab98b3d9b9f6a964f933218b1c7157afef50c34a15a294dbebd59b17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3c3a4de445870e26108eb014b9675d273d5c1258b623124b0ad24202fd26ea->leave($__internal_8d3c3a4de445870e26108eb014b9675d273d5c1258b623124b0ad24202fd26ea_prof);

        
        $__internal_f8241aeab98b3d9b9f6a964f933218b1c7157afef50c34a15a294dbebd59b17b->leave($__internal_f8241aeab98b3d9b9f6a964f933218b1c7157afef50c34a15a294dbebd59b17b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3298e4cacb72d0dffccab46224e623d4ad0f0545a8e9652ce271dd36c155557b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3298e4cacb72d0dffccab46224e623d4ad0f0545a8e9652ce271dd36c155557b->enter($__internal_3298e4cacb72d0dffccab46224e623d4ad0f0545a8e9652ce271dd36c155557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6e4d8d15281140834ba5c4e7ff9e0b6dbdde0c02d93bd39f48440d0098f5433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4d8d15281140834ba5c4e7ff9e0b6dbdde0c02d93bd39f48440d0098f5433->enter($__internal_d6e4d8d15281140834ba5c4e7ff9e0b6dbdde0c02d93bd39f48440d0098f5433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaodium - Editar</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index");
        echo "\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_show", array("id" => $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "id", array()))), "html", null, true);
        echo "\">Excluir</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "


";
        
        $__internal_d6e4d8d15281140834ba5c4e7ff9e0b6dbdde0c02d93bd39f48440d0098f5433->leave($__internal_d6e4d8d15281140834ba5c4e7ff9e0b6dbdde0c02d93bd39f48440d0098f5433_prof);

        
        $__internal_3298e4cacb72d0dffccab46224e623d4ad0f0545a8e9652ce271dd36c155557b->leave($__internal_3298e4cacb72d0dffccab46224e623d4ad0f0545a8e9652ce271dd36c155557b_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaodia:edit.html.twig";
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
    <h1>Reuniaodium - Editar</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn-success btn btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaodia_index') }}\">Back to the list</a>        <a class=\"btn btn-danger btn-excluir\" href=\"{{ path('reuniaodia_show', { 'id': reuniaoDium.id }) }}\">Excluir</a></div>
    {{ form_end(edit_form) }}


{% endblock %}
", ":reuniaodia:edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaodia/edit.html.twig");
    }
}
