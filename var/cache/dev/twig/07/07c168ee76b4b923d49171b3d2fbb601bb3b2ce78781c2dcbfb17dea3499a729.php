<?php

/* reuniaodia/edit.html.twig */
class __TwigTemplate_bb0eebc4db485bcfaf327cb56f3cf2caf57149608253fd2b71bd650ab614d210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaodia/edit.html.twig", 1);
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
        $__internal_e857aa1f1d21b02e1b30ae5260a45e11904ac79576255872baed350116f51332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e857aa1f1d21b02e1b30ae5260a45e11904ac79576255872baed350116f51332->enter($__internal_e857aa1f1d21b02e1b30ae5260a45e11904ac79576255872baed350116f51332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/edit.html.twig"));

        $__internal_6e5228b9948bdea20f7c3616250232b1a56832a0b0fe6e24602d6055aaf24453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5228b9948bdea20f7c3616250232b1a56832a0b0fe6e24602d6055aaf24453->enter($__internal_6e5228b9948bdea20f7c3616250232b1a56832a0b0fe6e24602d6055aaf24453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e857aa1f1d21b02e1b30ae5260a45e11904ac79576255872baed350116f51332->leave($__internal_e857aa1f1d21b02e1b30ae5260a45e11904ac79576255872baed350116f51332_prof);

        
        $__internal_6e5228b9948bdea20f7c3616250232b1a56832a0b0fe6e24602d6055aaf24453->leave($__internal_6e5228b9948bdea20f7c3616250232b1a56832a0b0fe6e24602d6055aaf24453_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1674d63893d9d287d2e97197bf5d8f52d6d9045aa1f2ca5a138bf04e6365c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1674d63893d9d287d2e97197bf5d8f52d6d9045aa1f2ca5a138bf04e6365c4->enter($__internal_3b1674d63893d9d287d2e97197bf5d8f52d6d9045aa1f2ca5a138bf04e6365c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_124348f69ed8fd4ba15b89cc7958938de3c0b4bf2cbb8b86b96ff2deb7568c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124348f69ed8fd4ba15b89cc7958938de3c0b4bf2cbb8b86b96ff2deb7568c5f->enter($__internal_124348f69ed8fd4ba15b89cc7958938de3c0b4bf2cbb8b86b96ff2deb7568c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_124348f69ed8fd4ba15b89cc7958938de3c0b4bf2cbb8b86b96ff2deb7568c5f->leave($__internal_124348f69ed8fd4ba15b89cc7958938de3c0b4bf2cbb8b86b96ff2deb7568c5f_prof);

        
        $__internal_3b1674d63893d9d287d2e97197bf5d8f52d6d9045aa1f2ca5a138bf04e6365c4->leave($__internal_3b1674d63893d9d287d2e97197bf5d8f52d6d9045aa1f2ca5a138bf04e6365c4_prof);

    }

    public function getTemplateName()
    {
        return "reuniaodia/edit.html.twig";
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
", "reuniaodia/edit.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaodia\\edit.html.twig");
    }
}
