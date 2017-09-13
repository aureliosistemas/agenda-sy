<?php

/* reuniao/show.html.twig */
class __TwigTemplate_8f91ec75aed1c61cf81b3e02de4555feb7097ae76f493372079fe2b2fac40ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniao/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e8d3a70d41489a8e084e5d2d53ca4da7ba610893191742b426f5a5aad6dd49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8d3a70d41489a8e084e5d2d53ca4da7ba610893191742b426f5a5aad6dd49d->enter($__internal_6e8d3a70d41489a8e084e5d2d53ca4da7ba610893191742b426f5a5aad6dd49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/show.html.twig"));

        $__internal_65895997a264919ae6808703208c6959f7574872a92f8052f67c9993e0127be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65895997a264919ae6808703208c6959f7574872a92f8052f67c9993e0127be2->enter($__internal_65895997a264919ae6808703208c6959f7574872a92f8052f67c9993e0127be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8d3a70d41489a8e084e5d2d53ca4da7ba610893191742b426f5a5aad6dd49d->leave($__internal_6e8d3a70d41489a8e084e5d2d53ca4da7ba610893191742b426f5a5aad6dd49d_prof);

        
        $__internal_65895997a264919ae6808703208c6959f7574872a92f8052f67c9993e0127be2->leave($__internal_65895997a264919ae6808703208c6959f7574872a92f8052f67c9993e0127be2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f50f9175e0136ebe764a7d201c488de7675be2c663b42c5f313f3490b296244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f50f9175e0136ebe764a7d201c488de7675be2c663b42c5f313f3490b296244->enter($__internal_0f50f9175e0136ebe764a7d201c488de7675be2c663b42c5f313f3490b296244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6537a2b7cfefc7372ee169f03005ec4fb18def60aff0b838d2d945f50b66400a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6537a2b7cfefc7372ee169f03005ec4fb18def60aff0b838d2d945f50b66400a->enter($__internal_6537a2b7cfefc7372ee169f03005ec4fb18def60aff0b838d2d945f50b66400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Reuniao - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "nome", array()), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
        <div class=\"col-md-12\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "descricao", array()), "html", null, true);
        echo "</div>
        <div class=\"col-md-12\"><b>Local:</b> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "local", array()), "html", null, true);
        echo "</div>
        <div class=\"col-md-12\">
            <form id=\"form-add-pessoa\" method=\"POST\">
                <div class=\"col-md-12\">
                    
                <label for=\"pessoa_nome\">Nome</label>
                <input type=\"text\" name=\"pessoa_nome\" class=\"form-control\" id=\"pessoa_nome\"/>
                <input type=\"button\" name=\"Adicionar\" onclick=\"\$().reuniaoAddPessoa('";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "id", array()), "html", null, true);
        echo "')\" class=\"btn btn-primary\" value=\"Vincular\">
                </div>
                <div class=\"clear\"></div>
            </form>
            <table class=\"table\" id=\"reuniao-detalhes-listagem\">
                <thead>
                    <tr>
                        <th></th>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "datas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "                        <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "data", array()), "d/m/Y"), "html", null, true);
            echo "</th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "pessoas", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 32
            echo "                        ";
            $context["variaveis"] = array("id" => $this->getAttribute($context["pessoa"], "id", array()), "datas" => $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "datas", array()));
            // line 33
            echo "                        ";
            $this->loadTemplate("reuniaopessoa/new.html.twig", "reuniao/show.html.twig", 33)->display(array_merge($context, ($context["variaveis"] ?? $this->getContext($context, "variaveis"))));
            // line 34
            echo "              
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Voltar</a>
  </div>
</div>
 
";
        
        $__internal_6537a2b7cfefc7372ee169f03005ec4fb18def60aff0b838d2d945f50b66400a->leave($__internal_6537a2b7cfefc7372ee169f03005ec4fb18def60aff0b838d2d945f50b66400a_prof);

        
        $__internal_0f50f9175e0136ebe764a7d201c488de7675be2c663b42c5f313f3490b296244->leave($__internal_0f50f9175e0136ebe764a7d201c488de7675be2c663b42c5f313f3490b296244_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23be35b5a76779dd4d4a22ede2699113e27a1014dd35904bf0f7e52fd63d2e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23be35b5a76779dd4d4a22ede2699113e27a1014dd35904bf0f7e52fd63d2e9c->enter($__internal_23be35b5a76779dd4d4a22ede2699113e27a1014dd35904bf0f7e52fd63d2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ecfef7bac113e66d6c563d8906525634cd612de58a23b8cd62e8c7463711d5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfef7bac113e66d6c563d8906525634cd612de58a23b8cd62e8c7463711d5e0->enter($__internal_ecfef7bac113e66d6c563d8906525634cd612de58a23b8cd62e8c7463711d5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/reuniao.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ecfef7bac113e66d6c563d8906525634cd612de58a23b8cd62e8c7463711d5e0->leave($__internal_ecfef7bac113e66d6c563d8906525634cd612de58a23b8cd62e8c7463711d5e0_prof);

        
        $__internal_23be35b5a76779dd4d4a22ede2699113e27a1014dd35904bf0f7e52fd63d2e9c->leave($__internal_23be35b5a76779dd4d4a22ede2699113e27a1014dd35904bf0f7e52fd63d2e9c_prof);

    }

    public function getTemplateName()
    {
        return "reuniao/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  161 => 45,  146 => 39,  141 => 36,  126 => 34,  123 => 33,  120 => 32,  103 => 31,  98 => 28,  89 => 26,  85 => 25,  74 => 17,  64 => 10,  60 => 9,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h3 class=\"panel-title\">Reuniao - {{ reuniao.nome }}</h3>
  </div>
  <div class=\"panel-body\">
        <div class=\"col-md-12\">{{ reuniao.descricao }}</div>
        <div class=\"col-md-12\"><b>Local:</b> {{ reuniao.local }}</div>
        <div class=\"col-md-12\">
            <form id=\"form-add-pessoa\" method=\"POST\">
                <div class=\"col-md-12\">
                    
                <label for=\"pessoa_nome\">Nome</label>
                <input type=\"text\" name=\"pessoa_nome\" class=\"form-control\" id=\"pessoa_nome\"/>
                <input type=\"button\" name=\"Adicionar\" onclick=\"\$().reuniaoAddPessoa('{{ reuniao.id }}')\" class=\"btn btn-primary\" value=\"Vincular\">
                </div>
                <div class=\"clear\"></div>
            </form>
            <table class=\"table\" id=\"reuniao-detalhes-listagem\">
                <thead>
                    <tr>
                        <th></th>
                        {% for data in reuniao.datas %}
                        <th>{{ data.data|date(\"d/m/Y\") }}</th>
                        {% endfor %}
                    </tr>
                </thead>
                <tbody>
                    {% for pessoa in reuniao.pessoas %}
                        {% set variaveis = {'id': pessoa.id, 'datas': reuniao.datas } %}
                        {% include 'reuniaopessoa/new.html.twig' with variaveis %}
              
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Voltar</a>
  </div>
</div>
 
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/reuniao.js') }}\"></script>
{% endblock %}
", "reuniao/show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniao\\show.html.twig");
    }
}
