<?php

/* reuniaopessoa/show.html.twig */
class __TwigTemplate_4afa5de3779c957b9ffa82c95894fdc973d9fc09fd925a8e8a1651bb933fd22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaopessoa/show.html.twig", 1);
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
        $__internal_f3b3752a1cb1723a0b6380a1edb263611d4a6856ded412b3fe9520c70c0864cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b3752a1cb1723a0b6380a1edb263611d4a6856ded412b3fe9520c70c0864cc->enter($__internal_f3b3752a1cb1723a0b6380a1edb263611d4a6856ded412b3fe9520c70c0864cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/show.html.twig"));

        $__internal_b8be034a7a8163d08892a9ecbe527028db95ab7f5a6fa2fdb416f5c6454934e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8be034a7a8163d08892a9ecbe527028db95ab7f5a6fa2fdb416f5c6454934e4->enter($__internal_b8be034a7a8163d08892a9ecbe527028db95ab7f5a6fa2fdb416f5c6454934e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b3752a1cb1723a0b6380a1edb263611d4a6856ded412b3fe9520c70c0864cc->leave($__internal_f3b3752a1cb1723a0b6380a1edb263611d4a6856ded412b3fe9520c70c0864cc_prof);

        
        $__internal_b8be034a7a8163d08892a9ecbe527028db95ab7f5a6fa2fdb416f5c6454934e4->leave($__internal_b8be034a7a8163d08892a9ecbe527028db95ab7f5a6fa2fdb416f5c6454934e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc280a6139c7335e6e98dc3ec58294888d76506892d8f44fc1ea99a6823dc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc280a6139c7335e6e98dc3ec58294888d76506892d8f44fc1ea99a6823dc2b->enter($__internal_ffc280a6139c7335e6e98dc3ec58294888d76506892d8f44fc1ea99a6823dc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e783f322025ff11c00cd63e6cc8a09f5ca0a224ace66b284bba3eeb724e3d64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e783f322025ff11c00cd63e6cc8a09f5ca0a224ace66b284bba3eeb724e3d64a->enter($__internal_e783f322025ff11c00cd63e6cc8a09f5ca0a224ace66b284bba3eeb724e3d64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e783f322025ff11c00cd63e6cc8a09f5ca0a224ace66b284bba3eeb724e3d64a->leave($__internal_e783f322025ff11c00cd63e6cc8a09f5ca0a224ace66b284bba3eeb724e3d64a_prof);

        
        $__internal_ffc280a6139c7335e6e98dc3ec58294888d76506892d8f44fc1ea99a6823dc2b->leave($__internal_ffc280a6139c7335e6e98dc3ec58294888d76506892d8f44fc1ea99a6823dc2b_prof);

    }

    public function getTemplateName()
    {
        return "reuniaopessoa/show.html.twig";
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
", "reuniaopessoa/show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaopessoa\\show.html.twig");
    }
}
