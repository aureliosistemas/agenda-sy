<?php

/* reuniaodia/show.html.twig */
class __TwigTemplate_bc4bbc1016ba1dedc855f54f1cd93179f4f7b3b32740521210aea49e50650283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaodia/show.html.twig", 1);
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
        $__internal_babcfe06f76210175382952a187dbd3533ff89ab5ba97910aabe512199a460cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babcfe06f76210175382952a187dbd3533ff89ab5ba97910aabe512199a460cd->enter($__internal_babcfe06f76210175382952a187dbd3533ff89ab5ba97910aabe512199a460cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/show.html.twig"));

        $__internal_ff6e08d48ddd822f117b9bc139616ce2eb4ad435c717898c643ae3689ea3cc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6e08d48ddd822f117b9bc139616ce2eb4ad435c717898c643ae3689ea3cc24->enter($__internal_ff6e08d48ddd822f117b9bc139616ce2eb4ad435c717898c643ae3689ea3cc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babcfe06f76210175382952a187dbd3533ff89ab5ba97910aabe512199a460cd->leave($__internal_babcfe06f76210175382952a187dbd3533ff89ab5ba97910aabe512199a460cd_prof);

        
        $__internal_ff6e08d48ddd822f117b9bc139616ce2eb4ad435c717898c643ae3689ea3cc24->leave($__internal_ff6e08d48ddd822f117b9bc139616ce2eb4ad435c717898c643ae3689ea3cc24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0860a195d3a497b90584d5039c45d85c13a5af0e05847cf02e27b1012f821008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0860a195d3a497b90584d5039c45d85c13a5af0e05847cf02e27b1012f821008->enter($__internal_0860a195d3a497b90584d5039c45d85c13a5af0e05847cf02e27b1012f821008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d0a4ca947d43afb15e4ff99175057728ecf2be40cdb66c1be44486f8cc718b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0a4ca947d43afb15e4ff99175057728ecf2be40cdb66c1be44486f8cc718b2->enter($__internal_1d0a4ca947d43afb15e4ff99175057728ecf2be40cdb66c1be44486f8cc718b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaodium - Excluir</h1>
    <hr/>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "reuniao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td class=\"date\">";
        // line 19
        if ($this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "data", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index");
        echo "\">Voltar</a>
    </div>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_1d0a4ca947d43afb15e4ff99175057728ecf2be40cdb66c1be44486f8cc718b2->leave($__internal_1d0a4ca947d43afb15e4ff99175057728ecf2be40cdb66c1be44486f8cc718b2_prof);

        
        $__internal_0860a195d3a497b90584d5039c45d85c13a5af0e05847cf02e27b1012f821008->leave($__internal_0860a195d3a497b90584d5039c45d85c13a5af0e05847cf02e27b1012f821008_prof);

    }

    public function getTemplateName()
    {
        return "reuniaodia/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 25,  75 => 19,  68 => 15,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniaodium - Excluir</h1>
    <hr/>
    {{ form_start(delete_form) }}
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">{{ reuniaoDium.id }}</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">{{ reuniaoDium.reuniao }}</td>
            </tr>
            <tr>
                <th>Data</th>
                <td class=\"date\">{% if reuniaoDium.data %}{{ reuniaoDium.data|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaodia_index') }}\">Voltar</a>
    </div>
    {{ form_end(delete_form) }}
{% endblock %}
", "reuniaodia/show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaodia\\show.html.twig");
    }
}
