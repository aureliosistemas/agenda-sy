<?php

/* reuniao/pessoa.html.twig */
class __TwigTemplate_f937e9e5bfbae9c2606d1ae16ae82f5aeccc41c058d0bcf3035049ae3d10e550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_849090a3a0a1839820c4a6471304448910b2681baa59637f3734378e7d171a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849090a3a0a1839820c4a6471304448910b2681baa59637f3734378e7d171a3d->enter($__internal_849090a3a0a1839820c4a6471304448910b2681baa59637f3734378e7d171a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/pessoa.html.twig"));

        $__internal_a165b66e96dd106f0149f267bba1891d0c8425bcba8b1276d90ec4b5b6e2e263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a165b66e96dd106f0149f267bba1891d0c8425bcba8b1276d90ec4b5b6e2e263->enter($__internal_a165b66e96dd106f0149f267bba1891d0c8425bcba8b1276d90ec4b5b6e2e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/pessoa.html.twig"));

        // line 1
        echo "<tr>
\t<td>";
        // line 2
        echo twig_escape_filter($this->env, ($context["nome"] ?? $this->getContext($context, "nome")), "html", null, true);
        echo "</td>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "    <td><input type=\"checkbox\" name=\"dia[]\" data-pessoa='";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "' value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" /></td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</tr>
";
        
        $__internal_849090a3a0a1839820c4a6471304448910b2681baa59637f3734378e7d171a3d->leave($__internal_849090a3a0a1839820c4a6471304448910b2681baa59637f3734378e7d171a3d_prof);

        
        $__internal_a165b66e96dd106f0149f267bba1891d0c8425bcba8b1276d90ec4b5b6e2e263->leave($__internal_a165b66e96dd106f0149f267bba1891d0c8425bcba8b1276d90ec4b5b6e2e263_prof);

    }

    public function getTemplateName()
    {
        return "reuniao/pessoa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>{{ nome }}</td>
    {% for data in datas %}
    <td><input type=\"checkbox\" name=\"dia[]\" data-pessoa='{{ id }}' value=\"{{ data.id }}\" /></td>
    {% endfor %}
</tr>
", "reuniao/pessoa.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniao\\pessoa.html.twig");
    }
}
