<?php

/* reuniaodia/index.html.twig */
class __TwigTemplate_b9bcda9f35e77a2a65cdc7682c69b285c0407a159617ab9c3e970fa5de72ddab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaodia/index.html.twig", 1);
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
        $__internal_639dea7bf415c8b0af213d4517a44a7dfb840fc07956a98b5778b87a73674174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639dea7bf415c8b0af213d4517a44a7dfb840fc07956a98b5778b87a73674174->enter($__internal_639dea7bf415c8b0af213d4517a44a7dfb840fc07956a98b5778b87a73674174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/index.html.twig"));

        $__internal_05ca517fafb29541240502902dfc1b0f9e38036ef2b7a9b62273546d40ab43c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ca517fafb29541240502902dfc1b0f9e38036ef2b7a9b62273546d40ab43c7->enter($__internal_05ca517fafb29541240502902dfc1b0f9e38036ef2b7a9b62273546d40ab43c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639dea7bf415c8b0af213d4517a44a7dfb840fc07956a98b5778b87a73674174->leave($__internal_639dea7bf415c8b0af213d4517a44a7dfb840fc07956a98b5778b87a73674174_prof);

        
        $__internal_05ca517fafb29541240502902dfc1b0f9e38036ef2b7a9b62273546d40ab43c7->leave($__internal_05ca517fafb29541240502902dfc1b0f9e38036ef2b7a9b62273546d40ab43c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60f97accee371fdd6c0fce1f6d1345c937393a2aef2393e3640f87b83fff4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60f97accee371fdd6c0fce1f6d1345c937393a2aef2393e3640f87b83fff4d9->enter($__internal_b60f97accee371fdd6c0fce1f6d1345c937393a2aef2393e3640f87b83fff4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6203a0f9b9135babc325fa1e2ac54875d4d25eef33c7107385fc77053475eb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6203a0f9b9135babc325fa1e2ac54875d4d25eef33c7107385fc77053475eb22->enter($__internal_6203a0f9b9135babc325fa1e2ac54875d4d25eef33c7107385fc77053475eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Reuniao - Dias</h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
     ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <input class=\"btn btn-success btn-salvar-inline\" type=\"submit\" value=\"Inserir\" />
     <div class=\"clear\"></div>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <hr/>
    <div class=\"row\">
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reuniaoDias"] ?? $this->getContext($context, "reuniaoDias")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniaoDium"]) {
            // line 17
            echo "        <div class=\"col-md-1 reuniao-dia-item\">
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reuniaoDium"], "data", array()), "d/m/Y"), "html", null, true);
            echo "
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_delete", array("id" => $this->getAttribute($context["reuniaoDium"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniaoDium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <div class=\"col-md-12\">
          <div class=\"clear\"></div>
          <hr />
          <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">voltar</a>
        </div>
    </div>
       
    </div>
";
        
        $__internal_6203a0f9b9135babc325fa1e2ac54875d4d25eef33c7107385fc77053475eb22->leave($__internal_6203a0f9b9135babc325fa1e2ac54875d4d25eef33c7107385fc77053475eb22_prof);

        
        $__internal_b60f97accee371fdd6c0fce1f6d1345c937393a2aef2393e3640f87b83fff4d9->leave($__internal_b60f97accee371fdd6c0fce1f6d1345c937393a2aef2393e3640f87b83fff4d9_prof);

    }

    public function getTemplateName()
    {
        return "reuniaodia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  94 => 24,  83 => 19,  79 => 18,  76 => 17,  72 => 16,  66 => 13,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Reuniao - Dias</h3>
  </div>
  <div class=\"panel-body\">
    {{ form_start(form) }}
     {{ form_widget(form) }}
     <input class=\"btn btn-success btn-salvar-inline\" type=\"submit\" value=\"Inserir\" />
     <div class=\"clear\"></div>
    {{ form_end(form) }}
    <hr/>
    <div class=\"row\">
     {% for reuniaoDium in reuniaoDias %}
        <div class=\"col-md-1 reuniao-dia-item\">
            {{ reuniaoDium.data|date('d/m/Y') }}
            <a href=\"{{ path('reuniaodia_delete', { 'id': reuniaoDium.id }) }}\">
                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        </a>
        </div>
        {% endfor %}
        <div class=\"col-md-12\">
          <div class=\"clear\"></div>
          <hr />
          <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">voltar</a>
        </div>
    </div>
       
    </div>
{% endblock %}
", "reuniaodia/index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaodia\\index.html.twig");
    }
}
