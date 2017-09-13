<?php

/* :reuniao:new.html.twig */
class __TwigTemplate_94aafe4e9b3b8ce29483c4d7bd15d21f58a5ca82d67210bfd456765f87119af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniao:new.html.twig", 1);
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
        $__internal_62edc3692da10c333269486639908de171b12b83460678c22cf589abaea5a593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62edc3692da10c333269486639908de171b12b83460678c22cf589abaea5a593->enter($__internal_62edc3692da10c333269486639908de171b12b83460678c22cf589abaea5a593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:new.html.twig"));

        $__internal_fb9b05ac753ba3d617c6b329038b66fd57e0e39f461a7f7f7d174280e3afb5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9b05ac753ba3d617c6b329038b66fd57e0e39f461a7f7f7d174280e3afb5c1->enter($__internal_fb9b05ac753ba3d617c6b329038b66fd57e0e39f461a7f7f7d174280e3afb5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62edc3692da10c333269486639908de171b12b83460678c22cf589abaea5a593->leave($__internal_62edc3692da10c333269486639908de171b12b83460678c22cf589abaea5a593_prof);

        
        $__internal_fb9b05ac753ba3d617c6b329038b66fd57e0e39f461a7f7f7d174280e3afb5c1->leave($__internal_fb9b05ac753ba3d617c6b329038b66fd57e0e39f461a7f7f7d174280e3afb5c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_718e3bd3016643543f91fedd03d5d6b87e9c1f5e96d83d481f42cdcf8f14cfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718e3bd3016643543f91fedd03d5d6b87e9c1f5e96d83d481f42cdcf8f14cfb5->enter($__internal_718e3bd3016643543f91fedd03d5d6b87e9c1f5e96d83d481f42cdcf8f14cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fd0be3b4723759644152fea1c8559aab39d0961d887a7c527fb4afbfc8ce081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd0be3b4723759644152fea1c8559aab39d0961d887a7c527fb4afbfc8ce081->enter($__internal_2fd0be3b4723759644152fea1c8559aab39d0961d887a7c527fb4afbfc8ce081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniao - Novo</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Back to the list</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_2fd0be3b4723759644152fea1c8559aab39d0961d887a7c527fb4afbfc8ce081->leave($__internal_2fd0be3b4723759644152fea1c8559aab39d0961d887a7c527fb4afbfc8ce081_prof);

        
        $__internal_718e3bd3016643543f91fedd03d5d6b87e9c1f5e96d83d481f42cdcf8f14cfb5->leave($__internal_718e3bd3016643543f91fedd03d5d6b87e9c1f5e96d83d481f42cdcf8f14cfb5_prof);

    }

    public function getTemplateName()
    {
        return ":reuniao:new.html.twig";
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
    <h1>Reuniao - Novo</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Back to the list</a></div>
    {{ form_end(form) }}


{% endblock %}
", ":reuniao:new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniao/new.html.twig");
    }
}
