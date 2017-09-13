<?php

/* :reuniaodia:index.html.twig */
class __TwigTemplate_1fb5cf57761d8a471faf4434d9f0489d3216eb3c663b770c9dda9fefe6473062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaodia:index.html.twig", 1);
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
        $__internal_0753519f681eb54626b9e6455301a2cd656c045e73849905d48cede2f94ea520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0753519f681eb54626b9e6455301a2cd656c045e73849905d48cede2f94ea520->enter($__internal_0753519f681eb54626b9e6455301a2cd656c045e73849905d48cede2f94ea520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:index.html.twig"));

        $__internal_ee4a2a64272fd5b77c1ad1864527eff56ebb9cadccdc93b97012c517b433e393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4a2a64272fd5b77c1ad1864527eff56ebb9cadccdc93b97012c517b433e393->enter($__internal_ee4a2a64272fd5b77c1ad1864527eff56ebb9cadccdc93b97012c517b433e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0753519f681eb54626b9e6455301a2cd656c045e73849905d48cede2f94ea520->leave($__internal_0753519f681eb54626b9e6455301a2cd656c045e73849905d48cede2f94ea520_prof);

        
        $__internal_ee4a2a64272fd5b77c1ad1864527eff56ebb9cadccdc93b97012c517b433e393->leave($__internal_ee4a2a64272fd5b77c1ad1864527eff56ebb9cadccdc93b97012c517b433e393_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37cf539457d50f550f7c58a98187cdfe58ab1cccf37aaf1ba7630ec4273e0fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37cf539457d50f550f7c58a98187cdfe58ab1cccf37aaf1ba7630ec4273e0fcf->enter($__internal_37cf539457d50f550f7c58a98187cdfe58ab1cccf37aaf1ba7630ec4273e0fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7a2e7abb8a19bf9193dd406fd263c8abe521302c7fb554ffded5eaab8df0c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a2e7abb8a19bf9193dd406fd263c8abe521302c7fb554ffded5eaab8df0c86->enter($__internal_a7a2e7abb8a19bf9193dd406fd263c8abe521302c7fb554ffded5eaab8df0c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaodias  <a class=\"btn-novo btn btn-success btn-sm\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_new");
        echo "\">Novo</a></h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Reuniao</th>
                <th>Data</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reuniaoDias"] ?? $this->getContext($context, "reuniaoDias")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniaoDium"]) {
            // line 20
            echo "            <tr>
                <td class=\"primary\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoDium"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoDium"], "reuniao", array()), "html", null, true);
            echo "</td>
                <td class=\"date\">";
            // line 23
            if ($this->getAttribute($context["reuniaoDium"], "data", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reuniaoDium"], "data", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_show", array("id" => $this->getAttribute($context["reuniaoDium"], "id", array()))), "html", null, true);
            echo "\">show</a>                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_edit", array("id" => $this->getAttribute($context["reuniaoDium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniaoDium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_a7a2e7abb8a19bf9193dd406fd263c8abe521302c7fb554ffded5eaab8df0c86->leave($__internal_a7a2e7abb8a19bf9193dd406fd263c8abe521302c7fb554ffded5eaab8df0c86_prof);

        
        $__internal_37cf539457d50f550f7c58a98187cdfe58ab1cccf37aaf1ba7630ec4273e0fcf->leave($__internal_37cf539457d50f550f7c58a98187cdfe58ab1cccf37aaf1ba7630ec4273e0fcf_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaodia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  91 => 25,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaodias  <a class=\"btn-novo btn btn-success btn-sm\" href=\"{{ path('reuniaodia_new') }}\">Novo</a></h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Reuniao</th>
                <th>Data</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        {% for reuniaoDium in reuniaoDias %}
            <tr>
                <td class=\"primary\">{{ reuniaoDium.id }}</td>
                <td>{{ reuniaoDium.reuniao }}</td>
                <td class=\"date\">{% if reuniaoDium.data %}{{ reuniaoDium.data|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaodia_show', { 'id': reuniaoDium.id }) }}\">show</a>                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaodia_edit', { 'id': reuniaoDium.id }) }}\">edit</a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", ":reuniaodia:index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaodia/index.html.twig");
    }
}
