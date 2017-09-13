<?php

/* reuniaopessoa/index.html.twig */
class __TwigTemplate_d1515b95141bf786c45e1e2ef97eaad081f36060cff10c0a05400a91760acf9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaopessoa/index.html.twig", 1);
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
        $__internal_6038b0bef192f9a6ba197a488635f3cdd36ea1ef513eb51515eb22535aea47b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6038b0bef192f9a6ba197a488635f3cdd36ea1ef513eb51515eb22535aea47b7->enter($__internal_6038b0bef192f9a6ba197a488635f3cdd36ea1ef513eb51515eb22535aea47b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/index.html.twig"));

        $__internal_d69176a498612a460dd5911dcd9913aea8060d4f7b5428c9c1a639c100941375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69176a498612a460dd5911dcd9913aea8060d4f7b5428c9c1a639c100941375->enter($__internal_d69176a498612a460dd5911dcd9913aea8060d4f7b5428c9c1a639c100941375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6038b0bef192f9a6ba197a488635f3cdd36ea1ef513eb51515eb22535aea47b7->leave($__internal_6038b0bef192f9a6ba197a488635f3cdd36ea1ef513eb51515eb22535aea47b7_prof);

        
        $__internal_d69176a498612a460dd5911dcd9913aea8060d4f7b5428c9c1a639c100941375->leave($__internal_d69176a498612a460dd5911dcd9913aea8060d4f7b5428c9c1a639c100941375_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b47c32f4737f72fcaddf5bdeca08bdff0278e9956f5d9859f627d145be79f321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47c32f4737f72fcaddf5bdeca08bdff0278e9956f5d9859f627d145be79f321->enter($__internal_b47c32f4737f72fcaddf5bdeca08bdff0278e9956f5d9859f627d145be79f321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_161abb07ba8bb4fc5bedbf7638c4f8703bda7910e08a0244453d9e2a459b442e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161abb07ba8bb4fc5bedbf7638c4f8703bda7910e08a0244453d9e2a459b442e->enter($__internal_161abb07ba8bb4fc5bedbf7638c4f8703bda7910e08a0244453d9e2a459b442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaopessoas  </h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Reuniao</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reuniaoPessoas"] ?? $this->getContext($context, "reuniaoPessoas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniaoPessoa"]) {
            // line 20
            echo "            <tr>
                <td class=\"primary\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "reuniao", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_show", array("id" => $this->getAttribute($context["reuniaoPessoa"], "id", array()))), "html", null, true);
            echo "\">show</a>                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_edit", array("id" => $this->getAttribute($context["reuniaoPessoa"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniaoPessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_161abb07ba8bb4fc5bedbf7638c4f8703bda7910e08a0244453d9e2a459b442e->leave($__internal_161abb07ba8bb4fc5bedbf7638c4f8703bda7910e08a0244453d9e2a459b442e_prof);

        
        $__internal_b47c32f4737f72fcaddf5bdeca08bdff0278e9956f5d9859f627d145be79f321->leave($__internal_b47c32f4737f72fcaddf5bdeca08bdff0278e9956f5d9859f627d145be79f321_prof);

    }

    public function getTemplateName()
    {
        return "reuniaopessoa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  86 => 25,  81 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"col-md-12\">Reuniaopessoas  </h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Reuniao</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        {% for reuniaoPessoa in reuniaoPessoas %}
            <tr>
                <td class=\"primary\">{{ reuniaoPessoa.id }}</td>
                <td>{{ reuniaoPessoa.nome }}</td>
                <td>{{ reuniaoPessoa.reuniao }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaopessoa_show', { 'id': reuniaoPessoa.id }) }}\">show</a>                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaopessoa_edit', { 'id': reuniaoPessoa.id }) }}\">edit</a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "reuniaopessoa/index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaopessoa\\index.html.twig");
    }
}
