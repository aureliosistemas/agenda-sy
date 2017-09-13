<?php

/* :reuniaopessoa:show.html.twig */
class __TwigTemplate_9f3489f3afba0e977c465b2bb25b5bb91799663b9a2e083088b6d360d2038199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaopessoa:show.html.twig", 1);
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
        $__internal_74af6474267a47b629c1b3ef939ae18f9e1f428208b358ed2401be6d62849d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74af6474267a47b629c1b3ef939ae18f9e1f428208b358ed2401be6d62849d14->enter($__internal_74af6474267a47b629c1b3ef939ae18f9e1f428208b358ed2401be6d62849d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:show.html.twig"));

        $__internal_36e73cb53397a0eb193099bbb40c141c2e63c55ada41daa7b2a15f8e48ef0403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e73cb53397a0eb193099bbb40c141c2e63c55ada41daa7b2a15f8e48ef0403->enter($__internal_36e73cb53397a0eb193099bbb40c141c2e63c55ada41daa7b2a15f8e48ef0403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74af6474267a47b629c1b3ef939ae18f9e1f428208b358ed2401be6d62849d14->leave($__internal_74af6474267a47b629c1b3ef939ae18f9e1f428208b358ed2401be6d62849d14_prof);

        
        $__internal_36e73cb53397a0eb193099bbb40c141c2e63c55ada41daa7b2a15f8e48ef0403->leave($__internal_36e73cb53397a0eb193099bbb40c141c2e63c55ada41daa7b2a15f8e48ef0403_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cb790b3cb7b648daf09aa8d711c860d2aeea462b07c809f9997d5fcc99398be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb790b3cb7b648daf09aa8d711c860d2aeea462b07c809f9997d5fcc99398be->enter($__internal_5cb790b3cb7b648daf09aa8d711c860d2aeea462b07c809f9997d5fcc99398be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_810ec76f62b4d816d8aa386478d5388cd133978413b7b9c1626858cfba198ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810ec76f62b4d816d8aa386478d5388cd133978413b7b9c1626858cfba198ae2->enter($__internal_810ec76f62b4d816d8aa386478d5388cd133978413b7b9c1626858cfba198ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaopessoa - Excluir</h1>
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoPessoa"] ?? $this->getContext($context, "reuniaoPessoa")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td class=\"default\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoPessoa"] ?? $this->getContext($context, "reuniaoPessoa")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoPessoa"] ?? $this->getContext($context, "reuniaoPessoa")), "reuniao", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_index");
        echo "\">Voltar</a>
    </div>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_810ec76f62b4d816d8aa386478d5388cd133978413b7b9c1626858cfba198ae2->leave($__internal_810ec76f62b4d816d8aa386478d5388cd133978413b7b9c1626858cfba198ae2_prof);

        
        $__internal_5cb790b3cb7b648daf09aa8d711c860d2aeea462b07c809f9997d5fcc99398be->leave($__internal_5cb790b3cb7b648daf09aa8d711c860d2aeea462b07c809f9997d5fcc99398be_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaopessoa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  84 => 25,  75 => 19,  68 => 15,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniaopessoa - Excluir</h1>
    <hr/>
    {{ form_start(delete_form) }}
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">{{ reuniaoPessoa.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td class=\"default\">{{ reuniaoPessoa.nome }}</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">{{ reuniaoPessoa.reuniao }}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaopessoa_index') }}\">Voltar</a>
    </div>
    {{ form_end(delete_form) }}
{% endblock %}
", ":reuniaopessoa:show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaopessoa/show.html.twig");
    }
}
